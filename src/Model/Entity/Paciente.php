<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paciente Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apaterno
 * @property string $amaterno
 * @property \Cake\I18n\FrozenDate $nacimiento
 * @property string $sexo
 * @property string $tipodoc
 * @property string $numdoc
 * @property string $telefono
 * @property string $direccion
 * @property string $email
 * @property int $aseguradora_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Aseguradora $aseguradora
 * @property \App\Model\Entity\Cita[] $citas
 */
class Paciente extends Entity
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
        'nombre' => true,
        'apaterno' => true,
        'amaterno' => true,
        'nacimiento' => true,
        'sexo' => true,
        'tipodoc' => true,
        'numdoc' => true,
        'telefono' => true,
        'direccion' => true,
        'email' => true,
        'aseguradora_id' => true,
        'created' => true,
        'modified' => true,
        'aseguradora' => true,
        'citas' => true
    ];
}
