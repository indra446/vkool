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

	public $_title = 'Penjualan';

    public function ceklunas($id=null) {
    	$cek=$this->Penjualan->query("SELECT
			Sum(bayars.bayar)-bayars.total as tagihan
			FROM
			bayars
			WHERE
			bayars.id_penjualan = $id");
		return $cek;

	}
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->params['action'] = 'Daftar';
		$this -> Penjualan -> recursive = 0;
		$this -> set('penjualans', $this -> Paginator -> paginate());

	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function histori() {
		$this->params['action'] = 'Riwayat';
		$data = $this -> Penjualan -> query("SELECT * FROM (SELECT
				penjualans.id,
				penjualans.nomor,
				penjualans.created,
				customers.nama,
				Sum(bayars.bayar)bayar,
				bayars.total
				FROM
				penjualans
				INNER JOIN customers ON penjualans.customer_id = customers.id
				INNER JOIN bayars ON bayars.id_penjualan = penjualans.id
				GROUP BY
				penjualans.id,
				penjualans.nomor,
				penjualans.created,
				customers.nama
				)a WHERE a.bayar=a.total");
		$this->set(compact('data'));	

	}

	public function rekaphistori() {
		$this->params['action'] = 'Rekap Histori';
		if ($this -> request -> is('post')) {
			$d=$this->request->data;
			$tgla=date("Y-m-d",strtotime($d[1]));
			$tglb=date("Y-m-d",strtotime($d[2]));
			// debug($tgla);
			$data = $this -> Penjualan -> query("SELECT * FROM (SELECT
					penjualans.id,
					penjualans.nomor,
					penjualans.created,
					customers.nama,
					Sum(bayars.bayar)bayar,
					bayars.total
					FROM
					penjualans
					INNER JOIN customers ON penjualans.customer_id = customers.id
					INNER JOIN bayars ON bayars.id_penjualan = penjualans.id
					GROUP BY
					penjualans.id,
					penjualans.nomor,
					penjualans.created,
					customers.nama
					)a WHERE a.bayar=a.total AND a.nomor LIKE '%".$d[3]."%' AND a.nama LIKE '%".$d[4]."%' OR SUBSTR(a.created  FROM 1 FOR 10) BETWEEN '".$tgla."' AND '".$tglb."'");
			$this->set(compact('data'));	
		}
	}
	public function detail($id=null) {
		$this->params['action'] = 'Detail';
		if (!$this -> Penjualan -> exists($id)) {
			// throw new NotFoundException(__('Invalid penjualan'));
			$this -> Session -> setFlash('Invalid Data', 'error');
			return $this->redirect(array('action' => 'histori'));
		}
		$data=$this->Penjualan->query("SELECT
				penjualans.nomor,
				penjualans.created,
				customers.nama,
				products.nama_produk,
				categories.kategori,
				detail_penjualans.qty,
				detail_penjualans.harga,
				detail_penjualans.disc,
				detail_penjualans.hidden_disc,
				penjualans.id
				FROM
				penjualans
				INNER JOIN customers ON penjualans.customer_id = customers.id
				INNER JOIN detail_penjualans ON penjualans.id = detail_penjualans.penjualan_id
				INNER JOIN products ON detail_penjualans.id_product = products.id
				INNER JOIN categories ON products.category_id = categories.id
				WHERE penjualans.id=$id");
		$this->set(compact('data'));		
	}

	public function cart() {
		$this->params['action'] = 'Daftar Belanja';
		$produk = explode(",", $_POST['idp']);
		$data = $this -> Penjualan -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$post = $_POST;
		@$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"], 'subtotal' => ($_POST["harga"] * $_POST["jml"])));

		if (!empty($_SESSION["cart_depan"])) {
			$arr = array();
			foreach ($_SESSION["cart_depan"] as $s) {
				$arr[] = $s['id'];
			}
			// debug($_SESSION["cart_item"]);
			if (in_array($data[0]['products']['id'], $arr)) {
				// echo "match";
				foreach ($_SESSION["cart_depan"] as $k => $v) {
					// debug($data[0]['products']['id']."-".$v['id']."/".$k);
					if ($data[0]['products']['id'] == $v['id']) {
						$_SESSION["cart_depan"][$k]["nama"] = $data[0]['products']['nama_produk'];
						$_SESSION["cart_depan"][$k]["jml"] = $_POST["jml"];
						$_SESSION["cart_depan"][$k]["harga"] = $_POST["harga"];
						$_SESSION["cart_depan"][$k]["subtotal"] = ($_POST["harga"] * $_POST["jml"]);

					}
				}
			} else
				$_SESSION["cart_depan"] = array_merge($_SESSION["cart_depan"], $itemArray);
		} else
			$_SESSION["cart_depan"] = $itemArray;

		$this -> set(compact('data', 'post'));
	}

	public function samping() {
		$produk = explode(",", $_POST['idp']);
		$data = $this -> Penjualan -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$post = $_POST;
		@$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"], 'subtotal' => ($_POST["harga"] * $_POST["jml"])));

		if (!empty($_SESSION["cart_samping"])) {
			$arr = array();
			foreach ($_SESSION["cart_samping"] as $s) {
				$arr[] = $s['id'];
			}
			// debug($_SESSION["cart_item"]);
			if (in_array($data[0]['products']['id'], $arr)) {
				// echo "match";
				foreach ($_SESSION["cart_samping"] as $k => $v) {
					// debug($data[0]['products']['id']."-".$v['id']."/".$k);
					if ($data[0]['products']['id'] == $v['id']) {
						$_SESSION["cart_samping"][$k]["nama"] = $data[0]['products']['nama_produk'];
						$_SESSION["cart_samping"][$k]["jml"] = $_POST["jml"];
						$_SESSION["cart_samping"][$k]["harga"] = $_POST["harga"];
						$_SESSION["cart_samping"][$k]["subtotal"] = ($_POST["harga"] * $_POST["jml"]);

					}
				}
			} else
				$_SESSION["cart_samping"] = array_merge($_SESSION["cart_samping"], $itemArray);
		} else
			$_SESSION["cart_samping"] = $itemArray;

		$this -> set(compact('data', 'post'));
	}

	public function belakang() {
		$produk = explode(",", $_POST['idp']);
		$data = $this -> Penjualan -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$post = $_POST;
		@$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"], 'subtotal' => ($_POST["harga"] * $_POST["jml"])));

		if (!empty($_SESSION["cart_belakang"])) {
			$arr = array();
			foreach ($_SESSION["cart_belakang"] as $s) {
				$arr[] = $s['id'];
			}
			// debug($_SESSION["cart_item"]);
			if (in_array($data[0]['products']['id'], $arr)) {
				// echo "match";
				foreach ($_SESSION["cart_belakang"] as $k => $v) {
					// debug($data[0]['products']['id']."-".$v['id']."/".$k);
					if ($data[0]['products']['id'] == $v['id']) {
						$_SESSION["cart_belakang"][$k]["nama"] = $data[0]['products']['nama_produk'];
						$_SESSION["cart_belakang"][$k]["jml"] = $_POST["jml"];
						$_SESSION["cart_belakang"][$k]["harga"] = $_POST["harga"];
						$_SESSION["cart_belakang"][$k]["subtotal"] = ($_POST["harga"] * $_POST["jml"]);

					}
				}
			} else
				$_SESSION["cart_belakang"] = array_merge($_SESSION["cart_belakang"], $itemArray);
		} else
			$_SESSION["cart_belakang"] = $itemArray;

		$this -> set(compact('data', 'post'));
	}

	public function aksesoris() {
		$produk = explode(",", $_POST['idp']);
		$data = $this -> Penjualan -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$post = $_POST;
		@$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"], 'subtotal' => ($_POST["harga"] * $_POST["jml"])));

		if (!empty($_SESSION["cart_aksesoris"])) {
			$arr = array();
			foreach ($_SESSION["cart_aksesoris"] as $s) {
				$arr[] = $s['id'];
			}
			// debug($_SESSION["cart_item"]);
			if (in_array($data[0]['products']['id'], $arr)) {
				// echo "match";
				foreach ($_SESSION["cart_aksesoris"] as $k => $v) {
					// debug($data[0]['products']['id']."-".$v['id']."/".$k);
					if ($data[0]['products']['id'] == $v['id']) {
						$_SESSION["cart_aksesoris"][$k]["nama"] = $data[0]['products']['nama_produk'];
						$_SESSION["cart_aksesoris"][$k]["jml"] = $_POST["jml"];
						$_SESSION["cart_aksesoris"][$k]["harga"] = $_POST["harga"];
						$_SESSION["cart_aksesoris"][$k]["subtotal"] = ($_POST["harga"] * $_POST["jml"]);

					}
				}
			} else
				$_SESSION["cart_aksesoris"] = array_merge($_SESSION["cart_aksesoris"], $itemArray);
		} else
			$_SESSION["cart_aksesoris"] = $itemArray;

		$this -> set(compact('data', 'post'));
	}

	public function service() {
		$produk = explode(",", $_POST['idp']);
		$data = $this -> Penjualan -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$post = $_POST;
		@$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"], 'subtotal' => ($_POST["harga"] * $_POST["jml"])));

		if (!empty($_SESSION["cart_service"])) {
			$arr = array();
			foreach ($_SESSION["cart_service"] as $s) {
				$arr[] = $s['id'];
			}
			// debug($_SESSION["cart_item"]);
			if (in_array($data[0]['products']['id'], $arr)) {
				// echo "match";
				foreach ($_SESSION["cart_service"] as $k => $v) {
					// debug($data[0]['products']['id']."-".$v['id']."/".$k);
					if ($data[0]['products']['id'] == $v['id']) {
						$_SESSION["cart_service"][$k]["nama"] = $data[0]['products']['nama_produk'];
						$_SESSION["cart_service"][$k]["jml"] = $_POST["jml"];
						$_SESSION["cart_service"][$k]["harga"] = $_POST["harga"];
						$_SESSION["cart_service"][$k]["subtotal"] = ($_POST["harga"] * $_POST["jml"]);

					}
				}
			} else
				$_SESSION["cart_service"] = array_merge($_SESSION["cart_service"], $itemArray);
		} else
			$_SESSION["cart_service"] = $itemArray;

		$this -> set(compact('data', 'post'));
	}

	public function del_produk() {
		if (!empty($_SESSION["cart_depan"])) {
			unset($_SESSION["cart_depan"][$_POST["idp"]]);
			if (empty($_POST["idp"]))
				unset($_SESSION["cart_depan"]);
		}
	}

	public function del_produksamping() {
		if (!empty($_SESSION["cart_samping"])) {
			unset($_SESSION["cart_samping"][$_POST["idp"]]);
			if (empty($_POST["idp"]))
				unset($_SESSION["cart_samping"]);
		}
	}

	public function del_produkbelakang() {
		if (!empty($_SESSION["cart_belakang"])) {
			unset($_SESSION["cart_belakang"][$_POST["idp"]]);
			if (empty($_POST["idp"]))
				unset($_SESSION["cart_belakang"]);
		}
	}

	public function del_produkaksesoris() {
		if (!empty($_SESSION["cart_aksesoris"])) {
			unset($_SESSION["cart_aksesoris"][$_POST["idp"]]);
			if (empty($_POST["idp"]))
				unset($_SESSION["cart_aksesoris"]);
		}
	}

	public function del_produkservice() {
		if (!empty($_SESSION["cart_service"])) {
			unset($_SESSION["cart_service"][$_POST["idp"]]);
			if (empty($_POST["idp"]))
				unset($_SESSION["cart_service"]);
		}
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
		if (!$this -> Penjualan -> exists($id)) {
			throw new NotFoundException(__('Invalid penjualan'));
		}
		$options = array('conditions' => array('Penjualan.' . $this -> Penjualan -> primaryKey => $id));
		$this -> set('penjualan', $this -> Penjualan -> find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function jumlahtot() {
		$this -> layout = false;
		//       print_r($_SESSION);
		$sumd = 0;
		if (!empty($_SESSION['cart_depan'])) {
			foreach (@$_SESSION['cart_depan'] as $j) {
				$sumd += $j['subtotal'];
			}
		}
		@$sums = 0;
		if (!empty($_SESSION['cart_samping'])) {

			foreach (@$_SESSION['cart_samping'] as $j) {
				$sums += $j['subtotal'];
			}
		}

		@$sumb = 0;
		if (!empty($_SESSION['cart_belakang'])) {
			foreach (@$_SESSION['cart_belakang'] as $sj) :
				//             print_r($sj);exit;
				$sumb += $sj['subtotal'];
			endforeach;
		}
		@$suma = 0;
		if (!empty($_SESSION['cart_aksesoris'])) {
			foreach (@$_SESSION['cart_aksesoris'] as $j) {
				$suma += $j['subtotal'];
			}
		}
		@$sumsc = 0;
		if (!empty($_SESSION['cart_service'])) {
			foreach (@$_SESSION['cart_service'] as $j) {
				$sumsc += $j['subtotal'];
			}
		}
		$tot = ($sumd + $sums + $sumb + $suma + $sumsc);
		$this -> set(compact('tot'));
	}

	public function add() {
		$this->params['action'] = 'Tambah';
		$user_id = $this -> Session -> read("Auth.User.id");
		$this -> loadModel('DetailPenjualan');
		$this -> loadModel('Customer');
		$this -> loadModel('Product');
		$nonota = $this -> createnomor();
		$order = $this -> createorder();
		$this -> set(compact('nonota','order'));
		if ($this -> request -> is('post')) {
			// For accounting
			$dataPost['date'] = $this->request->data['Pembelian']['tgl'];
			$dataPost['description'] = $this->request['data']['Penjualan']['ket'];
			$dataPost['discount'] = $this->request['data']['Penjualan']['discount'];
			$dataPost['hiddendiscount'] = $this->request['data']['Penjualan']['hiddendiscount'];
			$dataPost['cart_depan'] = $_SESSION["cart_depan"];
			$dataPost['cart_samping'] = $_SESSION["cart_samping"];
			$dataPost['cart_belakang'] = $_SESSION["cart_belakang"];
			$dataPost['cart_aksesoris'] = $_SESSION["cart_aksesoris"];
			$dataPost['cart_service'] = $_SESSION["cart_service"];

			$zn = $this -> request['data'];
			if($zn['Penjualan']['id_karyawan'] == ''){
				$this -> Session -> setFlash(__('The penjualan could not be saved. Please, try again.'));
				return $this -> redirect(array('action' => 'add'));
			}

			$znid = explode("-", $zn['name']);
			@$plg = $this -> Customer -> find('first', array('conditions' => array('AND' => array( array('Customer.id' => $znid[0]), array('Customer.nama like' => "%$znid[1]%")))));
			@$id_c = $plg['Customer']['id'];
			if (empty($plg)) {
				$custom['Customer']['nama'] = $zn['name'];
				$custom['Customer']['alamat'] = $zn['alamat'];
				$custom['Customer']['hp'] = $zn['hp'];
				//                print_r($custom);exit;
				$this -> Customer -> create();
				$this -> Customer -> save($custom, false);

			}

			$this -> Penjualan -> create();
			if ($this -> Penjualan -> save($zn)) {
				$lastc = $this -> Customer -> getLastInsertID();
				$lastin = $this -> Penjualan -> getLastInsertID();
				if (!empty($plg)) {
					$this -> Penjualan -> query("update penjualans set customer_id='$id_c' where id='$lastin'");
				} else {
					$this -> Penjualan -> query("update penjualans set customer_id='$lastc' where id='$lastin'");
				}

				if (!empty($_SESSION['cart_depan'])) {
					foreach ($_SESSION['cart_depan'] as $d) {
						$reqdata = $zn;
						$data['DetailPenjualan']['penjualan_id'] = $lastin;
						@$data['DetailPenjualan']['id_product'] = $d['id'];
						@$data['DetailPenjualan']['qty'] = $d['jml'];
						@$data['DetailPenjualan']['harga'] = $d['harga'];
						@$data['DetailPenjualan']['id_karyawan'] = explode("-", $reqdata['Penjualan']['id_karyawan'])['1'];
						@$data['DetailPenjualan']['disc'] = $reqdata['Penjualan']['discount'];
						@$data['DetailPenjualan']['hidden_disc'] = $reqdata['Penjualan']['hiddendiscount'];
						@$data['DetailPenjualan']['ket'] = $reqdata['Penjualan']['ket'];
						//                print_r($data);exit;
						$this -> DetailPenjualan -> create();
						$this -> DetailPenjualan -> save($data, false);
					}
				}
				unset($_SESSION["cart_depan"]);

				if (!empty($_SESSION['cart_samping'])) {
					foreach ($_SESSION['cart_samping'] as $s) {
						$reqdata = $zn;
						$data['DetailPenjualan']['penjualan_id'] = $lastin;
						@$data['DetailPenjualan']['id_product'] = $s['id'];
						@$data['DetailPenjualan']['qty'] = $s['jml'];
						@$data['DetailPenjualan']['harga'] = $s['harga'];
						@$data['DetailPenjualan']['id_karyawan'] = explode("-", $reqdata['Penjualan']['id_karyawan'])['1'];
						@$data['DetailPenjualan']['disc'] = $reqdata['Penjualan']['discount'];
						@$data['DetailPenjualan']['hidden_disc'] = $reqdata['Penjualan']['hiddendiscount'];
						@$data['DetailPenjualan']['ket'] = $reqdata['Penjualan']['ket'];
						//                print_r($data);exit;
						$this -> DetailPenjualan -> create();
						$this -> DetailPenjualan -> save($data, false);
					}
				}
				unset($_SESSION["cart_samping"]);
				if (!empty($_SESSION['cart_belakang'])) {
					foreach ($_SESSION['cart_belakang'] as $b) {
						$reqdata = $zn;
						$data['DetailPenjualan']['penjualan_id'] = $lastin;
						@$data['DetailPenjualan']['id_product'] = $b['id'];
						@$data['DetailPenjualan']['qty'] = $b['jml'];
						@$data['DetailPenjualan']['harga'] = $b['harga'];
						@$data['DetailPenjualan']['id_karyawan'] = explode("-", $reqdata['Penjualan']['id_karyawan'])['1'];
						@$data['DetailPenjualan']['disc'] = $reqdata['Penjualan']['discount'];
						@$data['DetailPenjualan']['hidden_disc'] = $reqdata['Penjualan']['hiddendiscount'];
						@$data['DetailPenjualan']['ket'] = $reqdata['Penjualan']['ket'];
						//                  print_r($data);exit;
						$this -> DetailPenjualan -> create();
						$this -> DetailPenjualan -> save($data, false);
					}
				}
				unset($_SESSION["cart_belakang"]);
				if (!empty($_SESSION['cart_aksesoris'])) {
					foreach ($_SESSION['cart_aksesoris'] as $a) {
						$reqdata = $zn;
						$data['DetailPenjualan']['penjualan_id'] = $lastin;
						@$data['DetailPenjualan']['id_product'] = $a['id'];
						@$data['DetailPenjualan']['qty'] = $a['jml'];
						@$data['DetailPenjualan']['harga'] = $a['harga'];
						@$data['DetailPenjualan']['id_karyawan'] = explode("-", $reqdata['Penjualan']['id_karyawan'])['1'];
						@$data['DetailPenjualan']['disc'] = $reqdata['Penjualan']['discount'];
						@$data['DetailPenjualan']['hidden_disc'] = $reqdata['Penjualan']['hiddendiscount'];
						@$data['DetailPenjualan']['ket'] = $reqdata['Penjualan']['ket'];
						//                  print_r($data);exit;
						$this -> DetailPenjualan -> create();
						$this -> DetailPenjualan -> save($data, false);
					}
				}
				unset($_SESSION["cart_aksesoris"]);
				if (!empty($_SESSION['cart_service'])) {
					foreach ($_SESSION['cart_service'] as $sc) {
						$reqdata = $zn;
						$data['DetailPenjualan']['penjualan_id'] = $lastin;
						@$data['DetailPenjualan']['id_product'] = $sc['id'];
						@$data['DetailPenjualan']['qty'] = $sc['jml'];
						@$data['DetailPenjualan']['harga'] = $sc['harga'];
						@$data['DetailPenjualan']['id_karyawan'] = explode("-", $reqdata['Penjualan']['id_karyawan'])['1'];
						@$data['DetailPenjualan']['disc'] = $reqdata['Penjualan']['discount'];
						@$data['DetailPenjualan']['hidden_disc'] = $reqdata['Penjualan']['hiddendiscount'];
						@$data['DetailPenjualan']['ket'] = $reqdata['Penjualan']['ket'];
						//                  print_r($data);exit;
						$this -> DetailPenjualan -> create();
						$this -> DetailPenjualan -> save($data, false);
					}
				}
				unset($_SESSION["cart_service"]);
				if(apiAccountingPenjualan($dataPost) != true)
					$this -> Session -> setFlash('Data gagal disimpan', 'danger');
				else
					$this -> Session -> setFlash('Data berhasil disimpan', 'success');
				unset($_SESSION["cart_item"]);
				// if ($this -> Pembelian -> save($this -> request -> data)) {
				return $this -> redirect(array('action' => 'index'));
				//                return $this->redirect(array('action' => 'bahanbaku'));
				//echo "<script> window.location='../bahanbakuses/add/$lastin/ok';</script>";
			} else {
				$this -> Session -> setFlash('Data gagal disimpan', 'danger');
			}
		}
		$customers = $this -> Penjualan -> Customer -> find('list');
		$merks = $this -> Penjualan -> Merk -> ParentMerk -> find('list', array('fields' => array('id', 'nama'), 'conditions' => array('parent_id' => NULL)));
		$users = $this -> Penjualan -> User -> find('list');
		//        $produks = $this->Product->find('list', array('fields' => array('id', 'nama_produk')));
		//        $produks=$this->Product->find('list', array('fields' => array('rego', 'name'), 'recursive' => -1));
		$this -> set(compact('customers', 'merks', 'users', 'produks', 'user_id', 'ac', 'tot'));
	}

	public function bahanbaku() {

	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function createnomor() {
		$tgl = "F/" . date("m/Y") . "/SMG/";
		$cek = $this -> Penjualan -> find('first', array('fields' => array('MAX(Penjualan.nomor)nomor'), 'conditions' => array('Penjualan.nomor LIKE' => $tgl . '%')));
		$no = explode("/", $cek[0]['nomor']);
		$newno = $no[4] + 1;
		$newno = $tgl . "" . sprintf("%04s", $newno);
		return $newno;

	}
        public function createorder() {
		$tgl = "CO/" . date("m/Y") . "/";
		$cek = $this -> Penjualan -> find('first', array('fields' => array('MAX(Penjualan.noorder)noorder'), 'conditions' => array('Penjualan.noorder LIKE' => $tgl . '%')));
		$no = explode("/", $cek[0]['noorder']);
		@$newno = $no[3] + 1;
		$newno = $tgl . "" . sprintf("%04s", $newno);
		return $newno;

	}


	public function preview() {
		$ok = $this -> request -> is('post');
		print_r($ok);
		exit ;
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
		if (!$this -> Penjualan -> exists($id)) {
			throw new NotFoundException(__('Invalid penjualan'));
		}
		if ($this -> request -> is(array('post', 'put'))) {
			if ($this -> Penjualan -> save($this -> request -> data)) {
				$this -> Session -> setFlash('Data berhasil diubah', 'success');
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The penjualan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Penjualan.' . $this -> Penjualan -> primaryKey => $id));
			$this -> request -> data = $this -> Penjualan -> find('first', $options);
		}
		$customers = $this -> Penjualan -> Customer -> find('list', array('fields' => array('id', 'nama')));
		$merks = $this -> Penjualan -> Merk -> find('list', array('fields' => array('id', 'nama')));
		$users = $this -> Penjualan -> User -> find('list', array('fields' => array('id', 'nama_admin')));
		$this -> set(compact('customers', 'merks', 'users'));
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
		$this -> Penjualan -> id = $id;
		if (!$this -> Penjualan -> exists()) {
			throw new NotFoundException(__('Invalid penjualan'));
		}
		$this -> request -> onlyAllow('post', 'delete');
		if ($this -> Penjualan -> delete()) {
			$this -> Session -> setFlash('Data berhasil dihapus', 'success');
		} else {
			$this -> Session -> setFlash(__('The penjualan could not be deleted. Please, try again.'));
		}
		return $this -> redirect(array('action' => 'index'));
	}

	public function model($t = null) {
		$this -> layout = 'ajax';
		$data = $this -> Penjualan -> query(" SELECT * FROM `models` where nama like '%$t%' ");
		$this -> set(compact('data'));
	}

	public function auto($t = null) {
		$this -> layout = 'ajax';
		@$term = $_GET['term'];
		$data = $this -> Penjualan -> query(" SELECT * FROM `customers` WHERE nama LIKE '%$term%' ");
		$this -> set(compact('data'));
	}

	public function autoprodukd($t = null) {
		$this -> layout = 'ajax';
		@$term = $_GET['term'];
		//$data = $this -> Penjualan -> query("SELECT * FROM `products` INNER JOIN categories ON products.category_id = categories.id WHERE (category_id='4' and parent_id='1') and nama_produk LIKE '%$term%' ");
		$data = $this -> Penjualan -> query("SELECT * FROM `products` WHERE nama_produk LIKE '%$term%' ");
		$this -> set(compact('data'));
	}
        public function autoproduks($t = null) {
		$this -> layout = 'ajax';
		@$term = $_GET['term'];
		//$data = $this -> Penjualan -> query("SELECT * FROM `products` INNER JOIN categories ON products.category_id = categories.id WHERE (category_id='6' and parent_id='1') and nama_produk LIKE '%$term%' ");
		$data = $this -> Penjualan -> query("SELECT * FROM `products` WHERE nama_produk LIKE '%$term%' ");
		$this -> set(compact('data'));
	}
         public function autoprodukb($t = null) {
		$this -> layout = 'ajax';
		@$term = $_GET['term'];
		/*$data = $this -> Penjualan -> query("SELECT * FROM `products` INNER JOIN categories ON products.category_id = categories.id WHERE (category_id='7' and parent_id='1') and nama_produk LIKE '%$term%' ");*/
		$data = $this -> Penjualan -> query("SELECT * FROM `products` WHERE nama_produk LIKE '%$term%' ");
		$this -> set(compact('data'));
	}

	public function autoaksesoris($t = null) {
		$this -> layout = 'ajax';
		@$term = $_GET['term'];
		//$data = $this -> Penjualan -> query("SELECT * FROM `products` WHERE category_id='2' and nama_produk LIKE '%$term%' ");
		$data = $this -> Penjualan -> query("SELECT * FROM `products` WHERE nama_produk LIKE '%$term%' ");
		$this -> set(compact('data'));
	}

	public function autoservice($t = null) {
		$this -> layout = 'ajax';
		@$term = $_GET['term'];
		//$data = $this -> Penjualan -> query("SELECT * FROM `products` WHERE category_id='3' and nama_produk LIKE '%$term%' ");
		$data = $this -> Penjualan -> query("SELECT * FROM `products` WHERE nama_produk LIKE '%$term%' ");
		$this -> set(compact('data'));
	}

}
