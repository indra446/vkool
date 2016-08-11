<?php
App::uses('AppController', 'Controller');
/**
 * Pembelians Controller
 *
 * @property Pembelian $Pembelian
 * @property PaginatorComponent $Paginator
 */
class PembeliansController extends AppController {
    public $helpers = array('Js');

	/**
	 * Components
	 *
	 * @var array
	 */
    public $components = array('Paginator', 'DataTable');
	/**
	 * Components
	 *
	 * @var array
	 */

	public function beforeFilter() {
		parent::beforeFilter();
		$this -> Auth -> allow('konversi_tanggal');
		// We can remove this line after we're finished
	}

	function konversi_tanggal($format, $tanggal = "now", $bahasa = "id") {

		$en = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

		$id = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Januari", "Pebruari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");

		// tambahan untuk bahasa prancis

		// sumber http://w.blankon.in/6V

		$fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "janvier", "février", "mars", "avril", "Mei", "mai", "juillet", "aoùt", "septembre", "octobre", "novembre", "décembre");

		// mengganti kata yang berada pada array en dengan array id, fr (default id)

		return str_replace($en, $$bahasa, date($format, strtotime($tanggal)));

	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {

		// $this -> Pembelian -> recursive = 0;
		$pembelians = $this -> Pembelian -> find('all', array('recursive' => 1, 'group' => 'Pembelian.nomor', 'order' => array('Pembelian.tgl_transaksi')));
		$this -> set(compact('pembelians'));
		
        // $this->paginate = array('fields' => array('Pembelian.nomor', 'tgl_transaksi', 'Vendor.nama_vendor','Pembelian.id'),'group' => 'Pembelian.nomor', 'joins' => array(array('table' => 'vendors', 'alias' => 'Vendor', 'type' => 'INNER','conditions' => array('Vendor.id = Pembelian.vendor_id'))));

        // $this->DataTable->mDataProp = true;
        // debug($this -> DataTable -> getResponse());
        // exit ;
        // if ($this->request->is('ajax')) {
            // $this->autoRender = false;
        // $this->paginate = array('fields' => array('Pembelian.nomor', 'tgl_transaksi', 'Vendor.nama_vendor','Pembelian.id'),'group' => 'Pembelian.nomor', 'joins' => array(array('table' => 'vendors', 'alias' => 'Vendor', 'type' => 'INNER','conditions' => array('Vendor.id = Pembelian.vendor_id'))));
// 
            // $this->DataTable->mDataProp = true;
            // echo json_encode($this->DataTable->getResponse());
            // // exit ;
        // }
        // $this -> set('pembelians', $this -> Paginator -> paginate());
	}		


	public function auto_produk($t = null) {
		// $this->layout = 'ajax';
		$t = $_GET['term'];
		$data = $this -> Pembelian -> query(" SELECT * FROM `products` WHERE aktif=1 AND nama_produk LIKE '%$t%' ");
		$this -> set(compact('data'));
	}

	public function del_produk() {
		if (!empty($_SESSION["cart_item"])) {
			// foreach($_SESSION["cart_item"] as $k => $v) {
			// debug($k);die();
			// if($_POST["idp"] == $k)
			unset($_SESSION["cart_item"][$_POST["idp"]]);
		} elseif (empty($_POST["idp"])) {
			unset($_SESSION["cart_item"]);
		}

	}

