<?php
namespace App\Controller;
use Cake\Utility\Text;
use Cake\I18n\FrozenTime;
use Cake\Queue\QueueManager;
use Cake\Log\Log;


class BlogPostsController extends AppController
{
    
    
public function initialize(): void
{
    parent::initialize();
    
    $this->viewBuilder()->setLayout('admin_blog_layout');

    // ✅ SOLUCIÓN: Agregar updateViews a las acciones desbloqueadas de FormProtection
    $this->loadComponent('FormProtection', [
        'unlockedFields' => ['gallery', 'existing_gallery', 'remove_images'],
        'unlockedActions' => ['toggleStatus', 'updateViews']  // ← Agregar updateViews aquí
    ]);
    
    $this->loadComponent('Flash');
    $this->loadComponent('Authentication.Authentication');
    //$this->loadComponent('Notification'); //nuevo para Notificaciones

    // ✨ NUEVO: Cargar el componente de auto-publicación
    //$this->loadComponent('WebScheduler', [
    //    'throttleMinutes' => 5, // Solo ejecutar cada 5 minutos
    //    'logFile' => 'web_scheduler'
    //]);
    
    // ✨ NUEVO: Ejecutar auto-publicación en cada carga de página
    //try {
    //    $this->WebScheduler->publishScheduledPosts();
    //} catch (\Exception $e) {
        // Si hay error, no afecta el funcionamiento del sitio
        // Solo se registra en los logs
    //}

}

public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    
    $this->loadModel('EventTypes');
    
    // Test directo - esto DEBE funcionar
    $eventTypes = [
        1 => 'Boda',
        3 => 'XV años',
        // agrega los IDs y nombres que tengas
    ];
    
    // Para el layout - entidades completas
    $eventTypesEntities = $this->EventTypes->find('all')->orderAsc('name')->toArray();

    
    $this->set('eventTypes', $eventTypes); 
    $this->set('eventTypesEntities', $eventTypesEntities);

    if ($this->request->getParam('action') === 'bulk') {
        $this->FormProtection->setConfig('unlockedFields', ['ids', 'bulk_action']);
    }
}

    public function index()
    {
        $user = $this->request->getAttribute('identity');

        $query = $this->BlogPosts->find()
            ->contain(['EventTypes', 'BlogAuthors', 'BlogCategories', 'BlogTags']);

        // Mostrar solo los posts del autor si no es admin
        if ($user->role === 'author') {
            $query->where(['BlogPosts.blog_author_id' => $user->blog_author_id]);
        }

        // Filtros adicionales (búsqueda y tipo de evento)
        if ($search = $this->request->getQuery('search')) {
            $query->where([
                'OR' => [
                    'BlogPosts.title LIKE' => '%' . $search . '%',
                    'BlogPosts.subtitle LIKE' => '%' . $search . '%',
                    'BlogAuthors.name LIKE' => '%' . $search . '%',
                    'BlogCategories.name LIKE' => '%' . $search . '%'
                ]
            ]);
        }

        if ($eventType = $this->request->getQuery('event_type')) {
            $query->where(['BlogPosts.event_type_id' => $eventType]);
        }

        $query->order(['BlogPosts.id' => 'DESC']);

        $blogPosts = $this->paginate($query);
        $eventTypes = $this->BlogPosts->EventTypes->find('list')->toArray();

        $this->set(compact('blogPosts', 'eventTypes'));

        $identity = $this->request->getAttribute('identity');

        $blogAuthorName = null;
        if ($identity->role === 'author' || $identity->role === 'admin') {
            $author = $this->BlogPosts->BlogAuthors->get($identity->blog_author_id);
            $blogAuthorName = $author->name;
        }

        $this->set(compact('blogPosts', 'identity' , 'blogAuthorName'));
    }


    public function view($id = null)
    {
         $blogPost = $this->BlogPosts->get($id, [
        'contain' => ['BlogAuthors', 'EventTypes'],
    ]);


    $this->set(compact('blogPost'));

    // Forzar limpieza de caché para reflejar cambios de estado
        $this->response = $this->response->withCache('-1 hour', '+1 minute');
    }

