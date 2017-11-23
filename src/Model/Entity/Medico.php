<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medico Entity
 *
 * @property int $id
 * @property string $codigo
 * @property string $nombre
 * @property string $apaterno
 * @property string $amaterno
 * @property \Cake\I18n\FrozenDate $nacimiento
 * @property string $sexo
 * @property int $estado
 * @property string $dni
 * @property string $telefono
 * @property string $direccion
 * @property string $email
 * @property int $especialidad_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Especialidad $especialidad
 * @property \App\Model\Entity\Cita[] $citas
 */
class Medico extends Entity
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
        'codigo' => true,
        'nombre' => true,
        'apaterno' => true,
        'amaterno' => true,
        'nacimiento' => true,
        'sexo' => true,
        'estado' => true,
        'dni' => true,
        'telefono' => true,
        'direccion' => true,
        'email' => true,
        'especialidad_id' => true,
        'created' => true,
        'modified' => true,
        'especialidad' => true,
        'citas' => true
    ];
}
