<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventsDetails Model
 *
 * @property \App\Model\Table\EventsTable&\Cake\ORM\Association\BelongsTo $Events
 * @property \App\Model\Table\ArtVenuesTable&\Cake\ORM\Association\BelongsTo $ArtVenues
 *
 * @method \App\Model\Entity\EventsDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\EventsDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EventsDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EventsDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventsDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventsDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EventsDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EventsDetail findOrCreate($search, callable $callback = null, $options = [])
 */
class EventsDetailsTable extends Table
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

        $this->setTable('events_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Events', [
            'foreignKey' => 'event_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ArtVenues', [
            'foreignKey' => 'art_venue_id',
            'joinType' => 'INNER',
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
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmptyDate('start_date');

        $validator
            ->date('end_date')
            ->requirePresence('end_date', 'create')
            ->notEmptyDate('end_date');

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
        $rules->add($rules->existsIn(['event_id'], 'Events'));
        $rules->add($rules->existsIn(['art_venue_id'], 'ArtVenues'));

        return $rules;
    }
}
