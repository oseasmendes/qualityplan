<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FasesTable Test Case
 */
class FasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FasesTable
     */
    public $Fases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fases',
        'app.tickets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fases') ? [] : ['className' => FasesTable::class];
        $this->Fases = TableRegistry::get('Fases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fases);

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
