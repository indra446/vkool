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
    public function cart(){
        $produk = explode(",", $_POST['idp']);
        $data = $this->Penjualan->query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
        $post = $_POST;
        @$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"],'subtotal'=>($_POST["harga"]*$_POST["jml"])));
        
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
						$_SESSION["cart_depan"][$k]["subtotal"] =($_POST["harga"]*$_POST["jml"]) ;
						
					}
				}
			} else
				$_SESSION["cart_depan"] = array_merge($_SESSION["cart_depan"], $itemArray);
		} else
			$_SESSION["cart_depan"] = $itemArray;

        
        $this -> set(compact('data', 'post'));
    }
       public function samping(){
        $produk = explode(",", $_POST['idp']);
        $data = $this->Penjualan->query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
        $post = $_POST;
        @$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"],'subtotal'=>($_POST["harga"]*$_POST["jml"])));
        
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
						$_SESSION["cart_samping"][$k]["subtotal"] =($_POST["harga"]*$_POST["jml"]) ;
						
					}
				}
			} else
				$_SESSION["cart_samping"] = array_merge($_SESSION["cart_samping"], $itemArray);
		} else
			$_SESSION["cart_samping"] = $itemArray;

        
        $this -> set(compact('data', 'post'));
    }
         public function belakang(){
        $produk = explode(",", $_POST['idp']);
        $data = $this->Penjualan->query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
        $post = $_POST;
        @$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"],'subtotal'=>($_POST["harga"]*$_POST["jml"])));
        
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
						$_SESSION["cart_belakang"][$k]["subtotal"] =($_POST["harga"]*$_POST["jml"]) ;
						
					}
				}
			} else
				$_SESSION["cart_belakang"] = array_merge($_SESSION["cart_belakang"], $itemArray);
		} else
			$_SESSION["cart_belakang"] = $itemArray;

        
        $this -> set(compact('data', 'post'));
    }
         public function aksesoris(){
        $produk = explode(",", $_POST['idp']);
        $data = $this->Penjualan->query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
        $post = $_POST;
        @$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"],'subtotal'=>($_POST["harga"]*$_POST["jml"])));
        
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
						$_SESSION["cart_aksesoris"][$k]["subtotal"] =($_POST["harga"]*$_POST["jml"]) ;
						
					}
				}
			} else
				$_SESSION["cart_aksesoris"] = array_merge($_SESSION["cart_aksesoris"], $itemArray);
		} else
			$_SESSION["cart_aksesoris"] = $itemArray;

        
        $this -> set(compact('data', 'post'));
    }
         public function service(){
        $produk = explode(",", $_POST['idp']);
        $data = $this->Penjualan->query(" SELECT * FROM `products` WHERE id ='" . $produk[0] . "'");
        $post = $_POST;
        @$itemArray = array($data[0]['products']['id'] => array('id' => $data[0]['products']['id'], 'nama' => $data[0]['products']['nama_produk'], 'jml' => $_POST["jml"], 'harga' => $_POST["harga"],'subtotal'=>($_POST["harga"]*$_POST["jml"])));
        
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
						$_SESSION["cart_service"][$k]["subtotal"] =($_POST["harga"]*$_POST["jml"]) ;
						
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
    public function jumlahtot(){
        $this->layout=false;
//       print_r($_SESSION);
          $sumd = 0;
        if (!empty($_SESSION['cart_depan'])) {
            foreach (@$_SESSION['cart_depan'] as $j) {
                $sumd +=$j['subtotal'];
            }
        }
        @$sums = 0;
        if (!empty($_SESSION['cart_samping'])) {

            foreach (@$_SESSION['cart_samping'] as $j) {
                $sums +=$j['subtotal'];
            }
        }

        @$sumb = 0;
        if (!empty($_SESSION['cart_belakang'])) {
            foreach (@$_SESSION['cart_belakang'] as $sj):
//             print_r($sj);exit;
                $sumb +=$sj['subtotal'];
            endforeach;
        }
         @$suma=0;
         if (!empty($_SESSION['cart_aksesoris'])) {
          foreach (@$_SESSION['cart_aksesoris'] as $j) {
              $suma +=$j['subtotal'];
         }}
          @$sumsc=0;
          if (!empty($_SESSION['cart_service'])) {
          foreach (@$_SESSION['cart_service'] as $j) {
              $sumsc +=$j['subtotal'];
          }}
         $tot=($sumd+$sums+$sumb+$suma+$sumsc);
         $this->set(compact('tot'));
    }
    public function add() {
        $user_id = $this->Session->read("Auth.User.id");
        $this->loadModel('DetailPenjualan');
        $this->loadModel('Customer');
        $this->loadModel('Product');
        
        

        if ($this->request->is('post')) {

            $zn = $this->request['data'];           
            $znid=  explode("-",$zn['name']);
            @$plg = $this->Customer->find('first', array('conditions' => array('AND' => array(array('Customer.id' =>$znid[0]), array('Customer.nama like' => "%$znid[1]%")))));
            @$id_c = $plg['Customer']['id'];
            if (empty($plg)) {
                $custom['Customer']['nama'] = $zn['name'];
                $custom['Customer']['alamat'] = $zn['alamat'];
                $custom['Customer']['hp'] = $zn['hp'];
//                print_r($custom);exit;
                $this->Customer->create();
                $this->Customer->save($custom, false);
               
            }
            $this->Penjualan->create();
            if ($this->Penjualan->save($this->request['data'])) {
                $lastc = $this->Customer->getLastInsertID();
                $lastin = $this->Penjualan->getLastInsertID();
                if(!empty($plg)){
                $this->Penjualan->query("update penjualans set customer_id='$id_c' where id='$lastin'");}
                else{
                    $this->Penjualan->query("update penjualans set customer_id='$lastc' where id='$lastin'"); 
                }
                foreach ($_SESSION['cart_depan'] as $d) {                    
                $reqdata = $this->request['data'];
                $data['DetailPenjualan']['penjualan_id'] = $lastin;
                @$data['DetailPenjualan']['id_product'] = $d['id'];
                @$data['DetailPenjualan']['qty'] = $d['jml'];
                @$data['DetailPenjualan']['harga'] = $d['harga'];
                @$data['DetailPenjualan']['id_karyawan'] = explode("-",$reqdata['Penjualan']['id_karyawan'])['1'];
                @$data['DetailPenjualan']['ket'] = $reqdata['Penjualan']['ket'];
//                print_r($data);exit;
                $this->DetailPenjualan->create();
                $this->DetailPenjualan->save($data,false);}
                unset($_SESSION["cart_depan"]);
                foreach ($_SESSION['cart_samping'] as $s) { 
                $reqdata = $this->request['data'];
                $data['DetailPenjualan']['penjualan_id'] = $lastin;
                @$data['DetailPenjualan']['id_product'] = $s['id'];
                @$data['DetailPenjualan']['qty'] = $s['jml'];
                @$data['DetailPenjualan']['harga'] = $_SESSION['cart_samping'][$i]['harga'];
                @$data['DetailPenjualan']['id_karyawan'] = explode("-",$reqdata['Penjualan']['id_karyawan'])['1'];
                @$data['DetailPenjualan']['ket'] = $reqdata['Penjualan']['ket'];
                $this->DetailPenjualan->create();
                $this->DetailPenjualan->save($data,false);}
                unset($_SESSION["cart_samping"]);
                foreach ($_SESSION['cart_belakang'] as $b) { 
                $reqdata = $this->request['data'];
                $data['DetailPenjualan']['penjualan_id'] = $lastin;
                @$data['DetailPenjualan']['id_product'] = $b['id'];
                @$data['DetailPenjualan']['qty'] = $b['jml'];
                @$data['DetailPenjualan']['harga'] = $h['harga'];
                @$data['DetailPenjualan']['id_karyawan'] = explode("-",$reqdata['Penjualan']['id_karyawan'])['1'];
                @$data['DetailPenjualan']['ket'] = $reqdata['Penjualan']['ket'];
                $this->DetailPenjualan->create();
                $this->DetailPenjualan->save($data,false);}
                unset($_SESSION["cart_belakang"]);
                foreach ($_SESSION['cart_aksesoris'] as $a) { 
                $reqdata = $this->request['data'];
                $data['DetailPenjualan']['penjualan_id'] = $lastin;
                @$data['DetailPenjualan']['id_product'] = $a['id'];
                @$data['DetailPenjualan']['qty'] = $a['jml'];
                @$data['DetailPenjualan']['harga'] = $a['harga'];
                @$data['DetailPenjualan']['id_karyawan'] = explode("-",$reqdata['Penjualan']['id_karyawan'])['1'];
                @$data['DetailPenjualan']['ket'] = $reqdata['Penjualan']['ket'];
                $this->DetailPenjualan->create();
                $this->DetailPenjualan->save($data,false);}
                unset($_SESSION["cart_aksesoris"]);
                foreach ($_SESSION['cart_service'] as $sc) { 
                $reqdata = $this->request['data'];
                $data['DetailPenjualan']['penjualan_id'] = $lastin;
                @$data['DetailPenjualan']['id_product'] = $sc['id'];
                @$data['DetailPenjualan']['qty'] = $sc['jml'];
                @$data['DetailPenjualan']['harga'] = $sc['harga'];
                @$data['DetailPenjualan']['id_karyawan'] = explode("-",$reqdata['Penjualan']['id_karyawan'])['1'];
                @$data['DetailPenjualan']['ket'] = $reqdata['Penjualan']['ket'];
                $this->DetailPenjualan->create();
                $this->DetailPenjualan->save($data,false);}
                unset($_SESSION["cart_service"]);
                $this->Session->setFlash('Data berhasil disimpan', 'success');
//                return $this->redirect(array('action' => 'bahanbaku'));
               echo "<script> window.location='../bahanbakuses/add/$lastin/ok';</script>";
            } else {
                $this->Session->setFlash(__('The penjualan could not be saved. Please, try again.'));
            }
        }
        $customers = $this->Penjualan->Customer->find('list');
        $merks = $this->Penjualan->Merk->ParentMerk->find('list', array('fields' => array('id', 'nama'), 'conditions' => array('parent_id' => NULL)));
        $users = $this->Penjualan->User->find('list');
//        $produks = $this->Product->find('list', array('fields' => array('id', 'nama_produk')));
//        $produks=$this->Product->find('list', array('fields' => array('rego', 'name'), 'recursive' => -1));
        $this->set(compact('customers', 'merks', 'users', 'produks','user_id','ac','tot'));
    }
    public function bahanbaku(){
        
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
                $this->Session->setFlash('Data berhasil diubah', 'success');
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
        $this->request->onlyAllow('post', 'delete');
        if ($this->Penjualan->delete()) {
            $this->Session->setFlash('Data berhasil dihapus', 'success');
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
        @$term=$_GET['term'];
        $data = $this->Penjualan->query(" SELECT * FROM `customers` WHERE nama LIKE '%$term%' ");
        $this->set(compact('data'));
    }
    public function autoproduk($t = null) {
        $this->layout = 'ajax';
        @$term=$_GET['term'];
        $data = $this->Penjualan->query("SELECT * FROM `products` WHERE category_id='1' and nama_produk LIKE '%$term%' ");
        $this->set(compact('data'));
    }
    public function autoaksesoris($t = null) {
        $this->layout = 'ajax';
        @$term=$_GET['term'];
        $data = $this->Penjualan->query("SELECT * FROM `products` WHERE category_id='2' and nama_produk LIKE '%$term%' ");
        $this->set(compact('data'));
    }
     public function autoservice($t = null) {
        $this->layout = 'ajax';
        @$term=$_GET['term'];
        $data = $this->Penjualan->query("SELECT * FROM `products` WHERE category_id='3' and nama_produk LIKE '%$term%' ");
        $this->set(compact('data'));
    }

}
