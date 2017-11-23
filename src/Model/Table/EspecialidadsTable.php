<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Especialidads Model
 *
 * @property \App\Model\Table\MedicosTable|\Cake\ORM\Association\HasMany $Medicos
 *
 * @method \App\Model\Entity\Especialidad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Especialidad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Especialidad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Especialidad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Especialidad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Especialidad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Especialidad findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EspecialidadsTable extends Table
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

        $this->setTable('especialidads');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Medicos', [
            'foreignKey' => 'especialidad_id'
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

        $validator
            ->scalar('descripcion')
            ->allowEmpty('descripcion');

        $validator
            ->scalar('estado')
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        return $validator;
    }
}
