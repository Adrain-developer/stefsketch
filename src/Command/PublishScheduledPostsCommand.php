<?php
namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\Datasource\ModelAwareTrait;
use Cake\I18n\FrozenTime;
use Cake\Queue\QueueManager;
use Cake\Log\Log;

/**
 * PublishScheduledPosts command.
 * 
 * Este comando busca posts con status 'programado' que tengan una fecha programada
 * que ya haya llegado, los cambia a status 'activo' y encola notificaciones.
 * 
 * Usa la misma lógica que WebSchedulerComponent pero desde línea de comandos.
 */
class PublishScheduledPostsCommand extends Command
{
    use ModelAwareTrait;

    /**
     * Hook method for defining this command's option parser.
     *
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);
        
        $parser->setDescription('Publica automáticamente los posts programados cuya fecha ha llegado y encola notificaciones.');
        
        $parser->addOption('dry-run', [
            'help' => 'Muestra qué posts se publicarían sin hacer cambios reales.',
            'boolean' => true,
            'short' => 'd',
        ]);

        $parser->addOption('verbose', [
            'help' => 'Mostrar información detallada del proceso.',
            'boolean' => true,
            'short' => 'v',
        ]);

        return $parser;
    }

    /**
     * Ejecuta la publicación de posts programados
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return int The exit code
     */
    public function execute(Arguments $args, ConsoleIo $io): int
    {
        $this->loadModel('BlogPosts');
        
        $dryRun = $args->getOption('dry-run');
        $verbose = $args->getOption('verbose');
        $now = FrozenTime::now();
        
        if ($verbose) {
            $io->out('🚀 Iniciando PublishScheduledPostsCommand...');
            $io->out('📅 Fecha/Hora actual: ' . $now->format('Y-m-d H:i:s'));
            $io->out('🧪 Modo DRY RUN: ' . ($dryRun ? 'SÍ' : 'NO'));
            $io->hr();
        }
        
        try {
            // ⭐ USAR LA MISMA LÓGICA QUE WebSchedulerComponent ⭐
            $postsToPublish = $this->BlogPosts->find()
                ->where([
                    'status' => 'programado',
                    'scheduled_at IS NOT' => null,
                    'scheduled_at <=' => $now
                ])
                ->contain(['EventTypes', 'BlogAuthors']) // EventTypes necesario para NotificationService
                ->toArray();
            
            if (empty($postsToPublish)) {
                if ($verbose) {
                    $io->success('✅ No hay posts programados para publicar en este momento.');
                }
                return static::CODE_SUCCESS;
            }
            
            $io->out(sprintf('📝 Encontrados %d post(s) para publicar:', count($postsToPublish)));
            if ($verbose) {
                $io->hr();
            }
            
            $publishedCount = 0;
            
            foreach ($postsToPublish as $post) {
                $author = $post->blog_author ? $post->blog_author->name : 'Sin autor';
                
                if ($verbose) {
                    $io->out(sprintf(
                        '📄 ID: %d | Título: "%s" | Autor: %s | Programado: %s',
                        $post->id,
                        $post->title,
                        $author,
                        $post->scheduled_at->format('Y-m-d H:i:s')
                    ));
                }
                
                if ($dryRun) {
                    if ($verbose) {
                        $io->info('   [DRY RUN] Se cambiaría status a "activo" y se limpiaría scheduled_at');
                        $io->info('   [DRY RUN] Se encolarían notificaciones');
                    }
                    $publishedCount++; // Contar como si se hubiera publicado
                } else {
                    // ⭐ CAMBIOS EXACTOS COMO WebSchedulerComponent ⭐
                    $post->status = 'activo';
                    $post->scheduled_at = null; // 🔥 LIMPIAR scheduled_at (esto faltaba en comando anterior)
                    
                    if ($this->BlogPosts->save($post)) {
                        $publishedCount++;
                        
                        // ⭐ ENCOLAR notificaciones (IGUAL que WebSchedulerComponent) ⭐
                        try {
                            QueueManager::push(
                                \App\Queue\Job\PostNotificationJob::class,
                                [
                                    'post_id' => $post->id,
                                    'actor_id' => $post->blog_author_id
                                ],
                                ['queue' => 'default']
                            );
                            
                            if ($verbose) {
                                $io->success('   ✅ Publicado exitosamente y notificaciones ENCOLADAS');
                            }
                            
                            // Log igual que WebSchedulerComponent
                            Log::info(sprintf(
                                'Post auto-publicado por COMMAND y notificaciones ENCOLADAS: ID %d - "%s"',
                                $post->id,
                                $post->title
                            ), ['scope' => 'scheduled_posts']);
                            
                        } catch (\Exception $e) {
                            if ($verbose) {
                                $io->warning('   ⚠️ Post publicado, pero error al encolar notificaciones: ' . $e->getMessage());
                            }
                            
                            Log::error(sprintf(
                                'Error al encolar notificaciones para post ID %d: %s',
                                $post->id,
                                $e->getMessage()
                            ), ['scope' => 'scheduled_posts']);
                        }
                        
                    } else {
                        if ($verbose) {
                            $io->error('   ❌ Error al publicar');
                            $io->err('   Errores: ' . json_encode($post->getErrors()));
                        }
                        
                        Log::error(sprintf(
                            'Error al auto-publicar post via COMMAND: ID %d - "%s" - Errores: %s',
                            $post->id,
                            $post->title,
                            json_encode($post->getErrors())
                        ), ['scope' => 'scheduled_posts']);
                    }
                }
            }
            
            if ($verbose) {
                $io->hr();
            }
            
            if ($dryRun) {
                $io->info(sprintf('🧪 [DRY RUN] Se habrían publicado %d post(s) con notificaciones encoladas', $publishedCount));
            } else {
                $message = sprintf('🎉 Proceso completado. Posts publicados: %d/%d', $publishedCount, count($postsToPublish));
                
                if ($publishedCount === count($postsToPublish)) {
                    $io->success($message);
                    
                    // Log de éxito total
                    Log::info(sprintf(
                        'Ejecución EXITOSA de PublishScheduledPostsCommand: %d de %d posts publicados',
                        $publishedCount,
                        count($postsToPublish)
                    ), ['scope' => 'scheduled_posts']);
                    
                } else {
                    $io->warning($message);
                    $io->warning('⚠️  Algunos posts no se pudieron publicar. Revisa los logs en logs/scheduled_posts.log');
                    
                    Log::warning(sprintf(
                        'Ejecución PARCIAL de PublishScheduledPostsCommand: %d de %d posts publicados',
                        $publishedCount,
                        count($postsToPublish)
                    ), ['scope' => 'scheduled_posts']);
                    
                    return static::CODE_ERROR;
                }
            }
            
            return static::CODE_SUCCESS;
            
        } catch (\Exception $e) {
            $io->abort('💥 Error crítico en PublishScheduledPostsCommand: ' . $e->getMessage());
            
            Log::error('Error crítico en PublishScheduledPostsCommand: ' . $e->getMessage(), [
                'scope' => 'scheduled_posts',
                'trace' => $e->getTraceAsString()
            ]);
            
            return static::CODE_ERROR;
        }
    }
}