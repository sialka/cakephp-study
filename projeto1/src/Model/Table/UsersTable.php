<?php

namespace App\Model\Table;

// use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->setTable('users');
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
        ->integer('id')
        ->allowEmpty('id', 'create');

        $validator
        ->requirePresence('name', 'create')
        ->notEmpty('name');

        $validator
        ->requirePresence('email', 'create')
        ->notEmpty('email');

        $validator
        ->requirePresence('username', 'create')
        ->notEmpty('username');

        $validator
        ->requirePresence('password', 'create')
        ->notEmpty('password');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'Este e-mail já esta cadastrado'));
        $rules->add($rules->isUnique(['username'], 'Este usuario já esta cadastrado'));

        return $rules;
    }
}
