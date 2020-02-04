<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArtVenue Entity
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title
 * @property string $manager_name
 * @property string $manager_phone
 * @property string $manager_email
 * @property string $address_1
 * @property string $address_2
 * @property int $city_id
 * @property int $province_id
 * @property int $country_id
 * @property string $contact_phone
 * @property string $contact_fax
 * @property string $contact_email
 * @property string $website
 * @property int $start_year
 * @property int $end_year
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Province $province
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\EventsDetail[] $events_details
 */
class ArtVenue extends Entity
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
        'sub_title' => true,
        'manager_name' => true,
        'manager_phone' => true,
        'manager_email' => true,
        'address_1' => true,
        'address_2' => true,
        'city_id' => true,
        'province_id' => true,
        'country_id' => true,
        'contact_phone' => true,
        'contact_fax' => true,
        'contact_email' => true,
        'website' => true,
        'start_year' => true,
        'end_year' => true,
        'city' => true,
        'province' => true,
        'country' => true,
        'events_details' => true,
    ];
}
