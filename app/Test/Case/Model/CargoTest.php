<?php
App::uses('Cargo', 'Model');

/**
 * Cargo Test Case
 */
class CargoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cargo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cargo = ClassRegistry::init('Cargo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cargo);

		parent::tearDown();
	}

}
