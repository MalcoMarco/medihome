<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medicos Model
 *
 * @property \App\Model\Table\EspecialidadsTable|\Cake\ORM\Association\BelongsTo $Especialidads
 * @property \App\Model\Table\CitasTable|\Cake\ORM\Association\HasMany $Citas
 *
 * @method \App\Model\Entity\Medico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Medico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MedicosTable extends Table
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

        $this->setTable('medicos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Especialidads', [
            'foreignKey' => 'especialidad_id'
        ]);
        $this->hasMany('Citas', [
            'foreignKey' => 'medico_id'
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
            ->scalar('codigo')
            ->requirePresence('codigo', 'create')
            ->notEmpty('codigo')
            ->add('codigo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nombre')
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('apaterno')
            ->requirePresence('apaterno', 'create')
            ->notEmpty('apaterno');

        $validator
            ->scalar('amaterno')
            ->requirePresence('amaterno', 'create')
            ->notEmpty('amaterno');

        $validator
            ->date('nacimiento')
            ->allowEmpty('nacimiento');

        $validator
            ->scalar('sexo')
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

        $validator
            ->integer('estado')
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        $validator
            ->scalar('dni')
            ->requirePresence('dni', 'create')
            ->notEmpty('dni');

        $validator
            ->scalar('telefono')
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

        $validator
            ->scalar('direccion')
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['codigo']));
        $rules->add($rules->existsIn(['especialidad_id'], 'Especialidads'));

        return $rules;
    }
}
