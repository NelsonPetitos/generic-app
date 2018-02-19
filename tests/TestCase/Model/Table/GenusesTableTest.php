<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GenusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GenusesTable Test Case
 */
class GenusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GenusesTable
     */
    public $Genuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.genuses',
        'app.families',
        'app.species'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Genuses') ? [] : ['className' => GenusesTable::class];
        $this->Genuses = TableRegistry::get('Genuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Genuses);

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
