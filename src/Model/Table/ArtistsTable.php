<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Artists Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Artist get($primaryKey, $options = [])
 * @method \App\Model\Entity\Artist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Artist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Artist|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artist saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Artist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Artist findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArtistsTable extends Table
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

        $this->setTable('artists');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->scalar('fullname')
            ->maxLength('fullname', 255)
            ->requirePresence('fullname', 'create')
            ->notEmptyString('fullname');

        $validator
            ->scalar('nickname')
            ->maxLength('nickname', 255)
            ->requirePresence('nickname', 'create')
            ->notEmptyString('nickname');

        $validator
            ->integer('birth_country')
            ->requirePresence('birth_country', 'create')
            ->notEmptyString('birth_country');

        $validator
            ->integer('birth_city')
            ->requirePresence('birth_city', 'create')
            ->notEmptyString('birth_city');

        $validator
            ->date('birth_date')
            ->requirePresence('birth_date', 'create')
            ->notEmptyDate('birth_date');

        $validator
            ->scalar('birth_month')
            ->maxLength('birth_month', 2)
            ->requirePresence('birth_month', 'create')
            ->notEmptyString('birth_month');

        $validator
            ->scalar('birth_year')
            ->maxLength('birth_year', 10)
            ->requirePresence('birth_year', 'create')
            ->notEmptyString('birth_year');

        $validator
            ->boolean('not_alive')
            ->requirePresence('not_alive', 'create')
            ->notEmptyString('not_alive');

        $validator
            ->scalar('living_address')
            ->maxLength('living_address', 255)
            ->requirePresence('living_address', 'create')
            ->notEmptyString('living_address');

        $validator
            ->integer('living_city')
            ->requirePresence('living_city', 'create')
            ->notEmptyString('living_city');

        $validator
            ->integer('living_country')
            ->requirePresence('living_country', 'create')
            ->notEmptyString('living_country');

        $validator
            ->integer('domicile')
            ->requirePresence('domicile', 'create')
            ->notEmptyString('domicile');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->scalar('website')
            ->maxLength('website', 255)
            ->requirePresence('website', 'create')
            ->notEmptyString('website');

        $validator
            ->requirePresence('is_registered', 'create')
            ->notEmptyString('is_registered');

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
            ->scalar('obit')
            ->maxLength('obit', 70)
            ->requirePresence('obit', 'create')
            ->notEmptyString('obit');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
