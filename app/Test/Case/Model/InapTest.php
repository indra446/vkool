<?php
App::uses('Inap', 'Model');

/**
 * Inap Test Case
 *
 */
class InapTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inap',
		'app.pasien',
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
		$this->Inap = ClassRegistry::init('Inap');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inap);

		parent::tearDown();
	}

}
