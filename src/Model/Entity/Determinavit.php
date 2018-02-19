<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Determinavit Entity
 *
 * @property int $id
 * @property int $collection_id
 * @property int $species_id
 * @property string $curdate
 * @property int $people_view_id
 * @property int $detday
 * @property int $detmonth
 * @property int $detyear
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Collection $collection
 * @property \App\Model\Entity\Species $species
 * @property \App\Model\Entity\PeopleView $people_view
 */
class Determinavit extends Entity
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
        'collection_id' => true,
        'species_id' => true,
        'curdate' => true,
        'people_view_id' => true,
        'detday' => true,
        'detmonth' => true,
        'detyear' => true,
        'created' => true,
        'modified' => true,
        'collection' => true,
        'species' => true,
        'people_view' => true
    ];
}
