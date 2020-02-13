<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Roso Model
 *
 * @method \App\Model\Entity\Roso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Roso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Roso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Roso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Roso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Roso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Roso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Roso findOrCreate($search, callable $callback = null, $options = [])
 */
class RosoTable extends Table
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

        $this->setTable('roso');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nama')
            ->maxLength('nama', 100)
            ->requirePresence('nama', 'create')
            ->notEmptyString('nama');

        $validator
            ->scalar('alamat')
            ->maxLength('alamat', 255)
            ->requirePresence('alamat', 'create')
            ->notEmptyString('alamat');

        $validator
            ->scalar('telp')
            ->maxLength('telp', 13)
            ->requirePresence('telp', 'create')
            ->notEmptyString('telp');

        return $validator;
    }
}
