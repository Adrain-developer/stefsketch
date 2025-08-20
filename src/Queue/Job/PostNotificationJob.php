<?php
namespace App\Queue\Job;

use Cake\Queue\Job\JobInterface;
use Cake\Queue\Job\Message;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;
use App\Service\NotificationService;

class PostNotificationJob implements JobInterface
{
    /**
     * Execute the job para enviar notificaciones de posts programados
     * @param Message $message
     * @return string|null Return null for success, string for failure message
     */
    public function execute(Message $message): ?string
    {
        // Obtener datos del mensaje
        $data = [];
        
        if (method_exists($message, 'getBody')) {
            $body = $message->getBody();
            if (is_string($body)) {
                $data = json_decode($body, true) ?: [];
            } elseif (is_array($body)) {
                $data = $body;
            }
        }
        
        if (empty($data) && method_exists($message, 'getArgument')) {
            $args = $message->getArgument();
            $data = $args[0] ?? $args ?? [];
        }
        
        // Validar datos necesarios
        if (empty($data['post_id']) || empty($data['actor_id'])) {
            $error = 'Datos incompletos en PostNotificationJob: ' . json_encode($data);
            Log::write('error', $error, ['scope' => 'queue']);
            return $error;
        }
        
        try {
            // Obtener el post de la BD
            $blogPostsTable = TableRegistry::getTableLocator()->get('BlogPosts');
            $post = $blogPostsTable->get($data['post_id'], [
                'contain' => ['EventTypes']
            ]);
            
            // Verificar que el post esté activo
            if ($post->status !== 'activo') {
                Log::write('warning', "Post {$data['post_id']} no está activo, cancelando notificaciones", ['scope' => 'queue']);
                return null; // No es error, solo que ya no aplica
            }
            
            // Usar NotificationService para enviar notificaciones
            $notificationService = new NotificationService();
            $notificationService->sendNewPostNotification($post, $data['actor_id']);
            
            Log::write('info', "✅ Notificaciones procesadas exitosamente para post programado ID {$data['post_id']}: {$post->title}", ['scope' => 'queue']);
            return null; // Éxito
            
        } catch (\Exception $e) {
            $error = "❌ Error al procesar notificaciones para post {$data['post_id']}: {$e->getMessage()}";
            Log::write('error', $error, ['scope' => 'queue']);
            return $error; // Fallo - se reintentará
        }
    }
}