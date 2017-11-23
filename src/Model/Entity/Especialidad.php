<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Especialidad Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $estado
 *
 * @property \App\Model\Entity\Medico[] $medicos
 */
class Especialidad extends Entity
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
        'descripcion' => true,
        'created' => true,
        'modified' => true,
        'estado' => true,
        'medicos' => true
    ];
}
