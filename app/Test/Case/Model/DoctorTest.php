<?php
App::uses('Doctor', 'Model');

/**
 * Doctor Test Case
 */
class DoctorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.doctor',
		'app.person',
		'app.ocupacion',
		'app.patient',
		'app.type_blood',
		'app.geolocation',
		'app.history',
		'app.question',
		'app.ultrasound',
		'app.type_ultrasounds',
		'app.hospitales',
		'app.cargo',
		'app.profesion',
		'app.inform'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Doctor = ClassRegistry::init('Doctor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Doctor);

		parent::tearDown();
	}

}
