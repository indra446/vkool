<?php
App::uses('Daftar', 'Model');

/**
 * Daftar Test Case
 *
 */
class DaftarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.daftar',
		'app.pasien',
		'app.identity',
		'app.inap',
		'app.dokter',
		'app.poli',
		'app.jalan',
		'app.tindakan',
		'app.kamar',
		'app.jaminan',
		'app.riwayat',
		'app.riwayat_obat',
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
		$this->Daftar = ClassRegistry::init('Daftar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Daftar);

		parent::tearDown();
	}

}
