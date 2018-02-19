<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Species Entity
 *
 * @property int $id
 * @property int $genus_id
 * @property int $species_id
 * @property string $taxstat
 * @property string $syncat
 * @property string $sp1
 * @property string $rank1
 * @property string $sp2
 * @property string $rank2
 * @property string $sp3
 * @property string $citation
 * @property int $year_sp
 * @property string $cites
 * @property string $accname
 * @property string $fullname
 * @property int $spectotal
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Genus $genus
 * @property \App\Model\Entity\Species[] $species
 * @property \App\Model\Entity\Common[] $commons
 * @property \App\Model\Entity\Determinavit[] $determinavits
 * @property \App\Model\Entity\Inventory[] $inventories
 */
class Species extends Entity
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
        'genus_id' => true,
        'species_id' => true,
        'taxstat' => true,
        'syncat' => true,
        'sp1' => true,
        'rank1' => true,
        'sp2' => true,
        'rank2' => true,
        'sp3' => true,
        'citation' => true,
        'year_sp' => true,
        'cites' => true,
        'accname' => true,
        'fullname' => true,
        'spectotal' => true,
        'created' => true,
        'modified' => true,
        'genus' => true,
        'species' => true,
        'commons' => true,
        'determinavits' => true,
        'inventories' => true
    ];
}
