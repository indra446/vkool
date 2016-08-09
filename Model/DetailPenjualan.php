<?php
App::uses('AppModel', 'Model');
/**
 * DetailPenjualan Model
 *
 * @property Penjualan $Penjualan
 * @property Product $Product
 * @property Karyawan $Karyawan
 */
class DetailPenjualan extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'penjualan_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'product_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'karyawan_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Penjualan' => array(
			'className' => 'Penjualan',
			'foreignKey' => 'penjualan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'id_product',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Karyawan' => array(
			'className' => 'Karyawan',
			'foreignKey' => 'id_karyawan',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
