<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Http\Exception\UnauthorizedException;
use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\Queue\QueueManager;
use Cake\Log\Log;

/**
 * Users Controller
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Initialize method
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin_blog_layout');

        $this->loadComponent('Authentication.Authentication');
        $this->Authentication->allowUnauthenticated(['subscribe']);

        $this->loadComponent('Flash');
    }

    /**
     * Before filter method
     */
public function beforeFilter(EventInterface $event)
{
    parent::beforeFilter($event);

    $this->Authentication->addUnauthenticatedActions(['login', 'addAuthor']);

    $user = $this->request->getAttribute('identity');
    $action = $this->request->getParam('action');

    $publicActions = ['login', 'addAuthor' , 'subscribe', 'logout'];

    // Validar que la acción esté definida
    if ($action === null) {
        // Por seguridad, redirigir a acceso denegado si no hay acción válida
        return $this->redirect(['controller' => 'Error', 'action' => 'noAccess']);
    }

    // Si no está logueado y no es una acción pública
    if (!$user && !in_array($action, $publicActions)) {
        return $this->redirect(['controller' => 'Error', 'action' => 'noAccess']);
    }

    // Si está logueado pero no es admin y no es acción pública
    if ($user && $user->role !== 'admin' && !in_array($action, $publicActions)) {
        return $this->redirect(['controller' => 'Error', 'action' => 'noAccess']);
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
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
public function add()
{
    $user = $this->Users->newEmptyEntity();
    if ($this->request->is('post')) {
        $user = $this->Users->patchEntity($user, $this->request->getData());

        // Encriptar contraseña
        if (!empty($user->password)) {
            $user->password = (new DefaultPasswordHasher())->hash($user->password);
        }

        if ($this->Users->save($user)) {
            $this->Flash->success(__('El usuario ha sido guardado.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('No se pudo guardar el usuario.'));
    }
    $blogAuthors = $this->Users->BlogAuthors->find('list', ['limit' => 200]);
    $this->set(compact('user', 'blogAuthors'));
}


/**
 * Add Author method
 */
public function addAuthor()
{
    $this->loadModel('BlogAuthors');
    $user = $this->Users->newEmptyEntity();
    $author = $this->BlogAuthors->newEmptyEntity();

    if ($this->request->is('post')) {
        $data = $this->request->getData();

        $image = $this->request->getData('img');
        $imagePath = null;
        if ($image instanceof \Laminas\Diactoros\UploadedFile && $image->getError() === UPLOAD_ERR_OK && $image->getSize() > 0) {
            $extension = pathinfo($image->getClientFilename(), PATHINFO_EXTENSION);
            $imageName = time() . '_' . uniqid() . '.' . $extension;
            $uploadDir = WWW_ROOT . 'img' . DS . 'autores';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $imagePath = $uploadDir . DS . $imageName;
            try {
                $image->moveTo($imagePath);
                $imagePath = 'autores/' . $imageName;
            } catch (\Exception $e) {
                $this->Flash->error(__('Error al subir imagen: ' . $e->getMessage()));
                $this->set(compact('user', 'author'));
                return;
            }
        } elseif ($image->getError() !== UPLOAD_ERR_NO_FILE) {
            $this->Flash->error(__('Error al procesar la imagen.'));
            $this->set(compact('user', 'author'));
            return;
        }

        $authorData = [
            'name' => $data['name'] ?? '',
            'email' => $data['email'] ?? '',
            'bio' => $data['bio'] ?? '',
            'facebook' => $data['facebook'] ?? '',
            'instagram' => $data['instagram'] ?? '',
            'img' => $imagePath,
        ];
        $author = $this->BlogAuthors->patchEntity($author, $authorData);
        if ($this->BlogAuthors->save($author)) {
            $userData = [
                'email' => $author->email,
                'password' => $data['password'] ?? '',
                'role' => 'author',
                'blog_author_id' => $author->id,
            ];
            $user = $this->Users->patchEntity($user, $userData);
            if ($this->Users->save($user)) {
                try {
                    $prefsTable = $this->fetchTable('NotificationPreferences');
                    $pref = $prefsTable->newEntity([
                        'user_id' => $user->id,
                        'channel' => 'email',
                        'type' => 'new_post',
                        'enabled' => true,
                        'frequency' => 'immediate',
                        'created' => \Cake\I18n\FrozenTime::now(),
                        'modified' => \Cake\I18n\FrozenTime::now()
                    ]);
                    $prefsTable->save($pref);

                    $prefInApp = $prefsTable->newEntity([
                        'user_id' => $user->id,
                        'channel' => 'in_app',
                        'type' => 'new_post',
                        'enabled' => true,
                        'frequency' => 'immediate',
                        'created' => \Cake\I18n\FrozenTime::now(),
                        'modified' => \Cake\I18n\FrozenTime::now()
                    ]);
                    $prefsTable->save($prefInApp);
                } catch (\Exception $e) {
                    \Cake\Log\Log::error('Error al guardar preferencias para autor: ' . $e->getMessage(), ['scope' => 'subscription']);
                }
                $this->Flash->success(__('Autor registrado correctamente.'));
                return $this->redirect(['controller' => 'BlogPosts', 'action' => 'index']);
            } else {
                $this->BlogAuthors->delete($author);
                $this->Flash->error(__('Error al guardar el usuario.'));
            }
        } else {
            $this->Flash->error(__('No se pudo guardar el autor.'));
        }
    }

    $this->set(compact('user', 'author'));
}


public function addAdmin()
{
    $user = $this->Users->newEmptyEntity();
    if ($this->request->is('post')) {
        $user = $this->Users->patchEntity($user, $this->request->getData());
        $user->role = 'admin';
        $user->blog_author_id = null;
        if ($this->Users->save($user)) {
            $this->Flash->success(__('El administrador fue creado.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('No se pudo crear el administrador.'));
    }
    $this->set(compact('user'));
    $this->render('add_admin');
}

 /**
     * POST /users/subscribe
     * Subscribe a visitor by email, creating a user with role 'visitor'
     */
public function subscribe()
{
    $this->request->allowMethod(['post']);
    $email = $this->request->getData('email');

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $this->Flash->error('Correo electrónico inválido');
        return $this->redirect($this->referer());
    }

    $usersTable = $this->fetchTable('Users');
    $existingUser = $usersTable->find()
        ->where(['email' => $email])
        ->first();

    if ($existingUser) {
        $this->Flash->error('Este correo ya está registrado');
        return $this->redirect($this->referer());
    }

    $user = $usersTable->newEntity([
        'email' => $email,
        'role' => 'visitor',
        'password' => '',
        'blog_author_id' => null,
        'created' => \Cake\I18n\FrozenTime::now(),
        'modified' => \Cake\I18n\FrozenTime::now()
    ], [
        'validate' => 'subscribe'
    ]);

    if ($usersTable->save($user)) {
        try {
            // 1. Crear preferencias de notificación para el visitor
            $prefsTable = $this->fetchTable('NotificationPreferences');
            $prefEmail = $prefsTable->newEntity([
                'user_id' => $user->id,
                'channel' => 'email',
                'type' => 'new_post',
                'enabled' => true,
                'frequency' => 'immediate',
                'created' => \Cake\I18n\FrozenTime::now(),
                'modified' => \Cake\I18n\FrozenTime::now()
            ]);
            $prefsTable->save($prefEmail);

            // 2. ENCOLAR correo de bienvenida (ASÍNCRONO)
            QueueManager::push(
                \App\Queue\Job\EmailNotificationJob::class,
                [
                    'email' => $email,
                    'subject' => 'Bienvenido a nuestro blog',
                    'body' => "¡Hola!\n\nGracias por suscribirte a nuestro blog. A partir de ahora recibirás notificaciones de nuevos posts en este correo.\n\n¡Esperamos que disfrutes nuestro contenido!\n\nSaludos,\nEl equipo del blog"
                ],
                ['queue' => 'default']
            );
            
            Log::write('info', "Correo de bienvenida encolado para {$email}", ['scope' => 'subscription']);
            $this->Flash->success('¡Suscripción exitosa! Te hemos enviado un correo de bienvenida.');
            
        } catch (\Exception $e) {
            Log::write('error', 'Error al guardar preferencias o encolar correo: ' . $e->getMessage(), ['scope' => 'subscription']);
            $this->Flash->success('Usuario registrado, pero hubo un problema con el correo de bienvenida.');
        }
    } else {
        Log::write('error', 'Error al guardar usuario visitor: ' . json_encode($user->getErrors()), ['scope' => 'subscription']);
        $this->Flash->error('Error al procesar la suscripción.');
    }

    return $this->redirect($this->referer());
}


    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
public function edit($id = null)
{
    $user = $this->Users->get($id, [
        'contain' => [],
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
        $user = $this->Users->patchEntity($user, $this->request->getData());

        // Encriptar si se modificó la contraseña
        if (!empty($user->password)) {
            $user->password = (new DefaultPasswordHasher())->hash($user->password);
        } else {
            unset($user->password); // No guardar campo vacío
        }

        if ($this->Users->save($user)) {
            $this->Flash->success(__('El usuario ha sido actualizado.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('No se pudo actualizar el usuario.'));
    }
    $blogAuthors = $this->Users->BlogAuthors->find('list', ['limit' => 200]);
    $this->set(compact('user', 'blogAuthors'));
}

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Login method
     */
    public function login()
    {
        $this->request->allowMethod(['get', 'post']);

        $result = $this->Authentication->getResult();

        if ($result && $result->isValid()) {
            // Redirigir al destino original o al dashboard
            $target = $this->request->getQuery('redirect', ['controller' => 'BlogPosts', 'action' => 'index']);
            return $this->redirect($target);
        }

        // Mostrar error si login inválido
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Correo o contraseña incorrectos.'));
        }
    }

    /**
     * Logout method
     */
    public function logout()
    {
        $result = $this->Authentication->getResult();
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }
}