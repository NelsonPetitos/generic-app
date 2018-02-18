<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Country Entity
 *
 * @property int $id
 * @property string $coname
 * @property string $iso2
 * @property string $continent
 * @property string $region
 * @property string $capital
 * @property float $lat
 * @property string $ns
 * @property float $long
 * @property string $ew
 * @property string $llunit
 * @property float $latmin
 * @property float $latmax
 * @property float $longmin
 * @property float $longmax
 * @property float $spectotal
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Gase[] $gases
 */
class Country extends Entity
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
        'coname' => true,
        'iso2' => true,
        'continent' => true,
        'region' => true,
        'capital' => true,
        'lat' => true,
        'ns' => true,
        'long' => true,
        'ew' => true,
        'llunit' => true,
        'latmin' => true,
        'latmax' => true,
        'longmin' => true,
        'longmax' => true,
        'spectotal' => true,
        'created' => true,
        'modified' => true,
        'gases' => true
    ];
}