/**
 * Add method
 */
public function add()
{
    $blogPost = $this->BlogPosts->newEmptyEntity();
    $user = $this->request->getAttribute('identity');

    if ($this->request->is('post')) {
        $data = $this->request->getData();

        // Asignar blog_author_id si es autor
        if ($user->role === 'author') {
            $data['blog_author_id'] = $user->blog_author_id;
        }

        // 1. Generar slug si está vacío
        if (empty($data['slug'])) {
            $baseSlug = strtolower(Text::slug($data['title']));
            $slug = $baseSlug;
            $i = 1;

            while ($this->BlogPosts->exists(['slug' => $slug])) {
                $slug = $baseSlug . '-' . $i;
                $i++;
            }

            $data['slug'] = $slug;
        }

        // 2. Subir imagen principal
        if (!empty($data['banner']) && $data['banner']->getError() === UPLOAD_ERR_OK) {
            $banner = $data['banner'];
            $bannerName = time() . '_' . $banner->getClientFilename();
            $bannerPath = WWW_ROOT . 'img' . DS . 'bannersBlog' . DS . $bannerName;
            $banner->moveTo($bannerPath);
            $data['banner'] = 'bannersBlog/' . $bannerName;
        } else {
            unset($data['banner']);
        }

        // 3. Subir galería de imágenes
        $galleryPaths = [];
        if (!empty($data['gallery']) && is_array($data['gallery'])) {
            foreach ($data['gallery'] as $img) {
                if ($img->getError() === UPLOAD_ERR_OK) {
                    $name = time() . '-' . $img->getClientFilename();
                    $img->moveTo(WWW_ROOT . 'img' . DS . 'gallery' . DS . $name);
                    $galleryPaths[] = 'gallery/' . $name;
                }
            }
        }

        if (!empty($galleryPaths)) {
            $data['gallery'] = json_encode($galleryPaths);
        } else {
            unset($data['gallery']);
        }

        // 4. Manejo de subcategorías
        if (!empty($data['blog_subcategories']) && is_array($data['blog_subcategories'])) {
            $subcatsArray = [];

            foreach ($data['blog_subcategories'] as $subcategoriesValue) {
                if (is_numeric($subcategoriesValue)) {
                    $subcatsArray[] = (int)$subcategoriesValue;
                } else {
                    $existingSubcat = $this->BlogPosts->BlogSubcategories->find()
                        ->where(['name' => trim($subcategoriesValue)])
                        ->first();

                    if ($existingSubcat) {
                        $subcatsArray[] = $existingSubcat->id;
                    } else {
                        $newSubcat = $this->BlogPosts->BlogSubcategories->newEntity(['name' => trim($subcategoriesValue)]);
                        if ($this->BlogPosts->BlogSubcategories->save($newSubcat)) {
                            $subcatsArray[] = $newSubcat->id;
                        }
                    }
                }
            }
            $data['blog_subcategories']['_ids'] = $subcatsArray;
        }

        // 5. Manejo de etiquetas
        if (!empty($data['blog_tags']) && is_array($data['blog_tags'])) {
            $tagsArray = [];

            foreach ($data['blog_tags'] as $tagValue) {
                if (is_numeric($tagValue)) {
                    $tagsArray[] = (int)$tagValue;
                } else {
                    $existingTag = $this->BlogPosts->BlogTags->find()
                        ->where(['name' => trim($tagValue)])
                        ->first();

                    if ($existingTag) {
                        $tagsArray[] = $existingTag->id;
                    } else {
                        $newTag = $this->BlogPosts->BlogTags->newEntity(['name' => trim($tagValue)]);
                        if ($this->BlogPosts->BlogTags->save($newTag)) {
                            $tagsArray[] = $newTag->id;
                        }
                    }
                }
            }
            $data['blog_tags']['_ids'] = $tagsArray;
        }

        // 6. Manejo de programación
        if (!empty($data['enable_scheduling']) && !empty($data['scheduled_at']) && $data['status'] !== 'borrador') {
            $data['scheduled_at'] = $data['scheduled_at'];
        } else {
            $data['scheduled_at'] = null;
        }

        // 7. Guardar post
        $blogPost = $this->BlogPosts->patchEntity($blogPost, $data, [
            'associated' => ['BlogTags', 'BlogSubcategories', 'BlogCategories', 'EventTypes', 'BlogAuthors']
        ]);

        if ($this->BlogPosts->save($blogPost)) {
            $this->ensureCategorySubcategoryLinks($blogPost->blog_category_id, $data['blog_subcategories']['_ids'] ?? []);

            // Recargar el post con asociaciones
            $blogPost = $this->BlogPosts->get($blogPost->id, [
                'contain' => ['EventTypes']
            ]);

            // Enviar notificaciones si el post está activo
            if ($blogPost->status === 'activo') {
                    try {
                        $notificationService = new \App\Service\NotificationService();
                        $notificationService->sendNewPostNotification($blogPost, $user->id);
                        Log::write('info', "Notificaciones enviadas para post activo ID {$blogPost->id}", ['scope' => 'notification']);
                    } catch (\Exception $e) {
                        Log::write('error', "Error al enviar notificaciones para post ID {$blogPost->id}: {$e->getMessage()}", ['scope' => 'notification']);
                    }
                }

            $this->Flash->success("✅ El post \"{$blogPost->title}\" se guardó correctamente.");
            return $this->redirect(['action' => 'index']);
        }

        $this->Flash->error(__('El post no se pudo guardar. Intenta nuevamente.'));
    }

    $blogAuthors = ($user->role === 'admin') ? $this->BlogPosts->BlogAuthors->find('list')->toArray() : [];
    $eventTypes = $this->BlogPosts->EventTypes->find('list')->toArray();
    $blogCategories = $this->BlogPosts->BlogCategories->find('list')->toArray();
    $blogTags = $this->BlogPosts->BlogTags->find('list')->toArray();
    $blogSubcategories = $this->BlogPosts->BlogSubcategories->find('list')->toArray();

    $this->set(compact('blogPost', 'blogAuthors', 'eventTypes', 'blogCategories', 'blogTags', 'blogSubcategories'));
}

