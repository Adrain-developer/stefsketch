<?php
declare(strict_types=1);
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BlogBanner Entity
 *
 * @property int $id
 * @property string $banner_key
 * @property string|null $name
 * @property string|null $layer1
 * @property string|null $layer2
 * @property string|null $layer3
 * @property string|null $heading
 * @property string|null $paragraph
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class BlogBanner extends Entity
{
    protected $_accessible = [
        'banner_key' => true,
        'name' => true,
        'layer1' => true,
        'layer2' => true,
        'layer3' => true,
        'heading' => true,
        'paragraph' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Indica si la capa tiene una imagen personalizada subida por el admin.
     */
    public function hasCustomLayer(string $layer): bool
    {
        return !empty($this->get($layer));
    }
}
