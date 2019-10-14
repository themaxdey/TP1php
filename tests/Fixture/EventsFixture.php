<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsFixture
 */
class EventsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'asset_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'company_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'type' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf32_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        'date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'invoice' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'description' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf32_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        'efface' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK Customer_ID' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'PK Event_ID' => ['type' => 'index', 'columns' => ['id'], 'length' => []],
            'FK_Register_ID' => ['type' => 'index', 'columns' => ['asset_id'], 'length' => []],
            'id' => ['type' => 'index', 'columns' => ['id'], 'length' => []],
            'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'asset_id' => ['type' => 'index', 'columns' => ['asset_id'], 'length' => []],
            'user_id_2' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'id_2' => ['type' => 'index', 'columns' => ['id'], 'length' => []],
            'asset_id_2' => ['type' => 'index', 'columns' => ['asset_id'], 'length' => []],
            'company_id' => ['type' => 'index', 'columns' => ['company_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'events_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['Users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'events_ibfk_2' => ['type' => 'foreign', 'columns' => ['asset_id'], 'references' => ['Assets', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'events_ibfk_3' => ['type' => 'foreign', 'columns' => ['company_id'], 'references' => ['Companies', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf32_bin'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'asset_id' => 1,
                'company_id' => 1,
                'type' => 'Lorem ipsum dolor sit amet',
                'date' => '2019-10-11',
                'invoice' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'efface' => 1
            ],
        ];
        parent::init();
    }
}
