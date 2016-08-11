<?php
App::uses('AppController', 'Controller');
/**
 * Stoks Controller
 *
 * @property Stok $Stok
 * @property PaginatorComponent $Paginator
 */
class StoksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $_title = 'Stok';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->params['action'] = 'Daftar';
		$this->Stok->recursive = 0;
		$this->set('stoks', $this->Paginator->paginate());
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
		if (!$this->Stok->exists($id)) {
			throw new NotFoundException(__('Invalid stok'));
		}
		$options = array('conditions' => array('Stok.' . $this->Stok->primaryKey => $id));
		$this->set('stok', $this->Stok->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->params['action'] = 'Tambah';
		if ($this->request->is('post')) {
			$this->Stok->create();
			if ($this->Stok->save($this->request->data)) {
				$this->Session->setFlash(__('The stok has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stok could not be saved. Please, try again.'));
			}
		}
		$products = $this->Stok->Product->find('list');
		$this->set(compact('products'));
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
		if (!$this->Stok->exists($id)) {
			throw new NotFoundException(__('Invalid stok'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Stok->save($this->request->data)) {
				$this->Session->setFlash(__('The stok has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stok could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Stok.' . $this->Stok->primaryKey => $id));
			$this->request->data = $this->Stok->find('first', $options);
		}
		$products = $this->Stok->Product->find('list');
		$this->set(compact('products'));
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
		$this->Stok->id = $id;
		if (!$this->Stok->exists()) {
			throw new NotFoundException(__('Invalid stok'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Stok->delete()) {
			$this->Session->setFlash(__('The stok has been deleted.'));
		} else {
			$this->Session->setFlash(__('The stok could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
