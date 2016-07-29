<?php
App::uses('AppController', 'Controller');
/**
 * Returs Controller
 *
 * @property Retur $Retur
 * @property PaginatorComponent $Paginator
 */
class RetursController extends AppController {

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
		$this->Retur->recursive = 0;
		$this->set('returs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Retur->exists($id)) {
			throw new NotFoundException(__('Invalid retur'));
		}
		$options = array('conditions' => array('Retur.' . $this->Retur->primaryKey => $id));
		$this->set('retur', $this->Retur->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Retur->create();
			if ($this->Retur->save($this->request->data)) {
				$this->Session->setFlash(__('The retur has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retur could not be saved. Please, try again.'));
			}
		}
		$products = $this->Retur->Product->find('list');
		$vendors = $this->Retur->Vendor->find('list');
		$this->set(compact('products', 'vendors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Retur->exists($id)) {
			throw new NotFoundException(__('Invalid retur'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Retur->save($this->request->data)) {
				$this->Session->setFlash(__('The retur has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retur could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Retur.' . $this->Retur->primaryKey => $id));
			$this->request->data = $this->Retur->find('first', $options);
		}
		$products = $this->Retur->Product->find('list');
		$vendors = $this->Retur->Vendor->find('list');
		$this->set(compact('products', 'vendors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Retur->id = $id;
		if (!$this->Retur->exists()) {
			throw new NotFoundException(__('Invalid retur'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Retur->delete()) {
			$this->Session->setFlash(__('The retur has been deleted.'));
		} else {
			$this->Session->setFlash(__('The retur could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
