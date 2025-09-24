<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lead Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string $message
 * @property string $status
 * @property string|null $source
 * @property string|null $ip_address
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Lead extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'email' => true,
        'phone' => true,
        'message' => true,
        'status' => true,
        'source' => true,
        'ip_address' => true,
        'created' => true,
        'modified' => true,
    ];
    
    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'ip_address',
    ];
    
    /**
     * Get status badge HTML for admin views
     */
    public function getStatusBadge()
    {
        $badges = [
            'nuevo' => '<span class="badge bg-primary">Nuevo</span>',
            'contactado' => '<span class="badge bg-warning">Contactado</span>',
            'convertido' => '<span class="badge bg-success">Convertido</span>',
            'descartado' => '<span class="badge bg-secondary">Descartado</span>'
        ];
        
        return $badges[$this->status] ?? '<span class="badge bg-light">Desconocido</span>';
    }
}