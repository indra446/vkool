<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Group $Group
 * @property TbSkpd $TbSkpd
 * @property TbMusrenbang $TbMusrenbang
 * @property TbRenja $TbRenja
 */
class User extends AppModel {

	public $validate = array(
	'nama_admin' => array(
	'rule' => 'notEmpty',
        'required' => true
    ),
    
    'username' => array(
        'required' => array(
        	'rule' => 'notEmpty',
        	'required' => true,
        	'message'=>'Tidak boleh kosong'
		),
        'unique' => array(
        	'rule' => 'isUnique',
        	'required' => 'create',
        	'message'=>'Username sudah dipakai'
   		 ),
        'alphanumeric' => array(
        	'rule' => 'alphanumeric',
			'message'=>'Hanya boleh alphanumeric')
    	),
    	'group_id' => array(
    	'rule' => 'notEmpty',
        'required'   => true,
        'allowEmpty' => false,
        'message'    => 'Pilih satu group user'
    ),
   /* 'password'=>array(
    'required' => array(
        'rule' => 'notEmpty',
        'required' => 'create'),
		'identicalFieldValues' => array(
        'rule' => array('identicalFieldValues', 'password_control' ),'message' => 'Password tidak sama' ))*/
          'password' => array('rule' => array('confirmPassword', 'password'),
                            'message' => 'Password tidak sama'),
      'password_control' => array('rule' => 'alphanumeric',
                                    'required' => true)
        
);

    public function confirmPassword($data) {
        $valid = false;

        if ($data['password'] == $this->data['User']['password']) {
            $valid = true;
        }

        return $valid;
    }

	public function bindNode($user) {
		return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
	}
	public $actsAs = array('Acl' => array('type' => 'requester'));

	public function parentNode() {
		if (!$this -> id && empty($this -> data)) {
			return null;
		}
		if (isset($this -> data['User']['group_id'])) {
			$groupId = $this -> data['User']['group_id'];
		} else {
			$groupId = $this -> field('group_id');
		}
		if (!$groupId) {
			return null;
		} else {
			return array('Group' => array('id' => $groupId));
		}
	}



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Karyawan' => array(
			'className' => 'Karyawan',
			'foreignKey' => 'karyawan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
