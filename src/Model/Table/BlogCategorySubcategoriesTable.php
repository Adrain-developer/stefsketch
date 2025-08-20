<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class BlogCategorySubcategoriesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('blog_category_subcategories');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp'); // Para created y modified automáticos

        $this->belongsTo('BlogCategories', [
            'foreignKey' => 'blog_category_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('BlogSubcategories', [
            'foreignKey' => 'blog_subcategory_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->requirePresence('blog_category_id', 'create')
            ->notEmptyString('blog_category_id');

        $validator
            ->requirePresence('blog_subcategory_id', 'create')
            ->notEmptyString('blog_subcategory_id');

        return $validator;
    }
}

