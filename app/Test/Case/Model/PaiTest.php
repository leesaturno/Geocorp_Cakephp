<?php
App::uses('Pai', 'Model');

/**
 * Pai Test Case
 */
class PaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pai = ClassRegistry::init('Pai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pai);

		parent::tearDown();
	}

}
