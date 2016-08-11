<?php
App::uses('Merk', 'Model');

/**
 * Merk Test Case
 *
 */
class MerkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.merk',
		'app.penjualan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Merk = ClassRegistry::init('Merk');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Merk);

		parent::tearDown();
	}

}
