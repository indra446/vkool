<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

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
		$this -> Product -> recursive = 0;
		$this -> set('products', $this -> Paginator -> paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this -> Product -> exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this -> Product -> primaryKey => $id));
		$this -> set('product', $this -> Product -> find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this -> request -> is('post')) {
			// debug($this->request->data);die();
			$this -> Product -> create();
			if ($this -> request -> data['Product']['tipe'] == "Luas") {
				$this -> request -> data['Product']['dimensi'] = $this -> request -> data['Product']['panjang'] . "," . $this -> request -> data['Product']['lebar'];
			}
			if ($this -> Product -> save($this -> request -> data)) {
				$this -> Session -> setFlash('Data berhasil disimpan', 'success');
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The product could not be saved. Please, try again.'));
			}
		}
		$parentCat = $this -> Product -> Category -> find('list', array('fields' => array('Category.id', 'Category.kategori'), 'conditions' => array('AND' => array('Category.parent_id' => NULL, 'Category.aktif' => 1))));
		// $categories = $this->Product->Category->find('list');
		$this -> set(compact('categories', 'parentCat'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this -> Product -> exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this -> request -> is(array('post', 'put'))) {
			if ($this -> request -> data['Product']['tipe'] == "Luas") {
				$this -> request -> data['Product']['dimensi'] = $this -> request -> data['Product']['panjang'] . "," . $this -> request -> data['Product']['lebar'];
			}
			if ($this -> Product -> save($this -> request -> data)) {
				$this -> Session -> setFlash('Data berhasil disimpan', 'success');
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Product.' . $this -> Product -> primaryKey => $id));
			$this -> request -> data = $this -> Product -> find('first', $options);
		}
		$edit = $this -> request -> data;
		if ($edit['Product']['tipe'] == "Luas") {
			$dimensi = explode(",", $edit['Product']['dimensi']);
			$edit['Product']['panjang'] = $dimensi[0];
			$edit['Product']['lebar'] = $dimensi[1];
		}
		// array_push($edit,$dimensi[0],$dimensi[1]);
		// debug($edit);
		$parentCat = $this -> Product -> Category -> find('list', array('fields' => array('Category.id', 'Category.kategori'), 'conditions' => array('AND' => array('Category.parent_id' => NULL, 'Category.aktif' => 1))));
		$categories = $this -> Product -> Category -> find('list', array('fields' => array('Category.id', 'Category.kategori'), 'conditions' => array('AND' => array('Category.parent_id' => $edit['Category']['parent_id'], 'Category.aktif' => 1))));
		$this -> set(compact('categories', 'parentCat', 'edit'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this -> Product -> id = $id;
		if (!$this -> Product -> exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this -> request -> allowMethod('post', 'delete');
		if ($this -> Product -> delete()) {
			$this -> Session -> setFlash(__('The product has been deleted.'));
		} else {
			$this -> Session -> setFlash(__('The product could not be deleted. Please, try again.'));
		}
		return $this -> redirect(array('action' => 'index'));
	}

}
