<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtworksFilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtworksFilesTable Test Case
 */
class ArtworksFilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtworksFilesTable
     */
    protected $ArtworksFiles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ArtworksFiles',
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
        $config = TableRegistry::getTableLocator()->exists('ArtworksFiles') ? [] : ['className' => ArtworksFilesTable::class];
        $this->ArtworksFiles = TableRegistry::getTableLocator()->get('ArtworksFiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ArtworksFiles);

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
