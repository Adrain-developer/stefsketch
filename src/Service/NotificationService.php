<?php
namespace App\Service;

use Cake\ORM\TableRegistry;
use Cake\Mailer\Mailer;
use Cake\Log\Log;
use Cake\Queue\QueueManager;

class NotificationService
{
    protected $Notifications;
    protected $NotificationPreferences;
    protected $Users;
    protected $UserSubscriptions;

    public function __construct()
    {
        $this->Notifications = TableRegistry::getTableLocator()->get('Notifications');
        $this->NotificationPreferences = TableRegistry::getTableLocator()->get('NotificationPreferences');
        $this->Users = TableRegistry::getTableLocator()->get('Users');
        $this->UserSubscriptions = TableRegistry::getTableLocator()->get('UserSubscriptions');
    }

    /**
     * Send notification for a new post to all eligible users (ASÍNCRONO)
     *
     * @param \App\Model\Entity\BlogPost $post
     * @param int $actorId
     */
    public function sendNewPostNotification($post, int $actorId)
    {
        // Validar que el post tenga los datos necesarios
        if (!$post->id || !$post->title || !$post->slug) {
            Log::write('error', "Post inválido para notificaciones: " . json_encode($post->getErrors() ?: ['post_id' => $post->id]), ['scope' => 'notification']);
            return;
        }

        // Obtener usuarios con preferencias habilitadas para in_app o email
        $users = $this->Users->find()
            ->contain(['NotificationPreferences' => function ($q) {
                return $q->where([
                    'NotificationPreferences.enabled' => true,
                    'NotificationPreferences.type' => 'new_post',
                    'OR' => [
                        'NotificationPreferences.channel' => 'in_app',
                        'NotificationPreferences.channel' => 'email'
                    ]
                ]);
            }])
            ->where(['Users.role IN' => ['admin', 'author', 'visitor']])
            ->all();

        if ($users->isEmpty()) {
            Log::write('warning', 'No se encontraron usuarios con preferencias para new_post', ['scope' => 'notification']);
            return;
        }

        $processedCount = 0;
        
        foreach ($users as $user) {
            // Verificar suscripción si aplica
            $isSubscribed = true;
            if (($post->blog_author_id || $post->blog_category_id) && $this->UserSubscriptions->exists(['user_id' => $user->id])) {
                $subscriptionConditions = [
                    'UserSubscriptions.user_id' => $user->id,
                    'UserSubscriptions.is_active' => 1,
                    'OR' => []
                ];
                if ($post->blog_author_id) {
                    $subscriptionConditions['OR'][] = [
                        'UserSubscriptions.target_type' => 'author',
                        'UserSubscriptions.target_id' => $post->blog_author_id
                    ];
                }
                if ($post->blog_category_id) {
                    $subscriptionConditions['OR'][] = [
                        'UserSubscriptions.target_type' => 'category',
                        'UserSubscriptions.target_id' => $post->blog_category_id
                    ];
                }
                $isSubscribed = $this->UserSubscriptions->exists($subscriptionConditions);
                Log::write('debug', "Usuario {$user->id} (rol {$user->role}) suscripción: " . ($isSubscribed ? 'sí' : 'no'), ['scope' => 'notification']);
            }

            if ($isSubscribed && !empty($user->notification_preferences)) {
                foreach ($user->notification_preferences as $pref) {
                    $noteData = [
                        'user_id' => $user->id,
                        'type' => 'new_post',
                        'actor_id' => $actorId,
                        'target_type' => 'blog_post',
                        'target_id' => $post->id,
                        'title' => 'Nuevo post: ' . $post->title,
                        'body' => 'Se ha publicado un nuevo post en el blog.',
                        'url' => '/blog/' . ($post->event_type->eventoslug ?? 'sin-evento') . '/' . $post->slug,
                        'meta' => json_encode(['post_id' => $post->id]),
                        'is_read' => 0,
                        'delivered_email' => 0
                    ];

                    $note = $this->Notifications->newEntity($noteData);

                    // NOTIFICACIONES IN-APP (síncronas - son rápidas)
                    if ($pref->channel === 'in_app') {
                        if ($this->Notifications->save($note)) {
                            Log::write('info', "Notificación in-app creada para usuario {$user->id} (rol {$user->role}) por post {$post->id}", ['scope' => 'notification']);
                        } else {
                            Log::write('error', "Error al crear notificación in-app para usuario {$user->id}: " . json_encode($note->getErrors()), ['scope' => 'notification']);
                        }
                    }

                    // EMAILS (ASÍNCRONOS - usando colas) ⭐ ESTE ES EL CAMBIO CLAVE ⭐
                    if ($pref->channel === 'email' && $pref->frequency === 'immediate') {
                        try {
                            // ENCOLAR el correo en lugar de enviarlo directamente
                            QueueManager::push(
                                \App\Queue\Job\EmailNotificationJob::class,
                                [
                                    'email' => $user->email,
                                    'subject' => 'Nuevo post: ' . $post->title,
                                    'body' => "Se ha publicado un nuevo post: {$post->title}\n\n{$post->content}"
                                ],
                                ['queue' => 'default']
                            );
                            
                            // Marcar como "en proceso de envío"
                            $note->delivered_email = 0; // Se actualizará cuando el worker lo procese
                            if ($this->Notifications->save($note)) {
                                Log::write('info', "Correo ENCOLADO para {$user->email} - post {$post->title}", ['scope' => 'notification']);
                                $processedCount++;
                            }
                            
                        } catch (\Exception $e) {
                            Log::write('error', "Error al encolar correo para {$user->email}: {$e->getMessage()}", ['scope' => 'notification']);
                        }
                    }
                }
            } else {
                Log::write('debug', "Usuario {$user->id} (rol {$user->role}) no recibe notificación: " . ($isSubscribed ? 'sin preferencias' : 'sin suscripción'), ['scope' => 'notification']);
            }
        }
        
        Log::write('info', "Notificaciones de post {$post->id} procesadas: {$processedCount} correos encolados", ['scope' => 'notification']);
    }

