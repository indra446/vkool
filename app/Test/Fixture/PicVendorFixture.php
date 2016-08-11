<?php
/**
 * PicVendorFixture
 *
 */
class PicVendorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'karyawan_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'pic_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'karyawan_id' => 1,
			'pic_id' => 1,
			'created' => '2016-05-04 11:15:12',
			'modified' => '2016-05-04 11:15:12'
		),
	);

}
