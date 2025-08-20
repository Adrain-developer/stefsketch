<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class BlogPost extends Entity
{

     protected $_accessible = [
    'title' => true,
    'subtitle' => true,
    'slug' => true,
    'banner' => true,
    'gallery' => true,
    'body' => true, // 👈 este es el clave
    'blog_category_id' => true,
    'event_type_id' => true,
    'blog_author_id' => true,
    'blog_tags' => true,
    'created' => true,
    'modified' => true,
    'status' => true,
    'scheduled_at' => true,
    'blog_category' => true,
    'event_type' => true,
    'blog_author' => true,
    'blog_tags' => true,
    'blog_subcategories' => true,
    
    ];
}
