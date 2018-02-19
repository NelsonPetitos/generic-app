<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LognoteHabitatsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LognoteHabitatsTable Test Case
 */
class LognoteHabitatsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LognoteHabitatsTable
     */
    public $LognoteHabitats;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lognote_habitats'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LognoteHabitats') ? [] : ['className' => LognoteHabitatsTable::class];
        $this->LognoteHabitats = TableRegistry::get('LognoteHabitats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LognoteHabitats);

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
