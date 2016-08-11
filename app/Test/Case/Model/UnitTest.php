<?php
App::uses('Unit', 'Model');

/**
 * Unit Test Case
 *
 */
class UnitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.unit',
		'app.karyawan',
		'app.detail_penjualan',
		'app.penjualan',
		'app.customer',
		'app.merk',
		'app.user',
		'app.group',
		'app.product',
		'app.category',
		'app.pembelian',
		'app.vendor',
		'app.stok',
		'app.pic_vendor',
		'app.pic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Unit = ClassRegistry::init('Unit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Unit);

		parent::tearDown();
	}

}
