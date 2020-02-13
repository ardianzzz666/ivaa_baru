<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArtworksFile Entity
 *
 * @property int $id
 * @property int $artwork_id
 * @property string $caption
 * @property string $file_type
 * @property string $part_clip
 * @property string $file_name
 * @property int $status
 *
 * @property \App\Model\Entity\Artwork $artwork
 */
class ArtworksFile extends Entity
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
        'artwork_id' => true,
        'caption' => true,
        'file_type' => true,
        'part_clip' => true,
        'file_name' => true,
        'status' => true,
        'artwork' => true,
    ];
}
