<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Collection Entity
 *
 * @property int $id
 * @property string $dbid
 * @property string $type
 * @property string $category
 * @property int $images
 * @property int $specimens
 * @property string $barcode
 * @property int $collector_id
 * @property string $accession
 * @property string $prefix
 * @property int $num
 * @property string $suffixe
 * @property string $addcol
 * @property string $dups
 * @property int $day_col
 * @property int $month_col
 * @property int $year_col
 * @property string $collected
 * @property string $detby
 * @property int $detday
 * @property int $detmonth
 * @property int $detyear
 * @property string $detdate
 * @property bool $flcode
 * @property bool $frcode
 * @property float $dbh
 * @property int $ht
 * @property bool $cultivated
 * @property bool $phenocult
 * @property float $latitude
 * @property string $ns
 * @property float $longitude
 * @property string $ew
 * @property string $latlong
 * @property float $latdec
 * @property float $longdec
 * @property int $alt
 * @property int $altmax
 * @property string $altunit
 * @property string $vernacular
 * @property string $language
 * @property string $genus
 * @property string $sp1
 * @property string $author1
 * @property string $rank1
 * @property string $sp2
 * @property string $author2
 * @property string $rank2
 * @property string $sp3
 * @property string $author3
 * @property int $pview
 * @property int $gazcode
 * @property int $facode
 * @property int $gecode
 * @property int $spnumber
 * @property int $spsynid
 * @property int $spcodetype
 * @property int $detbycode
 * @property int $conumber
 * @property string $homestat
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Collector $collector
 * @property \App\Model\Entity\Determinavit[] $determinavits
 * @property \App\Model\Entity\LognoteHabitat[] $lognote_habitats
 * @property \App\Model\Entity\PlantDescription[] $plant_descriptions
 */
class Collection extends Entity
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
        'dbid' => true,
        'type' => true,
        'category' => true,
        'images' => true,
        'specimens' => true,
        'barcode' => true,
        'collector' => true,
        'collector_id' => true,
        'accession' => true,
        'prefix' => true,
        'num' => true,
        'suffixe' => true,
        'addcol' => true,
        'dups' => true,
        'day_col' => true,
        'month_col' => true,
        'year_col' => true,
        'collected' => true,
        'detby' => true,
        'detday' => true,
        'detmonth' => true,
        'detyear' => true,
        'detdate' => true,
        'flcode' => true,
        'frcode' => true,
        'dbh' => true,
        'ht' => true,
        'cultivated' => true,
        'phenocult' => true,
        'latitude' => true,
        'ns' => true,
        'longitude' => true,
        'ew' => true,
        'latlong' => true,
        'latdec' => true,
        'longdec' => true,
        'alt' => true,
        'altmax' => true,
        'altunit' => true,
        'vernacular' => true,
        'language' => true,
        'genus' => true,
        'sp1' => true,
        'author1' => true,
        'rank1' => true,
        'sp2' => true,
        'author2' => true,
        'rank2' => true,
        'sp3' => true,
        'author3' => true,
        'pview' => true,
        'gazcode' => true,
        'facode' => true,
        'gecode' => true,
        'spnumber' => true,
        'spsynid' => true,
        'spcodetype' => true,
        'detbycode' => true,
        'conumber' => true,
        'homestat' => true,
        'created' => true,
        'modified' => true,
        'determinavits' => true,
        'lognote_habitats' => true,
        'plant_descriptions' => true
    ];
}
