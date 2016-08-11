<?php
App::uses('AppController', 'Controller');
/**
 * PicVendors Controller
 *
 * @property PicVendor $PicVendor
 * @property PaginatorComponent $Paginator
 */
class PicVendorsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $_title = 'Pic Vendor';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->params['action'] = 'Daftar';
		$this->PicVendor->recursive = 0;
		$this->set('picVendors', $this->Paginator->paginate());
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
		if (!$this->PicVendor->exists($id)) {
			throw new NotFoundException(__('Invalid pic vendor'));
		}
		$options = array('conditions' => array('PicVendor.' . $this->PicVendor->primaryKey => $id));
		$this->set('picVendor', $this->PicVendor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->params['action'] = 'Tambah';
		if ($this->request->is('post')) {
			$this->PicVendor->create();
			if ($this->PicVendor->save($this->request->data)) {
				$this->Session->setFlash(__('The pic vendor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pic vendor could not be saved. Please, try again.'));
			}
		}
		$karyawans = $this->PicVendor->Karyawan->find('list');
		$pics = $this->PicVendor->Pic->find('list');
		$this->set(compact('karyawans', 'pics'));
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
		if (!$this->PicVendor->exists($id)) {
			throw new NotFoundException(__('Invalid pic vendor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PicVendor->save($this->request->data)) {
				$this->Session->setFlash(__('The pic vendor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pic vendor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PicVendor.' . $this->PicVendor->primaryKey => $id));
			$this->request->data = $this->PicVendor->find('first', $options);
		}
		$karyawans = $this->PicVendor->Karyawan->find('list');
		$pics = $this->PicVendor->Pic->find('list');
		$this->set(compact('karyawans', 'pics'));
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
		$this->PicVendor->id = $id;
		if (!$this->PicVendor->exists()) {
			throw new NotFoundException(__('Invalid pic vendor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PicVendor->delete()) {
			$this->Session->setFlash(__('The pic vendor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pic vendor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
