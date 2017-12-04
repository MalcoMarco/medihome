<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cita Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $dia
 * @property string $hora
 * @property string $estado
 * @property string $lugar
 * @property string $motivo
 * @property string $diagnostico
 * @property string $tratamiento
 * @property string $masdetalles
 * @property int $paciente_id
 * @property int $medico_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Paciente $paciente
 * @property \App\Model\Entity\Medico $medico
 */
class Cita extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'dia' => true,
        'hora' => true,
        'estado' => true,
        'lugar' => true,
        'motivo' => true,
        'diagnostico' => true,
        'tratamiento' => true,
        'masdetalles' => true,
        'paciente_id' => true,
        'medico_id' => true,
        'created' => true,
        'modified' => true,
        'paciente' => true,
        'medico' => true
    ];
}
