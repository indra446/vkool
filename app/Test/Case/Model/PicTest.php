<?php
App::uses('Pic', 'Model');

/**
 * Pic Test Case
 *
 */
class PicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pic',
		'app.pic_vendor',
		'app.karyawan',
		'app.unit',
		'app.detail_penjualan',
		'app.penjualan',
		'app.customer',
		'app.merk',
		'app.user',
		'app.group',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pic = ClassRegistry::init('Pic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pic);

		parent::tearDown();
	}

}
