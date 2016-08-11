<?php
App::uses('Obcategori', 'Model');

/**
 * Obcategori Test Case
 *
 */
class ObcategoriTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.obcategori',
		'app.obat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Obcategori = ClassRegistry::init('Obcategori');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Obcategori);

		parent::tearDown();
	}

}
