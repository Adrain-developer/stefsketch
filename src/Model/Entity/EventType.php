<?php
declare(strict_types=1);
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

class EventType extends Entity
{
    protected $_accessible = [
        'name' => true,
        'eventoslug' => true,
        'created' => true,
        'modified' => true,
        'blog_posts' => true,
    ];

    protected function _setName(string $name): string
    {
        $this->set('eventoslug', Text::slug(strtolower($name)));
        return $name;
    }
}
