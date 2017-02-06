<?php
App::uses('Comun', 'Model');

/**
 * Comun Test Case
 */
class ComunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comun',
		'app.patient',
		'app.history',
		'app.question',
		'app.doctor',
		'app.person',
		'app.ocupacion',
		'app.hospitales',
		'app.cargo',
		'app.profesion',
		'app.inform',
		'app.etnia',
		'app.pais',
		'app.municipio',
		'app.parroquia',
		'app.geolocation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comun = ClassRegistry::init('Comun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comun);

		parent::tearDown();
	}

}
