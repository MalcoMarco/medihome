<?php
use Migrations\AbstractMigration;

class EspecialidadAddEstado extends AbstractMigration
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
        $table = $this->table('especialidads');
        $table->addColumn('estado', 'string', ['after' => 'created','limit' => 1,'default' => 1])
              ->update();
    }
}
