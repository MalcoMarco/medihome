<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aseguradoras Model
 *
 * @property \App\Model\Table\PacientesTable|\Cake\ORM\Association\HasMany $Pacientes
 *
 * @method \App\Model\Entity\Aseguradora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aseguradora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aseguradora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aseguradora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aseguradora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aseguradora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aseguradora findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AseguradorasTable extends Table
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

        $this->setTable('aseguradoras');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Pacientes', [
            'foreignKey' => 'aseguradora_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nombre')
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        return $validator;
    }
}
