<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * KhazanahsFiles Model
 *
 * @property \App\Model\Table\KhazanahsTable&\Cake\ORM\Association\BelongsTo $Khazanahs
 *
 * @method \App\Model\Entity\KhazanahsFile get($primaryKey, $options = [])
 * @method \App\Model\Entity\KhazanahsFile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\KhazanahsFile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\KhazanahsFile|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KhazanahsFile saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KhazanahsFile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\KhazanahsFile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\KhazanahsFile findOrCreate($search, callable $callback = null, $options = [])
 */
class KhazanahsFilesTable extends Table
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

        $this->setTable('khazanahs_files');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Khazanahs', [
            'foreignKey' => 'khazanah_id',
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
            ->scalar('caption')
            ->maxLength('caption', 255)
            ->requirePresence('caption', 'create')
            ->notEmptyString('caption');

        $validator
            ->scalar('file_type')
            ->maxLength('file_type', 50)
            ->requirePresence('file_type', 'create')
            ->notEmptyFile('file_type');

        $validator
            ->scalar('part_clip')
            ->maxLength('part_clip', 255)
            ->requirePresence('part_clip', 'create')
            ->notEmptyString('part_clip');

        $validator
            ->scalar('file_name')
            ->maxLength('file_name', 200)
            ->requirePresence('file_name', 'create')
            ->notEmptyFile('file_name');

        $validator
            ->scalar('url')
            ->maxLength('url', 200)
            ->requirePresence('url', 'create')
            ->notEmptyString('url');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

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
        $rules->add($rules->existsIn(['khazanah_id'], 'Khazanahs'));

        return $rules;
    }
}
