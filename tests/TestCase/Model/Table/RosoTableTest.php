<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RosoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RosoTable Test Case
 */
class RosoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RosoTable
     */
    protected $Roso;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Roso',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Roso') ? [] : ['className' => RosoTable::class];
        $this->Roso = TableRegistry::getTableLocator()->get('Roso', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Roso);

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
