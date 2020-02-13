<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArtistsCollective Entity
 *
 * @property int $id
 * @property int $artist_id
 * @property int $collective_id
 *
 * @property \App\Model\Entity\Artist $artist
 * @property \App\Model\Entity\Collective $collective
 */
class ArtistsCollective extends Entity
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
        'artist_id' => true,
        'collective_id' => true,
        'artist' => true,
        'collective' => true,
    ];
}
