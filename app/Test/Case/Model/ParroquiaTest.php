<?php
App::uses('Parroquia', 'Model');

/**
 * Parroquia Test Case
 */
class ParroquiaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parroquia',
		'app.patient',
		'app.person',
		'app.ocupacion',
		'app.doctor',
		'app.hospitales',
		'app.cargo',
		'app.profesion',
		'app.inform',
		'app.type_blood',
		'app.geolocation',
		'app.history',
		'app.question',
		'app.ultrasound',
		'app.type_ultrasounds'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Parroquia = ClassRegistry::init('Parroquia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Parroquia);

		parent::tearDown();
	}

}
