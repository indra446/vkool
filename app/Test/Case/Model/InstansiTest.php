<?php
App::uses('Instansi', 'Model');

/**
 * Instansi Test Case
 *
 */
class InstansiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.instansi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Instansi = ClassRegistry::init('Instansi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Instansi);

		parent::tearDown();
	}

}
