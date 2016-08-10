<?php

App::uses('AppController', 'Controller');

/**
 * Bahanbakuses Controller
 *
 * @property Bahanbakus $Bahanbakus
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BahanbakusesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        if ($this->request->is(array('post', 'put'))) {
              $reqdata = $this->request['data'];
              @$nota=$reqdata['bahanbakuses']['nota'];
              @$nama=$reqdata['bahanbakuses']['pelanggan'];
              @$aw=date_create($reqdata['bahanbakuses']['awal']);
              @$awal=date_format($aw, 'Y-m-d');
              @$ak=date_create($reqdata['bahanbakuses']['akhir']);
              @$akhir=date_format($ak, 'Y-m-d');
              $bahanbakuses = $this->Bahanbakus->query("SELECT
              customers.nama,
              penjualans.id,penjualans.nomor,
              penjualans.created,
              mid(penjualans.created,1,10),
              bahanbakus.id
              FROM
              penjualans
              INNER JOIN customers ON penjualans.customer_id = customers.id
              LEFT JOIN bahanbakus ON penjualans.id = bahanbakus.penjualan_id
               WHERE
              penjualans.nomor LIKE '%$nota%' OR
              customers.nama LIKE '%$nama%' 
               AND mid(penjualans.created,1,10) BETWEEN '$awal' AND '$akhir'
              group by penjualans.id ORDER BY customers.nama ASC ");
                          $this->set(compact('bahanbakuses','nota','nama'));
        } else {
        $bahanbakuses = $this->Bahanbakus->query("SELECT
            customers.nama,
            penjualans.id,penjualans.nomor,
            penjualans.created,
            bahanbakus.id
            FROM
            penjualans
            INNER JOIN customers ON penjualans.customer_id = customers.id
            LEFT JOIN bahanbakus ON penjualans.id = bahanbakus.penjualan_id group by penjualans.id");
                    $this->set(compact('bahanbakuses'));}
    }

    public function tambah($id=null) {
        $this->loadModel('Category');
        $this->loadModel('DetailPenjualan');
            $this->layout='ajax';
            $disc=$this->Bahanbakus->query("SELECT detail_penjualans.disc, detail_penjualans.hidden_disc, detail_penjualans.id_karyawan, detail_penjualans.ket FROM `detail_penjualans` where penjualan_id='$id'");
            if ($this->request->is(array('post', 'put'))) {
                $reqdata = $this->request['data'];
                $data['DetailPenjualan']['penjualan_id'] = $id;
                @$data['DetailPenjualan']['id_product'] = $reqdata['Bahanbakuses']['product_id'];
                @$data['DetailPenjualan']['qty'] = $reqdata['Bahanbakuses']['qty'];
                @$data['DetailPenjualan']['harga'] = $reqdata['Bahanbakuses']['harga'];
                @$data['DetailPenjualan']['id_karyawan'] = $disc[0]['detail_penjualans']['id_karyawan'];
                @$data['DetailPenjualan']['disc'] = $disc[0]['detail_penjualans']['disc'];
                @$data['DetailPenjualan']['hidden_disc'] = $disc[0]['detail_penjualans']['hidden_disc'];
                @$data['DetailPenjualan']['ket'] = $disc[0]['detail_penjualans']['ket'];
//                print_r($data);exit;
                $this->DetailPenjualan->create();
                $this->DetailPenjualan->save($data,false);
            $this->Session->setFlash('Data berhasil disimpan', 'success');
             echo "<script> window.location='../view/$id/ygsy';</script>";
             echo "<script>location.reload();</script>";
//            return $this->redirect(array('controller' => 'bahanbakuses', 'action' => 'view/' . $id . '/ygsy'));
        }
            
        $parentCategories = $this->Category-> find('list', array('fields' => array('Category.id', 'Category.kategori'), 'conditions' => array('AND' => array('Category.aktif' => 1))));
        $this->set(compact('parentCategories'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (empty($id)) {
            throw new NotFoundException(__('Invalid bahanbakus'));
        }
        $bakus = $this->Bahanbakus->query("SELECT
detail_penjualans.id,
detail_penjualans.penjualan_id,
detail_penjualans.id_product,
detail_penjualans.qty,
detail_penjualans.harga,
detail_penjualans.disc,
detail_penjualans.hidden_disc,
detail_penjualans.id_karyawan,
detail_penjualans.ket,
products.nama_produk,
karyawans.nama,
karyawans.alamat,
karyawans.no_ktp,
categories.kategori,
(detail_penjualans.qty*detail_penjualans.harga) as subtotal
FROM
detail_penjualans
left JOIN products ON detail_penjualans.id_product = products.id
left JOIN karyawans ON detail_penjualans.id_karyawan = karyawans.id
left JOIN categories ON products.category_id = categories.id
where penjualan_id='$id'
");
        $totals = $this->Bahanbakus->query("select sum(s.subtotal) as total from(SELECT
qty*harga as subtotal,
detail_penjualans.qty,
detail_penjualans.harga
FROM `detail_penjualans`
where penjualan_id='$id')as s");
        $disc=$this->Bahanbakus->query("SELECT penjualans.disc, penjualans.hidden_disc FROM penjualans WHERE id='$id' limit 1 ");
        $this->set(compact('bakus', 'totals', 'id','disc'));
    }

    public function bayar() {
        $tanggal=date("Y-m-d");
        @$tipe=$_POST['tipe'];
        @$ket=$_POST['ket'];
        @$bayar=$_POST['bayar'];
        @$kbayar=$_POST['kbayar'];
        @$idpenju=$_POST['idpenju'];
        @$total=$_POST['total'];
        @$lunas=$_POST['lunas'];
        
//        print_r($idpenju);exit;
        $this->Bahanbakus->query("insert into `bayars` (bayar,id_penjualan,total,jatuh_tempo,tipe_bayar,ket,lunas,created,modified) VALUE('$bayar','$idpenju','$total','','$tipe','$ket','$lunas','$tanggal','$tanggal');");

    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
//        unset($_SESSION['depan']);
        $this->loadModel('Product');
        if (empty($id)) {
            throw new NotFoundException(__('Invalid bahanbakus'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $zn = $this -> request['data'];
            $count=count($zn['Penjualan']['ket'])-1;
//            print_r($count);exit;
            for ($i = 0; $i <= $count; $i++) {             
                    @$data['Bahanbakus']['penjualan_id'] = $id;
                    @$data['Bahanbakus']['product_id'] =$zn['Penjualan']['ket'][$i];
                    @$data['Bahanbakus']['jum_sisa'] =$zn['Penjualan']['sisa'][$i]; 
                    @$data['Bahanbakus']['dm1'] =$zn['Penjualan']['pjg'][$i]; 
                    @$data['Bahanbakus']['dm2'] =$zn['Penjualan']['lbr'][$i]; 
                    @$data['Bahanbakus']['id_teknisi'] =explode("-",$zn['Bahanbakuses']['id_teknisi'])['1']; 
                    @$data['Bahanbakus']['ket'] =$zn['Penjualan']['ket'][$i];
                    $this->Bahanbakus->create();
                    $this->Bahanbakus->save($data, false);
                    $this->Bahanbakus->query(" update detail_penjualans set flag='1' where penjualan_id='$id' ");
                }
            $this->Session->setFlash('Data berhasil disimpan', 'success');
            return $this->redirect(array('controller' => 'bahanbakuses', 'action' => 'view/' . $id . '/ygsy'));
        }
//                        else {
//				$this->Session->setFlash(__('The bahanbakus could not be saved. Please, try again.'));
//			}

        $detailpenjualan=$this->Bahanbakus->query(" SELECT
        detail_penjualans.penjualan_id,
        detail_penjualans.id,
        detail_penjualans.id_product,
        categories.kategori,
        products.nama_produk,CONCAT(categories.id,'-',products.nama_produk) AS produk,
        CONCAT(detail_penjualans.id_product,'-',products.nama_produk) AS produkid,products.dimensi
        FROM
        detail_penjualans
        INNER JOIN products ON detail_penjualans.id_product = products.id
        INNER JOIN categories ON products.category_id = categories.id
        WHERE
        detail_penjualans.penjualan_id = '$id' ORDER BY category_id");
		//indra
		$sisa = $this -> Bahanbakus -> query("SELECT
				CONCAT(products.id,',p')id,
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
						IF(Sum(detail_penjualans.qty) IS NULL,0,Sum(detail_penjualans.qty))jual,
						products.satuan
						FROM
						products
						INNER JOIN detail_penjualans ON detail_penjualans.id_product = products.id where flag='1'
						GROUP BY
						products.id
						ORDER BY
						products.nama_produk ASC
						)a ON a.id=products.id
				GROUP BY products.id");
		$bhnbaku=$this->Bahanbakus->query("SELECT
				CONCAT(bahanbakus.id,',b')id,
				bahanbakus.product_id,
				bahanbakus.dm1,
				bahanbakus.dm2,
				bahanbakus.id_teknisi,
				bahanbakus.penjualan_id,
				bahanbakus.ket,
				bahanbakus.created,
				bahanbakus.modified,products.nama_produk
				FROM
				bahanbakus INNER JOIN products ON bahanbakus.product_id = products.id");	
		// debug($sisa);debug($baku);	
        // $produks = $this->Product->find('list', array('fields' => array('id', 'nama_produk'), 'recursive' => -1));
        // $produkdepan = $this->Bahanbakus->query(" SELECT products.id, products.nama_produk,products.category_id,products.tipe,products.dimensi,products.satuan FROM `products`  WHERE category_id='4' ");
        // $produksamping = $this->Bahanbakus->query(" SELECT products.id, products.nama_produk,products.category_id,products.tipe,products.dimensi,products.satuan FROM `products`  WHERE category_id='6' ");
        // $produkbelakang = $this->Bahanbakus->query(" SELECT products.id, products.nama_produk,products.category_id,products.tipe,products.dimensi,products.satuan FROM `products`  WHERE category_id='7' ");
        // $produkservice = $this->Bahanbakus->query(" SELECT products.id, products.nama_produk,products.category_id,products.tipe,products.dimensi,products.satuan FROM `products`  WHERE category_id='3' ");
        // $produkaksesoris = $this->Bahanbakus->query(" SELECT products.id, products.nama_produk,products.category_id,products.tipe,products.dimensi,products.satuan FROM `products`  WHERE category_id='2' ");
        $this->set(compact('sisa','bhnbaku','produks','detailpenjualan','produkdepan','produksamping','produkbelakang','produkservice','produkaksesoris'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Bahanbakus->exists($id)) {
            throw new NotFoundException(__('Invalid bahanbakus'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $tes = $this->request['data'];
            print_r($tes);
            exit;
            if ($this->Bahanbakus->save($this->request->data)) {
                $this->Session->setFlash(__('The bahanbakus has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The bahanbakus could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Bahanbakus.' . $this->Bahanbakus->primaryKey => $id));
            $this->request->data = $this->Bahanbakus->find('first', $options);
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
        $this->Bahanbakus->id = $id;
        if (!$this->Bahanbakus->exists()) {
            throw new NotFoundException(__('Invalid bahanbakus'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Bahanbakus->delete()) {
            $this->Session->setFlash(__('The bahanbakus has been deleted.'));
        } else {
            $this->Session->setFlash(__('The bahanbakus could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    public function depan(){
        	$produk = explode(",", $_POST['idp']);
                $bk=$produk[1];
                if($bk=='b'){
		$data = $this -> Bahanbakus ->query(" SELECT * FROM `bahanbakus` where id='" . $produk[0] . "'");
                $this -> set(compact('data'));
                
                }else { 
                 $sisa = $this -> Bahanbakus -> query("
                    SELECT
                    CONCAT(products.id,',p')id,
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
                    IF(Sum(detail_penjualans.qty) IS NULL,0,Sum(detail_penjualans.qty))jual,
                    products.satuan
                    FROM
                    products
                    INNER JOIN detail_penjualans ON detail_penjualans.id_product = products.id where flag='1'
                    GROUP BY
                    products.id
                    ORDER BY
                    products.nama_produk ASC
                    )a ON a.id=products.id
                    WHERE
                    products.id = '$produk[0]'
                    GROUP BY products.id ");
                    $this -> set(compact('sisa'));
                }
		
	}
        public function del_depan() {
		if (!empty($_SESSION["depan"])) {
			unset($_SESSION["depan"][$_POST["idp"]]);
			if (empty($_POST["idp"]))
				unset($_SESSION["depan"]);
		}
	}
        public function detail($id=null){
            if (!$this -> Bahanbakus -> exists($id)) {
			// throw new NotFoundException(__('Invalid penjualan'));
			$this -> Session -> setFlash('Invalid Data', 'error');
			return $this->redirect(array('action' => 'histori'));
		}
		$data=$this->Bahanbakus->query("SELECT
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
    

}
