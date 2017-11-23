<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EspecialidadsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EspecialidadsTable Test Case
 */
class EspecialidadsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EspecialidadsTable
     */
    public $Especialidads;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.especialidads',
        'app.medicos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Especialidads') ? [] : ['className' => EspecialidadsTable::class];
        $this->Especialidads = TableRegistry::get('Especialidads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Especialidads);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
