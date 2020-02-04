<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KhazanahCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KhazanahCategoriesTable Test Case
 */
class KhazanahCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KhazanahCategoriesTable
     */
    protected $KhazanahCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.KhazanahCategories',
        'app.Khazanahs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('KhazanahCategories') ? [] : ['className' => KhazanahCategoriesTable::class];
        $this->KhazanahCategories = TableRegistry::getTableLocator()->get('KhazanahCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->KhazanahCategories);

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
