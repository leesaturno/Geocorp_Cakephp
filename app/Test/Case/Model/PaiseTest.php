<?php
App::uses('Paise', 'Model');

/**
 * Paise Test Case
 */
class PaiseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paise'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paise = ClassRegistry::init('Paise');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paise);

		parent::tearDown();
	}

}
