<?php
/**
 * Inform Fixture
 */
class InformFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indicaciones' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'medicament_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'diagnostico_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'conclusiones' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'doctor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_informs_patients1_idx' => array('column' => 'patient_id', 'unique' => 0),
			'fk_informs_doctor1_idx' => array('column' => 'doctor_id', 'unique' => 0)
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
			'indicaciones' => 'Lorem ipsum dolor sit amet',
			'medicament_id' => 1,
			'diagnostico_id' => 1,
			'conclusiones' => 'Lorem ipsum dolor sit amet',
			'patient_id' => 1,
			'doctor_id' => 1,
<<<<<<< HEAD
			'created' => '2017-02-16 20:08:48',
			'modified' => '2017-02-16 20:08:48'
=======
			'created' => '2017-02-16 20:33:13',
			'modified' => '2017-02-16 20:33:13'
>>>>>>> d59bf00910bcafac792a452682c54175c0304eeb
		),
	);

}
