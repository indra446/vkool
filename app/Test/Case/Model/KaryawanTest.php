<?php
App::uses('Karyawan', 'Model');

/**
 * Karyawan Test Case
 *
 */
class KaryawanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.karyawan',
		'app.unit',
		'app.detail_penjualan',
		'app.penjualan',
		'app.product',
		'app.pic_vendor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Karyawan = ClassRegistry::init('Karyawan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Karyawan);

		parent::tearDown();
	}

}
