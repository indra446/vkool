<?php
App::uses('Kamar', 'Model');

/**
 * Kamar Test Case
 *
 */
class KamarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kamar',
		'app.inap',
		'app.pasien',
		'app.dokter',
		'app.jalan',
		'app.tindakan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kamar = ClassRegistry::init('Kamar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kamar);

		parent::tearDown();
	}

}
