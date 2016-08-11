<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {
    public $helpers = array('Js');

	/**
	 * Components
	 *
	 * @var array
	 */
    public $components = array('Paginator', 'DataTable');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
        // $this->paginate = array('fields' => array('Product.id', 'nama_produk', 'Kategori.kategori','satuan', 'Product.aktif'), 'joins' => array(array('table' => 'categories', 'alias' => 'Kategori', 'type' => 'INNER', 'conditions' => array('Kategori.id = Product.category_id'))),);

        $this->DataTable->mDataProp = true;
        // debug(json_encode($this -> DataTable -> getResponse()));
        // exit ;
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
       		$this->paginate = array('fields' => array('Product.id', 'nama_produk', 'Kategori.kategori','satuan', 'Product.aktif'), 'joins' => array(array('table' => 'categories', 'alias' => 'Kategori', 'type' => 'INNER', 'conditions' => array('Kategori.id = Product.category_id'))),);

            $this->DataTable->mDataProp = true;
            echo json_encode($this->DataTable->getResponse());
            // exit ;
        }
	}
        public function produk($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid Merk'));
		}
		$data=$this->Product->find('all',array('recursive'=>-1,'fields'=>array('Product.id','Product.nama_produk'),'conditions'=>array('Product.category_id'=>$id)));
		$this->set(compact('data'));
