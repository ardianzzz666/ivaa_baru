<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventOrganizersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventOrganizersTable Test Case
 */
class EventOrganizersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventOrganizersTable
     */
    protected $EventOrganizers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventOrganizers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EventOrganizers') ? [] : ['className' => EventOrganizersTable::class];
        $this->EventOrganizers = TableRegistry::getTableLocator()->get('EventOrganizers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventOrganizers);

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
}
