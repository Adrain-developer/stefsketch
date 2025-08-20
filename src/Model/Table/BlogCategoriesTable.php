<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class BlogCategoriesTable extends Table
{
    public function initialize(array $config): void
{
    parent::initialize($config);

    $this->setTable('blog_categories');
    $this->setDisplayField('name');
    $this->setPrimaryKey('id');

    $this->hasMany('BlogPosts', [
        'foreignKey' => 'blog_category_id',
    ]);

    $this->belongsToMany('BlogSubcategories', [
        'foreignKey' => 'blog_category_id',
        'targetForeignKey' => 'blog_subcategory_id',
        'joinTable' => 'blog_category_subcategories',
        'through' => 'BlogCategorySubcategories',
        'dependent' => true,
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
