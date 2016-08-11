<?php
App::uses('Pasien', 'Model');

/**
 * Pasien Test Case
 *
 */
class PasienTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pasien',
		'app.identitas',
		'app.daftar',
		'app.poli',
		'app.tindakan',
		'app.inap',
		'app.dokter',
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
		$this->Pasien = ClassRegistry::init('Pasien');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pasien);

		parent::tearDown();
	}

}
