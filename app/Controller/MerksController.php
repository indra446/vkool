<?php
App::uses('AppController', 'Controller');
/**
 * Merks Controller
 *
 * @property Merk $Merk
 * @property PaginatorComponent $Paginator
 */
class MerksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $_title = 'Merek';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->params['action'] = 'Daftar';
		// $this->Merk->recursive = 0;
		$merks=$this->Merk->find('all',array('recursive'=>0,'order'=>array('Merk.lft'=>'asc')));
		// debug($merks);
		$this->set(compact('merks'));
		// $this->set('merks', $this->Paginator->paginate());
	}
        public function merk($id = null) {
        	$this->params['action'] = 'Daftar';
		if (!$this->Merk->exists($id)) {
			throw new NotFoundException(__('Invalid Merk'));
		}
		$data=$this->Merk->find('all',array('recursive'=>-1,'fields'=>array('Merk.id','Merk.nama'),'conditions'=>array('Merk.parent_id'=>$id)));
		$this->set(compact('data'));
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
		if (!$this->Merk->exists($id)) {
			throw new NotFoundException(__('Invalid merk'));
		}
		$options = array('conditions' => array('Merk.' . $this->Merk->primaryKey => $id));
		$this->set('merk', $this->Merk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->params['action'] = 'Tambah';
		if ($this->request->is('post')) {
			$this->Merk->create();
			if ($this->Merk->save($this->request->data)) {
				$this->Session->setFlash('Data berhasil disimpan', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merk could not be saved. Please, try again.'));
			}
		}
		$parentMerks = $this->Merk->ParentMerk->find('list' ,array('fields'=>array('id','nama'),'conditions' => array('parent_id' => NULL)));
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
		$this->params['action'] = 'Ubah';
		if (!$this->Merk->exists($id)) {
			throw new NotFoundException(__('Invalid merk'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Merk->save($this->request->data)) {
				$this->Session->setFlash('Data berhasil diupdate', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Merk.' . $this->Merk->primaryKey => $id));
			$this->request->data = $this->Merk->find('first', $options);
		}
		$edit=$this->request->data;
		$parentMerks = $this->Merk->ParentMerk->find('list',array('fields'=>array('id','nama'),'conditions' => array('parent_id' => NULL)));
		$this->set(compact('parentMerks','edit'));
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
		$this->Merk->id = $id;
		if (!$this->Merk->exists()) {
			throw new NotFoundException(__('Invalid merk'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Merk->delete()) {
			$this->Session->setFlash('Data berhasil dihapus', 'success');
		} else {
			$this->Session->setFlash(__('The merk could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
