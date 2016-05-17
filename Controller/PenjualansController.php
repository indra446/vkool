<?php

App::uses('AppController', 'Controller');

/**
 * Penjualans Controller
 *
 * @property Penjualan $Penjualan
 * @property PaginatorComponent $Paginator
 */
class PenjualansController extends AppController {

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
        $this->Penjualan->recursive = 0;
        $this->set('penjualans', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Penjualan->exists($id)) {
            throw new NotFoundException(__('Invalid penjualan'));
        }
        $options = array('conditions' => array('Penjualan.' . $this->Penjualan->primaryKey => $id));
        $this->set('penjualan', $this->Penjualan->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Penjualan->create();
            if ($this->Penjualan->save($this->request->data)) {
                $this->Session->setFlash(__('The penjualan has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The penjualan could not be saved. Please, try again.'));
            }
        }
        $customers = $this->Penjualan->Customer->find('list');
        $merks = $this->Penjualan->Merk->find('list',array('fields' => array('Merk.id', 'Merk.nama'), 'order' => array('nama ASC')));
        $users = $this->Penjualan->User->find('list');
        $this->set(compact('customers', 'merks', 'users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Penjualan->exists($id)) {
            throw new NotFoundException(__('Invalid penjualan'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Penjualan->save($this->request->data)) {
                $this->Session->setFlash(__('The penjualan has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The penjualan could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Penjualan.' . $this->Penjualan->primaryKey => $id));
            $this->request->data = $this->Penjualan->find('first', $options);
        }
        $customers = $this->Penjualan->Customer->find('list');
        $merks = $this->Penjualan->Merk->find('list');
        $users = $this->Penjualan->User->find('list');
        $this->set(compact('customers', 'merks', 'users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Penjualan->id = $id;
        if (!$this->Penjualan->exists()) {
            throw new NotFoundException(__('Invalid penjualan'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Penjualan->delete()) {
            $this->Session->setFlash(__('The penjualan has been deleted.'));
        } else {
            $this->Session->setFlash(__('The penjualan could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function model($t = null) {
        $this->layout = 'ajax';
        $data = $this->Penjualan->query(" SELECT * FROM `models` where nama like '%$t%' ");
        $this->set(compact('data'));
    }
    public function auto($t = null) {
        $this->layout = 'ajax';
        $data = $this->Penjualan->query(" SELECT * FROM `customers` WHERE nama LIKE '%$t%' ");
        $this->set(compact('data'));
    }

}
