<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

class BlogCategory extends Entity
{
    protected $_accessible = [
        'name' => true,
        'slug' => true,
        'image' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'blog_posts' => true,
    ];

     protected function _setName(string $name): string
    {
        $this->set('slug', Text::slug(strtolower($name)));
        return $name;
    }
}
