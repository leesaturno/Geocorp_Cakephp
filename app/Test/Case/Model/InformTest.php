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
		'app.patients',
		'app.doctor',
		'app.person',
		'app.specialty',
		'app.history'
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
