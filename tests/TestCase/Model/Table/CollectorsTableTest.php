<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CollectorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CollectorsTable Test Case
 */
class CollectorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CollectorsTable
     */
    public $Collectors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.collectors',
        'app.collections',
        'app.determinavits',
        'app.lognote_habitats',
        'app.plant_descriptions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Collectors') ? [] : ['className' => CollectorsTable::class];
        $this->Collectors = TableRegistry::get('Collectors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Collectors);

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
