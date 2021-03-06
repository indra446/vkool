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

/**
 * index method
 *
 * @return void
 */
	public function index() {
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
	public function edit($id = null,$idp=null) {
		if (!$this->DetailPenjualan->exists($id)) {
			throw new NotFoundException(__('Invalid detail penjualan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DetailPenjualan->save($this->request->data)) {
                                $this->Session->setFlash('Data berhasil diupdate','success');
				return $this->redirect(array('controller'=>'bahanbakuses','action' => 'view/'.$idp.'/ok'));
			} else {
				$this->Session->setFlash('Gagal di Edit','error');
			}
		} else {
			$options = array('conditions' => array('DetailPenjualan.' . $this->DetailPenjualan->primaryKey => $id));
			$this->request->data = $this->DetailPenjualan->find('first', $options);
		}
		$penjualans = $this->DetailPenjualan->Penjualan->find('list');
		$products = $this->DetailPenjualan->Product->find('list', array('fields' => array('id', 'nama_produk')));
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
	public function delete($id = null,$idp=null) {
		$this->DetailPenjualan->id = $id;
		if (!$this->DetailPenjualan->exists()) {
			throw new NotFoundException(__('Invalid detail penjualan'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetailPenjualan->delete()) {
			$this->Session->setFlash(__('The detail penjualan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The detail penjualan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller'=>'bahanbakuses','action' => 'view/'.$idp.'/ok'));
	}
}
