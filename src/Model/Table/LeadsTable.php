<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Leads Model
 *
 * @method \App\Model\Entity\Lead newEmptyEntity()
 * @method \App\Model\Entity\Lead newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Lead[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lead get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lead findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Lead patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lead[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lead|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lead saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lead[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lead[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lead[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lead[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LeadsTable extends Table
{
    /**
     * Initialize method
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('leads');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name', 'El nombre es requerido');

        $validator
            ->email('email', false, 'Por favor ingresa un email válido')
            ->requirePresence('email', 'create')
            ->notEmptyString('email', 'El email es requerido');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->allowEmptyString('phone');

        $validator
            ->scalar('message')
            ->requirePresence('message', 'create')
            ->notEmptyString('message', 'El mensaje es requerido')
            ->minLength('message', 10, 'El mensaje debe tener al menos 10 caracteres');

        $validator
            ->scalar('status')
            ->inList('status', ['nuevo', 'contactado', 'convertido', 'descartado'])
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('source')
            ->maxLength('source', 50)
            ->allowEmptyString('source');

        $validator
            ->scalar('ip_address')
            ->maxLength('ip_address', 45)
            ->allowEmptyString('ip_address');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        // Anti-spam: máximo 3 leads por IP por hora
        $rules->add(function ($entity, $options) {
            if ($entity->isNew() && !empty($entity->ip_address)) {
                $count = $this->find()
                    ->where([
                        'ip_address' => $entity->ip_address,
                        'created >' => new \DateTime('-1 hour')
                    ])
                    ->count();
                
                if ($count >= 3) {
                    return 'Has alcanzado el límite de mensajes por hora. Por favor intenta más tarde.';
                }
            }
            return true;
        }, 'spamProtection', [
            'errorField' => 'email',
            'message' => 'Has alcanzado el límite de mensajes por hora.'
        ]);

        return $rules;
    }

    /**
     * Finder para leads nuevos
     */
    public function findNew(Query $query, array $options)
    {
        return $query->where(['status' => 'nuevo']);
    }

    /**
     * Finder para leads de hoy
     */
    public function findToday(Query $query, array $options)
    {
        return $query->where(['DATE(created)' => date('Y-m-d')]);
    }
}