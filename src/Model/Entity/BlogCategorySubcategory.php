<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class BlogCategorySubcategory extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
