<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\Event\EventInterface;
use ArrayObject;
use Cake\Mailer\Mailer;
use Cake\ORM\Query\SelectQuery;


class NotificationsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('notifications');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);

        // actor may be a user (nullable)
        $this->belongsTo('Actors', [
            'className' => 'Users',
            'foreignKey' => 'actor_id',
            'propertyName' => 'actor',
            'joinType' => 'LEFT',
        ]);
    }


    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('type')
            ->notEmptyString('title')
            ->integer('user_id')
            ->boolean('is_read');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }

/**
 * Reconstruye la URL de una notificación según su target_type y target_id.
 */
/**
 * Reconstruye la URL de una notificación - VERSION MANUAL
 */
public function resolveUrl($notification): string
{
    // 🔥 USAR DIRECTAMENTE EL CAMPO URL que ya está guardado correctamente
    if (!empty($notification->url)) {
        return $notification->url;
    }
    
    // Solo si no existe el campo url, intentar construir la URL
    if ($notification->target_type === 'blog_post' && $notification->target_id) {
        try {
            $postsTable = $this->getTableLocator()->get('BlogPosts');
            $post = $postsTable->get($notification->target_id, [
                'contain' => ['EventTypes']
            ]);
            
            $eventSlug = $post->event_type->eventoslug ?? 'sin-evento';
            return '/blog/' . $eventSlug . '/' . $post->slug;
            
        } catch (\Exception $e) {
            return '#';
        }
    }
    
    return '#';
}

    
}
