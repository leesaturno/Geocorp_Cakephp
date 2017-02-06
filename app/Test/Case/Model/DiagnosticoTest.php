<?php
App::uses('Diagnostico', 'Model');

/**
 * Diagnostico Test Case
 */
class DiagnosticoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.diagnostico',
		'app.inform',
		'app.patient',
		'app.person',
		'app.ocupacion',
		'app.doctor',
		'app.hospitales',
		'app.cargo',
		'app.profesion',
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
		$this->Diagnostico = ClassRegistry::init('Diagnostico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Diagnostico);

		parent::tearDown();
	}

}
