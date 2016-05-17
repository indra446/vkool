<?php
App::uses('AppController', 'Controller');
/**
 * Pembelians Controller
 *
 * @property Pembelian $Pembelian
 * @property PaginatorComponent $Paginator
 */
class PembeliansController extends AppController {

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
		$this->Pembelian->recursive = 0;
		$this->set('pembelians', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pembelian->exists($id)) {
			throw new NotFoundException(__('Invalid pembelian'));
		}
		$options = array('conditions' => array('Pembelian.' . $this->Pembelian->primaryKey => $id));
		$this->set('pembelian', $this->Pembelian->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pembelian->create();
			if ($this->Pembelian->save($this->request->data)) {
				$this->Session->setFlash(__('The pembelian has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pembelian could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->Pembelian->Vendor->find('list');
		$products = $this->Pembelian->Product->find('list');
		$users = $this->Pembelian->User->find('list');
		$this->set(compact('vendors', 'products', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pembelian->exists($id)) {
			throw new NotFoundException(__('Invalid pembelian'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pembelian->save($this->request->data)) {
				$this->Session->setFlash(__('The pembelian has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pembelian could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pembelian.' . $this->Pembelian->primaryKey => $id));
			$this->request->data = $this->Pembelian->find('first', $options);
		}
		$vendors = $this->Pembelian->Vendor->find('list');
		$products = $this->Pembelian->Product->find('list');
		$users = $this->Pembelian->User->find('list');
		$this->set(compact('vendors', 'products', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pembelian->id = $id;
		if (!$this->Pembelian->exists()) {
			throw new NotFoundException(__('Invalid pembelian'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pembelian->delete()) {
			$this->Session->setFlash(__('The pembelian has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pembelian could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
