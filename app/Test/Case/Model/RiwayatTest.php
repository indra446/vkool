<?php
App::uses('Riwayat', 'Model');

/**
 * Riwayat Test Case
 *
 */
class RiwayatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.riwayat',
		'app.daftar',
		'app.pasien',
		'app.identity',
		'app.inap',
		'app.dokter',
		'app.poli',
		'app.jalan',
		'app.tindakan',
		'app.kamar',
		'app.jaminan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Riwayat = ClassRegistry::init('Riwayat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Riwayat);

		parent::tearDown();
	}

}
