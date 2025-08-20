<?php
namespace App\Queue\Job;

use Cake\Mailer\Mailer;
use Cake\Queue\Job\JobInterface;
use Cake\Queue\Job\Message;
use Cake\Log\Log;

class EmailNotificationJob implements JobInterface
{
    /**
     * Execute the job con manejo inteligente de rate limits
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
        
        // Validar que tenemos los datos necesarios
        if (empty($data['email']) || empty($data['subject']) || empty($data['body'])) {
            $error = 'Datos incompletos en EmailNotificationJob: ' . json_encode($data);
            Log::write('error', $error, ['scope' => 'queue']);
            return $error;
        }
        
        $email = $data['email'];
        $subject = $data['subject'];
        $body = $data['body'];

        try {
            // ⭐ DELAY OBLIGATORIO de 5 segundos (Hostinger es muy estricto)
            Log::write('debug', "💤 Esperando 5 segundos antes de enviar a {$email}...", ['scope' => 'queue']);
            sleep(5);
            
            $mailer = new Mailer('default');
            $mailer
                ->setTo($email)
                ->setSubject($subject)
                ->deliver($body);
            
            Log::write('info', "✅ Correo enviado exitosamente a {$email}: {$subject}", ['scope' => 'queue']);
            return null; // ÉXITO
            
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            
            // ⭐ RATE LIMIT: Cancelar reintentos (evitar bucle infinito)
            if (strpos($errorMessage, 'Ratelimit') !== false || 
                strpos($errorMessage, 'rate limit') !== false ||
                strpos($errorMessage, 'too many errors') !== false) {
                
                Log::write('warning', "🛑 Rate limit de Hostinger para {$email} - CANCELANDO reintento para evitar bucle", ['scope' => 'queue']);
                return null; // null = NO reintentar más
            }
            
            // ⭐ TIMEOUT: Solo 1 reintento
            if (strpos($errorMessage, 'timeout') !== false || strpos($errorMessage, 'SMTP timeout') !== false) {
                Log::write('warning', "⏱️ SMTP timeout para {$email} - cancelando por rate limit", ['scope' => 'queue']);
                return null; // null = NO reintentar más
            }
            
            // ⭐ OTROS ERRORES: Log y cancelar
            Log::write('error', "❌ Error definitivo al enviar correo a {$email}: {$errorMessage}", ['scope' => 'queue']);
            return null; // null = NO reintentar más
        }
    }
}