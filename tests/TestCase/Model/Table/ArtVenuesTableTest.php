<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtVenuesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtVenuesTable Test Case
 */
class ArtVenuesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtVenuesTable
     */
    protected $ArtVenues;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ArtVenues',
        'app.Cities',
        'app.Provinces',
        'app.Countries',
        'app.EventsDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ArtVenues') ? [] : ['className' => ArtVenuesTable::class];
        $this->ArtVenues = TableRegistry::getTableLocator()->get('ArtVenues', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ArtVenues);

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
