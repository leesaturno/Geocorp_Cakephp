<?php
App::uses('Profesion', 'Model');

/**
 * Profesion Test Case
 */
class ProfesionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.profesion',
		'app.doctor',
		'app.person',
		'app.ocupacion',
		'app.patient',
		'app.history',
		'app.question',
		'app.etnia',
		'app.pais',
		'app.municipio',
		'app.parroquia',
		'app.comun',
		'app.geolocation',
		'app.inform',
		'app.hospitales',
		'app.cargo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Profesion = ClassRegistry::init('Profesion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Profesion);

		parent::tearDown();
	}

}
