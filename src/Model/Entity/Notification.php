<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\I18n\FrozenTime;

class Notification extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    protected function _getCreatedAgo()
    {
        if (!empty($this->created)) {
            return (new FrozenTime($this->created))->i18nFormat('yyyy-MM-dd HH:mm:ss');
        }
        return null;
    }
}
