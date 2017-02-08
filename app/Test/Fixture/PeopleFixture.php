<?php
/**
 * People Fixture
 */
class PeopleFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'peoples';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cedula' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 80, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_nac' => array('type' => 'date', 'null' => false, 'default' => null),
		'rol' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'cedula' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor ',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'fecha_nac' => '2017-01-28',
			'rol' => 1,
			'created' => '2017-01-28 20:26:19',
			'modified' => '2017-01-28 20:26:19'
		),
	);

}
