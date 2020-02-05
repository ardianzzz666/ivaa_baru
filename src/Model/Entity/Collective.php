<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Collective Entity
 *
 * @property int $id
 * @property string $name
 * @property int $domicile_id
 * @property string $slug
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $description
 * @property string $description_en
 *
 * @property \App\Model\Entity\Domicile $domicile
 * @property \App\Model\Entity\Artist[] $artists
 */
class Collective extends Entity
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
        'name' => true,
        'domicile_id' => true,
        'slug' => true,
        'created' => true,
        'modified' => true,
        'description' => true,
        'description_en' => true,
        'domicile' => true,
        'artists' => true,
    ];
}
