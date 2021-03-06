<?php
use Migrations\AbstractMigration;

class Users extends AbstractMigration
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
        $users = $this->table('users');

        $users
        ->addColumn('username', 'string', ['limit' => 40])
        ->addColumn('password', 'string', ['limit' => 80])
        ->addColumn('tipodoc', 'string', ['limit' => 20,'default' => 'DNI'])        
        ->addColumn('role', 'string', ['limit' => 40])
        
        ->addColumn('created', 'timestamp',['null' => true])
        ->addColumn('modified', 'timestamp', ['null' => true, 'default' => null])
        ->save();
    }
}

/*


lorem   
*/