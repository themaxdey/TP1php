<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $asset_id
 * @property int $company_id
 * @property string $type
 * @property \Cake\I18n\FrozenDate $date
 * @property float $invoice
 * @property string $description
 * @property bool $efface
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Asset $asset
 * @property \App\Model\Entity\Company $company
 */
class Event extends Entity
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
        'user_id' => true,
        'asset_id' => true,
        'company_id' => true,
        'type' => true,
        'date' => true,
        'invoice' => true,
        'description' => true,
        'efface' => true,
        'user' => true,
        'asset' => true,
        'company' => true
    ];
}
