<?php
/**
 * ClienteFixture
 *
 */
class ClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_estonian_ci', 'charset' => 'utf8'),
		'cif' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'collate' => 'utf8_estonian_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_estonian_ci', 'charset' => 'utf8'),
		'cp' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_estonian_ci', 'charset' => 'utf8'),
		'localidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_estonian_ci', 'charset' => 'utf8'),
		'provincia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_estonian_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_estonian_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'cif' => 'Lorem i',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'cp' => 'Lorem ip',
			'localidad' => 'Lorem ipsum dolor sit amet',
			'provincia' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-07-21 14:10:52',
			'modified' => '2015-07-21 14:10:52'
		),
	);

}
