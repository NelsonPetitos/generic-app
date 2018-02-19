<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GasesTable Test Case
 */
class GasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GasesTable
     */
    public $Gases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gases',
        'app.countries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Gases') ? [] : ['className' => GasesTable::class];
        $this->Gases = TableRegistry::get('Gases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gases);

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
