<?php
/**
 * Doctor Fixture
 */
class DoctorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cod_sanitarios' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sexo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hospitales_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'profesion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_grado' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'person_id' => 1,
			'cod_sanitarios' => 'Lorem ipsum dolor sit amet',
			'sexo' => 'Lorem ipsum dolor sit ame',
			'status' => 'Lorem ipsum dolor ',
			'hospitales_id' => 1,
			'cargo_id' => 1,
			'profesion_id' => 1,
			'fecha_grado' => '2017-02-05',
			'created' => '2017-02-05 16:48:46',
			'modified' => '2017-02-05 16:48:46'
		),
	);

}
