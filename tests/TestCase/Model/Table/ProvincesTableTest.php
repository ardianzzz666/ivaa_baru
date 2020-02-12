<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProvincesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProvincesTable Test Case
 */
class ProvincesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProvincesTable
     */
    protected $Provinces;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Provinces',
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
        $config = TableRegistry::getTableLocator()->exists('Provinces') ? [] : ['className' => ProvincesTable::class];
        $this->Provinces = TableRegistry::getTableLocator()->get('Provinces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Provinces);

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
