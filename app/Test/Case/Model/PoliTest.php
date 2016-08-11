<?php
App::uses('Poli', 'Model');

/**
 * Poli Test Case
 *
 */
class PoliTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.poli',
		'app.daftar',
		'app.pasien',
		'app.identities',
		'app.inap',
		'app.dokter',
		'app.jalan',
		'app.tindakan',
		'app.kamar'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Poli = ClassRegistry::init('Poli');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Poli);

		parent::tearDown();
	}

}
