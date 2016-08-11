<?php
App::uses('Dokter', 'Model');

/**
 * Dokter Test Case
 *
 */
class DokterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dokter',
		'app.inap',
		'app.pasien',
		'app.identity',
		'app.daftar',
		'app.poli',
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
		$this->Dokter = ClassRegistry::init('Dokter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dokter);

		parent::tearDown();
	}

}
