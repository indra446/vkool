<?php
App::uses('Pembelian', 'Model');

/**
 * Pembelian Test Case
 *
 */
class PembelianTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pembelian',
		'app.vendor',
		'app.product',
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
		$this->Pembelian = ClassRegistry::init('Pembelian');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pembelian);

		parent::tearDown();
	}

}
