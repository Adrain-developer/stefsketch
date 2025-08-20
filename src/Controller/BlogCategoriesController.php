<?php
namespace App\Controller;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Http\Exception\NotFoundException;

class BlogCategoriesController extends AppController
{

     public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin_blog_layout'); // Usa templates/layout/blog_layout.php

    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $user = $this->request->getAttribute('identity');

        // Redireccionar si no está logueado
        if (!$user) {
            $this->Flash->error(__('Debes iniciar sesión para acceder.'));
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }

        // Restringir si no es admin ni author
        if (!in_array($user->role, ['admin', 'author'])) {
            $this->Flash->error(__('No tienes permiso para acceder a esta sección.'));
            return $this->redirect('/');
        }
    }

    public function beforeRender(\Cake\Event\EventInterface $event)
{
    parent::beforeRender($event);
    
    $this->loadModel('EventTypes');
    $eventTypes = $this->EventTypes->find('all')->orderAsc('name')->toArray();
    $this->set(compact('eventTypes'));
}

    public function index()
    {
        $blogCategories = $this->paginate($this->BlogCategories);
        $this->set(compact('blogCategories'));
    }

public function loadMore()
{
    $this->request->allowMethod(['ajax']);
    $this->viewBuilder()->setLayout('ajax');

    $page = $this->request->getQuery('page', 1);

    $this->paginate = [
        'limit' => 20,
        'page' => $page
    ];

    try {
        $categories = $this->paginate($this->BlogCategories);
    } catch (NotFoundException $e) {
        // Ya no hay más resultados
        $this->set('blogCategories', []);
        $this->render('/element/BlogCategories/load_more');
        return;
    }

    $this->set([
        'blogCategories' => $categories,
        'currentUser' => $this->request->getAttribute('identity'),
    ]);

    $this->render('/element/BlogCategories/load_more');
}

    public function view($id = null)
    {
        $blogCategory = $this->BlogCategories->get($id, [
            'contain' => ['BlogPosts'],
        ]);
        $this->set(compact('blogCategory'));
    }

public function add()
{
    $blogCategory = $this->BlogCategories->newEmptyEntity();

    if ($this->request->is('post')) {
        $data = $this->request->getData();
        $image = $data['image'] ?? null;

        // Verificar si se subió una imagen válida
        if (
            $image instanceof \Laminas\Diactoros\UploadedFile &&
            $image->getError() === UPLOAD_ERR_OK &&
            $image->getSize() > 0
        ) {
            $extension = pathinfo($image->getClientFilename(), PATHINFO_EXTENSION);
            $imageName = time() . '_' . uniqid() . '.' . $extension;
            $uploadDir = WWW_ROOT . 'img' . DS . 'categorias' . DS;
            $imagePath = $uploadDir . $imageName;

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            try {
                $image->moveTo($imagePath);
                $data['image'] = 'categorias/' . $imageName;
            } catch (\Exception $e) {
                $this->Flash->error(__('Error al subir la imagen: ' . $e->getMessage()));
                $this->set(compact('blogCategory'));
                return;
            }
        } else {
            // Si no hay imagen válida, eliminar el campo para evitar error
            unset($data['image']);
        }

        $blogCategory = $this->BlogCategories->patchEntity($blogCategory, $data);
        if ($this->BlogCategories->save($blogCategory)) {
            $this->Flash->success(__('Categoría guardada.'));
            return $this->redirect(['action' => 'index']);
        }

        $this->Flash->error(__('Error al guardar.'));
    }

    $this->set(compact('blogCategory'));
}


public function edit($id = null)
{
    $blogCategory = $this->BlogCategories->get($id);
    if ($this->request->is(['patch', 'post', 'put'])) {
        $data = $this->request->getData();
        $image = $this->request->getData('image');

        // Si se sube una nueva imagen
        if ($image && $image instanceof \Laminas\Diactoros\UploadedFile && $image->getError() === UPLOAD_ERR_OK) {
            // Verificar que no sea un archivo vacío
            if ($image->getSize() > 0) {
                // Crear nombre único para la imagen
                $extension = pathinfo($image->getClientFilename(), PATHINFO_EXTENSION);
                $imageName = time() . '_' . uniqid() . '.' . $extension;
                $imagePath = WWW_ROOT . 'img' . DS . 'categorias' . DS . $imageName;

                // Verificar que la carpeta existe
                $uploadDir = WWW_ROOT . 'img' . DS . 'categorias';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                try {
                    // Mover el archivo
                    $image->moveTo($imagePath);
                    
                    // Eliminar imagen anterior si existe
                    if (!empty($blogCategory->image)) {
                        $oldImagePath = WWW_ROOT . 'img' . DS . $blogCategory->image;
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }
                    
                    $data['image'] = 'categorias/' . $imageName;
                } catch (\Exception $e) {
                    $this->Flash->error(__('Error al subir la imagen: ' . $e->getMessage()));
                    $this->set(compact('blogCategory'));
                    return;
                }
            }
        } else {
            // No se subió imagen nueva, conservar la actual
            unset($data['image']);
        }

        $blogCategory = $this->BlogCategories->patchEntity($blogCategory, $data);

        if ($this->BlogCategories->save($blogCategory)) {
            $this->Flash->success(__('Categoría actualizada.'));
            return $this->redirect(['action' => 'index']);
        }

        $this->Flash->error(__('Error al actualizar.'));
    }

    $this->set(compact('blogCategory'));
}


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->request->getAttribute('identity');
        if (!$user || $user->role !== 'admin') {
            $this->Flash->error(__('No tienes permiso para eliminar categorías.'));
            return $this->redirect($this->referer());
        }

        $blogCategory = $this->BlogCategories->get($id);
        if ($this->BlogCategories->delete($blogCategory)) {
            $this->Flash->success(__('Categoría eliminada.'));
        } else {
            $this->Flash->error(__('Error al eliminar.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pruebaSubcategorias($id = null)
{
    $this->loadModel('BlogCategories');
    $category = $this->BlogCategories->get($id, [
        'contain' => ['BlogSubcategories']
    ]);

    $this->set(compact('category'));
}

}
