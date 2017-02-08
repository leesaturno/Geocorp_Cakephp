<?php
App::uses('Specialty', 'Model');

/**
 * Specialty Test Case
 */
class SpecialtyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.specialty'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Specialty = ClassRegistry::init('Specialty');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Specialty);

		parent::tearDown();
	}

}
