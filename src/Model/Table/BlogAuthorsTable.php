<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class BlogAuthorsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('blog_authors');
        $this->setPrimaryKey('id');
        $this->setDisplayField('name');
        $this->hasMany('BlogPosts');
        $this->hasOne('Users');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('name')
            ->notEmptyString('email')
            ->email('email');
        return $validator;
    }
}
