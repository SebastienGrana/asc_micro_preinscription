<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recrutors Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Recrutors
 * @property \Cake\ORM\Association\BelongsTo $Schools
 *
 * @method \App\Model\Entity\Recrutor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recrutor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recrutor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recrutor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recrutor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recrutor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recrutor findOrCreate($search, callable $callback = null)
 */
class RecrutorsTable extends Table
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

        $this->table('recrutors');
        $this->displayField('last_name');
        $this->primaryKey('recrutor_id');

//        $this->belongsTo('Recrutors', [
//            'foreignKey' => 'recrutor_id',
//            'joinType' => 'INNER'
//        ]);
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
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

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
        $rules->add($rules->isUnique(['email']));
//        $rules->add($rules->existsIn(['recrutor_id'], 'Recrutors'));
        $rules->add($rules->existsIn(['school_id'], 'Schools'));

        return $rules;
    }
}
