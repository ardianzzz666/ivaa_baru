<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Khazanahs Model
 *
 * @property \App\Model\Table\ArtistsTable&\Cake\ORM\Association\BelongsTo $Artists
 * @property \App\Model\Table\KhazanahCategoriesTable&\Cake\ORM\Association\BelongsTo $KhazanahCategories
 * @property \App\Model\Table\KhazanahsFilesTable&\Cake\ORM\Association\HasMany $KhazanahsFiles
 * @property \App\Model\Table\KhazanahsParticipantsTable&\Cake\ORM\Association\HasMany $KhazanahsParticipants
 * @property \App\Model\Table\ArtworksTable&\Cake\ORM\Association\BelongsToMany $Artworks
 * @property \App\Model\Table\EventsTable&\Cake\ORM\Association\BelongsToMany $Events
 *
 * @method \App\Model\Entity\Khazanah get($primaryKey, $options = [])
 * @method \App\Model\Entity\Khazanah newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Khazanah[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Khazanah|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Khazanah saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Khazanah patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Khazanah[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Khazanah findOrCreate($search, callable $callback = null, $options = [])
 */
class KhazanahsTable extends Table
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

        $this->setTable('khazanahs');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Artists', [
            'foreignKey' => 'artist_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('KhazanahCategories', [
            'foreignKey' => 'khazanah_category_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('KhazanahsFiles', [
            'foreignKey' => 'khazanah_id',
        ]);
        $this->hasMany('KhazanahsParticipants', [
            'foreignKey' => 'khazanah_id',
        ]);
        $this->belongsToMany('Artworks', [
            'foreignKey' => 'khazanah_id',
            'targetForeignKey' => 'artwork_id',
            'joinTable' => 'artworks_khazanahs',
        ]);
        $this->belongsToMany('Events', [
            'foreignKey' => 'khazanah_id',
            'targetForeignKey' => 'event_id',
            'joinTable' => 'events_khazanahs',
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
            ->integer('published_date')
            ->requirePresence('published_date', 'create')
            ->notEmptyString('published_date');

        $validator
            ->scalar('published_month')
            ->maxLength('published_month', 255)
            ->requirePresence('published_month', 'create')
            ->notEmptyString('published_month');

        $validator
            ->integer('published_year')
            ->requirePresence('published_year', 'create')
            ->notEmptyString('published_year');

        $validator
            ->integer('published_to_year')
            ->requirePresence('published_to_year', 'create')
            ->notEmptyString('published_to_year');

        $validator
            ->scalar('excerpt_en')
            ->requirePresence('excerpt_en', 'create')
            ->notEmptyString('excerpt_en');

        $validator
            ->scalar('excerpt_ind')
            ->requirePresence('excerpt_ind', 'create')
            ->notEmptyString('excerpt_ind');

        $validator
            ->boolean('published_date_unknown')
            ->requirePresence('published_date_unknown', 'create')
            ->notEmptyString('published_date_unknown');

        $validator
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->integer('sorting')
            ->requirePresence('sorting', 'create')
            ->notEmptyString('sorting');

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
        $rules->add($rules->existsIn(['artist_id'], 'Artists'));
        $rules->add($rules->existsIn(['khazanah_category_id'], 'KhazanahCategories'));

        return $rules;
    }
}
