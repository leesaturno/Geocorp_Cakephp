<?php
/**
 * History Fixture
 */
class HistoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'anos_aprobados' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'unsigned' => false),
		'numero_hijo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'situacion_conyugal_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'analfabeta' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nivel_educativo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'observaciones' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'doctors_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_history_patients1_idx' => array('column' => 'patient_id', 'unique' => 0),
			'fk_historys_doctors1_idx' => array('column' => 'doctors_id', 'unique' => 0)
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
			'anos_aprobados' => 1,
			'numero_hijo' => '',
			'situacion_conyugal_id' => 1,
			'analfabeta' => 'Lorem ip',
			'nivel_educativo_id' => 1,
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'patient_id' => 1,
			'created' => '2017-02-05 18:25:16',
			'modified' => '2017-02-05 18:25:16',
			'doctors_id' => 1
		),
	);

}