//                print_r($data);
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
		// $products = $this -> Product -> query("SELECT
						// products.id,
						// products.nama_produk,
						// products.dimensi,
						// products.tipe,
						// IF (Sum(pembelians.jml) IS NULL,0,Sum(pembelians.jml)) beli,
						// a.jual,
						// IF (Sum(pembelians.jml) IS NULL,0,Sum(pembelians.jml)) - IF(a.jual IS NULL,0,a.jual) AS sisa,
						// baku.jmlbaku,
						// products.satuan
					// FROM
						// products
					// LEFT JOIN pembelians ON pembelians.product_id = products.id
					// LEFT JOIN (	SELECT
										// products.id,
										// products.nama_produk,
										// products.tipe,
										// IF(products.tipe != 'Luas',IF (Sum(detail_penjualans.qty) IS NULL,0,Sum(detail_penjualans.qty)),COUNT(bahanbakus.id)) jual,
										// products.satuan
										// FROM
										// products
										// LEFT JOIN detail_penjualans ON detail_penjualans.id_product = products.id
										// LEFT JOIN bahanbakus ON bahanbakus.penjualan_id=detail_penjualans.penjualan_id AND bahanbakus.product_id=products.id AND bahanbakus.tipe=1
										// WHERE flag=1
										// GROUP BY
										// products.id
										// ORDER BY
										// products.nama_produk ASC) a ON a.id = products.id
					// LEFT JOIN (SELECT
										// COUNT(id)jmlbaku,product_id
										// FROM
										// bahanbakus
										// WHERE tipe=2
										// GROUP BY bahanbakus.product_id) baku ON baku.product_id=products.id
					// GROUP BY
					// products.id");
		$products = $this -> Product -> query("SELECT
						products.id,
						products.nama_produk,
						products.dimensi,
						products.tipe,
						IF (Sum(pembelians.jml) IS NULL,0,Sum(pembelians.jml)) beli,
						a.jual,
						IF (Sum(pembelians.jml) IS NULL,0,Sum(pembelians.jml)) - IF(a.jual IS NULL,0,a.jual) AS sisa,
						products.satuan
					FROM
						products
					LEFT JOIN pembelians ON pembelians.product_id = products.id
					LEFT JOIN (	SELECT
										products.id,
										products.nama_produk,
										products.tipe,
										IF(products.tipe != 'Luas',IF (Sum(detail_penjualans.qty) IS NULL,0,Sum(detail_penjualans.qty)),COUNT(bahanbakus.id)) jual,
										products.satuan
										FROM
										products
										LEFT JOIN detail_penjualans ON detail_penjualans.id_product = products.id
										LEFT JOIN bahanbakus ON bahanbakus.penjualan_id=detail_penjualans.penjualan_id AND bahanbakus.product_id=products.id
										WHERE flag=1
										GROUP BY
										products.id
										ORDER BY
										products.nama_produk ASC) a ON a.id = products.id
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
		$product = $this -> Product -> query("SELECT
				products.id,
				products.nama_produk,
				products.category_id,
				products.tipe,
				products.dimensi,
				products.satuan,
				products.deskripsi,
				categories.kategori,
				parent.id as parent_id,
				parent.kategori as parent
				FROM
				products
				INNER JOIN categories ON products.category_id = categories.id
				LEFT JOIN categories AS parent ON categories.parent_id = parent.id
				WHERE
				products.id ='".$id."'");
		$sisa = $this -> Product -> query("SELECT
				products.id,
				products.nama_produk,products.dimensi,products.tipe,IF(Sum(pembelians.jml) IS NULL,0,Sum(pembelians.jml))beli,
				a.jual,
				IF(Sum(pembelians.jml) IS NULL,0,Sum(pembelians.jml))-IF(a.jual IS NULL,0,a.jual) AS sisa,
				products.satuan
				FROM
				products
				LEFT JOIN pembelians ON pembelians.product_id = products.id
				LEFT JOIN (SELECT
						products.id,
						products.nama_produk,
						IF(products.tipe != 'Luas',IF (Sum(detail_penjualans.qty) IS NULL,0,Sum(detail_penjualans.qty)),COUNT(bahanbakus.id)) jual,
						products.satuan
						FROM
						products
						INNER JOIN detail_penjualans ON detail_penjualans.id_product = products.id
						INNER JOIN bahanbakus ON bahanbakus.penjualan_id=detail_penjualans.penjualan_id AND bahanbakus.product_id=products.id AND bahanbakus.tipe=1
						WHERE detail_penjualans.flag=1
						GROUP BY
						products.id
						ORDER BY
						products.nama_produk ASC
						)a ON a.id=products.id
				WHERE products.id='".$id."'	GROUP BY products.id");
		$baku=$this->Product->query("SELECT
				bahanbakus.id,
				bahanbakus.product_id,
				bahanbakus.dm1,
				bahanbakus.dm2,
				bahanbakus.id_teknisi,
				bahanbakus.penjualan_id,
				bahanbakus.ket,
				bahanbakus.created,
				bahanbakus.modified
				FROM
				bahanbakus
				WHERE
				bahanbakus.product_id ='".$id."' AND bahanbakus.tipe=2");		
		// $options = array('recursive' => 2, 'conditions' => array('Product.' . $this -> Product -> primaryKey => $id));
		$this -> set(compact('product','sisa','baku'));
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
			if ($this -> Stok -> save($a, false)) {
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
			// debug($this -> request -> data['Product']['category_id']);
			// debug($this->request->data);die();
			$this -> Product -> create();
			if($this -> request -> data['Product']['category']==""){
				$this -> request -> data['Product']['category_id']=$this -> request -> data['Product']['parent_id'];
			}
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
     * index method
     *
     * @return void
     */
    public function all() {
       $this->paginate = array('fields' => array('Product.id', 'Product.nama_produk', 'Kategori.kategori','Product.satuan', 'Product.aktif'), 'joins' => array(array('table' => 'categories', 'alias' => 'Kategori', 'type' => 'INNER', 'conditions' => array('Kategori.id = Product.category_id'))),);

        $this->DataTable->mDataProp = true;
        // debug(json_encode($this -> DataTable -> getResponse()));
        // exit ;
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
       		$this->paginate = array('fields' => array('Product.id', 'Product.nama_produk', 'Kategori.kategori','Product.satuan', 'Product.aktif'), 'joins' => array(array('table' => 'categories', 'alias' => 'Kategori', 'type' => 'INNER', 'conditions' => array('Kategori.id = Product.category_id'))),);

            $this->DataTable->mDataProp = true;
            echo json_encode($this->DataTable->getResponse());
            // exit ;
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
		$this -> Product -> id = $id;
		if (!$this -> Product -> exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$cek=$this->Product->query("SELECT
			products.id
			FROM
			products
			LEFT JOIN pembelians ON pembelians.product_id = products.id
			LEFT JOIN detail_penjualans ON detail_penjualans.id_product = products.id
			WHERE
			detail_penjualans.id_product = '".$id."' OR
			pembelians.product_id = '".$id."'");
		if (empty($cek)) {	
		$this -> request -> onlyAllow('post', 'delete');
		if ($this -> Product -> delete()) {
			$this -> Session -> setFlash('Data berhasil dihapus', 'success');
		} else {
			$this -> Session -> setFlash(__('The product could not be deleted. Please, try again.'));
		}
		} else {
				$this -> Session -> setFlash('Produk tidak dapat dihapus, karena sedang digunakan.', 'error');
		}
		return $this -> redirect(array('action' => 'index'));
	}

}