	public function cart() {
		// debug($_POST);die();
		// if ($_POST) {
		$produk = explode("|", $_POST['idp']);
		$data = $this -> Pembelian -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		// debug($data);
		$post = $_POST;
		// $_SESSION['cart_item'] = array();
		$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'tipe' => $data[0]['products']['tipe'], 'dimensi' => $data[0]['products']['dimensi'], 'satuan' => $data[0]['products']['satuan'], 'potitem' => $_POST["potitem"], 'pot' => str_replace("%", "", $_POST["potitem"]) / 100, 'jml' => $_POST["jml"], 'harga' => $_POST["harga"]));
		if (!empty($_SESSION["cart_item"])) {
			$arr = array();
			foreach ($_SESSION["cart_item"] as $s) {
				$arr[] = $s['id'];
			}
			// debug($_SESSION["cart_item"]);
			// if (in_array($data[0]['products']['id'], $arr)) {
				// // echo "match";
				// foreach ($_SESSION["cart_item"] as $k => $v) {
					// // debug($data[0]['products']['id']."-".$v['id']."/".$k);
					// if ($data[0]['products']['id'] == $v['id']) {
						// $_SESSION["cart_item"][$k]["tipe"] = $data[0]['products']['tipe'];
						// $_SESSION["cart_item"][$k]["jml"] = $_POST["jml"];
						// $_SESSION["cart_item"][$k]["potitem"] = $_POST["potitem"];
						// $_SESSION["cart_item"][$k]["pot"] = str_replace("%", "", $_POST["potitem"]) / 100;
						// $_SESSION["cart_item"][$k]["harga"] = $_POST["harga"];
					// }
				// }
			// } else
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
		} else
			$_SESSION["cart_item"] = $itemArray;

		// array_push($_SESSION['cart-item'], $data);
		// array_push($_SESSION['cart-item'], $post);
		$this -> set(compact('data', 'post'));
	// }
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		// debug(base64_decode($id));
		$data = $this -> Pembelian -> find('all', array('recursive' => 1, 'conditions' => array('Pembelian.nomor' => $id)));
		if (empty($data)) {
		throw new NotFoundException(__('Invalid pembelian'));
		}
		$tgl = $this -> konversi_tanggal("d M Y", $data[0]['Pembelian']['tgl_transaksi']);
		// debug($tgl);
		$this -> set(compact('data', 'tgl'));
		// debug($data);
		// $options = array('conditions' => array('Pembelian.' . $this -> Pembelian -> primaryKey => $id));
		// $this -> set('pembelian', $this -> Pembelian -> find('first', $options));
	}
	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function isidel($id = null) {
		// debug(base64_decode($id));
		$data = $this -> Pembelian -> find('all', array('recursive' => 1, 'conditions' => array('Pembelian.nomor' => $id)));
		if (empty($data)) {
		throw new NotFoundException(__('Invalid pembelian'));
		}
		$tgl = $this -> konversi_tanggal("d M Y", $data[0]['Pembelian']['tgl_transaksi']);
		// debug($tgl);
		$this -> set(compact('data', 'tgl'));
		// debug($data);
		// $options = array('conditions' => array('Pembelian.' . $this -> Pembelian -> primaryKey => $id));
		// $this -> set('pembelian', $this -> Pembelian -> find('first', $options));
	}
	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function hapus($id = null) {
		// debug(base64_decode($id));
		$data = $this -> Pembelian -> find('all', array('recursive' => 1, 'conditions' => array('Pembelian.nomor' => $id)));
		if (empty($data)) {
		throw new NotFoundException(__('Invalid pembelian'));
		}
		$tgl = $this -> konversi_tanggal("d M Y", $data[0]['Pembelian']['tgl_transaksi']);
		// debug($tgl);
		$this -> set(compact('data', 'tgl'));
		// debug($data);
		// $options = array('conditions' => array('Pembelian.' . $this -> Pembelian -> primaryKey => $id));
		// $this -> set('pembelian', $this -> Pembelian -> find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this -> request -> is('post')) {
			// $this->loadModel('Product');
			// debug($this -> request -> data);
			// debug($_SESSION["cart_item"]);
			// die();
			foreach ($_SESSION['cart_item'] as $d) {
				// $cek=$this->Product->find('first',array('fields'=>array('id','stok'),'conditions'=>array('Product.id'=>$d['id'])));
				// $p['Product']['id']=$d['id'];
				// $p['Product']['stok']=$cek['Product']['stok']+$d['jml'];
				// $this -> Product -> save($p, false);
				$vendor = explode("-", $this -> request -> data['Pembelian']['vendorid']);
				$a['Pembelian']['nomor'] = $this -> request -> data['Pembelian']['nomor'];
				$a['Pembelian']['tgl_transaksi'] = date("Y-m-d", strtotime($this -> request -> data['Pembelian']['tgl']));
				$a['Pembelian']['vendor_id'] = $vendor[0];
				$a['Pembelian']['ket'] = $this -> request -> data['Pembelian']['ket'];
				$a['Pembelian']['product_id'] = $d['id'];
				$a['Pembelian']['jml'] = $d['jml'];
				$a['Pembelian']['harga'] = str_replace(".", "", $d['harga']);
				$a['Pembelian']['pot_item'] = str_replace(".", "", $d['potitem']);
				$a['Pembelian']['potongan'] = str_replace(".", "", $this -> request -> data['potongan']);
				$a['Pembelian']['biaya_kirim'] = str_replace(".", "", $this -> request -> data['kirim']);
				if ($this -> request -> data['ppn'] < 1) {
					$a['Pembelian']['isppn'] = 0;
				} else {
					$a['Pembelian']['isppn'] = 1;
				}
				$a['Pembelian']['ppn'] = str_replace(".", "", $this -> request -> data['ppn']);
				$a['Pembelian']['user_id'] = $this -> Session -> read("Auth.User.id");
				$this -> Pembelian -> create();
				$this -> Pembelian -> save($a, false);
			}
			// if ($this -> Pembelian -> save($this -> request -> data)) {
			unset($_SESSION["cart_item"]);
			$this -> Session -> setFlash('Data berhasil disimpan', 'success');
			// return $this->redirect($this->request->here); 
			return $this -> redirect(array('action' => 'index'));
			// $this->redirect('http://www.google.com');
			// } else {
			// $this -> Session -> setFlash(__('The pembelian could not be saved. Please, try again.'));
			// }
		}
		$vendors = $this -> Pembelian -> Vendor -> find('all', array('recursive' => 0,'conditions'=>array('Vendor.aktif'=>1)));
		// debug($vendors);
		$products = $this -> Pembelian -> Product -> find('list');
		$users = $this -> Pembelian -> User -> find('list');
		$this -> set(compact('vendors', 'products', 'users'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this -> Pembelian -> exists($id)) {
			throw new NotFoundException(__('Invalid pembelian'));
		}
		if ($this -> request -> is(array('post', 'put'))) {
			if ($this -> Pembelian -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The pembelian has been saved.'));
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The pembelian could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pembelian.' . $this -> Pembelian -> primaryKey => $id));
			$this -> request -> data = $this -> Pembelian -> find('first', $options);
		}
		$vendors = $this -> Pembelian -> Vendor -> find('list');
		$products = $this -> Pembelian -> Product -> find('list');
		$users = $this -> Pembelian -> User -> find('list');
		$this -> set(compact('vendors', 'products', 'users'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		// $this -> Pembelian -> id = $id;
		// if (!$this -> Pembelian -> exists()) {
		// throw new NotFoundException(__('Invalid pembelian'));
		// }
		// $this -> request -> onlyAllow('post', 'delete');
		// if ($this -> Pembelian -> deleteAll(array('Pembelian.nomor'=>$id))) {
		// } else {
		// $this -> Session -> setFlash(__('The pembelian could not be deleted. Please, try again.'));
		// }
		// debug($id);die();
		$this -> Pembelian -> query("DELETE FROM pembelians WHERE nomor='". $id."'");
		$this -> Session -> setFlash('Data berhasil dihapus', 'success');
		return $this -> redirect(array('action' => 'index'));
		// $this->redirect('/Pembelians/index');
		
	}

}
