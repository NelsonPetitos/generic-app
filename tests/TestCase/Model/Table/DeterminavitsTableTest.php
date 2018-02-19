<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeterminavitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeterminavitsTable Test Case
 */
class DeterminavitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeterminavitsTable
     */
    public $Determinavits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.determinavits',
        'app.collections',
        'app.collectors',
        'app.lognote_habitats',
        'app.plant_descriptions',
        'app.species',
        'app.people_views'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Determinavits') ? [] : ['className' => DeterminavitsTable::class];
        $this->Determinavits = TableRegistry::get('Determinavits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Determinavits);

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
