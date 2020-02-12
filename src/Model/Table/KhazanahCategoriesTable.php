<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * KhazanahCategories Model
 *
 * @property \App\Model\Table\KhazanahsTable&\Cake\ORM\Association\HasMany $Khazanahs
 *
 * @method \App\Model\Entity\KhazanahCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\KhazanahCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\KhazanahCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\KhazanahCategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KhazanahCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KhazanahCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\KhazanahCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\KhazanahCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class KhazanahCategoriesTable extends Table
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

        $this->setTable('khazanah_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Khazanahs', [
            'foreignKey' => 'khazanah_category_id',
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
            ->maxLength('name_en', 155)
            ->requirePresence('name_en', 'create')
            ->notEmptyString('name_en');

        return $validator;
    }
}
