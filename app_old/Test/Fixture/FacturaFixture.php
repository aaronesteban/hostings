<?php
/**
 * FacturaFixture
 *
 */
class FacturaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'servicio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'pagado' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'fecha' => array('type' => 'date', 'null' => true, 'default' => null),
		'pvp' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 6, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'servicio_id' => 1,
			'pagado' => 1,
			'fecha' => '2015-07-21',
			'pvp' => '',
			'created' => '2015-07-21 14:13:56',
			'modified' => '2015-07-21 14:13:56'
		),
	);

}
