<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArtVenues Model
 *
 * @property \App\Model\Table\CitiesTable&\Cake\ORM\Association\BelongsTo $Cities
 * @property \App\Model\Table\ProvincesTable&\Cake\ORM\Association\BelongsTo $Provinces
 * @property \App\Model\Table\CountriesTable&\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\EventsDetailsTable&\Cake\ORM\Association\HasMany $EventsDetails
 *
 * @method \App\Model\Entity\ArtVenue get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArtVenue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArtVenue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArtVenue|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArtVenue saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArtVenue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArtVenue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArtVenue findOrCreate($search, callable $callback = null, $options = [])
 */
class ArtVenuesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('art_venues');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Provinces', [
            'foreignKey' => 'province_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('EventsDetails', [
            'foreignKey' => 'art_venue_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        // $validator
        //     ->scalar('sub_title')
        //     ->maxLength('sub_title', 255)
        //     ->requirePresence('sub_title', 'create')
        //     ->notEmptyString('sub_title');

        $validator
            ->scalar('manager_name')
            ->maxLength('manager_name', 255)
            ->requirePresence('manager_name', 'create')
            ->notEmptyString('manager_name');

        $validator
            ->scalar('manager_phone')
            ->maxLength('manager_phone', 255)
            ->requirePresence('manager_phone', 'create')
            ->notEmptyString('manager_phone');

        $validator
            ->scalar('manager_email')
            ->maxLength('manager_email', 255)
            ->requirePresence('manager_email', 'create')
            ->notEmptyString('manager_email');

        $validator
            ->scalar('address_1')
            ->maxLength('address_1', 255)
            ->requirePresence('address_1', 'create')
            ->notEmptyString('address_1');

        $validator
            ->scalar('address_2')
            ->maxLength('address_2', 255)
            ->requirePresence('address_2', 'create')
            ->notEmptyString('address_2');

        $validator
            ->scalar('contact_phone')
            ->maxLength('contact_phone', 255)
            ->requirePresence('contact_phone', 'create')
            ->notEmptyString('contact_phone');

        $validator
            ->scalar('contact_fax')
            ->maxLength('contact_fax', 255)
            ->requirePresence('contact_fax', 'create')
            ->notEmptyString('contact_fax');

        $validator
            ->scalar('contact_email')
            ->maxLength('contact_email', 255)
            ->requirePresence('contact_email', 'create')
            ->notEmptyString('contact_email');

        $validator
            ->scalar('website')
            ->maxLength('website', 255)
            ->requirePresence('website', 'create')
            ->notEmptyString('website');

        $validator
            ->integer('start_year')
            ->requirePresence('start_year', 'create')
            ->notEmptyString('start_year');

        $validator
            ->integer('end_year')
            ->requirePresence('end_year', 'create')
            ->notEmptyString('end_year');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        $rules->add($rules->existsIn(['province_id'], 'Provinces'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
