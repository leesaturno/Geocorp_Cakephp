<?php
App::uses('Localization', 'Model');

/**
 * Localization Test Case
 */
class LocalizationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.localization',
		'app.hospitale',
		'app.patient',
		'app.etnia',
		'app.person',
		'app.ocupacion',
		'app.doctor',
		'app.hospitales',
		'app.cargo',
		'app.specialties',
		'app.inform',
		'app.medicamentos',
		'app.country',
		'app.municipio',
		'app.parroquia',
		'app.type_blood',
		'app.history',
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
		$this->Localization = ClassRegistry::init('Localization');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Localization);

		parent::tearDown();
	}

}
