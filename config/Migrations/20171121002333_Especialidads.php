<?php
use Migrations\AbstractMigration;

class Especialidads extends AbstractMigration
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
        $especialidads = $this->table('especialidads');

        $especialidads
        ->addColumn('nombre', 'string', ['limit' => 40])
        ->addColumn('descripcion', 'string', ['limit' => 80,'null' => true])
        
        ->addColumn('created', 'timestamp',['null' => true])
        ->addColumn('modified', 'timestamp', ['null' => true, 'default' => null])
        ->save();
    }
}
