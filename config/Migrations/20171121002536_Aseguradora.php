<?php
use Migrations\AbstractMigration;

class Aseguradora extends AbstractMigration
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
        $aseguradoras = $this->table('aseguradoras');

        $aseguradoras
        ->addColumn('nombre', 'string', ['limit' => 40])
                
        ->addColumn('created', 'timestamp',['null' => true])
        ->addColumn('modified', 'timestamp', ['null' => true, 'default' => null])
        ->save();
    }
}
