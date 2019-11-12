<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ville Entity
 *
 * @property int $id
 * @property int $pays_id
 * @property string $name
 *
 * @property \App\Model\Entity\Pay $pay
 * @property \App\Model\Entity\Asset[] $assets
 */
class Ville extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'pays_id' => true,
        'name' => true,
        'pay' => true,
        'assets' => true
    ];
}
