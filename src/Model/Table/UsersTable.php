<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null)
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('last_name');
        $this->primaryKey('user_id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->requirePresence('civility', 'create')
            ->notEmpty('civility');
        
        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->integer('telephone')
            ->requirePresence('telephone', 'create')
            ->notEmpty('telephone');
        
        $validator
            ->integer('mobile_phone')
            ->requirePresence('mobile_phone', 'create')
            ->notEmpty('mobile_phone');

        $validator
            ->requirePresence('town', 'create')
            ->notEmpty('town');

        $validator
            ->integer('postal_code')
            ->requirePresence('postal_code', 'create')
            ->notEmpty('postal_code');

        $validator
            ->requirePresence('adress', 'create')
            ->notEmpty('adress');

        $validator
            ->requirePresence('responsable_legal', 'create')
            ->notEmpty('responsable_legal');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password', 'Un mot de passe est nécessaire');

        $validator
            ->requirePresence('nationality', 'create')
            ->notEmpty('nationality');

        $validator
            ->requirePresence('profession', 'create')
            ->notEmpty('profession');
        
        $validator
            ->requirePresence('relationship', 'create')
            ->notEmpty('relationship');

        $validator
            ->requirePresence('socity', 'create')
            ->notEmpty('socity');

        $validator
            ->integer('socity_phone')
            ->requirePresence('socity_phone', 'create')
            ->notEmpty('socity_phone');

        $validator
            ->requirePresence('job_situation', 'create')
            ->notEmpty('job_situation');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
