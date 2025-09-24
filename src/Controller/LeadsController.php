<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Leads Controller
 *
 * @property \App\Model\Table\LeadsTable $Leads
 */
class LeadsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin_blog_layout');
    }

public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);

    $user = $this->request->getAttribute('identity');
    $publicActions = ['add']; // Acciones públicas
    $currentAction = $this->request->getParam('action');

    // Si es acción pública, permitir acceso
    if (in_array($currentAction, $publicActions)) {
        return;
    }

    // Para acciones admin, verificar permisos
    if (!$user || !in_array($user->role, ['admin', 'author'])) {
        $this->Flash->error(__('No tienes permisos para acceder a esta sección.'));
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
     * Index method - Panel administrativo
     */
    public function index()
    {
        $query = $this->Leads->find();

        // Filtros
        if ($status = $this->request->getQuery('status')) {
            $query->where(['status' => $status]);
        }

        if ($search = $this->request->getQuery('search')) {
            $query->where([
                'OR' => [
                    'name LIKE' => '%' . $search . '%',
                    'email LIKE' => '%' . $search . '%',
                    'message LIKE' => '%' . $search . '%'
                ]
            ]);
        }

        // Estadísticas para dashboard
        $stats = [
            'total' => $this->Leads->find()->count(),
            'nuevos' => $this->Leads->find('new')->count(),
            'hoy' => $this->Leads->find('today')->count(),
            'convertidos' => $this->Leads->find()->where(['status' => 'convertido'])->count()
        ];

        $leads = $this->paginate($query->orderDesc('created'));
        
        $this->set(compact('leads', 'stats'));
    }

    /**
     * View method
     */
    public function view($id = null)
    {
        $lead = $this->Leads->get($id);
        $this->set(compact('lead'));
    }

    /**
     * Add method - Formulario público
     */
    public function add()
    {
        $lead = $this->Leads->newEmptyEntity();
        
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            
            // Honeypot anti-spam
            if (!empty($data['website'])) {
                $this->Flash->error('Error de seguridad detectado.');
                return $this->redirect($this->referer());
            }
            
            // Agregar datos automáticos
            $data['ip_address'] = $this->request->clientIp();
            $data['source'] = $this->request->getHeaderLine('Referer') ?: 'direct';
            $data['status'] = 'nuevo';
            
            $lead = $this->Leads->patchEntity($lead, $data);
            
            if ($this->Leads->save($lead)) {
                // Enviar notificación por email (opcional)
                try {
                    $this->sendNotificationEmail($lead);
                } catch (\Exception $e) {
                    // Log error but don't fail the lead save
                    \Cake\Log\Log::error('Error enviando email de notificación: ' . $e->getMessage());
                }
                
                $this->Flash->success('¡Gracias por tu mensaje! Te contactaremos pronto.');
                
                // Respuesta AJAX para modal
                if ($this->request->is('ajax')) {
                    $this->viewBuilder()->setLayout('ajax');
                    $this->set('success', true);
                    $this->render('/element/lead_response');
                    return;
                }
                
                return $this->redirect($this->referer() ?: '/');
            }
            
            $this->Flash->error('Hubo un error al enviar tu mensaje. Por favor intenta nuevamente.');
            
            // Respuesta AJAX de error
            if ($this->request->is('ajax')) {
                $this->viewBuilder()->setLayout('ajax');
                $this->set('success', false);
                $this->set('errors', $lead->getErrors());
                $this->render('/element/lead_response');
                return;
            }
        }

        $this->set(compact('lead'));
    }

    /**
     * Edit method - Solo admin
     */
    public function edit($id = null)
    {
        $lead = $this->Leads->get($id);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lead = $this->Leads->patchEntity($lead, $this->request->getData());
            if ($this->Leads->save($lead)) {
                $this->Flash->success('Lead actualizado.');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Error al actualizar.');
        }
        
        $this->set(compact('lead'));
    }

    /**
     * Delete method
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lead = $this->Leads->get($id);
        
        if ($this->Leads->delete($lead)) {
            $this->Flash->success('Lead eliminado.');
        } else {
            $this->Flash->error('Error al eliminar.');
        }
        
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Update status via AJAX
     */
    public function updateStatus()
    {
        $this->request->allowMethod(['post', 'ajax']);
        $this->viewBuilder()->setLayout('ajax');
        
        $id = $this->request->getData('id');
        $status = $this->request->getData('status');
        
        try {
            $lead = $this->Leads->get($id);
            $lead->status = $status;
            
            if ($this->Leads->save($lead)) {
                $response = [
                    'success' => true,
                    'message' => 'Estado actualizado',
                    'newBadge' => $lead->getStatusBadge()
                ];
            } else {
                $response = ['success' => false, 'message' => 'Error al actualizar'];
            }
        } catch (\Exception $e) {
            $response = ['success' => false, 'message' => 'Lead no encontrado'];
        }
        
        $this->set('response', $response);
        $this->render('/element/ajax_response');
    }

    /**
     * Enviar email de notificación
     */
    private function sendNotificationEmail($lead)
    {
        // Implementar según tu servicio de email
        // Por ejemplo, usando CakePHP Mailer:
        /*
        $mailer = new \Cake\Mailer\Mailer('default');
        $mailer
            ->setFrom(['noreply@tudominio.com' => 'Portafolio Stefsketch'])
            ->setTo('admin@tudominio.com')
            ->setSubject('Nuevo Lead: ' . $lead->name)
            ->deliver("Nuevo mensaje de: {$lead->name} ({$lead->email})\n\nMensaje: {$lead->message}");
        */
    }
}