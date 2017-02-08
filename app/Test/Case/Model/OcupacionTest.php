<?php
App::uses('Ocupacion', 'Model');

/**
 * Ocupacion Test Case
 */
class OcupacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ocupacion',
		'app.patient',
		'app.person',
		'app.doctor',
		'app.specialty',
		'app.history',
		'app.question',
		'app.inform',
		'app.type_blood',
		'app.geolocation',
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
		$this->Ocupacion = ClassRegistry::init('Ocupacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ocupacion);

		parent::tearDown();
	}

}
