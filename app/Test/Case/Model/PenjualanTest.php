<?php
App::uses('Penjualan', 'Model');

/**
 * Penjualan Test Case
 *
 */
class PenjualanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.penjualan',
		'app.customer',
		'app.merk',
		'app.user',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Penjualan = ClassRegistry::init('Penjualan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Penjualan);

		parent::tearDown();
	}

}
