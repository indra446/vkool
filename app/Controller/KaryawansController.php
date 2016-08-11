<?php
App::uses('AppController', 'Controller');
/**
 * Karyawans Controller
 *
 * @property Karyawan $Karyawan
 * @property PaginatorComponent $Paginator
 */
class KaryawansController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $_title = 'Karyawan';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->params['action'] = 'Daftar';
                $grup=$this->Session->read('Auth.User.group_id');
		$this->Karyawan->recursive = 0;
		$this->set('karyawans', $this->Paginator->paginate());
                $this->set(compact('grup'));
	}
        public function ajax(){
            $this->layout='ajax';
            @$term=$_GET['term'];
            $karyawans=$this->Karyawan->find('all',array('conditions'=>array('Karyawan.nama like'=>"%$term%")));
            $this->set(compact('karyawans'));
        }

        /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->params['action'] = 'Lihat';
		if (!$this->Karyawan->exists($id)) {
			throw new NotFoundException(__('Invalid karyawan'));
		}
		$options = array('conditions' => array('Karyawan.' . $this->Karyawan->primaryKey => $id));
		$this->set('karyawan', $this->Karyawan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->params['action'] = 'Tambah';
		if ($this->request->is('post')) {
			$this->Karyawan->create();
			if ($this->Karyawan->save($this->request->data)) {
				$this->Session->setFlash('Data berhasil disimpan', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The karyawan could not be saved. Please, try again.'));
			}
		}
//		$units = $this->Karyawan->Unit->find('list');
		$this->set(compact('units'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->params['action'] = 'Ubah';
		if (!$this->Karyawan->exists($id)) {
			throw new NotFoundException(__('Invalid karyawan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Karyawan->save($this->request->data)) {
				$this->Session->setFlash('Data berhasil diupdate', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The karyawan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Karyawan.' . $this->Karyawan->primaryKey => $id));
			$this->request->data = $this->Karyawan->find('first', $options);
		}
                $edit=$this->request->data;
		$this->set(compact('units','edit'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->params['action'] = 'Hapus';
		$this->Karyawan->id = $id;
		if (!$this->Karyawan->exists()) {
			throw new NotFoundException(__('Invalid karyawan'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Karyawan->delete()) {
			$this->Session->setFlash('Data berhasil dihapus', 'success');
		} else {
			$this->Session->setFlash(__('The karyawan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
