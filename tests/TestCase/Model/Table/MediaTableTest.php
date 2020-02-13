<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MediaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MediaTable Test Case
 */
class MediaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MediaTable
     */
    protected $Media;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Media',
        'app.Artworks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Media') ? [] : ['className' => MediaTable::class];
        $this->Media = TableRegistry::getTableLocator()->get('Media', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Media);

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
