<?php
namespace App\Controller;

class BlogTagsController extends AppController
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
            return $this->redirect('/Error/no_access');
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
        $blogTags = $this->paginate($this->BlogTags);
        $this->set(compact('blogTags'));
    }

    public function view($id = null)
    {
        $blogTag = $this->BlogTags->get($id, [
            'contain' => ['BlogPosts'],
        ]);
        $this->set(compact('blogTag'));
    }

    public function add()
    {
        $blogTag = $this->BlogTags->newEmptyEntity();
        if ($this->request->is('post')) {
            $blogTag = $this->BlogTags->patchEntity($blogTag, $this->request->getData());
            if ($this->BlogTags->save($blogTag)) {
                $this->Flash->success(__('Etiqueta guardada.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al guardar.'));
        }
        $this->set(compact('blogTag'));
    }

    public function edit($id = null)
    {
        $blogTag = $this->BlogTags->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blogTag = $this->BlogTags->patchEntity($blogTag, $this->request->getData());
            if ($this->BlogTags->save($blogTag)) {
                $this->Flash->success(__('Etiqueta actualizada.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al actualizar.'));
        }
        $this->set(compact('blogTag'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blogTag = $this->BlogTags->get($id);
        if ($this->BlogTags->delete($blogTag)) {
            $this->Flash->success(__('Etiqueta eliminada.'));
        } else {
            $this->Flash->error(__('Error al eliminar.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
