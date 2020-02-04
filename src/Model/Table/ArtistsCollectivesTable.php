<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArtistsCollectives Model
 *
 * @property \App\Model\Table\ArtistsTable&\Cake\ORM\Association\BelongsTo $Artists
 * @property \App\Model\Table\CollectivesTable&\Cake\ORM\Association\BelongsTo $Collectives
 *
 * @method \App\Model\Entity\ArtistsCollective get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArtistsCollective newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArtistsCollective[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArtistsCollective|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArtistsCollective saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArtistsCollective patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArtistsCollective[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArtistsCollective findOrCreate($search, callable $callback = null, $options = [])
 */
class ArtistsCollectivesTable extends Table
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

        $this->setTable('artists_collectives');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Artists', [
            'foreignKey' => 'artist_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Collectives', [
            'foreignKey' => 'collective_id',
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
        $rules->add($rules->existsIn(['collective_id'], 'Collectives'));

        return $rules;
    }
}
