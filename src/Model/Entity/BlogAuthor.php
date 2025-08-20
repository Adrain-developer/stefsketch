<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class BlogAuthor extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
