<?php
App::uses('Medicamento', 'Model');

/**
 * Medicamento Test Case
 */
class MedicamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.medicamento',
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
		$this->Medicamento = ClassRegistry::init('Medicamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Medicamento);

		parent::tearDown();
	}

}
