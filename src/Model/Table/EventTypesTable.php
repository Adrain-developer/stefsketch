<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Table;

class EventTypesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('event_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('BlogPosts', [
            'foreignKey' => 'event_type_id',
        ]);
    }
}
