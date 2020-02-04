<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ArtworksController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ArtworksController Test Case
 *
 * @uses \App\Controller\ArtworksController
 */
class ArtworksControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
        'app.ArtworksEvents',
        'app.ArtworksKhazanahs',
        'app.ArtworksMedia',
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
