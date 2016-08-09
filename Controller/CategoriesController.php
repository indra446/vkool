<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {

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
		$this -> Category -> recursive = 0;
		$this -> set('categories', $this -> Paginator -> paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this -> Category -> exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this -> Category -> primaryKey => $id));
		$this -> set('category', $this -> Category -> find('first', $options));
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function kategori($id = null) {
		if (!$this -> Category -> exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$data = $this -> Category -> find('all', array('recursive' => -1, 'fields' => array('Category.id', 'Category.kategori'), 'conditions' => array('AND'=>array('Category.parent_id' => $id,'Category.aktif'=>1))));
		$this -> set(compact('data'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this -> request -> is('post')) {
			// debug($this->request->data);die();
			$this -> Category -> create();
			if ($this -> Category -> save($this -> request -> data)) {
				$this -> Session -> setFlash('Data berhasil disimpan', 'success');
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
		$parentCategories = $this -> Category -> ParentCategory -> find('list', array('fields' => array('id', 'kategori'), 'conditions' => array('parent_id' => NULL)));
		$this -> set(compact('parentCategories'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this -> Category -> exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this -> request -> is(array('post', 'put'))) {
			// debug($this->request->data);die();
			if ($this -> Category -> save($this -> request -> data)) {
				$this -> Session -> setFlash('Data berhasil disimpan', 'success');
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Category.' . $this -> Category -> primaryKey => $id));
			$this -> request -> data = $this -> Category -> find('first', $options);
		}
		$edit = $this -> request -> data;
		$parentCategories = $this -> Category -> ParentCategory -> find('list', array('fields' => array('id', 'kategori'), 'conditions' => array('parent_id' => NULL)));
		$this -> set(compact('parentCategories', 'edit'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this -> Category -> id = $id;
		if (!$this -> Category -> exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$cek = $this -> Category -> query("SELECT
			products.id as idproduct,
			products.category_id,
			parent.id as subcat_id,
			parent.parent_id as subcat_parentid,
			categories.id as parent_id
			FROM
			products
			LEFT JOIN categories AS parent ON products.category_id = parent.id
			LEFT JOIN categories ON parent.parent_id = categories.id
			WHERE
			products.category_id = '" . $id . "' OR parent.parent_id='" . $id . "'");
		// debug($cek);
		// die();
		if (empty($cek)) {
			$this -> request -> onlyAllow('post', 'delete');
			if ($this -> Category -> delete()) {
				$this -> Session -> setFlash('Data berhasil dihapus', 'success');
			} else {
				$this -> Session -> setFlash(__('The category could not be deleted. Please, try again.'));
			}
		} else {
				$this -> Session -> setFlash('Kategori tidak dapat dihapus, karena sedang digunakan.', 'error');
		}
		return $this -> redirect(array('action' => 'index'));
	}

}
