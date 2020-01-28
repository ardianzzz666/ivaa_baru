<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artist Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $fullname
 * @property string $nickname
 * @property int $birth_country
 * @property int $birth_city
 * @property \Cake\I18n\FrozenDate $birth_date
 * @property string $birth_month
 * @property string $birth_year
 * @property bool $not_alive
 * @property string $living_address
 * @property int $living_city
 * @property int $living_country
 * @property int $domicile
 * @property string $email
 * @property string $phone
 * @property string $website
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property int $is_registered
 * @property string $slug
 * @property string $description
 * @property string $obit
 * @property string $description_en
 *
 * @property \App\Model\Entity\User $user
 */
class Artist extends Entity
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
        'user_id' => true,
        'fullname' => true,
        'nickname' => true,
        'birth_country' => true,
        'birth_city' => true,
        'birth_date' => true,
        'birth_month' => true,
        'birth_year' => true,
        'not_alive' => true,
        'living_address' => true,
        'living_city' => true,
        'living_country' => true,
        'domicile' => true,
        'email' => true,
        'phone' => true,
        'website' => true,
        'created' => true,
        'updated' => true,
        'is_registered' => true,
        'slug' => true,
        'description' => true,
        'obit' => true,
        'description_en' => true,
        'user' => true,
    ];
}
