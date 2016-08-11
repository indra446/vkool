<?php
App::uses('Jalan', 'Model');

/**
 * Jalan Test Case
 *
 */
class JalanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jalan',
		'app.pasien',
		'app.dokter',
		'app.inap',
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
		$this->Jalan = ClassRegistry::init('Jalan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jalan);

		parent::tearDown();
	}

}
