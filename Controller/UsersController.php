<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this -> Auth -> allow('logout', 'login', 'initDB');
		// We can remove this line after we're finished
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this -> User -> recursive = 0;

		$this -> set('users', $this -> paginate());

	}

	public function login() {
		//Auth Magic

		if ($this -> request -> is('post')) {
			if ($this -> Auth -> login()) {
				$this -> redirect($this -> Auth -> redirect());
				$_SESSION['KCFINDER']['disabled'] = false;
			} else {
				$this -> Session -> setFlash('Username/Password Anda salah', 'error');
			}
		}

		if ($this -> Session -> read('Auth.User')) {
			$this -> Session -> setFlash('Anda berhasil masuk', 'success');
			$this -> redirect('/', null, false);
		}
	}

	public function logout() {
            $this->Session->destroy();
            $this->Session->setFlash('Good-Bye', 'info');
            $this->redirect($this->Auth->logout());
            unset($_SESSION["cart_depan"]);
            unset($_SESSION["cart_samping"]);
            unset($_SESSION["cart_belakang"]);
            unset($_SESSION["cart_aksesoris"]);
            unset($_SESSION["cart_service"]);
        //Leave empty for now.
    }

    /**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this -> User -> exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this -> User -> primaryKey => $id));
		$this -> set('user', $this -> User -> find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		$this -> loadModel("Karyawan");
		if ($this -> request -> is('post')) {
			$data = $this -> Karyawan -> find('first', array('conditions' => array('Karyawan.id' => $this -> request -> data['User']['karyawan_id'])));
			$this -> User -> create();
			// debug($this -> request -> data);
			// die();
			$this -> request -> data['User']['nama_admin'] = $data['Karyawan']['nama'];
			$this -> request -> data['User']['password'] = $this -> request -> data['password'];
			$this -> request -> data['User']['password_control'] = $this -> request -> data['confirm_password'];
			$t = strlen($this -> request -> data['User']['password']);
			if ($t > 39) {
				$this -> request -> data['User']['password'] = $this -> request -> data['User']['password'];
				$this -> request -> data['User']['password_control'] = $this -> request -> data['User']['password_control'];
			} else {
				$this -> request -> data['User']['password'] = AuthComponent::password($this -> request -> data['User']['password']);
				$this -> request -> data['User']['password_control'] = AuthComponent::password($this -> request -> data['User']['password_control']);
			}
			if ($this -> User -> save($this -> request -> data)) {
				$this -> Session -> setFlash('User ditambahkan', 'success');
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash('User tidak dapat disimpan', 'error');
			}
		}
		$groups = $this -> User -> Group -> find('list');

		$this -> Karyawan -> virtualFields = array('nama' => "CONCAT( Karyawan.no_ktp,' - ',Karyawan.nama)");
		$karyawan = $this -> Karyawan -> find('list', array('fields' => array('Karyawan.id', 'Karyawan.nama'), 'order' => array('nama ASC')));
		// debug($karyawan);
		$this -> set(compact('groups', 'karyawan'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this -> User -> exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this -> Session -> read("Auth.User.group_id") != '1') {
			if ($this -> Session -> read("Auth.User.id") != $id) {
				throw new NotFoundException(__('Anda tidak mempunyai akses!!!'));
			}
		}
		$groups = $this -> User -> Group -> find('list');
		$usr = $this -> User -> find('first', array('conditions' => array('User.id' => $id)));
		$this -> set(compact('groups'));
		if ($this -> request -> is('post') || $this -> request -> is('put')) {
			// debug($this -> request -> data);
			// die();
			$this -> request -> data['User']['password'] = $this -> request -> data['password'];
			$this -> request -> data['User']['password_control'] = $this -> request -> data['confirm_password'];
			if ($usr['User']['password'] == $this -> request -> data['User']['password']) {
				$this -> request -> data['User']['password'] = $usr['User']['password'];
				$this -> request -> data['User']['password_control'] = $usr['User']['password_control'];

			} else {
				if ($this -> request -> data['User']['password'] != $this -> request -> data['User']['password_control']) {
					$this -> Session -> setFlash('Password tidak sama', 'success');
					$this -> redirect(array('controller' => 'users', 'action' => 'edit/' . $id));
				} else {
					$this -> request -> data['User']['password'] = AuthComponent::password($this -> request -> data['User']['password']);
					$this -> request -> data['User']['password_control'] = AuthComponent::password($this -> request -> data['User']['password_control']);
				}
			}
			if ($this -> User -> save($this -> request -> data, false)) {

				$this -> Session -> setFlash('User telah disimpan', 'success');
				// debug($valid);die();
				$this -> redirect(array('controller' => 'users', 'action' => 'index'));
			} else {
				$this -> Session -> setFlash('User tidak dapat disimpan', 'error');
			}
		} else {
			$options = array('conditions' => array('User.' . $this -> User -> primaryKey => $id));
			$this -> request -> data = $this -> User -> find('first', $options);
		}
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @throws MethodNotAllowedException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this -> User -> id = $id;
		if (!$this -> User -> exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this -> request -> onlyAllow('post', 'delete');
		if ($this -> User -> delete()) {
			$this -> Session -> setFlash('User telah dihapus', 'success');
			$this -> redirect(array('action' => 'index'));
		}
		$this -> Session -> setFlash(__('User was not deleted'));
		$this -> redirect(array('action' => 'index'));
	}

}
