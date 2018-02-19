<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Common Entity
 *
 * @property int $id
 * @property int $species_id
 * @property string $name
 * @property string $language
 * @property string $dialect
 * @property string $meaning
 * @property \Cake\I18n\FrozenTime $created
 * @property string $modified
 *
 * @property \App\Model\Entity\Species $species
 */
class Common extends Entity
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
        'name' => true,
        'language' => true,
        'dialect' => true,
        'meaning' => true,
        'created' => true,
        'modified' => true,
        'species' => true
    ];
}
