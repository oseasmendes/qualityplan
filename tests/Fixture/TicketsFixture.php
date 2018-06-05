<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TicketsFixture
 *
 */
class TicketsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'typeticket_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'stat_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'formversion' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'numeroreferencia' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'data' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'departamento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'vendor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'registrototal' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'unidade' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'setup' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'retrabalho' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'estoque' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'partnumber' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'partnumbercliente' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'quantidade' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'tecnico_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fase_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'historico' => ['type' => 'text', 'length' => 4294967295, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'descricaoresumida' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'projeto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_tick_status_idx' => ['type' => 'index', 'columns' => ['stat_id'], 'length' => []],
            'fk_tick_typeticket_idx' => ['type' => 'index', 'columns' => ['typeticket_id'], 'length' => []],
            'fk_tick_departdest_idx' => ['type' => 'index', 'columns' => ['departamento_id'], 'length' => []],
            'fk_tick_vendor_idx' => ['type' => 'index', 'columns' => ['vendor_id'], 'length' => []],
            'fk_tick_tecnico_idx' => ['type' => 'index', 'columns' => ['tecnico_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_tick_departdest' => ['type' => 'foreign', 'columns' => ['departamento_id'], 'references' => ['departamentos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_tick_status' => ['type' => 'foreign', 'columns' => ['stat_id'], 'references' => ['stats', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_tick_tecnico' => ['type' => 'foreign', 'columns' => ['tecnico_id'], 'references' => ['tecnicos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_tick_typeticket' => ['type' => 'foreign', 'columns' => ['typeticket_id'], 'references' => ['typetickets', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_tick_vendor' => ['type' => 'foreign', 'columns' => ['vendor_id'], 'references' => ['vendors', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
                'typeticket_id' => 1,
                'stat_id' => 1,
                'formversion' => 'Lorem ipsum dolor sit amet',
                'numeroreferencia' => 'Lorem ipsum dolor sit amet',
                'data' => '2018-05-11',
                'departamento_id' => 1,
                'vendor_id' => 1,
                'registrototal' => 1.5,
                'unidade' => 'Lorem ipsum dolor sit amet',
                'setup' => 1.5,
                'retrabalho' => 1.5,
                'estoque' => 1.5,
                'partnumber' => 'Lorem ipsum dolor ',
                'partnumbercliente' => 'Lorem ipsum dolor ',
                'quantidade' => 1.5,
                'tecnico_id' => 1,
                'fase_id' => 1,
                'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2018-05-11 17:45:07',
                'modified' => '2018-05-11 17:45:07',
                'descricaoresumida' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'projeto_id' => 1
            ],
        ];
        parent::init();
    }
}
