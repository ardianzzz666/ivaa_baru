<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtworksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtworksTable Test Case
 */
class ArtworksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtworksTable
     */
    protected $Artworks;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Artworks',
        'app.ArtworksCategories',
        'app.ArtworksCreators',
        'app.ArtworksFiles',
        'app.Events',
        'app.Khazanahs',
        'app.Media',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Artworks') ? [] : ['className' => ArtworksTable::class];
        $this->Artworks = TableRegistry::getTableLocator()->get('Artworks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Artworks);

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
