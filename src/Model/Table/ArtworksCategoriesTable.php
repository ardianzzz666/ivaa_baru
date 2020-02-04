<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArtworksCategories Model
 *
 * @method \App\Model\Entity\ArtworksCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArtworksCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArtworksCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArtworksCategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArtworksCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArtworksCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArtworksCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArtworksCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class ArtworksCategoriesTable extends Table
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

        $this->setTable('artworks_categories');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('name_en')
            ->maxLength('name_en', 155)
            ->requirePresence('name_en', 'create')
            ->notEmptyString('name_en');

        return $validator;
    }
}
