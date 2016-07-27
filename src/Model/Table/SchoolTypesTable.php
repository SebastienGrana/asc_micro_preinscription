<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SchoolTypes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SchoolTypes
 *
 * @method \App\Model\Entity\SchoolType get($primaryKey, $options = [])
 * @method \App\Model\Entity\SchoolType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SchoolType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SchoolType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SchoolType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolType findOrCreate($search, callable $callback = null)
 */
class SchoolTypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('school_types');
        $this->displayField('name');
        $this->primaryKey('school_type_id');

//        $this->belongsTo('SchoolTypes', [
//            'foreignKey' => 'school_type_id',
//            'joinType' => 'INNER'
//        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
//        $rules->add($rules->existsIn(['school_type_id'], 'SchoolTypes'));

        return $rules;
    }
}
