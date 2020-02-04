<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EventsDetail Entity
 *
 * @property int $id
 * @property int $event_id
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate $end_date
 * @property int $art_venue_id
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\ArtVenue $art_venue
 */
class EventsDetail extends Entity
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
        'event_id' => true,
        'start_date' => true,
        'end_date' => true,
        'art_venue_id' => true,
        'event' => true,
        'art_venue' => true,
    ];
}
