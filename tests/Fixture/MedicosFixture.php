<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MedicosFixture
 *
 */
class MedicosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'codigo' => ['type' => 'string', 'length' => 10, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nombre' => ['type' => 'string', 'length' => 40, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'apaterno' => ['type' => 'string', 'length' => 40, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'amaterno' => ['type' => 'string', 'length' => 40, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nacimiento' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'sexo' => ['type' => 'string', 'length' => 1, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'estado' => ['type' => 'integer', 'length' => 10, 'default' => '1', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'dni' => ['type' => 'string', 'length' => 8, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'telefono' => ['type' => 'string', 'length' => 40, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'direccion' => ['type' => 'string', 'length' => 40, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 40, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'especialidad_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'medicos_codigo' => ['type' => 'unique', 'columns' => ['codigo'], 'length' => []],
            'medicos_email' => ['type' => 'unique', 'columns' => ['email'], 'length' => []],
            'medicos_especialidad_id' => ['type' => 'foreign', 'columns' => ['especialidad_id'], 'references' => ['especialidads', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'codigo' => 'Lorem ip',
            'nombre' => 'Lorem ipsum dolor sit amet',
            'apaterno' => 'Lorem ipsum dolor sit amet',
            'amaterno' => 'Lorem ipsum dolor sit amet',
            'nacimiento' => '2017-11-21',
            'sexo' => 'Lorem ipsum dolor sit ame',
            'estado' => 1,
            'dni' => 'Lorem ',
            'telefono' => 'Lorem ipsum dolor sit amet',
            'direccion' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'especialidad_id' => 1,
            'created' => 1511280449,
            'modified' => 1511280449
        ],
    ];
}
