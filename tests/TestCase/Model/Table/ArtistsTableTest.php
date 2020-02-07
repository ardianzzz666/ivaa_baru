<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtistsTable Test Case
 */
class ArtistsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtistsTable
     */
    protected $Artists;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Artists',
        'app.Users',
        'app.Countries',
        'app.Cities',
        'app.Domiciles',
        'app.CreativeIndustries',
        'app.Khazanahs',
        'app.Collectives',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Artists') ? [] : ['className' => ArtistsTable::class];
        $this->Artists = TableRegistry::getTableLocator()->get('Artists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Artists);

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
