<?php
App::uses('People', 'Model');

/**
 * People Test Case
 */
class PeopleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.people'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->People = ClassRegistry::init('People');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->People);

		parent::tearDown();
	}

}
