<?php
App::uses('Jaminan', 'Model');

/**
 * Jaminan Test Case
 *
 */
class JaminanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jaminan',
		'app.riwayat',
		'app.pasien',
		'app.identity',
		'app.daftar',
		'app.poli',
		'app.dokter',
		'app.inap',
		'app.tindakan',
		'app.jalan',
		'app.kamar'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Jaminan = ClassRegistry::init('Jaminan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jaminan);

		parent::tearDown();
	}

}
