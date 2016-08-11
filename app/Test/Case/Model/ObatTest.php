<?php
App::uses('Obat', 'Model');

/**
 * Obat Test Case
 *
 */
class ObatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Obat = ClassRegistry::init('Obat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Obat);

		parent::tearDown();
	}

}
