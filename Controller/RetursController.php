<?php
App::uses('AppController', 'Controller');
/**
 * Returs Controller
 *
 * @property Retur $Retur
 * @property PaginatorComponent $Paginator
 */
class RetursController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
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
		$returs = $this -> Retur -> find('all', array('recursive' => 1, 'group' => 'Retur.noretur', 'order' => array('Retur.tgl_transaksi')));
		$this -> set(compact('returs'));
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$data = $this -> Retur -> find('all', array('recursive' => 1, 'conditions' => array('Retur.noretur' => base64_decode($id))));
		$tgl = $this -> konversi_tanggal("d M Y", $data[0]['Retur']['tgl_transaksi']);
		// debug($tgl);
		$this -> set(compact('data', 'tgl'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		unset($_SESSION['cart_retur']);
		
		if ($this -> request -> is('post')) {
			$cek = $this -> Retur -> find('first', array('fields' => 'MAX(Retur.noretur)noretur'));
			// debug($this -> request -> data);die();
			if ($cek[0]['noretur'] == NULL) {
				$newno = "RE00001";
			} else {
				$no=substr($cek[0]['noretur'], 2,5);
				// debug(sprintf('%05d', $no+1));die();
				$newno = "RE".sprintf('%05d', $no+1);
			}
                        $zn=$this -> request -> data;
                        $count=count($this -> request -> data['Retur']['product_id'])-1;
			for ($i=0;$i<=$count;$i++) {
				$this->Retur->query("DELETE FROM bahanbakus WHERE id='".$zn['Retur']['idbaku'][$i]."'");
				$vendor = explode("-", $this -> request -> data['Retur']['vendorid']);
				$a['Retur']['noretur'] = $newno;
				$a['Retur']['tgl_transaksi'] = date("Y-m-d", strtotime($zn['Retur']['tgl']));
				$a['Retur']['vendor_id'] = $vendor[0];
				$a['Retur']['ket'] = $this -> request -> data['Retur']['ket'];
				$a['Retur']['product_id'] = $zn['Retur']['product_id'][$i];
				$a['Retur']['bahanbakus_id'] = $zn['Retur']['idbaku'][$i];
				// $a['Retur']['sn'] = $d['sn'];
				$a['Retur']['qty'] =$zn['Retur']['qty'][$i];
				// $a['Retur']['jenis'] =$zn['Retur']['jenis'][$i];
//                                debug($a);exit;
				$this -> Retur -> create();
				$this -> Retur -> save($a, false);
			}
			unset($_SESSION["cart_retur"]);
			// if ($this -> Retur -> save($this -> request -> data)) {
			$this -> Session -> setFlash('Data berhasil disimpan', 'success');
			return $this -> redirect(array('action' => 'index'));
			// } else {
			// $this -> Session -> setFlash(__('The Retur could not be saved. Please, try again.'));
			// }
		}
		$products = $this -> Retur -> Product -> find('list');
		$vendors = $this -> Retur -> Vendor -> find('all', array('recursive' => 0));
		$this -> set(compact('products', 'vendors'));
	}

	public function auto_produk($t = null) {
		// $this->layout = 'ajax';
		$t = $_GET['term'];
		$data = $this -> Retur -> query(" SELECT
				bahanbakus.id,bahanbakus.dm1,bahanbakus.dm2,
				products.id as idp,
				products.nama_produk
				FROM
				bahanbakus
				INNER JOIN products ON bahanbakus.product_id = products.id
				WHERE
				bahanbakus.tipe = 2  ORDER BY
				products.nama_produk ASC");
				
		$this -> set(compact('data'));
	}

	public function del_produk() {
		if (!empty($_SESSION["cart_retur"])) {
			// foreach($_SESSION["cart_retur"] as $k => $v) {
			// debug($k);die();
			// if($_POST["idp"] == $k)
			unset($_SESSION["cart_retur"][$_POST["idp"]]);
		} elseif (empty($_POST["idp"])) {
			unset($_SESSION["cart_retur"]);
		}
	}

	public function cart() {
		// debug($_POST);die();
		// if ($_POST) {
		$produk = explode("|", $_POST['idp']);
		// $data = $this -> Retur -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$data = $this -> Retur -> query(" SELECT
				bahanbakus.id,
				products.id as idp,
				products.nama_produk
				FROM
				bahanbakus
				INNER JOIN products ON bahanbakus.product_id = products.id
				WHERE
				bahanbakus.tipe = 2 AND bahanbakus.id ='" . $produk[0] . "'
				ORDER BY
				products.nama_produk ASC");
		// debug($data);
		$post = $_POST;
		// $_SESSION['cart_retur'] = array();
		@$itemArray = array($data[0]['products']['idp'] => array('norandom'=>$_POST['norandom'],'id' => $data[0]['products']['idp'], 'idbaku' => $data[0]['bahanbakus']['id'],'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["qty"]));
		if (!empty($_SESSION["cart_retur"])) {
			$arr = array();
			foreach ($_SESSION["cart_retur"] as $s) {
				if($_POST['norandom']==$s['norandom']){
				$arr[] = $s['idbaku'];
				}
			}
			// debug($_SESSION["cart_retur"]);
			if (in_array($data[0]['bahanbakus']['id'], $arr)) {
				// echo "match";
				foreach ($_SESSION["cart_retur"] as $k => $v) {
					// debug($data[0]['products']['id']."-".$v['id']."/".$k);
					if ($data[0]['bahanbakus']['id'] == $v['idbaku']) {
						$_SESSION["cart_retur"][$k]["jml"] = $_POST["qty"];
						// $_SESSION["cart_retur"][$k]["sn"] = $_POST["sn"];
					}
				}
			} else
				$_SESSION["cart_retur"] = array_merge($_SESSION["cart_retur"], $itemArray);
		} else
			$_SESSION["cart_retur"] = $itemArray;

		// array_push($_SESSION['cart-item'], $data);
		// array_push($_SESSION['cart-item'], $post);
		$this -> set(compact('data', 'post'));
		// }
	}/**

	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this -> Retur -> exists($id)) {
			throw new NotFoundException(__('Invalid retur'));
		}
		if ($this -> request -> is(array('post', 'put'))) {
			if ($this -> Retur -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The retur has been saved.'));
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The retur could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Retur.' . $this -> Retur -> primaryKey => $id));
			$this -> request -> data = $this -> Retur -> find('first', $options);
		}
		$products = $this -> Retur -> Product -> find('list');
		$vendors = $this -> Retur -> Vendor -> find('list');
		$this -> set(compact('products', 'vendors'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this -> Retur -> query("DELETE FROM returs WHERE noretur='" . base64_decode($id) . "'");
		$this -> Session -> setFlash('Data berhasil dihapus', 'success');
		return $this -> redirect(array('action' => 'index'));
	}

}
