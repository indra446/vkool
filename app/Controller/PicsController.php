<?php
App::uses('AppController', 'Controller');
/**
 * Pics Controller
 *
 * @property Pic $Pic
 * @property PaginatorComponent $Paginator
 */
class PicsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $_title = 'Pic';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->params['action'] = 'Daftar';
		$this->Pic->recursive = 0;
		$this->set('pics', $this->Paginator->paginate());
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
		if (!$this->Pic->exists($id)) {
			throw new NotFoundException(__('Invalid pic'));
		}
		$options = array('conditions' => array('Pic.' . $this->Pic->primaryKey => $id));
		$this->set('pic', $this->Pic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->params['action'] = 'Tambah';
		if ($this->request->is('post')) {
			$this->Pic->create();
			if ($this->Pic->save($this->request->data)) {
				$this->Session->setFlash(__('The pic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pic could not be saved. Please, try again.'));
			}
		}
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
		if (!$this->Pic->exists($id)) {
			throw new NotFoundException(__('Invalid pic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pic->save($this->request->data)) {
				$this->Session->setFlash(__('The pic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pic.' . $this->Pic->primaryKey => $id));
			$this->request->data = $this->Pic->find('first', $options);
		}
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
		$this->Pic->id = $id;
		if (!$this->Pic->exists()) {
			throw new NotFoundException(__('Invalid pic'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pic->delete()) {
			$this->Session->setFlash(__('The pic has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
