<?php
declare(strict_types=1);
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\BlogBannersTable;
use App\Service\ImageProcessorService;
use Cake\Log\Log;
use Laminas\Diactoros\UploadedFile;

/**
 * BlogBanners Controller
 *
 * Módulo administrativo para editar los banners parallax dinámicos de la
 * portada del portafolio (3 capas de imagen + textos). Reutiliza el motor de
 * compresión ImageProcessorService y elimina físicamente las imágenes
 * reemplazadas o quitadas para no dejar basura en el servidor.
 */
class BlogBannersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->viewBuilder()->setLayout('admin_blog_layout');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $user = $this->request->getAttribute('identity');

        if (!$user) {
            $this->Flash->error(__('Debes iniciar sesión para acceder.'));
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }

        if (!in_array($user->role, ['admin', 'author'], true)) {
            $this->Flash->error(__('No tienes permiso para acceder a esta sección.'));
            return $this->redirect('/');
        }
    }

    /**
     * Lista los banners editables. Auto-provisiona las filas si no existen.
     */
    public function index()
    {
        $banners = [];
        foreach (array_keys(BlogBannersTable::BANNERS) as $key) {
            $banners[$key] = $this->BlogBanners->getForKey($key);
        }

        $bannersConfig = BlogBannersTable::BANNERS;
        $this->set(compact('banners', 'bannersConfig'));
    }

    /**
     * Edita un banner: reemplaza/quita imágenes por capa y actualiza textos.
     *
     * @param string|null $key Clave del banner (hero, historia).
     */
    public function edit(?string $key = null)
    {
        $banner = $this->BlogBanners->getForKey((string)$key);
        $config = BlogBannersTable::BANNERS[$key];

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $imageProcessor = new ImageProcessorService();
            $remove = (array)($data['remove'] ?? []);
            $save = [];
            $touched = 0;

            foreach (array_keys($config['layers']) as $layer) {
                $file = $data[$layer] ?? null;
                $hasNewFile = $file instanceof UploadedFile
                    && $file->getError() === UPLOAD_ERR_OK
                    && $file->getSize() > 0;

                if ($hasNewFile) {
                    // Validar la imagen antes de procesarla (no bloquea otras capas)
                    $validation = $imageProcessor->validateImage($file);
                    if (!$validation['valid']) {
                        foreach ($validation['errors'] as $error) {
                            $this->Flash->error($error);
                        }
                        continue;
                    }
                    foreach ($validation['warnings'] as $warning) {
                        $this->Flash->warning($warning);
                    }

                    try {
                        // Eliminar físicamente la imagen anterior (evita basura)
                        if (!empty($banner->$layer)) {
                            $imageProcessor->deleteImage($banner->$layer);
                        }

                        $processed = $imageProcessor->processImage(
                            $file,
                            'banner',
                            BlogBannersTable::IMG_DIR
                        );

                        $save[$layer] = $processed['full'];
                        $touched++;
                        Log::info("Capa {$layer} del banner {$key} actualizada: {$processed['full']}", ['scope' => 'blog_banners']);
                    } catch (\Exception $e) {
                        $this->Flash->error(__('Error al procesar la imagen de {0}: {1}', $config['layers'][$layer]['label'], $e->getMessage()));
                        Log::error("Error procesando {$layer} del banner {$key}: " . $e->getMessage(), ['scope' => 'blog_banners']);
                    }
                } elseif (!empty($remove[$layer])) {
                    // Quitar imagen: borrar archivo físico y revertir al diseño por defecto
                    if (!empty($banner->$layer)) {
                        $imageProcessor->deleteImage($banner->$layer);
                        Log::info("Capa {$layer} del banner {$key} eliminada.", ['scope' => 'blog_banners']);
                    }
                    $save[$layer] = null;
                    $touched++;
                }
                // Si no hay archivo nuevo ni quitar: se conserva la imagen actual.
            }

            // Textos editables (solo banners que los tienen)
            if (!empty($config['has_text'])) {
                $save['heading'] = trim((string)($data['heading'] ?? ''));
                $save['paragraph'] = trim((string)($data['paragraph'] ?? ''));
                $touched++;
            }

            $banner = $this->BlogBanners->patchEntity($banner, $save);

            if ($this->BlogBanners->save($banner)) {
                $this->Flash->success(__('Banner "{0}" actualizado correctamente.', $config['name']));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('No se pudo guardar el banner. Revisa los datos.'));
        }

        $this->set(compact('banner', 'config', 'key'));
    }
}
