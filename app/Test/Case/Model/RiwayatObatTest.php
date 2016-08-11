<?php
App::uses('RiwayatObat', 'Model');

/**
 * RiwayatObat Test Case
 *
 */
class RiwayatObatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.riwayat_obat',
		'app.daftar',
		'app.pasien',
		'app.identity',
		'app.inap',
		'app.dokter',
		'app.poli',
		'app.jalan',
		'app.tindakan',
		'app.kamar',
		'app.obat',
		'app.obcategori'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RiwayatObat = ClassRegistry::init('RiwayatObat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RiwayatObat);

		parent::tearDown();
	}

}
