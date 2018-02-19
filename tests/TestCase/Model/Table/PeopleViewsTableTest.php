<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleViewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleViewsTable Test Case
 */
class PeopleViewsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleViewsTable
     */
    public $PeopleViews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_views',
        'app.determinavits',
        'app.collections',
        'app.collectors',
        'app.lognote_habitats',
        'app.plant_descriptions',
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
        $config = TableRegistry::exists('PeopleViews') ? [] : ['className' => PeopleViewsTable::class];
        $this->PeopleViews = TableRegistry::get('PeopleViews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleViews);

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