/**
 * Edit method
 */
public function edit($id = null)
{
    $user = $this->request->getAttribute('identity');

    $blogPost = $this->BlogPosts->get($id, [
        'contain' => ['BlogTags', 'BlogSubcategories', 'BlogCategories', 'EventTypes', 'BlogAuthors']
    ]);

    if ($user->role === 'author' && $blogPost->blog_author_id != $user->blog_author_id) {
        $this->Flash->error(__('Tramposillo, quieres editar un post que no es tuyo, claro que no se puede.'));
        return $this->redirect(['action' => 'index']);
    }

    if ($this->request->is(['patch', 'post', 'put'])) {
        $data = $this->request->getData();

        if ($user->role === 'author') {
            $data['blog_author_id'] = $user->blog_author_id;
        }

        if (!empty($data['title']) && $data['title'] !== $blogPost->title) {
            $slugBase = Text::slug(strtolower($data['title']));
            $slug = $slugBase;
            $i = 1;

            while ($this->BlogPosts->exists(['slug' => $slug, 'id !=' => $blogPost->id])) {
                $slug = $slugBase . '-' . $i++;
            }

            $data['slug'] = $slug;
        }

        if (!empty($data['banner']) && $data['banner']->getError() === UPLOAD_ERR_OK) {
            $banner = $data['banner'];
            $bannerName = time() . '_' . $banner->getClientFilename();
            $bannerPath = WWW_ROOT . 'img' . DS . 'bannersBlog' . DS . $bannerName;
            $banner->moveTo($bannerPath);
            $data['banner'] = 'bannersBlog/' . $bannerName;
        } else {
            unset($data['banner']);
        }

        $galleryPaths = [];
        if (!empty($data['gallery']) && is_array($data['gallery'])) {
            foreach ($data['gallery'] as $img) {
                if ($img->getError() === UPLOAD_ERR_OK) {
                    $name = time() . '-' . $img->getClientFilename();
                    $img->moveTo(WWW_ROOT . 'img' . DS . 'gallery' . DS . $name);
                    $galleryPaths[] = 'gallery/' . $name;
                }
            }
        }

        if (!empty($galleryPaths)) {
            $data['gallery'] = json_encode($galleryPaths);
        } else {
            unset($data['gallery']);
        }


        // Manejar eliminación de imágenes existentes
        if (!empty($data['remove_images'])) {
            $imagesToRemove = json_decode($data['remove_images'], true);
            $currentImages = json_decode($blogPost->gallery, true) ?? [];
            
            // Eliminar físicamente los archivos del servidor
            foreach ($imagesToRemove as $imageToRemove) {
                $filePath = WWW_ROOT . 'img' . DS . $imageToRemove;
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
                
                // Remover de la lista actual
                $currentImages = array_filter($currentImages, function($img) use ($imageToRemove) {
                    return $img !== $imageToRemove;
                });
            }
            
            // Combinar imágenes existentes (que no se eliminaron) con las nuevas
            if (!empty($galleryPaths)) {
                $allImages = array_merge(array_values($currentImages), $galleryPaths);
            } else {
                $allImages = array_values($currentImages);
            }
            
            $data['gallery'] = !empty($allImages) ? json_encode($allImages) : null;
        } else {
            // Si no hay eliminaciones, mantener lógica original de combinar
            if (!empty($galleryPaths)) {
                $currentImages = json_decode($blogPost->gallery, true) ?? [];
                $allImages = array_merge($currentImages, $galleryPaths);
                $data['gallery'] = json_encode($allImages);
            }
        }

        if (!empty($data['blog_subcategories']['_ids']) && is_array($data['blog_subcategories']['_ids'])) {
            $subcatsArray = [];
            foreach ($data['blog_subcategories']['_ids'] as $subcategoriesValue) {
                if (is_numeric($subcategoriesValue)) {
                    $subcatsArray[] = (int)$subcategoriesValue;
                } else {
                    $existingSubcat = $this->BlogPosts->BlogSubcategories->find()
                        ->where(['name' => trim($subcategoriesValue)])
                        ->first();

                    if ($existingSubcat) {
                        $subcatsArray[] = $existingSubcat->id;
                    } else {
                        $newSubcat = $this->BlogPosts->BlogSubcategories->newEntity(['name' => trim($subcategoriesValue)]);
                        if ($this->BlogPosts->BlogSubcategories->save($newSubcat)) {
                            $subcatsArray[] = $newSubcat->id;
                        }
                    }
                }
            }
            $data['blog_subcategories']['_ids'] = $subcatsArray;
        }

        if (!empty($data['blog_tags']['_ids']) && is_array($data['blog_tags']['_ids'])) {
            $tagsArray = [];
            foreach ($data['blog_tags']['_ids'] as $tagValue) {
                if (is_numeric($tagValue)) {
                    $tagsArray[] = (int)$tagValue;
                } else {
                    $existingTag = $this->BlogPosts->BlogTags->find()
                        ->where(['name' => trim($tagValue)])
                        ->first();

                    if ($existingTag) {
                        $tagsArray[] = $existingTag->id;
                    } else {
                        $newTag = $this->BlogPosts->BlogTags->newEntity(['name' => trim($tagValue)]);
                        if ($this->BlogPosts->BlogTags->save($newTag)) {
                            $tagsArray[] = $newTag->id;
                        }
                    }
                }
            }
            $data['blog_tags']['_ids'] = $tagsArray;
        }

        if (!empty($data['enable_scheduling']) && !empty($data['scheduled_at']) && $data['status'] !== 'borrador') {
            $data['scheduled_at'] = $data['scheduled_at'];
        } else {
            $data['scheduled_at'] = null;
        }

        $blogPost = $this->BlogPosts->patchEntity($blogPost, $data, [
            'associated' => ['BlogTags', 'BlogSubcategories', 'BlogCategories', 'EventTypes', 'BlogAuthors']
        ]);

        if ($this->BlogPosts->save($blogPost)) {
            $this->ensureCategorySubcategoryLinks($blogPost->blog_category_id, []);

            // Enviar notificaciones si el post pasa a activo
            if ($blogPost->status === 'activo' && ($blogPost->isDirty('status') || $blogPost->isDirty('scheduled_at'))) {
                $notificationService = new \App\Service\NotificationService();
                $notificationService->sendNewPostNotification($blogPost, $user->id);
            }

            $this->Flash->success("✅ Post \"{$blogPost->title}\" actualizado correctamente.");
            return $this->redirect(['action' => 'index']);
        }

        $this->Flash->error(__('El post no se pudo actualizar. Intenta nuevamente.'));
    }

    $blogAuthors = ($user->role === 'admin') ? $this->BlogPosts->BlogAuthors->find('list')->toArray() : [];
    $eventTypes = $this->BlogPosts->EventTypes->find('list')->toArray();
    $blogCategories = $this->BlogPosts->BlogCategories->find('list')->toArray();
    $blogTags = $this->BlogPosts->BlogTags->find('list')->toArray();
    $blogSubcategories = $this->BlogPosts->BlogSubcategories->find('list')->toArray();

    $this->set(compact('blogPost', 'blogAuthors', 'eventTypes', 'blogCategories', 'blogTags', 'blogSubcategories'));
}

