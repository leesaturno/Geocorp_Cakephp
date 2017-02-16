<?php
App::uses('Inform', 'Model');

/**
 * Inform Test Case
 */
class InformTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inform',
		'app.medicament',
		'app.diagnostico',
		'app.patient',
		'app.etnia',
		'app.person',
		'app.ocupacion',
		'app.doctor',
		'app.hospitales',
		'app.cargo',
		'app.specialties',
		'app.country',
		'app.municipio',
		'app.hospitale',
		'app.localization',
		'app.parroquia',
		'app.type_blood',
		'app.history',
		'app.situacion_conyugal',
		'app.nivel_educativo',
		'app.question',
		'app.ultrasound',
		'app.type_ultrasound'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Inform = ClassRegistry::init('Inform');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inform);

		parent::tearDown();
	}

}
