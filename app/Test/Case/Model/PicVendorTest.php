<?php
App::uses('PicVendor', 'Model');

/**
 * PicVendor Test Case
 *
 */
class PicVendorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pic_vendor',
		'app.karyawan',
		'app.unit',
		'app.detail_penjualan',
		'app.penjualan',
		'app.customer',
		'app.merk',
		'app.user',
		'app.group',
		'app.product',
		'app.pic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PicVendor = ClassRegistry::init('PicVendor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PicVendor);

		parent::tearDown();
	}

}
