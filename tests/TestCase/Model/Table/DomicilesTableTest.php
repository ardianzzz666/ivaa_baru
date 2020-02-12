<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DomicilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DomicilesTable Test Case
 */
class DomicilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DomicilesTable
     */
    protected $Domiciles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Domiciles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Domiciles') ? [] : ['className' => DomicilesTable::class];
        $this->Domiciles = TableRegistry::getTableLocator()->get('Domiciles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Domiciles);

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
