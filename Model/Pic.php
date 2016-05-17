<?php
App::uses('AppModel', 'Model');
/**
 * Pic Model
 *
 * @property PicVendor $PicVendor
 */
class Pic extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'PicVendor' => array(
			'className' => 'PicVendor',
			'foreignKey' => 'pic_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
