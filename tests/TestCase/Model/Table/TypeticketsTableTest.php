<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeticketsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeticketsTable Test Case
 */
class TypeticketsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeticketsTable
     */
    public $Typetickets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typetickets',
        'app.departamentos',
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
        $config = TableRegistry::exists('Typetickets') ? [] : ['className' => TypeticketsTable::class];
        $this->Typetickets = TableRegistry::get('Typetickets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typetickets);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
