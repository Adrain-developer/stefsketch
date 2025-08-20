<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\BlogAuthorsTable&\Cake\ORM\Association\BelongsTo $BlogAuthors
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('BlogAuthors', [
            'foreignKey' => 'blog_author_id',
        ]);
        $this->hasMany('NotificationPreferences');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('blog_author_id')
            ->allowEmptyString('blog_author_id');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'Correo ya registrado']);

        $validator
            ->scalar('role')
            ->inList('role', ['admin', 'author', 'visitor'], 'Rol inválido')
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->minLength('password', 6)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        return $validator;
    }

    public function validationSubscribe(Validator $validator): Validator
    {
        $validator
            ->email('email')
            ->maxLength('email', 255)
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'Correo ya registrado']);

        $validator
            ->scalar('role')
            ->inList('role', ['visitor'], 'Rol inválido para suscripción')
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        // No requerir password para suscripción
        $validator
            ->allowEmptyString('password');

        // Permitir blog_author_id nulo
        $validator
            ->allowEmptyString('blog_author_id');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        // Solo requerir blog_author_id para roles 'author'
        $rules->add(
            function ($entity, $options) {
                if ($entity->role === 'author' && !$entity->blog_author_id) {
                    return false;
                }
                return true;
            },
            'validBlogAuthor',
            [
                'errorField' => 'blog_author_id',
                'message' => 'Se requiere un autor válido para el rol author'
            ]
        );

        return $rules;
    }
}
