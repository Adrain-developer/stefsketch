<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BlogSubcategories Model
 *
 * @property \App\Model\Table\BlogPostsTable&\Cake\ORM\Association\BelongsToMany $BlogPosts
 *
 * @method \App\Model\Entity\BlogSubcategory newEmptyEntity()
 * @method \App\Model\Entity\BlogSubcategory newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BlogSubcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BlogSubcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\BlogSubcategory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BlogSubcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BlogSubcategory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BlogSubcategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BlogSubcategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BlogSubcategory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BlogSubcategory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BlogSubcategory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BlogSubcategory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BlogSubcategoriesTable extends Table
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

    $this->setTable('blog_subcategories');
    $this->setDisplayField('name');
    $this->setPrimaryKey('id');

    $this->addBehavior('Timestamp');

    $this->belongsToMany('BlogCategories', [
        'foreignKey' => 'blog_subcategory_id',
        'targetForeignKey' => 'blog_category_id',
        'joinTable' => 'blog_category_subcategories',
        'through' => 'BlogCategorySubcategories',
        'dependent' => true,
    ]);

    $this->belongsToMany('BlogPosts', [
        'foreignKey' => 'blog_subcategory_id',
        'targetForeignKey' => 'blog_post_id',
        'joinTable' => 'blog_posts_blog_subcategories',
    ]);
}

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
