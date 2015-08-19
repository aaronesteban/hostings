<?php
/**
 * ServicioFixture
 *
 */
class ServicioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cliente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'proveedor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vencimiento' => array('type' => 'date', 'null' => true, 'default' => null),
		'pvp' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 6, 'unsigned' => false),
		'cancelado' => array('type' => 'boolean', 'null' => false, 'default' => null),
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
			'user_id' => 1,
			'cliente_id' => 1,
			'proveedor_id' => 1,
			'name' => 'Lorem ipsum dolor sit a',
			'vencimiento' => '2015-07-21',
			'pvp' => '',
			'cancelado' => 1
		),
	);

}
