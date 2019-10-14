<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Asset Entity
 *
 * @property int $id
 * @property int|null $market_id
 * @property string $title
 * @property string|null $slug
 * @property string|null $body
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string $serviceField
 * @property string $type
 *
 * @property \App\Model\Entity\Market $market
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Tag[] $tags
 */
class Asset extends Entity
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
        'market_id' => true,
        'title' => true,
        'slug' => true,
        'body' => true,
        'created' => true,
        'serviceField' => true,
        'type' => true,
        'market' => true,
        'events' => true,
        'tags' => true
    ];
}
