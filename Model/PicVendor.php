<?php
App::uses('AppModel', 'Model');
/**
 * PicVendor Model
 *
 * @property Karyawan $Karyawan
 * @property Pic $Pic
 */
class PicVendor extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'pic_id' => array(
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
		'Karyawan' => array(
			'className' => 'Karyawan',
			'foreignKey' => 'karyawan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pic' => array(
			'className' => 'Pic',
			'foreignKey' => 'pic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
