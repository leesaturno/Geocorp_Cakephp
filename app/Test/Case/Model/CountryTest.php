<?php
App::uses('Country', 'Model');

/**
 * Country Test Case
 */
class CountryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.country',
		'app.patient',
		'app.etnia',
		'app.person',
		'app.ocupacion',
		'app.doctor',
		'app.hospitales',
		'app.cargo',
		'app.profesion',
		'app.inform',
		'app.pais',
		'app.municipio',
		'app.parroquia',
		'app.type_bloods',
		'app.comun',
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
		$this->Country = ClassRegistry::init('Country');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Country);

		parent::tearDown();
	}

}
