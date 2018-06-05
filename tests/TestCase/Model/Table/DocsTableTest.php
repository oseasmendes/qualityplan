<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocsTable Test Case
 */
class DocsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocsTable
     */
    public $Docs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.docs',
        'app.actions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Docs') ? [] : ['className' => DocsTable::class];
        $this->Docs = TableRegistry::get('Docs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Docs);

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
