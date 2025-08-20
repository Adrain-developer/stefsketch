<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BlogSubcategories Controller
 *
 * @property \App\Model\Table\BlogSubcategoriesTable $BlogSubcategories
 * @method \App\Model\Entity\BlogSubcategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogSubcategoriesController extends AppController
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
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $blogSubcategories = $this->paginate($this->BlogSubcategories);

        $this->set(compact('blogSubcategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Blog Subcategory id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blogSubcategory = $this->BlogSubcategories->get($id, [
            'contain' => ['BlogPosts'],
        ]);

        $this->set(compact('blogSubcategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
public function add()
{
    $blogSubcategory = $this->BlogSubcategories->newEmptyEntity();
    if ($this->request->is('post')) {
        $blogSubcategory = $this->BlogSubcategories->patchEntity($blogSubcategory, $this->request->getData());
        if ($this->BlogSubcategories->save($blogSubcategory)) {
            $this->Flash->success(__('Subcategoría guardada.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Error al guardar.'));
    }

    $blogCategories = $this->BlogSubcategories->BlogCategories->find('list')->toArray();
    $this->set(compact('blogSubcategory', 'blogCategories'));
}
    /**
     * Edit method
     *
     * @param string|null $id Blog Subcategory id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
   public function edit($id = null)
{
    $blogSubcategory = $this->BlogSubcategories->get($id);
    if ($this->request->is(['patch', 'post', 'put'])) {
        $blogSubcategory = $this->BlogSubcategories->patchEntity($blogSubcategory, $this->request->getData());
        if ($this->BlogSubcategories->save($blogSubcategory)) {
            $this->Flash->success(__('Subcategoría actualizada.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Error al actualizar.'));
    }

    $blogCategories = $this->BlogSubcategories->BlogCategories->find('list')->toArray();
    $this->set(compact('blogSubcategory', 'blogCategories'));
}

    /**
     * Delete method
     *
     * @param string|null $id Blog Subcategory id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blogSubcategory = $this->BlogSubcategories->get($id);
        if ($this->BlogSubcategories->delete($blogSubcategory)) {
            $this->Flash->success(__('The blog subcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The blog subcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
