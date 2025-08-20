<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\I18n\FrozenTime;
use Cake\ORM\TableRegistry;
use Cake\Queue\QueueManager;
use Cake\Log\Log;

class WebSchedulerComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'throttleMinutes' => 5,  // Solo ejecutar cada X minutos
        'logFile' => 'web_scheduler',
    ];

    /**
     * Inicialización del componente
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);
    }

    /**
     * Ejecuta la publicación de posts programados y genera notificaciones
     *
     * @return bool True si se ejecutó la publicación, false si no era necesario
     */
    public function publishScheduledPosts(): bool
{
    $throttleMinutes = $this->getConfig('throttleMinutes');
    
    // Verificar si ya se ejecutó recientemente
    if (!$this->shouldRun($throttleMinutes)) {
        Log::debug('Scheduler no ejecutado: dentro del período de throttle', ['scope' => $this->getConfig('logFile')]);
        return false;
    }
    
    try {
        $controller = $this->getController();
        $controller->loadModel('BlogPosts');
        
        $now = FrozenTime::now();
        
        // Buscar posts que cumplan las condiciones para publicar
        $postsToPublish = $controller->BlogPosts->find()
            ->where([
                'status' => 'programado',
                'scheduled_at IS NOT' => null,
                'scheduled_at <=' => $now
            ])
            ->contain(['EventTypes']) // Necesario para NotificationService
            ->toArray();
        
        if (empty($postsToPublish)) {
            Log::debug('No hay posts programados para publicar', ['scope' => $this->getConfig('logFile')]);
            $this->updateLastRun();
            return false;
        }
        
        $publishedCount = 0;
        
        foreach ($postsToPublish as $post) {
            $post->status = 'activo';
            $post->scheduled_at = null; // Limpiar scheduled_at
            
            if ($controller->BlogPosts->save($post)) {
                $publishedCount++;
                
                // ⭐ CAMBIO CLAVE: ENCOLAR notificaciones en lugar de envío directo ⭐
                try {
                    QueueManager::push(
                        \App\Queue\Job\PostNotificationJob::class,
                        [
                            'post_id' => $post->id,
                            'actor_id' => $post->blog_author_id
                        ],
                        ['queue' => 'default']
                    );
                    
                    Log::info(sprintf(
                        'Post auto-publicado y notificaciones ENCOLADAS: ID %d - "%s"',
                        $post->id,
                        $post->title
                    ), ['scope' => $this->getConfig('logFile')]);
                    
                } catch (\Exception $e) {
                    Log::error(sprintf(
                        'Error al encolar notificaciones para post ID %d: %s',
                        $post->id,
                        $e->getMessage()
                    ), ['scope' => $this->getConfig('logFile')]);
                }
                
            } else {
                Log::error(sprintf(
                    'Error al auto-publicar post: ID %d - "%s" - Errores: %s',
                    $post->id,
                    $post->title,
                    json_encode($post->getErrors())
                ), ['scope' => $this->getConfig('logFile')]);
            }
        }
        
        if ($publishedCount > 0) {
            Log::info(sprintf(
                'Auto-publicación completada: %d de %d posts publicados (notificaciones encoladas)',
                $publishedCount,
                count($postsToPublish)
            ), ['scope' => $this->getConfig('logFile')]);
        }
        
        $this->updateLastRun();
        return $publishedCount > 0;
        
    } catch (\Exception $e) {
        Log::error('Error en auto-publicación: ' . $e->getMessage(), [
            'scope' => $this->getConfig('logFile'),
            'trace' => $e->getTraceAsString()
        ]);
        
        $this->updateLastRun(); // Evitar ejecución constante si hay error
        return false;
    }
}

    /**
     * Verifica si debe ejecutarse la publicación
     *
     * @param int $throttleMinutes Minutos mínimos entre ejecuciones
     * @return bool
     */
    private function shouldRun(int $throttleMinutes): bool
    {
        $lastRunFile = CACHE . 'web_scheduler_last_run.txt';
        
        if (!file_exists($lastRunFile)) {
            return true;
        }
        
        $lastRun = file_get_contents($lastRunFile);
        if (!$lastRun) {
            return true;
        }
        
        try {
            $lastRunTime = FrozenTime::parse($lastRun);
            $now = FrozenTime::now();
            
            return $now->diffInMinutes($lastRunTime) >= $throttleMinutes;
            
        } catch (\Exception $e) {
            Log::error('Error al parsear last_run: ' . $e->getMessage(), ['scope' => $this->getConfig('logFile')]);
            return true;
        }
    }

    /**
     * Actualiza el timestamp de la última ejecución
     *
     * @return void
     */
    private function updateLastRun(): void
    {
        $lastRunFile = CACHE . 'web_scheduler_last_run.txt';
        $now = FrozenTime::now();
        
        if (!file_put_contents($lastRunFile, $now->toDateTimeString())) {
            Log::error('Error al escribir last_run file: ' . $lastRunFile, ['scope' => $this->getConfig('logFile')]);
        }
    }

    /**
     * Obtiene información del estado del scheduler
     *
     * @return array
     */
    public function getSchedulerInfo(): array
    {
        $lastRunFile = CACHE . 'web_scheduler_last_run.txt';
        $throttleMinutes = $this->getConfig('throttleMinutes');
        
        $info = [
            'throttle_minutes' => $throttleMinutes,
            'last_run' => null,
            'next_run' => null,
            'should_run_now' => $this->shouldRun($throttleMinutes)
        ];
        
        if (file_exists($lastRunFile)) {
            $lastRunContent = file_get_contents($lastRunFile);
            if ($lastRunContent) {
                try {
                    $lastRun = FrozenTime::parse($lastRunContent);
                    $info['last_run'] = $lastRun;
                    $info['next_run'] = $lastRun->addMinutes($throttleMinutes);
                } catch (\Exception $e) {
                    Log::error('Error al parsear last_run en getSchedulerInfo: ' . $e->getMessage(), ['scope' => $this->getConfig('logFile')]);
                }
            }
        }
        
        return $info;
    }
}