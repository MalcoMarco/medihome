<?php
use Migrations\AbstractMigration;

class Pacientes extends AbstractMigration
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
         $pacientes = $this->table('pacientes');

        $pacientes
        ->addColumn('nombre', 'string', ['limit' => 40])
        ->addColumn('apaterno', 'string', ['limit' => 40])
        ->addColumn('amaterno', 'string', ['limit' => 40])
        ->addColumn('nacimiento', 'date', ['null' => true])
        ->addColumn('sexo', 'string', ['limit' => 1])
        ->addColumn('tipodoc', 'string', ['limit' => 20])
        ->addColumn('numdoc', 'string', ['limit' =>12])
        ->addColumn('telefono', 'string', ['limit' => 40])
        ->addColumn('direccion', 'string', ['limit' => 80,'null' => true])
        ->addColumn('email', 'string', ['limit' => 40])
        ->addColumn('aseguradora_id', 'integer', ['null' => true])

        ->addColumn('created', 'timestamp',['null' => true])
        ->addColumn('modified', 'timestamp', ['null' => true, 'default' => null])

        ->addIndex(['email'], ['unique' => true])
        ->addIndex(['numdoc'], ['unique' => true])
        ->addForeignKey('aseguradora_id', 'aseguradoras',['id'])

        ->save();
    }
}
