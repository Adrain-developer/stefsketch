<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Exception\ForbiddenException;
use App\Service\NotificationService;
use App\Mailer\NotificationMailer;
use Cake\Datasource\Exception\RecordNotFoundException;

class NotificationsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Authentication.Authentication');  // primero cargas
        //$this->Authentication->allowUnauthenticated(['poll']);  // luego usas
        $this->loadModel('Notifications');
    }

    protected function getService(): NotificationService
    {
        // instantiate with Notifications table and mailer
        return new NotificationService($this->Notifications, new NotificationMailer());
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    $user = $this->request->getAttribute('identity');
    if ($this->request->getParam('action') === 'cleanOrphanNotifications' && (!$user || $user->role !== 'admin')) {
        throw new \Cake\Http\Exception\ForbiddenException('No autorizado');
    }
}

    /**
     * GET /notifications/count
     * Returns unread count (JSON)
     */
    public function count()
    {
        $this->request->allowMethod(['get']);
        $user = $this->request->getAttribute('identity');
        if (!$user) {
            throw new ForbiddenException(__('Unauthorized'));
        }
        $service = $this->getService();
        $count = $service->getUnreadCount($user->id);
        $this->set(compact('count'));
        $this->viewBuilder()->setOption('serialize', ['count']);
    }
/**
 * GET /notifications/check.json
 * Returns recent notifications and unread count
 */
/**
 * GET /notifications/check.json
 * Versión ultra-simple usando campo url directamente
 */
public function check()
{
    $this->request->allowMethod(['get']);
    $user = $this->request->getAttribute('identity');
    if (!$user) {
        throw new ForbiddenException(__('Unauthorized'));
    }
    
    $notifications = $this->Notifications->find()
        ->where(['user_id' => $user->id, 'is_read' => 0])
        ->order(['Notifications.created' => 'DESC'])
        ->limit(12)
        ->all();
    
    $data = array_map(function($n) {
        return [
            'id' => $n->id,
            'title' => $n->title,
            'body' => $n->body,
            'url' => $n->url ?? '#', // 🔥 USAR DIRECTAMENTE EL CAMPO url
            'is_read' => $n->is_read,
            'created' => $n->created->format('Y-m-d H:i:s')
        ];
    }, $notifications->toArray());
    
    $count = $this->Notifications->find()
        ->where(['user_id' => $user->id, 'is_read' => 0])
        ->count();
        
    $this->set(compact('data', 'count'));
    $this->viewBuilder()->setOption('serialize', ['data', 'count']);
}

public function fetch()
{
    // Cambiar de allowMethod(['ajax']) a esto:
    $this->request->allowMethod(['get', 'post']);
    
    // Verificar que sea AJAX si quieres mantener esa restricción
    if (!$this->request->is('ajax')) {
        throw new ForbiddenException('Solo peticiones AJAX permitidas');
    }
    
    $user = $this->request->getAttribute('identity');
    if (!$user) {
        throw new ForbiddenException('No autorizado');
    }
    
    $notifications = $this->Notifications->find()
        ->where(['user_id' => $user->id, 'is_read' => false])
        ->order(['Notifications.created' => 'DESC'])
        ->limit(5)
        ->all();

    // Asegurar respuesta JSON
    $this->viewBuilder()->setClassName('Json');
    $this->set(compact('notifications'));
    $this->viewBuilder()->setOption('serialize', ['notifications']);
}

       // Marcar notificación como leída (por ajax)
public function markRead()
{
    $this->request->allowMethod(['post', 'ajax']);
    $user = $this->request->getAttribute('identity');
    if (!$user) {
        throw new ForbiddenException('No autorizado');
    }

    $data = $this->request->getData();

    if (empty($data['ids']) || !is_array($data['ids'])) {
        throw new \Cake\Http\Exception\BadRequestException('No se enviaron IDs válidos');
    }

    $notifications = $this->Notifications->find()
        ->where(['id IN' => $data['ids'], 'user_id' => $user->id])
        ->all();

    foreach ($notifications as $notification) {
        $notification->is_read = true;
        $this->Notifications->save($notification);
    }

    $this->set(['success' => true, '_serialize' => ['success']]);
}

    /**
     * POST /notifications/mark-all-read
     */
    public function markAllRead()
    {
        $this->request->allowMethod(['post']);
        $user = $this->request->getAttribute('identity');
        if (!$user) {
            throw new ForbiddenException(__('Unauthorized'));
        }
        $service = $this->getService();
        $service->markAllRead($user->id);
        $this->set(['success' => true]);
        $this->viewBuilder()->setOption('serialize', ['success']);
    }

    /**
     * Index page (optional) /notifications
     */
    public function index()
    {
            $user = $this->request->getAttribute('identity');
    if (!$user) {
        throw new ForbiddenException('No autorizado');
    }

        $notifications = $this->Notifications->find()
            ->where(['user_id' => $user->id])
            ->order(['Notifications.created' => 'DESC'])
            ->limit(50)
            ->contain(['Actors'])
            ->all();

        // Cargamos tabla de posts para resolver URLs
        $postsTable = $this->fetchTable('BlogPosts');

        foreach ($notifications as $note) {
            if ($note->target_type === 'blog_post' && $note->target_id) {
            try {
                $post = $postsTable->get($note->target_id, ['contain' => ['EventTypes']]);
                $note->resolved_url = $postsTable->getPostUrl($post);
            } catch (RecordNotFoundException $e) {
                $note->resolved_url = $note->url ?? '#';
            }
        } else {
            $note->resolved_url = $note->url ?? '#';
        }
    }

        $this->set(compact('notifications'));
    }

    public function cleanOrphanNotifications()
{
    // Solo permitir acceso vía método POST para seguridad
    $this->request->allowMethod(['post']);

    $notificationsTable = $this->getTableLocator()->get('Notifications');
    $connection = $notificationsTable->getConnection();

    // Ejecutar query para eliminar notificaciones cuyo target_id no exista en blog_posts
    $sql = "DELETE FROM notifications WHERE target_type = 'blog_post' AND target_id NOT IN (SELECT id FROM blog_posts)";
    $stmt = $connection->prepare($sql);
    $stmt->execute();

    $this->Flash->success('Notificaciones huérfanas eliminadas.');

    // Redirigir a índice de notificaciones o a donde prefieras
    return $this->redirect(['action' => 'index']);
}

/**
 * GET /notifications/public
 * Returns recent published posts for non-authenticated users (JSON)
 */
public function publicNotifications()
{
    $this->request->allowMethod(['get']);
    $postsTable = $this->fetchTable('BlogPosts');
    $posts = $postsTable->find()
        ->where(['BlogPosts.status' => 'activo'])
        ->contain(['EventTypes'])
        ->order(['BlogPosts.created' => 'DESC'])
        ->limit(5)
        ->all();
    
    $data = array_map(function($post) {
        return [
            'id' => $post->id,
            'title' => 'Nuevo post: ' . $post->title,
            'body' => 'Se ha publicado un nuevo post en el blog.',
            'url' => '/blog/' . ($post->event_type->slug ?? 'sin-evento') . '/' . $post->slug,
            'created' => $post->created->format('Y-m-d H:i:s'),
            'is_read' => true // Visitantes no tienen notificaciones personales
        ];
    }, $posts);
    
    $count = count($data);
    $this->set(compact('data', 'count'));
    $this->viewBuilder()->setOption('serialize', ['data', 'count']);
}
    

}
