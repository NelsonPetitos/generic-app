<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inventory Entity
 *
 * @property int $id
 * @property int $species_id
 * @property string $zone
 * @property string $date_inventaire
 * @property string $nom_commun
 * @property float $long
 * @property float $lat
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Species $species
 */
class Inventory extends Entity
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
        'species_id' => true,
        'zone' => true,
        'date_inventaire' => true,
        'nom_commun' => true,
        'long' => true,
        'lat' => true,
        'created' => true,
        'modified' => true,
        'species' => true
    ];
}
