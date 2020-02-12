<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventsDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventsDetailsTable Test Case
 */
class EventsDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventsDetailsTable
     */
    protected $EventsDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventsDetails',
        'app.Events',
        'app.ArtVenues',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EventsDetails') ? [] : ['className' => EventsDetailsTable::class];
        $this->EventsDetails = TableRegistry::getTableLocator()->get('EventsDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventsDetails);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
