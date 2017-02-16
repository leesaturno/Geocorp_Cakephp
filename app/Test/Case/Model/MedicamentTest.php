<?php
App::uses('Medicament', 'Model');

/**
 * Medicament Test Case
 */
class MedicamentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.medicament',
		'app.inform',
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
		'app.type_ultrasound',
		'app.medicamentos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Medicament = ClassRegistry::init('Medicament');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Medicament);

		parent::tearDown();
	}

}
