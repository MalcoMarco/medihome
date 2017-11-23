<?php
use Migrations\AbstractMigration;

class Citas extends AbstractMigration
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
        $citas = $this->table('citas');

        $citas
        ->addColumn('dia', 'date', ['null' => false])
        ->addColumn('hora', 'string', ['limit' => 10])
        ->addColumn('estado', 'string', ['limit' => 10,'default' => 'solicitado'])
        ->addColumn('lugar', 'string', ['limit' => 20,'default' => 'clinica'])
        ->addColumn('motivo', 'string', ['limit' => 100,'null' => true])
        ->addColumn('diagnostico', 'string', ['limit' => 100,'null' => true])
        ->addColumn('tratamiento', 'string', ['limit' => 100,'null' => true])
        ->addColumn('masdetalles', 'string', ['limit' => 120,'null' => true])


        ->addColumn('paciente_id', 'integer', ['null' => false])
        ->addColumn('medico_id', 'integer', ['null' => false])

        ->addColumn('created', 'timestamp',['null' => true])
        ->addColumn('modified', 'timestamp', ['null' => true, 'default' => null])

        ->addForeignKey('paciente_id', 'pacientes',['id'])
        ->addForeignKey('medico_id', 'medicos',['id'])

        ->save();
    }
}
