<?php
App::uses('TypeUltrasound', 'Model');

/**
 * TypeUltrasound Test Case
 */
class TypeUltrasoundTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type_ultrasound',
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
		$this->TypeUltrasound = ClassRegistry::init('TypeUltrasound');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TypeUltrasound);

		parent::tearDown();
	}

}
