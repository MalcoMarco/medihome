<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }


    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', 'A username is required')
            ->notEmpty('password', 'A password is required')
            ->notEmpty('tipodoc', 'A tipo documento is required')
            ->add('tipodoc', 'inList', [
                'rule' => ['inList', ['DNI', 'Libreta','Pasaporte']],
                'message' => 'Please enter a valid tipodoc'
            ])
            ->notEmpty('role', 'A role is required')
            ->add('role', 'inList', [
                'rule' => ['inList', ['Admin', 'Paciente']],
                'message' => 'Please enter a valid role: Admin o Paciente'
            ]);
        /*
            $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

            $validator
                ->scalar('username')
                ->requirePresence('username', 'create')
                ->notEmpty('username');

            $validator
                ->scalar('password')
                ->requirePresence('password', 'create')
                ->notEmpty('password');

            $validator
                ->scalar('tipodoc')
                ->requirePresence('tipodoc', 'create')
                ->notEmpty('tipodoc');

            $validator
                ->scalar('role')
                ->requirePresence('role', 'create')
                ->notEmpty('role');

            return $validator;
        */
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
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
/*
    public function findAuth(\Cake\ORM\Query $query, array $options)
    {

        $query->select(['id','username','role','tipodoc'])
        ->from(['Users']);
        return $query;

    }
*/
}
