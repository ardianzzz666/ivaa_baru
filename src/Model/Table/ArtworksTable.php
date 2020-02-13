<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Artworks Model
 *
 * @property \App\Model\Table\ArtworksCategoriesTable&\Cake\ORM\Association\BelongsTo $ArtworksCategories
 * @property \App\Model\Table\ArtworksCreatorsTable&\Cake\ORM\Association\HasMany $ArtworksCreators
 * @property \App\Model\Table\ArtworksFilesTable&\Cake\ORM\Association\HasMany $ArtworksFiles
 * @property \App\Model\Table\EventsTable&\Cake\ORM\Association\BelongsToMany $Events
 * @property \App\Model\Table\KhazanahsTable&\Cake\ORM\Association\BelongsToMany $Khazanahs
 * @property \App\Model\Table\MediaTable&\Cake\ORM\Association\BelongsToMany $Media
 *
 * @method \App\Model\Entity\Artwork get($primaryKey, $options = [])
 * @method \App\Model\Entity\Artwork newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Artwork[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Artwork|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artwork saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artwork patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Artwork[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Artwork findOrCreate($search, callable $callback = null, $options = [])
 */
class ArtworksTable extends Table
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

        $this->setTable('artworks');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('ArtworksCategories', [
            'foreignKey' => 'artwork_category_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('ArtworksCreators', [
            'foreignKey' => 'artwork_id',
        ]);
        $this->hasMany('ArtworksFiles', [
            'foreignKey' => 'artwork_id',
        ]);
        $this->belongsToMany('Events', [
            'foreignKey' => 'artwork_id',
            'targetForeignKey' => 'event_id',
            'joinTable' => 'artworks_events',
        ]);
        $this->belongsToMany('Khazanahs', [
            'foreignKey' => 'artwork_id',
            'targetForeignKey' => 'khazanah_id',
            'joinTable' => 'artworks_khazanahs',
        ]);
        $this->belongsToMany('Media', [
            'foreignKey' => 'artwork_id',
            'targetForeignKey' => 'media_id',
            'joinTable' => 'artworks_media',
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
            ->integer('art_start_year')
            ->requirePresence('art_start_year', 'create')
            ->notEmptyString('art_start_year');

        $validator
            ->integer('art_end_year')
            ->requirePresence('art_end_year', 'create')
            ->notEmptyString('art_end_year');

        $validator
            ->scalar('dimmension_height')
            ->maxLength('dimmension_height', 5)
            ->requirePresence('dimmension_height', 'create')
            ->notEmptyString('dimmension_height');

        $validator
            ->scalar('dimmension_width')
            ->maxLength('dimmension_width', 5)
            ->requirePresence('dimmension_width', 'create')
            ->notEmptyString('dimmension_width');

        $validator
            ->scalar('dimmension_length')
            ->maxLength('dimmension_length', 5)
            ->requirePresence('dimmension_length', 'create')
            ->notEmptyString('dimmension_length');

        $validator
            ->integer('dimmension_unit')
            ->requirePresence('dimmension_unit', 'create')
            ->notEmptyString('dimmension_unit');

        $validator
            ->scalar('description_en')
            ->requirePresence('description_en', 'create')
            ->notEmptyString('description_en');

        $validator
            ->scalar('description_ind')
            ->requirePresence('description_ind', 'create')
            ->notEmptyString('description_ind');

        $validator
            ->integer('status')
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
        $rules->add($rules->existsIn(['artwork_category_id'], 'ArtworksCategories'));

        return $rules;
    }
}
