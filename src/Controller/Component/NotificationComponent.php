<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Mailer;
use Cake\Datasource\Exception\RecordNotFoundException;

class NotificationComponent extends Component
{
    /**
     * Envía una notificación.
     * 
     * @param array $data Array con claves: 
     *   - userId (int) ID del usuario receptor
     *   - senderId (int) ID del usuario emisor (opcional, puede ser null)
     *   - type (string) tipo de notificación
     *   - message (string) mensaje de notificación
     *   - url (string|null) url relacionada (opcional)
     *   - sendEmail (bool) si enviar email (opcional, default true)
     * @return bool True si se guardó y envió, false si falló
     */
    public function send(array $data): bool
    {
        $notifications = TableRegistry::getTableLocator()->get('Notifications');

        $notification = $notifications->newEntity([
            'user_id' => $data['userId'] ?? null,
            'actor_id' => $data['actorId'] ?? null,
            'target_type' => $data['targetType'] ?? '',
            'target_id' => $data['targetId'] ?? null,
            'title' => $data['title'] ?? '',
            'body' => $data['body'] ?? '',
            'url' => $data['url'] ?? null,
            'is_read' => false,
        ]);

        if ($notifications->save($notification)) {
            if (!empty($data['sendEmail'])) {
                $this->sendEmailNotification(
                    $data['userId'],
                    $data['title'] ?? '',
                    $data['body'] ?? '',
                    $data['url'] ?? null
                );
            }
            return true;
        }
        return false;
    }
    

    private function sendEmailNotification(int $userId, string $title, string $body, ?string $url)
    {
        $users = TableRegistry::getTableLocator()->get('Users');
        $user = $users->get($userId);

        $mailer = new Mailer('default');
        $emailBody = $body . ($url ? "\n\nVer más: " . $url : '');
        $mailer->setTo($user->email)
            ->setSubject($title)
            ->deliver($emailBody);
    }

        /**
     * Genera la URL asociada a una notificación
     *
     * @param \App\Model\Entity\Notification $note
     * @return string
     */
    public function getNotificationUrl($note)
    {
        switch ($note->target_type) {
            case 'blog_post':
                try {
                    $postsTable = $this->getController()->fetchTable('BlogPosts');
                    $post = $postsTable->get($note->target_id, [
                        'contain' => ['EventTypes']
                    ]);

                    return '/blog/' . ($post->event_type->slug ?? 'sin-evento') . '/' . $post->slug;

                } catch (RecordNotFoundException $e) {
                    return '#'; // Post eliminado
                }

            case 'comment':
                try {
                    $commentsTable = $this->getController()->fetchTable('Comments');
                    $comment = $commentsTable->get($note->target_id, [
                        'contain' => ['BlogPosts.EventTypes']
                    ]);

                    return '/blog/' . ($comment->blog_post->event_type->slug ?? 'sin-evento') . '/' . $comment->blog_post->slug . '#comentario-' . $comment->id;

                } catch (RecordNotFoundException $e) {
                    return '#';
                }

            default:
                // Si no hay un tipo definido, usar el campo url si existe
                return $note->url ?? '#';
        }
    }
}