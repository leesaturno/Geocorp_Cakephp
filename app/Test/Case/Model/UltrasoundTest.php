<?php
App::uses('Ultrasound', 'Model');

/**
 * Ultrasound Test Case
 */
class UltrasoundTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ultrasound',
		'app.type_ultrasounds',
		'app.patient',
		'app.etnia',
		'app.person',
		'app.ocupacion',
		'app.doctor',
		'app.hospitales',
		'app.cargo',
		'app.profesion',
		'app.inform',
		'app.country',
		'app.municipio',
		'app.parroquia',
		'app.type_blood',
		'app.comun',
		'app.geolocation',
		'app.history',
		'app.question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ultrasound = ClassRegistry::init('Ultrasound');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ultrasound);

		parent::tearDown();
	}

}
