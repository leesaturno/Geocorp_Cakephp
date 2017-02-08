<?php
App::uses('SituacionConyugal', 'Model');

/**
 * SituacionConyugal Test Case
 */
class SituacionConyugalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.situacion_conyugal',
		'app.history',
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
		'app.comun',
		'app.geolocation',
		'app.question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SituacionConyugal = ClassRegistry::init('SituacionConyugal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SituacionConyugal);

		parent::tearDown();
	}

}
