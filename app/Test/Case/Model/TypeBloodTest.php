<?php
App::uses('TypeBlood', 'Model');

/**
 * TypeBlood Test Case
 */
class TypeBloodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type_blood'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TypeBlood = ClassRegistry::init('TypeBlood');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TypeBlood);

		parent::tearDown();
	}

}
