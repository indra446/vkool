<?php
/**
 * PembelianFixture
 *
 */
class PembelianFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nomor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tgl_transaksi' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'vendor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ket' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'jml' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ukuran' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'potongan' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'biaya_kirim' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'nomor' => 'Lorem ipsum dolor sit amet',
			'tgl_transaksi' => '2016-05-04 11:15:03',
			'vendor_id' => 1,
			'ket' => 'Lorem ipsum dolor sit amet',
			'product_id' => 1,
			'jml' => 'Lorem ipsum dolor sit amet',
			'ukuran' => 'Lorem ipsum dolor sit amet',
			'potongan' => 'Lorem ipsum dolor sit amet',
			'biaya_kirim' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'created' => '2016-05-04 11:15:03',
			'modified' => '2016-05-04 11:15:03'
		),
	);

}
