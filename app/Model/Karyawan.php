<?php
App::uses('AppModel', 'Model');
/**
 * Karyawan Model
 *
 * @property Unit $Unit
 * @property DetailPenjualan $DetailPenjualan
 * @property PicVendor $PicVendor
 */
class Karyawan extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
//		'unit_id' => array(
//			'numeric' => array(
//				'rule' => array('numeric'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
//	public $belongsTo = array(
//		'Unit' => array(
//			'className' => 'Unit',
//			'foreignKey' => 'unit_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		)
//	);

/**
 * hasMany associations
 *
 * @var array
 */
//	public $hasMany = array(
//		'DetailPenjualan' => array(
//			'className' => 'DetailPenjualan',
//			'foreignKey' => 'karyawan_id',
//			'dependent' => false,
//			'conditions' => '',
//			'fields' => '',
//			'order' => '',
//			'limit' => '',
//			'offset' => '',
//			'exclusive' => '',
//			'finderQuery' => '',
//			'counterQuery' => ''
//		)
//	);

}