public function delete($id = null)
{
    $this->request->allowMethod(['post', 'delete']);
    
    // Obtener el blog post con las relaciones N:M (muchos a muchos)
    $blogPost = $this->BlogPosts->get($id, [
        'contain' => [
            'BlogTags',           // Relación N:M con tags
            'BlogSubcategories'   // Relación N:M con subcategorías
        ]
    ]);

    try {
        // Comenzar transacción para asegurar consistencia
        $connection = $this->BlogPosts->getConnection();
        $connection->begin();

        // Desvincular relación N:M con tags (sin eliminar los tags)
        if (!empty($blogPost->blog_tags)) {
            $this->BlogPosts->BlogTags->unlink($blogPost, $blogPost->blog_tags);
        }

        // Desvincular relación N:M con subcategorías (sin eliminar las subcategorías)
        if (!empty($blogPost->blog_subcategories)) {
            $this->BlogPosts->BlogSubcategories->unlink($blogPost, $blogPost->blog_subcategories);
        }
        
        // La relación con blog_categories es belongsTo (blog_category_id en blog_posts)
        // Se eliminará automáticamente al eliminar el post, sin eliminar la categoría

        // Eliminar el blog post
        if ($this->BlogPosts->delete($blogPost)) {
            $connection->commit();
            $this->Flash->success(__('El post fue eliminado correctamente.'));
        } else {
            $connection->rollback();
            $this->Flash->error(__('El post no pudo ser eliminado. Intenta nuevamente.'));
        }

    } catch (\Exception $e) {
        $connection->rollback();
        $this->Flash->error(__('Error al eliminar el post: ' . $e->getMessage()));
    }

    return $this->redirect(['action' => 'index']);
}

