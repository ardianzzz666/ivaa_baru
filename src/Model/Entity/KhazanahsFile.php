<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * KhazanahsFile Entity
 *
 * @property int $id
 * @property int $khazanah_id
 * @property string $caption
 * @property string $file_type
 * @property string $part_clip
 * @property string $file_name
 * @property string $url
 * @property int $status
 *
 * @property \App\Model\Entity\Khazanah $khazanah
 */
class KhazanahsFile extends Entity
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
        'khazanah_id' => true,
        'caption' => true,
        'file_type' => true,
        'part_clip' => true,
        'file_name' => true,
        'url' => true,
        'status' => true,
        'khazanah' => true,
    ];
}
