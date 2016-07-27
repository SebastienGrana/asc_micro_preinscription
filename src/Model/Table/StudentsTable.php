<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Students Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Students
 *
 * @method \App\Model\Entity\Student get($primaryKey, $options = [])
 * @method \App\Model\Entity\Student newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Student[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Student|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Student[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Student findOrCreate($search, callable $callback = null)
 */
class StudentsTable extends Table
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

        $this->table('students');
        $this->displayField('last_name'/*.' '.'first_name'*/);
        $this->primaryKey('student_id');

        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Schools', [
            'foreignKey' => 'school_id',
            'joinType' => 'INNER'
        ]);
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
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('other_first_name', 'create')
            ->notEmpty('other_first_name');

        $validator
            ->boolean('genre')
            ->requirePresence('genre', 'create')
            ->notEmpty('genre');

        $validator
            ->dateTime('date_of_born')
            ->requirePresence('date_of_born', 'create')
            ->notEmpty('date_of_born');

        $validator
            ->requirePresence('town_of_born', 'create')
            ->notEmpty('town_of_born');

        $validator
            ->requirePresence('country_of_born', 'create')
            ->notEmpty('country_of_born');

        $validator
            ->requirePresence('nationality', 'create')
            ->notEmpty('nationality');

        $validator
            ->requirePresence('actual_school', 'create')
            ->notEmpty('actual_school');

        $validator
            ->requirePresence('scolar_year', 'create')
            ->notEmpty('scolar_year');

        $validator
            ->requirePresence('food_regime', 'create')
            ->notEmpty('food_regime');

        $validator
            ->boolean('doubling')
            ->requirePresence('doubling', 'create')
            ->notEmpty('doubling');

        $validator
            ->requirePresence('desired_formation', 'create')
            ->notEmpty('desired_formation');

        $validator
            ->requirePresence('primary_school_followed', 'create')
            ->notEmpty('primary_school_followed');

        $validator
            ->requirePresence('middel_school_followed', 'create')
            ->notEmpty('middel_school_followed');

        $validator
            ->requirePresence('user_student_relationship', 'create')
            ->notEmpty('user_student_relationship');

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
        $rules->add($rules->existsIn(['student_id'], 'Students'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['school_id'], 'Schools'));

        return $rules;
    }
}
