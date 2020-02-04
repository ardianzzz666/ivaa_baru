<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \App\Model\Table\EventOrganizersTable&\Cake\ORM\Association\BelongsTo $EventOrganizers
 * @property \App\Model\Table\EventsCatsTable&\Cake\ORM\Association\HasMany $EventsCats
 * @property \App\Model\Table\EventsDetailsTable&\Cake\ORM\Association\HasMany $EventsDetails
 * @property \App\Model\Table\EventsParticipantsTable&\Cake\ORM\Association\HasMany $EventsParticipants
 * @property \App\Model\Table\ArtworksTable&\Cake\ORM\Association\BelongsToMany $Artworks
 * @property \App\Model\Table\KhazanahsTable&\Cake\ORM\Association\BelongsToMany $Khazanahs
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null, $options = [])
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('EventOrganizers', [
            'foreignKey' => 'event_orgnaizer_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('EventsDetails', [
            'foreignKey' => 'event_id',
        ]);
        $this->hasMany('EventsParticipants', [
            'foreignKey' => 'event_id',
        ]);
        $this->belongsToMany('Artworks', [
            'foreignKey' => 'event_id',
            'targetForeignKey' => 'artwork_id',
            'joinTable' => 'artworks_events',
        ]);
        $this->belongsToMany('Khazanahs', [
            'foreignKey' => 'event_id',
            'targetForeignKey' => 'khazanah_id',
            'joinTable' => 'events_khazanahs',
        ]);

        $this->belongsToMany('EventsCategories', [
            'foreignKey' => 'event_id',
            'targetForeignKey' => 'event_category_id',
            'joinTable' => 'events_cats',
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

        $validator
            ->scalar('subtitle')
            ->maxLength('subtitle', 255)
            ->requirePresence('subtitle', 'create')
            ->notEmptyString('subtitle');

        $validator
            ->scalar('event_time')
            ->maxLength('event_time', 100)
            ->requirePresence('event_time', 'create')
            ->notEmptyString('event_time');

        $validator
            ->scalar('description_en')
            ->requirePresence('description_en', 'create')
            ->notEmptyString('description_en');

        $validator
            ->scalar('description_ind')
            ->requirePresence('description_ind', 'create')
            ->notEmptyString('description_ind');

        $validator
            ->dateTime('published_on')
            ->requirePresence('published_on', 'create')
            ->notEmptyDateTime('published_on');

        $validator
            ->integer('image_count')
            ->requirePresence('image_count', 'create')
            ->notEmptyFile('image_count');

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
        $rules->add($rules->existsIn(['event_orgnaizer_id'], 'EventOrganizers'));

        return $rules;
    }
}
