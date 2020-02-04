<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artwork Entity
 *
 * @property int $id
 * @property string $title
 * @property int $art_start_year
 * @property int $art_end_year
 * @property string $dimmension_height
 * @property string $dimmension_width
 * @property string $dimmension_length
 * @property int $dimmension_unit
 * @property string $description_en
 * @property string $description_ind
 * @property int $artwork_category_id
 * @property int $status
 * @property int $sorting
 *
 * @property \App\Model\Entity\ArtworksCategory $artworks_category
 * @property \App\Model\Entity\ArtworksCreator[] $artworks_creators
 * @property \App\Model\Entity\ArtworksFile[] $artworks_files
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Khazanah[] $khazanahs
 * @property \App\Model\Entity\Media[] $media
 */
class Artwork extends Entity
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
        'title' => true,
        'art_start_year' => true,
        'art_end_year' => true,
        'dimmension_height' => true,
        'dimmension_width' => true,
        'dimmension_length' => true,
        'dimmension_unit' => true,
        'description_en' => true,
        'description_ind' => true,
        'artwork_category_id' => true,
        'status' => true,
        'sorting' => true,
        'artworks_category' => true,
        'artworks_creators' => true,
        'artworks_files' => true,
        'events' => true,
        'khazanahs' => true,
        'media' => true,
    ];
}
