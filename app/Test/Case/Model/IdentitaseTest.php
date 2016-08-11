<?php
App::uses('Identitase', 'Model');

/**
 * Identitase Test Case
 *
 */
class IdentitaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.identitase'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Identitase = ClassRegistry::init('Identitase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Identitase);

		parent::tearDown();
	}

}