    /**
     * Create and optionally email a notification (ASÍNCRONO)
     */
    public function send(int $userId, string $type, string $title, ?string $body = null, ?string $url = null, array $meta = [])
    {
        $user = $this->Users->get($userId);
        $noteData = [
            'user_id' => $userId,
            'type' => $type,
            'actor_id' => null,
            'target_type' => null,
            'target_id' => null,
            'title' => $title,
            'body' => $body,
            'url' => $url,
            'meta' => !empty($meta) ? json_encode($meta) : null,
            'is_read' => 0,
            'delivered_email' => 0
        ];

        $note = $this->Notifications->newEntity($noteData);

        if ($this->Notifications->save($note)) {
            $pref = $this->NotificationPreferences->find()
                ->where(['user_id' => $userId, 'channel' => 'email', 'type' => $type, 'enabled' => true])
                ->first();

            if ($pref && $pref->frequency === 'immediate') {
                try {
                    // ENCOLAR correo en lugar de enviarlo directamente
                    QueueManager::push(
                        \App\Queue\Job\EmailNotificationJob::class,
                        [
                            'email' => $user->email,
                            'subject' => $title,
                            'body' => $body ?? $title
                        ],
                        ['queue' => 'default']
                    );
                    
                    Log::write('info', "Correo encolado para {$user->email} - notificación {$title}", ['scope' => 'notification']);
                    
                } catch (\Exception $e) {
                    Log::write('error', "Error al encolar correo para {$user->email}: {$e->getMessage()}", ['scope' => 'notification']);
                }
            }
            return $note;
        }
        return false;
    }

    // Los demás métodos siguen igual...
    public function markAsRead(array $ids, int $userId)
    {
        return $this->Notifications->query()
            ->update()
            ->set(['is_read' => 1])
            ->where(['id IN' => $ids, 'user_id' => $userId])
            ->execute();
    }

    public function markAllRead(int $userId)
    {
        return $this->Notifications->query()
            ->update()
            ->set(['is_read' => 1])
            ->where(['user_id' => $userId, 'is_read' => 0])
            ->execute();
    }

    public function getUnreadCount(int $userId): int
    {
        return (int)$this->Notifications->find()
            ->where(['user_id' => $userId, 'is_read' => 0])
            ->count();
    }

    public function getRecent(int $userId, int $limit = 15)
    {
        return $this->Notifications->find()
            ->where(['user_id' => $userId])
            ->orderDesc('created')
            ->limit($limit)
            ->contain(['Actors'])
            ->toArray();
    }
}