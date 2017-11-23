<?php
use Migrations\AbstractMigration;

class Medicos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
         $medicos = $this->table('medicos');

        $medicos
        ->addColumn('codigo', 'string', ['limit' => 10])
        ->addColumn('nombre', 'string', ['limit' => 40])
        ->addColumn('apaterno', 'string', ['limit' => 40])
        ->addColumn('amaterno', 'string', ['limit' => 40])
        ->addColumn('nacimiento', 'date', ['null' => true])
        ->addColumn('sexo', 'string', ['limit' => 1])
        ->addColumn('estado', 'integer', ['default' => 1])
        ->addColumn('dni', 'string', ['limit' => 8])
        ->addColumn('telefono', 'string', ['limit' => 40])
        ->addColumn('direccion', 'string', ['limit' => 40])
        ->addColumn('email', 'string', ['limit' => 40])
        ->addColumn('especialidad_id', 'integer', ['null' => true])

        ->addColumn('created', 'timestamp',['null' => true])
        ->addColumn('modified', 'timestamp', ['null' => true, 'default' => null])

        ->addIndex(['codigo'], ['unique' => true])
        ->addIndex(['email'], ['unique' => true])

        ->addForeignKey('especialidad_id', 'especialidads',['id'])

        ->save();
    }
}