public function bulk()
{
    $this->request->allowMethod(['post']);
    $user = $this->request->getAttribute('identity');

    if ($user->role !== 'admin') {
        $this->Flash->error('No tienes permisos para realizar acciones masivas.');
        return $this->redirect(['action' => 'index']);
    }

    $bulkAction = $this->request->getData('bulk_action');
    $ids = $this->request->getData('ids');

    if (empty($ids) || empty($bulkAction) || !is_array($ids)) {
        $this->Flash->error('Selecciona al menos un elemento y una acción válida.');
        return $this->redirect(['action' => 'index']);
    }

    $connection = $this->BlogPosts->getConnection();
    $count = 0;

    try {
        $connection->begin();

        switch ($bulkAction) {
            case 'delete':
                // Cargar posts con relaciones N:M
                $posts = $this->BlogPosts->find()
                    ->where(['id IN' => $ids])
                    ->contain(['BlogTags', 'BlogSubcategories'])
                    ->all();

                foreach ($posts as $post) {
                    if (!empty($post->blog_tags)) {
                        $this->BlogPosts->BlogTags->unlink($post, $post->blog_tags);
                    }
                    if (!empty($post->blog_subcategories)) {
                        $this->BlogPosts->BlogSubcategories->unlink($post, $post->blog_subcategories);
                    }
                    if ($this->BlogPosts->delete($post)) {
                        $count++;
                    }
                }
                break;

            case 'activate':
                $count = $this->BlogPosts->updateAll(
                    ['status' => 'activo'],
                    ['id IN' => $ids]
                );
                break;

            case 'deactivate':
                $count = $this->BlogPosts->updateAll(
                    ['status' => 'inactivo'],
                    ['id IN' => $ids]
                );
                break;

            default:
                throw new \Exception('Acción no válida.');
        }

        $connection->commit();
        $this->Flash->success("Se procesaron {$count} registros correctamente.");
    } catch (\Exception $e) {
        $connection->rollback();
        $this->Flash->error('Error al procesar la acción: ' . $e->getMessage());
    }

    return $this->redirect(['action' => 'index']);
}

