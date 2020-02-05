<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Collectives Model
 *
 * @property \App\Model\Table\DomicilesTable&\Cake\ORM\Association\BelongsTo $Domiciles
 * @property \App\Model\Table\ArtistsTable&\Cake\ORM\Association\BelongsToMany $Artists
 *
 * @method \App\Model\Entity\Collective get($primaryKey, $options = [])
 * @method \App\Model\Entity\Collective newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Collective[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Collective|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Collective saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Collective patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Collective[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Collective findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CollectivesTable extends Table
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

        $this->setTable('collectives');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Domiciles', [
            'foreignKey' => 'domicile_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Artists', [
            'foreignKey' => 'collective_id',
            'targetForeignKey' => 'artist_id',
            'joinTable' => 'artists_collectives',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 100)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('description_en')
            ->requirePresence('description_en', 'create')
            ->notEmptyString('description_en');

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
        $rules->add($rules->existsIn(['domicile_id'], 'Domiciles'));

        return $rules;
    }
}
