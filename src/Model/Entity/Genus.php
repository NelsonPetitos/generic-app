<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Genus Entity
 *
 * @property int $id
 * @property int $family_id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Family $family
 * @property \App\Model\Entity\Species[] $species
 */
class Genus extends Entity
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
        'family_id' => true,
        'name' => true,
        'created' => true,
        'modified' => true,
        'family' => true,
        'species' => true
    ];
}
