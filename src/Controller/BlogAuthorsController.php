<?php
namespace App\Controller;

class BlogAuthorsController extends AppController
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
        $adminOnlyActions = ['index', 'add', 'edit', 'delete'];

        if (in_array($this->request->getParam('action'), $adminOnlyActions)) {
            if (!$user || $user->role !== 'admin') {
                $this->Flash->error(__('No tienes permisos para acceder a esta sección.'));
                return $this->redirect(['controller' => 'BlogPosts', 'action' => 'index']);
            }
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
        $this->set('blogAuthors', $this->paginate($this->BlogAuthors));
    }

    public function view($id = null)
    {
        $blogAuthor = $this->BlogAuthors->get($id, ['contain' => ['BlogPosts']]);
        $this->set(compact('blogAuthor'));
    }

   public function add()
{
    $blogAuthor = $this->BlogAuthors->newEmptyEntity();
    if ($this->request->is('post')) {
        $data = $this->request->getData();

        // Obtener el archivo de imagen
        $image = $this->request->getData('img');

        // Verificar si se subió una imagen válida
        if ($image && $image instanceof \Laminas\Diactoros\UploadedFile && $image->getError() === UPLOAD_ERR_OK) {
            // Verificar que no sea un archivo vacío
            if ($image->getSize() > 0) {
                // Crear nombre único para la imagen
                $extension = pathinfo($image->getClientFilename(), PATHINFO_EXTENSION);
                $imageName = time() . '_' . uniqid() . '.' . $extension;
                $imagePath = WWW_ROOT . 'img' . DS . 'autores' . DS . $imageName;

                // Verificar que la carpeta existe
                $uploadDir = WWW_ROOT . 'img' . DS . 'autores';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                try {
                    // Mover el archivo
                    $image->moveTo($imagePath);
                    $data['img'] = 'autores/' . $imageName;
                } catch (\Exception $e) {
                    $this->Flash->error(__('Error al subir la imagen: ' . $e->getMessage()));
                    $this->set(compact('blogAuthor'));
                    return;
                }
            }
        }

        $blogAuthor = $this->BlogAuthors->patchEntity($blogAuthor, $data);
        if ($this->BlogAuthors->save($blogAuthor)) {
            $this->Flash->success(__('Autor guardado.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Error al guardar.'));
    }
    $this->set(compact('blogAuthor'));
}

public function edit($id = null)
{
    $blogAuthor = $this->BlogAuthors->get($id);
    if ($this->request->is(['patch', 'post', 'put'])) {
        $data = $this->request->getData();
        $image = $this->request->getData('img');

        // Si se sube una nueva imagen
        if ($image && $image instanceof \Laminas\Diactoros\UploadedFile && $image->getError() === UPLOAD_ERR_OK) {
            // Verificar que no sea un archivo vacío
            if ($image->getSize() > 0) {
                // Crear nombre único para la imagen
                $extension = pathinfo($image->getClientFilename(), PATHINFO_EXTENSION);
                $imageName = time() . '_' . uniqid() . '.' . $extension;
                $imagePath = WWW_ROOT . 'img' . DS . 'autores' . DS . $imageName;

                // Verificar que la carpeta existe
                $uploadDir = WWW_ROOT . 'img' . DS . 'autores';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                try {
                    // Mover el archivo
                    $image->moveTo($imagePath);
                    
                    // Eliminar imagen anterior si existe
                    if (!empty($blogAuthor->img)) {
                        $oldImagePath = WWW_ROOT . 'img' . DS . $blogAuthor->img;
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }
                    
                    $data['img'] = 'autores/' . $imageName;
                } catch (\Exception $e) {
                    $this->Flash->error(__('Error al subir la imagen: ' . $e->getMessage()));
                    $this->set(compact('blogAuthor'));
                    return;
                }
            }
        } else {
            // No se subió imagen nueva, conservar la actual
            unset($data['img']);
        }

        $blogAuthor = $this->BlogAuthors->patchEntity($blogAuthor, $data);

        if ($this->BlogAuthors->save($blogAuthor)) {
            $this->Flash->success(__('Autor actualizado.'));
            return $this->redirect(['action' => 'index']);
        }

        $this->Flash->error(__('Error al actualizar.'));
    }

    $this->set(compact('blogAuthor'));
}


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blogAuthor = $this->BlogAuthors->get($id);
        $this->BlogAuthors->delete($blogAuthor);
        return $this->redirect(['action' => 'index']);
    }
}
