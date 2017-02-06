<?php
App::uses('Hospitale', 'Model');

/**
 * Hospitale Test Case
 */
class HospitaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospitale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hospitale = ClassRegistry::init('Hospitale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hospitale);

		parent::tearDown();
	}

}
