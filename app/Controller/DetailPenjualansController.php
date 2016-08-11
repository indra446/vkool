<?php
App::uses('AppController', 'Controller');
/**
 * DetailPenjualans Controller
 *
 * @property DetailPenjualan $DetailPenjualan
 * @property PaginatorComponent $Paginator
 */
class DetailPenjualansController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $_title = 'Detail Penjualan';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->params['action'] = 'Daftar';
		$this->DetailPenjualan->recursive = 0;
		$this->set('detailPenjualans', $this->Paginator->paginate());
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
		if (!$this->DetailPenjualan->exists($id)) {
			throw new NotFoundException(__('Invalid detail penjualan'));
		}
		$options = array('conditions' => array('DetailPenjualan.' . $this->DetailPenjualan->primaryKey => $id));
		$this->set('detailPenjualan', $this->DetailPenjualan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->params['action'] = 'Tambah';
		if ($this->request->is('post')) {
			$this->DetailPenjualan->create();
			if ($this->DetailPenjualan->save($this->request->data)) {
				$this->Session->setFlash(__('The detail penjualan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detail penjualan could not be saved. Please, try again.'));
			}
		}
		$penjualans = $this->DetailPenjualan->Penjualan->find('list');
		$products = $this->DetailPenjualan->Product->find('list');
		$karyawans = $this->DetailPenjualan->Karyawan->find('list');
		$this->set(compact('penjualans', 'products', 'karyawans'));
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
		if (!$this->DetailPenjualan->exists($id)) {
			throw new NotFoundException(__('Invalid detail penjualan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DetailPenjualan->save($this->request->data)) {
				$this->Session->setFlash(__('The detail penjualan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detail penjualan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetailPenjualan.' . $this->DetailPenjualan->primaryKey => $id));
			$this->request->data = $this->DetailPenjualan->find('first', $options);
		}
		$penjualans = $this->DetailPenjualan->Penjualan->find('list');
		$products = $this->DetailPenjualan->Product->find('list');
		$karyawans = $this->DetailPenjualan->Karyawan->find('list');
		$this->set(compact('penjualans', 'products', 'karyawans'));
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
		$this->DetailPenjualan->id = $id;
		if (!$this->DetailPenjualan->exists()) {
			throw new NotFoundException(__('Invalid detail penjualan'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DetailPenjualan->delete()) {
			$this->Session->setFlash(__('The detail penjualan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The detail penjualan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
