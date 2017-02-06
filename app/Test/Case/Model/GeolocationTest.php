<?php
App::uses('Geolocation', 'Model');

/**
 * Geolocation Test Case
 */
class GeolocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.geolocation',
		'app.patient',
		'app.person',
		'app.ocupacion',
		'app.doctor',
		'app.hospitales',
		'app.cargo',
		'app.profesion',
		'app.inform',
		'app.type_blood',
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
		$this->Geolocation = ClassRegistry::init('Geolocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Geolocation);

		parent::tearDown();
	}

}
