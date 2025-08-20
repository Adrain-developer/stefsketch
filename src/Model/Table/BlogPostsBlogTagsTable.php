<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class BlogPostsBlogTagsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('blog_posts_blog_tags'); // nombre exacto de la tabla
        $this->setPrimaryKey(['blog_post_id', 'blog_tag_id']); // clave compuesta
    }
}
