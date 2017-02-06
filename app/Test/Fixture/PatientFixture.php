<?php
/**
 * Patient Fixture
 */
class PatientFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'etnia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'urbanizacion_res' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'avenida_res' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'casa_res' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'piso_res' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tiempo_residencia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'municipio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'parroquia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'type_blood_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fpp' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fun' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'comun_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ocupacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'etnia_id' => 1,
			'person_id' => 1,
			'urbanizacion_res' => 'Lorem ipsum dolor sit amet',
			'avenida_res' => 'Lorem ipsum dolor sit amet',
			'casa_res' => 'Lorem ipsum dolor ',
			'piso_res' => 'Lorem ipsum dolor ',
			'tiempo_residencia' => 'L',
			'country_id' => 1,
			'municipio_id' => 1,
			'parroquia_id' => 1,
			'type_blood_id' => 1,
			'fpp' => 1,
			'fun' => 1,
			'comun_id' => 1,
			'ocupacion_id' => 1,
			'created' => '2017-02-06 00:38:34',
			'modified' => '2017-02-06 00:38:34'
		),
	);

}
