<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KhazanahsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KhazanahsTable Test Case
 */
class KhazanahsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KhazanahsTable
     */
    protected $Khazanahs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Khazanahs',
        'app.Artists',
        'app.KhazanahCategories',
        'app.KhazanahsFiles',
        'app.KhazanahsParticipants',
        'app.Artworks',
        'app.Events',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Khazanahs') ? [] : ['className' => KhazanahsTable::class];
        $this->Khazanahs = TableRegistry::getTableLocator()->get('Khazanahs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Khazanahs);

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
