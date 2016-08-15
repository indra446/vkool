<?php

App::uses('AppController', 'Controller');

/**
 * Penjualans Controller
 *
 * @property Penjualan $Penjualan
 * @property PaginatorComponent $Paginator
 */
class PenjualansController extends AppController {
	public $helpers = array('Js');

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'DataTable');
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
		// $this -> Penjualan -> recursive = 0;
		// $this -> set('penjualans', $this -> Paginator -> paginate());
		if ($this -> request -> is('ajax')) {
			$this -> autoRender = false;
			$this -> paginate = array('fields' => array('Penjualan.nomor', 'Cus.nama', 'Merk.nama','Penjualan.thn', 'Penjualan.nopol','Penjualan.nomesin','Penjualan.norangka','Penjualan.id'),'joins' => array( array('table' => 'customers', 'alias' => 'Cus', 'type' => 'INNER', 'conditions' => array('Cus.id = Penjualan.customer_id')),array('table' => 'merks', 'alias' => 'Merk', 'type' => 'INNER', 'conditions' => array('Merk.id = Penjualan.merk_id'))));

			$this -> DataTable -> mDataProp = true;
			echo json_encode($this -> DataTable -> getResponse());
			// exit ;
		}
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
		$datajual = $this -> Penjualan -> find('first', array('recursive' => 1, 'conditions' => array('Penjualan.id' => $id)));
		if (empty($datajual)) {
			throw new NotFoundException(__('Invalid Penjualan'));
		}
		// $tgl = $this -> konversi_tanggal("d M Y", $data[0]['Pembelian']['tgl_transaksi']);
		// debug($tgl);
		$this -> set(compact('datajual', 'tgl'));
		// debug($data);
		// $options = array('conditions' => array('Pembelian.' . $this -> Pembelian -> primaryKey => $id));
		// $this -> set('pembelian', $this -> Pembelian -> find('first', $options));
	}
		public function hapus($id = null) {
		}
	/**
	 * index method
	 *
	 * @return void
	 */
	public function histori() {
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
				INNER JOIN bahanbakus ON bahanbakus.penjualan_id=penjualans.id
				GROUP BY
				penjualans.id,
				penjualans.nomor,
				penjualans.created,
				customers.nama
				)a WHERE a.bayar>=a.total");
		$this->set(compact('data'));	

	}


	public function rekaphistori() {
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
					INNER JOIN bahanbakus ON bahanbakus.penjualan_id=penjualans.id
					GROUP BY
					penjualans.id,
					penjualans.nomor,
					penjualans.created,
					customers.nama
					)a WHERE a.bayar>=a.total AND a.nomor LIKE '%".$d[3]."%' AND a.nama LIKE '%".$d[4]."%' OR SUBSTR(a.created  FROM 1 FOR 10) BETWEEN '".$tgla."' AND '".$tglb."'");
			$this->set(compact('data'));	
		}
	}
	public function detail($id=null) {
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
				detail_penjualans.disc as disc_item,
				penjualans.disc,
				penjualans.hidden_disc,
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
public function detailpenj($id=null) {
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
				detail_penjualans.disc as disc_item,
				penjualans.disc,
				penjualans.hidden_disc,
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
		$produk = explode("|", $_POST['idp']);
		$data = $this -> Penjualan -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$post = $_POST;
		@$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"], 'subtotal' => ($_POST["harga"] * $_POST["jml"])-$_POST["diskon"],'diskon' => $_POST["diskon"],));

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
                                                $_SESSION["cart_depan"][$k]["diskon"] = $_POST["diskon"];
						$_SESSION["cart_depan"][$k]["subtotal"] = ($_POST["harga"] * $_POST["jml"])-$_POST["diskon"];
						

					}
				}
			} else
				$_SESSION["cart_depan"] = array_merge($_SESSION["cart_depan"], $itemArray);
		} else
			$_SESSION["cart_depan"] = $itemArray;
                    
		$this -> set(compact('data', 'post'));
	}

	public function samping() {
		$produk = explode("|", $_POST['idp']);
		$data = $this -> Penjualan -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$post = $_POST;
		@$itemArraysamping = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"], 'subtotal' => ($_POST["harga"] * $_POST["jml"])-$_POST["diskon"],'diskon' => $_POST["diskon"]));

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
                                                $_SESSION["cart_samping"][$k]["diskon"] = $_POST["diskon"];
						$_SESSION["cart_samping"][$k]["subtotal"] = ($_POST["harga"] * $_POST["jml"])-$_POST["diskon"];
						

					}
				}
			} else
				$_SESSION["cart_samping"] = array_merge($_SESSION["cart_samping"], $itemArraysamping);
		} else
			$_SESSION["cart_samping"] = $itemArraysamping;

		$this -> set(compact('data', 'post'));
	}

	public function belakang() {
		$produk = explode("|", $_POST['idp']);
		$data = $this -> Penjualan -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$post = $_POST;
		@$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"], 'subtotal' => ($_POST["harga"] * $_POST["jml"])-$_POST["diskon"],'diskon' => $_POST["diskon"]));

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
                        $_SESSION["cart_belakang"][$k]["diskon"] = $_POST['diskon'];
						$_SESSION["cart_belakang"][$k]["subtotal"] = ($_POST["harga"] * $_POST["jml"])-$_POST['diskon'];
						

					}
				}
			} else
				$_SESSION["cart_belakang"] = array_merge($_SESSION["cart_belakang"], $itemArray);
		} else
			$_SESSION["cart_belakang"] = $itemArray;

		$this -> set(compact('data', 'post'));
	}

	public function aksesoris() {
		$produk = explode("|", $_POST['idp']);
		$data = $this -> Penjualan -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$post = $_POST;
		@$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"], 'subtotal' => ($_POST["harga"] * $_POST["jml"])-$_POST["diskon"],'diskon' => $_POST["diskon"]));

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
                                                $_SESSION["cart_aksesoris"][$k]["diskon"] = $_POST["diskon"];
						$_SESSION["cart_aksesoris"][$k]["subtotal"] = ($_POST["harga"] * $_POST["jml"])-$_POST["diskon"];
						

					}
				}
			} else
				$_SESSION["cart_aksesoris"] = array_merge($_SESSION["cart_aksesoris"], $itemArray);
		} else
			$_SESSION["cart_aksesoris"] = $itemArray;

		$this -> set(compact('data', 'post'));
	}

	public function service() {
		$produk = explode("|", $_POST['idp']);
		$data = $this -> Penjualan -> query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
		$post = $_POST;
		@$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"], 'subtotal' => ($_POST["harga"] * $_POST["jml"])-$_POST["diskon"],'diskon' => $_POST["diskon"]));

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
                                                $_SESSION["cart_service"][$k]["diskon"] = $_POST["diskon"];
						$_SESSION["cart_service"][$k]["subtotal"] = ($_POST["harga"] * $_POST["jml"])- $_POST["diskon"];
						

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
		} elseif (empty($_POST["idp"])) {
			unset($_SESSION["cart_depan"]);
		}

	}

	public function del_produksamping() {
		if (!empty($_SESSION["cart_samping"])) {
                    
			unset($_SESSION["cart_samping"][$_POST["idp"]]);
		} elseif (empty($_POST["idp"])) {
			unset($_SESSION["cart_samping"]);
		}
	}

	public function del_produkbelakang() {
		if (!empty($_SESSION["cart_belakang"])) {
			unset($_SESSION["cart_belakang"][$_POST["idp"]]);
		} elseif (empty($_POST["idp"])) {
			unset($_SESSION["cart_belakang"]);
		}
	}

	public function del_produkaksesoris() {
		if (!empty($_SESSION["cart_aksesoris"])) {
			unset($_SESSION["cart_aksesoris"][$_POST["idp"]]);
		} elseif (empty($_POST["idp"])) {
			unset($_SESSION["cart_aksesoris"]);
		}
	}

	public function del_produkservice() {
		if (!empty($_SESSION["cart_service"])) {
			unset($_SESSION["cart_service"][$_POST["idp"]]);
		} elseif (empty($_POST["idp"])) {
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
                unset($_SESSION["cart_depan"]);unset($_SESSION["cart_samping"]);unset($_SESSION["cart_belakang"]);unset($_SESSION["cart_aksesoris"]);unset($_SESSION["cart_service"]);
		$user_id = $this -> Session -> read("Auth.User.id");
		$this -> loadModel('DetailPenjualan');
		$this -> loadModel('Customer');
		$this -> loadModel('Product');
		$nonota = $this -> createnomor();
                
		$order = $this -> createorder();
		$this -> set(compact('nonota','order'));
		if ($this -> request -> is('post')) {

			$zn = $this -> request['data'];
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
                        $datap['Penjualan']['nomor']=$nonota;
                        $datap['Penjualan']['noorder']=$order;
                        $datap['Penjualan']['merk_id']=$zn['Penjualan']['merk_id'];
                        $datap['Penjualan']['model_id']=$zn['Penjualan']['model_id'];
                        $datap['Penjualan']['thn']=$zn['Penjualan']['thn'];
                        $datap['Penjualan']['nopol']=$zn['Penjualan']['nopol'];
                        $datap['Penjualan']['nomesin']=$zn['Penjualan']['nomesin'];
                        $datap['Penjualan']['norangka']=$zn['Penjualan']['norangka'];
                        $datap['Penjualan']['disc']=$zn['Penjualan']['disc'];
                        $datap['Penjualan']['hidden_disc']=$zn['Penjualan']['hidden_disc'];
                        $datap['Penjualan']['user_id']=$zn['Penjualan']['user_id'];
			if ($this -> Penjualan -> save($datap,false)) {
				$lastc = $this -> Customer -> getLastInsertID();
				$lastin = $this -> Penjualan -> getLastInsertID();
                                
				if (!empty($plg)) {
					$this -> Penjualan -> query("update penjualans set customer_id='$id_c' where id='$lastin'");
				} else {
					$this -> Penjualan -> query("update penjualans set customer_id='$lastc' where id='$lastin'");
				}
                                $count = count($zn['DetailPenjualan']['id_product']) - 1;
				for ($i = 0; $i <= $count; $i++) {
                                    $data['DetailPenjualan']['penjualan_id'] = $lastin;
                                    @$data['DetailPenjualan']['id_product'] = $zn['DetailPenjualan']['id_product'][$i];
                                    @$data['DetailPenjualan']['qty'] = $zn['DetailPenjualan']['qty'][$i];
                                    @$data['DetailPenjualan']['harga'] = $zn['DetailPenjualan']['harga'][$i];
                                    @$data['DetailPenjualan']['id_karyawan'] = explode("-", $zn['Penjualan']['id_karyawan'])['1'];
                                    @$data['DetailPenjualan']['disc'] = $zn['DetailPenjualan']['disc'][$i];
                                    @$data['DetailPenjualan']['ket'] = $zn['Penjualan']['ket'];
//                                                    print_r($data);exit;
                                    $this -> DetailPenjualan -> create();
                                    $this -> DetailPenjualan -> save($data, false);
				}
				unset($_SESSION["cart_depan"]);unset($_SESSION["cart_samping"]);unset($_SESSION["cart_belakang"]);unset($_SESSION["cart_aksesoris"]);unset($_SESSION["cart_service"]);
			
//				$this -> Session -> setFlash('Data berhasil disimpan', 'success');
                                $this -> Session -> setFlash(__('Data berhasil disimpan'));
//                                   return $this->redirect(array('action' => 'printorder/'.$lastin,array('target'=>'_blank')));
				 echo "<script> window.open('../penjualans/printorder/$lastin');</script>";
                                 
			} else {
				$this -> Session -> setFlash(__('The penjualan could not be saved. Please, try again.'));
			}
		}
		$customers = $this -> Penjualan -> Customer -> find('list');
		$merks = $this -> Penjualan -> Merk -> ParentMerk -> find('list', array('fields' => array('id', 'nama'), 'conditions' => array('parent_id' => NULL)));
		$users = $this -> Penjualan -> User -> find('list');
//		$produks = $this->Product->find('list', array('fields' => array('id', 'nama_produk')));
//                $produks=$this->Product->find('list', array('fields' => array('rego', 'name'), 'recursive' => -1));
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
		@$newno = $no[4] + 1;
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
		$data = $this -> Penjualan -> query("SELECT * FROM `products` INNER JOIN categories ON products.category_id = categories.id WHERE products.aktif='1'  and nama_produk LIKE '%$term%' ");
		$this -> set(compact('data'));
	}
        public function autoproduks($t = null) {
		$this -> layout = 'ajax';
		@$term = $_GET['term'];
		$data = $this -> Penjualan -> query("SELECT * FROM `products` INNER JOIN categories ON products.category_id = categories.id WHERE products.aktif='1' and (category_id='6' and parent_id='1') and nama_produk LIKE '%$term%' ");
		$this -> set(compact('data'));
	}
         public function autoprodukb($t = null) {
		$this -> layout = 'ajax';
		@$term = $_GET['term'];
		$data = $this -> Penjualan -> query("SELECT * FROM `products` INNER JOIN categories ON products.category_id = categories.id WHERE products.aktif='1' and (category_id='7' and parent_id='1') and nama_produk LIKE '%$term%' ");
		$this -> set(compact('data'));
	}

	public function autoaksesoris($t = null) {
		$this -> layout = 'ajax';
		@$term = $_GET['term'];
		$data = $this -> Penjualan -> query("SELECT * FROM `products` WHERE products.aktif='1' and category_id='2' and nama_produk LIKE '%$term%' ");
		$this -> set(compact('data'));
	}

	public function autoservice($t = null) {
		$this -> layout = 'ajax';
		@$term = $_GET['term'];
		$data = $this -> Penjualan -> query("SELECT * FROM `products` WHERE products.aktif='1'and category_id='3' and nama_produk LIKE '%$term%' ");
		$this -> set(compact('data'));
	}
        public function printorder($id=null){
            if (!$this -> Penjualan -> exists($id)) {
			throw new NotFoundException(__('Invalid penjualan'));
		}
            $data = $this -> Penjualan -> query("SELECT
            penjualans.nomor,
            penjualans.noorder,
            penjualans.customer_id,
            penjualans.merk_id,
            penjualans.model_id,
            penjualans.thn,
            penjualans.nopol,
            penjualans.nomesin,
            penjualans.norangka,
            penjualans.user_id,
            penjualans.disc,
            penjualans.hidden_disc,
            penjualans.created,
            penjualans.modified,
            products.nama_produk,
            categories.kategori,
            merks.nama,
            customers.nama,
            customers.alamat,
            customers.telp,
            customers.hp,
            bahanbakus.id_teknisi,
            karyawans.nama,
            bahanbakus.created
            FROM
            penjualans
            INNER JOIN detail_penjualans ON detail_penjualans.penjualan_id = penjualans.id
            INNER JOIN products ON detail_penjualans.id_product = products.id
            INNER JOIN categories ON products.category_id = categories.id
            INNER JOIN merks ON penjualans.merk_id = merks.id
            INNER JOIN customers ON penjualans.customer_id = customers.id
            LEFT JOIN bahanbakus ON bahanbakus.penjualan_id = detail_penjualans.penjualan_id
            LEFT JOIN karyawans ON karyawans.id = bahanbakus.id_teknisi
            WHERE
            detail_penjualans.penjualan_id = '$id'
            GROUP BY
            detail_penjualans.id ");
            $this->set(compact('data'));
        }

}
