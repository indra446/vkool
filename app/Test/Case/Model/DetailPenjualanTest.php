<?php
App::uses('DetailPenjualan', 'Model');

/**
 * DetailPenjualan Test Case
 *
 */
class DetailPenjualanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detail_penjualan',
		'app.penjualan',
		'app.product',
		'app.karyawan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetailPenjualan = ClassRegistry::init('DetailPenjualan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetailPenjualan);

		parent::tearDown();
	}

}
