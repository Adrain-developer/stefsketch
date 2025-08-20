<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class BlogTagsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('blog_tags');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        $this->belongsToMany('BlogPosts', [
            'foreignKey' => 'blog_tag_id',
            'targetForeignKey' => 'blog_post_id',
            'joinTable' => 'blog_posts_blog_tags',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->notEmptyString('name', 'El nombre es obligatorio');
        return $validator;
    }
}
