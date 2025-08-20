<?php
declare(strict_types=1);
namespace App\Controller;

class EventTypesController extends AppController
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
        $this->set('eventTypes', $this->paginate($this->EventTypes));
    }

    public function view($id = null)
    {
        $eventType = $this->EventTypes->get($id, ['contain' => ['BlogPosts']]);
        $this->set(compact('eventType'));
    }

    public function add()
    {
        $eventType = $this->EventTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $eventType = $this->EventTypes->patchEntity($eventType, $this->request->getData());
            if ($this->EventTypes->save($eventType)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('eventType'));
    }

    public function edit($id = null)
    {
        $eventType = $this->EventTypes->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventType = $this->EventTypes->patchEntity($eventType, $this->request->getData());
            if ($this->EventTypes->save($eventType)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('eventType'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventType = $this->EventTypes->get($id);
        $this->EventTypes->delete($eventType);
        return $this->redirect(['action' => 'index']);
    }
}
