<?php
App::uses('Tindakan', 'Model');

/**
 * Tindakan Test Case
 *
 */
class TindakanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tindakan',
		'app.daftar',
		'app.pasien',
		'app.identities',
		'app.inap',
		'app.dokter',
		'app.jalan',
		'app.kamar',
		'app.poli'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tindakan = ClassRegistry::init('Tindakan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tindakan);

		parent::tearDown();
	}

}
