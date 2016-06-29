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
	 * index method
	 *
	 * @return void
	 */
	public function LabaRugi() {
		$this -> Product -> recursive = 0;
		$this -> set('products', $this -> Paginator -> paginate());
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function stock() {
		$products = $this -> Product -> query("SELECT
					products.id,
					products.nama_produk,IF(Sum(pembelians.jml) IS NULL,0,Sum(pembelians.jml))beli,
					a.jual,
					IF(Sum(pembelians.jml) IS NULL,0,Sum(pembelians.jml))-a.jual AS sisa,stoks.jml,
					products.satuan
					FROM
					products
					LEFT JOIN pembelians ON pembelians.product_id = products.id
					LEFT JOIN (SELECT
							products.id,
							products.nama_produk,
							IF(Sum(detail_penjualans.qty) IS NULL,0,Sum(detail_penjualans.qty))jual,
							products.satuan
							FROM
							products
							INNER JOIN detail_penjualans ON detail_penjualans.id_product = products.id
							GROUP BY
							products.id
							ORDER BY
							products.nama_produk ASC
							)a ON a.id=products.id
					LEFT JOIN stoks ON stoks.product_id=products.id
					GROUP BY
					products.id");
		$this -> set(compact('products'));
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
		$options = array('recursive' => 2, 'conditions' => array('Product.' . $this -> Product -> primaryKey => $id));
		$this -> set('product', $this -> Product -> find('first', $options));
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function check($id = null) {
		if (!$this -> Product -> exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$cek = $this -> Product -> query("SELECT
					products.id,
					products.nama_produk,IF(Sum(pembelians.jml) IS NULL,0,Sum(pembelians.jml))beli,
					a.jual,
					IF(Sum(pembelians.jml) IS NULL,0,Sum(pembelians.jml))-a.jual AS sisa,if(stoks.jml IS NULL,0,stoks.jml)jml,
					products.satuan
					FROM
					products
					LEFT JOIN pembelians ON pembelians.product_id = products.id
					LEFT JOIN (SELECT
							products.id,
							products.nama_produk,
							IF(Sum(detail_penjualans.qty) IS NULL,0,Sum(detail_penjualans.qty))jual,
							products.satuan
							FROM
							products
							INNER JOIN detail_penjualans ON detail_penjualans.id_product = products.id
							GROUP BY
							products.id
							ORDER BY
							products.nama_produk ASC
							)a ON a.id=products.id
					LEFT JOIN stoks ON stoks.product_id=products.id
					WHERE a.id='" . $id . "'
					GROUP BY
					products.id
					ORDER BY
					products.nama_produk ASC");
		$this -> set(compact('cek'));
		$options = array('recursive' => 2, 'conditions' => array('Product.' . $this -> Product -> primaryKey => $id));
		$this -> set('product', $this -> Product -> find('first', $options));
		if ($this -> request -> is('post')) {
			$this -> loadModel('Stok');
			$d = $this -> Stok -> find('first', array('conditions' => array('Stok.product_id' => $id)));
			// debug($d);die();
			$a['Stok']['product_id'] = $id;
			$a['Stok']['jml'] = $this -> request -> data['Product']['jml'];
			$a['Stok']['ket'] = $this -> request -> data['Product']['alasan'];
			if (empty($d)) {
				$this -> Stok -> create();
			} else {
				$a['Stok']['id'] = $d['Stok']['id'];
			}
			if ($this -> Stok -> save($a,false)) {
				$this -> Session -> setFlash('Data berhasil disimpan', 'success');
				return $this -> redirect(array('action' => 'stock'));
			} else {
				$this -> Session -> setFlash(__('The product could not be saved. Please, try again.'));
			}
		}

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
		$this -> request -> onlyAllow('post', 'delete');
		if ($this -> Product -> delete()) {
			$this -> Session -> setFlash('Data berhasil dihapus', 'success');
		} else {
			$this -> Session -> setFlash(__('The product could not be deleted. Please, try again.'));
		}
		return $this -> redirect(array('action' => 'index'));
	}

}
