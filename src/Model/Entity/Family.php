<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Family Entity
 *
 * @property int $id
 * @property string $group
 * @property string $order
 * @property string $fname
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Genus[] $genuses
 */
class Family extends Entity
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
        'group' => true,
        'order' => true,
        'fname' => true,
        'created' => true,
        'modified' => true,
        'genuses' => true
    ];
}
