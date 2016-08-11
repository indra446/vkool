<?php
App::uses('Stok', 'Model');

/**
 * Stok Test Case
 *
 */
class StokTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stok',
		'app.product',
		'app.category',
		'app.detail_penjualan',
		'app.penjualan',
		'app.customer',
		'app.merk',
		'app.user',
		'app.group',
		'app.karyawan',
		'app.unit',
		'app.pic_vendor',
		'app.pic',
		'app.pembelian',
		'app.vendor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Stok = ClassRegistry::init('Stok');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Stok);

		parent::tearDown();
	}

}
