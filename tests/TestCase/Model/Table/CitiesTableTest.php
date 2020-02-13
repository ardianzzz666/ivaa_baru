<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CitiesTable Test Case
 */
class CitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CitiesTable
     */
    protected $Cities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cities') ? [] : ['className' => CitiesTable::class];
        $this->Cities = TableRegistry::getTableLocator()->get('Cities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cities);

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
