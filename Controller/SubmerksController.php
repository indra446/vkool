<?php
App::uses('AppController', 'Controller');
/**
 * Merks Controller
 *
 * @property Merk $Merk
 * @property PaginatorComponent $Paginator
 */
class SubmerksController extends AppController {

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
		$this->Submerk->recursive = 0;
		$this->set('merks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Submerk->exists($id)) {
			throw new NotFoundException(__('Invalid merk'));
		}
		$options = array('conditions' => array('Merk.' . $this->Submerk->primaryKey => $id));
		$this->set('merk', $this->Submerk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Submerk->create();
			if ($this->Submerk->save($this->request->data)) {
				$this->Session->setFlash('Data berhasil disimpan', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merk could not be saved. Please, try again.'));
			}
		}
		$parentMerks = $this->Submerk->ParentSubmerk->find('list');
		$this->set(compact('parentMerks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Submerk->exists($id)) {
			throw new NotFoundException(__('Invalid merk'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Submerk->save($this->request->data)) {
				$this->Session->setFlash('Data berhasil diupdate', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Merk.' . $this->Submerk->primaryKey => $id));
			$this->request->data = $this->Submerk->find('first', $options);
		}
		$parentMerks = $this->Submerk->ParentSubmerk->find('list');
		$this->set(compact('parentMerks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Submerk->id = $id;
		if (!$this->Submerk->exists()) {
			throw new NotFoundException(__('Invalid merk'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Submerk->delete()) {
			$this->Session->setFlash('Data berhasil dihapus', 'success');
		} else {
			$this->Session->setFlash(__('The merk could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
