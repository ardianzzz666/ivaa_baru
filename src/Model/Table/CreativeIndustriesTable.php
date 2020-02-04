<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CreativeIndustries Model
 *
 * @property \App\Model\Table\ArtistsIndustriesTable&\Cake\ORM\Association\HasMany $ArtistsIndustries
 *
 * @method \App\Model\Entity\CreativeIndustry get($primaryKey, $options = [])
 * @method \App\Model\Entity\CreativeIndustry newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CreativeIndustry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CreativeIndustry|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CreativeIndustry saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CreativeIndustry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CreativeIndustry[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CreativeIndustry findOrCreate($search, callable $callback = null, $options = [])
 */
class CreativeIndustriesTable extends Table
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

        $this->setTable('creative_industries');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('ArtistsIndustries', [
            'foreignKey' => 'creative_industry_id',
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
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('name_en')
            ->maxLength('name_en', 100)
            ->requirePresence('name_en', 'create')
            ->notEmptyString('name_en');

        return $validator;
    }
}
