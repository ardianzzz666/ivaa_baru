<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArtistsCollectivesFixture
 */
class ArtistsCollectivesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'artist_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'collective_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'artist_id' => ['type' => 'index', 'columns' => ['artist_id'], 'length' => []],
            'collective_id' => ['type' => 'index', 'columns' => ['collective_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'artists_collectives_ibfk_1' => ['type' => 'foreign', 'columns' => ['artist_id'], 'references' => ['artists', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'artists_collectives_ibfk_2' => ['type' => 'foreign', 'columns' => ['collective_id'], 'references' => ['collectives', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'artist_id' => 1,
                'collective_id' => 1,
            ],
        ];
        parent::init();
    }
}
