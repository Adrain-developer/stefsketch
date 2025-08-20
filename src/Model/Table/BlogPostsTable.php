<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;

class BlogPostsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('blog_posts');
        $this->setPrimaryKey('id');
        $this->setDisplayField('title');

        $this->belongsTo('BlogAuthors');
        $this->belongsTo('EventTypes');
        $this->belongsTo('BlogCategories');

        $this->belongsToMany('BlogTags', [
            'foreignKey' => 'blog_post_id',
            'targetForeignKey' => 'blog_tag_id',
            'joinTable' => 'blog_posts_blog_tags',
            'saveStrategy' => 'replace'
        ]);

        $this->belongsToMany('BlogSubcategories', [
            'foreignKey' => 'blog_post_id',
            'targetForeignKey' => 'blog_subcategory_id',
            'joinTable' => 'blog_posts_blog_subcategories',
            'saveStrategy' => 'replace'
        ]);

        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('title')
            ->allowEmptyString('body'); // ahora body es opcional

        return $validator; 
    }

    /**
     * Elimina notificaciones huérfanas cuando se borra un post
     */
    public function afterDelete($event, $entity, $options)
    {
        $notificationsTable = TableRegistry::getTableLocator()->get('Notifications');

        $notificationsTable->deleteAll([
            'target_type' => 'blog_post',
            'target_id' => $entity->id
        ]);
    }

    public function getPostUrl($post)
{
    return Router::url([
        'controller' => 'Blog',
        'action' => 'view',
        'eventoslug' => $post->event_type->eventoslug ?? 'sin-evento',
        'slug' => $post->slug,
        'prefix' => false,
        'plugin' => false
    ], true); // true = URL absoluta, false si la quieres relativa
}
}