public function toggleStatusActivo($id)
{
    $this->request->allowMethod(['post']);
    $user = $this->request->getAttribute('identity');

    if ($user->role !== 'admin') {
        $this->Flash->error('No tienes permisos para cambiar el estado.');
        return $this->redirect($this->referer());
    }

    $post = $this->BlogPosts->get($id);
    
    // ✨ NUEVO: Verificar si tiene programación válida (fecha futura)
    $isScheduled = !empty($post->scheduled_at) && $post->scheduled_at > \Cake\I18n\FrozenTime::now();
    
    // Determinar el nuevo estado según la lógica
    if ($isScheduled) {
        // ✨ NUEVO: Lógica de ciclo de 3 estados para posts programados
        switch ($post->status) {
            case 'programado': // Programado → Activo
                $newStatus = 'activo';
                $statusMessage = 'activo (Publicado inmediatamente)';
                break;
            case 'activo': // Activo → Inactivo
                $newStatus = 'inactivo';
                $statusMessage = 'inactivo';
                break;
            case 'inactivo': // Inactivo → Programado
                $newStatus = 'programado';
                $statusMessage = 'programado para ' . $post->scheduled_at->format('d/m/Y H:i');
                break;
            default:
                // Si está en borrador u otro estado, usar lógica original
                $newStatus = $post->status === 'activo' ? 'inactivo' : 'activo';
                $statusMessage = $newStatus;
        }
    } else {
        // ✨ MEJORADO: Lógica original para posts sin programación
        $newStatus = $this->request->getData('status', $post->status === 'activo' ? 'inactivo' : 'activo');
        $statusMessage = $newStatus;
        
        // ✨ NUEVO: Si no tiene programación válida, limpiar scheduled_at por seguridad
        if (!empty($post->scheduled_at)) {
            $post->scheduled_at = null;
        }
    }

    // ✨ MEJORADO: Validación de estados ampliada para incluir 'programado'
    $allowedStatuses = ['activo', 'inactivo', 'programado'];
    if (!in_array($newStatus, $allowedStatuses)) {
        $this->Flash->error('Estado no permitido.');
        return $this->redirect($this->referer());
    }

    // Aplicar el nuevo estado
    $post->status = $newStatus;

    if ($this->BlogPosts->save($post)) {
        $this->Flash->success('Estado actualizado a ' . $statusMessage . ' correctamente.');
    } else {
        $this->Flash->error('No se pudo actualizar el estado.');
    }

    return $this->redirect($this->referer());
}

    public function updateViews()
    {
        // Tu código actual permanece igual...
        $this->request->allowMethod(['post']);
        $this->autoRender = false;
        
        if ($this->request->is('ajax')) {
            $this->response = $this->response->withType('application/json');
            
            try {
                // Obtener datos del JSON
                $input = json_decode($this->request->getBody(), true);
                
                // Debug temporal - eliminar después
                \Cake\Log\Log::debug('Datos recibidos en updateViews:', $input);
                
                if (!$input) {
                    return $this->response
                        ->withStatus(400)
                        ->withStringBody(json_encode([
                            'success' => false,
                            'message' => 'Datos JSON inválidos'
                        ]));
                }
                
                $id = $input['id'] ?? null;
                $views = $input['views'] ?? null;
                
                // Validaciones básicas
                if (empty($id) || !is_numeric($id)) {
                    return $this->response
                        ->withStatus(400)
                        ->withStringBody(json_encode([
                            'success' => false,
                            'message' => 'ID inválido'
                        ]));
                }
                
                if (!is_numeric($views) || $views < 0) {
                    return $this->response
                        ->withStatus(400)
                        ->withStringBody(json_encode([
                            'success' => false,
                            'message' => 'Número de views inválido'
                        ]));
                }
                
                $blogPost = $this->BlogPosts->get($id);
                $blogPost->views = (int) $views;
                
                if ($this->BlogPosts->save($blogPost)) {
                    return $this->response->withStringBody(json_encode([
                        'success' => true,
                        'message' => 'Views actualizados correctamente',
                        'newViews' => $blogPost->views
                    ]));
                } else {
                    return $this->response
                        ->withStatus(400)
                        ->withStringBody(json_encode([
                            'success' => false,
                            'message' => 'Error al guardar en la base de datos',
                            'errors' => $blogPost->getErrors()
                        ]));
                }
                
            } catch (\Cake\Datasource\Exception\RecordNotFoundException $e) {
                return $this->response
                    ->withStatus(404)
                    ->withStringBody(json_encode([
                        'success' => false,
                        'message' => 'Post no encontrado'
                    ]));
            } catch (\Exception $e) {
                // Debug temporal - eliminar después
                \Cake\Log\Log::error('Error en updateViews: ' . $e->getMessage());
                
                return $this->response
                    ->withStatus(500)
                    ->withStringBody(json_encode([
                        'success' => false,
                        'message' => 'Error interno del servidor: ' . $e->getMessage()
                    ]));
            }
        }
        
        throw new \Cake\Http\Exception\NotFoundException();
    }


private function ensureCategorySubcategoryLinks($categoryId, array $subcatIds): void
{
    if (empty($categoryId) || empty($subcatIds)) {
        return;
    }

    $this->loadModel('BlogCategorySubcategories');

    foreach ($subcatIds as $subcatId) {
        $exists = $this->BlogCategorySubcategories->find()
            ->where([
                'blog_category_id' => $categoryId,
                'blog_subcategory_id' => $subcatId
            ])
            ->count();

        if (!$exists) {
            $assoc = $this->BlogCategorySubcategories->newEntity([
                'blog_category_id' => $categoryId,
                'blog_subcategory_id' => $subcatId
            ]);
            $this->BlogCategorySubcategories->save($assoc);
        }
    }
}


}