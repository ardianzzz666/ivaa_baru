<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string $event_time
 * @property string $description_en
 * @property string $description_ind
 * @property \Cake\I18n\FrozenTime $published_on
 * @property int $event_orgnaizer_id
 * @property int $image_count
 *
 * @property \App\Model\Entity\EventOrganizer $event_organizer
 * @property \App\Model\Entity\EventsCat[] $events_cats
 * @property \App\Model\Entity\EventsDetail[] $events_details
 * @property \App\Model\Entity\EventsParticipant[] $events_participants
 * @property \App\Model\Entity\Artwork[] $artworks
 * @property \App\Model\Entity\Khazanah[] $khazanahs
 */
class Event extends Entity
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
        'subtitle' => true,
        'event_time' => true,
        'description_en' => true,
        'description_ind' => true,
        'published_on' => true,
        'event_orgnaizer_id' => true,
        'image_count' => true,
        'event_organizer' => true,
        'events_cats' => true,
        'events_details' => true,
        'events_participants' => true,
        'artworks' => true,
        'khazanahs' => true,
    ];
}
