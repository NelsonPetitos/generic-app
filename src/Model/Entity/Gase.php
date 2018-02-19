<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gase Entity
 *
 * @property int $id
 * @property int $country_id
 * @property string $major
 * @property string $minor
 * @property string $locality
 * @property float $lat
 * @property string $ns
 * @property float $long
 * @property string $ew
 * @property int $spectotal
 * @property int $gentotal
 * @property int $sptotal
 * @property float $clatmax
 * @property float $clongmin
 * @property float $clongmax
 * @property string $fullgaz
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Country $country
 */
class Gase extends Entity
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
        'country_id' => true,
        'major' => true,
        'minor' => true,
        'locality' => true,
        'lat' => true,
        'ns' => true,
        'long' => true,
        'ew' => true,
        'spectotal' => true,
        'gentotal' => true,
        'sptotal' => true,
        'clatmax' => true,
        'clongmin' => true,
        'clongmax' => true,
        'fullgaz' => true,
        'created' => true,
        'modified' => true,
        'country' => true
    ];
}
