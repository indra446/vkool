<?php
App::uses('Product', 'Model');

/**
 * Product Test Case
 *
 */
class ProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.vendor',
		'app.stok'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Product = ClassRegistry::init('Product');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Product);

		parent::tearDown();
	}

}
