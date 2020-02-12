<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Khazanah Entity
 *
 * @property int $id
 * @property int $artist_id
 * @property string $title
 * @property string $subtitle
 * @property int $published_date
 * @property string $published_month
 * @property int $published_year
 * @property int $published_to_year
 * @property string $excerpt_en
 * @property string $excerpt_ind
 * @property bool $published_date_unknown
 * @property int $status
 * @property int $khazanah_category_id
 * @property int $sorting
 *
 * @property \App\Model\Entity\Artist $artist
 * @property \App\Model\Entity\KhazanahCategory $khazanah_category
 * @property \App\Model\Entity\KhazanahsFile[] $khazanahs_files
 * @property \App\Model\Entity\KhazanahsParticipant[] $khazanahs_participants
 * @property \App\Model\Entity\Artwork[] $artworks
 * @property \App\Model\Entity\Event[] $events
 */
class Khazanah extends Entity
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
        'title' => true,
        'subtitle' => true,
        'published_date' => true,
        'published_month' => true,
        'published_year' => true,
        'published_to_year' => true,
        'excerpt_en' => true,
        'excerpt_ind' => true,
        'published_date_unknown' => true,
        'status' => true,
        'khazanah_category_id' => true,
        'sorting' => true,
        'artist' => true,
        'khazanah_category' => true,
        'khazanahs_files' => true,
        'khazanahs_participants' => true,
        'artworks' => true,
        'events' => true,
    ];
}
