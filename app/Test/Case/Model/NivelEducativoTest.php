<?php
App::uses('NivelEducativo', 'Model');

/**
 * NivelEducativo Test Case
 */
class NivelEducativoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nivel_educativo',
		'app.history',
		'app.patient',
		'app.person',
		'app.ocupacion',
		'app.doctor',
		'app.hospitales',
		'app.cargo',
		'app.profesion',
		'app.inform',
		'app.type_blood',
		'app.geolocation',
		'app.ultrasound',
		'app.type_ultrasounds',
		'app.question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NivelEducativo = ClassRegistry::init('NivelEducativo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NivelEducativo);

		parent::tearDown();
	}

}
