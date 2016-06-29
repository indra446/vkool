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
    public function index($id) {
        $this->Bahanbakus->recursive = 0;
        $this->set('bahanbakuses', $this->Paginator->paginate());
    }

    public function tambah($id=null) {
        $this->loadModel('Category');
        $this->loadModel('DetailPenjualan');
            $this->layout='ajax';
            $disc=$this->Bahanbakus->query("SELECT detail_penjualans.disc, detail_penjualans.hidden_disc, detail_penjualans.id_karyawan, detail_penjualans.ket FROM `detail_penjualans` where penjualan_id='$id'");
            if ($this->request->is(array('post', 'put'))) {
                $reqdata = $this->request['data'];
                $data['DetailPenjualan']['penjualan_id'] = $id;
                @$data['DetailPenjualan']['id_product'] = explode(",",$reqdata['Bahanbakuses']['nama'])['0'];
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
            
        $parentCategories = $this->Category-> find('list', array('fields' => array('Category.id', 'Category.kategori'), 'conditions' => array('AND' => array('Category.parent_id' => NULL, 'Category.aktif' => 1))));
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
        $disc=$this->Bahanbakus->query("SELECT detail_penjualans.disc, detail_penjualans.hidden_disc, detail_penjualans.id_karyawan, detail_penjualans.ket FROM `detail_penjualans` where penjualan_id='$id'
limit 1 ");
        $this->set(compact('bakus', 'totals', 'id','disc'));
    }

    public function bayar($id = null) {
        $this->layout = false;
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        $this->loadModel('Product');
        if (empty($id)) {
            throw new NotFoundException(__('Invalid bahanbakus'));
        }
        if ($this->request->is(array('post', 'put'))) {
//			if ($this->Bahanbakus->save($this->request->data)) {
            $count = (count($this->request['data']['Bahanbakuses']['product_id']) - 1);
            $tes = $this->request['data']['Bahanbakuses'];
//                print_r($count);exit;
            for ($i = 0; $i <= $count; $i++) {
                $reqdata = $this->request['data'];
                @$data['Bahanbakus']['product_id'] = $reqdata['Bahanbakuses']['product_id'][$i];
                @$data['Bahanbakus']['ket'] = $reqdata['Bahanbakuses']['ket'][$i];
                @$data['Bahanbakus']['penjualan_id'] = $id;
                @$data['Bahanbakus']['id_teknisi'] = explode("-", $reqdata['Bahanbakuses']['id_teknisi'])['1'];
//                print_r($data);exit;
                $this->Bahanbakus->create();
                $this->Bahanbakus->save($data, false);
            }
            $count = (count($this->request['data']['Bahanbakuses']['sisa']) - 1);
            for ($i = 0; $i <= $count; $i++) {
                $reqdata = $this->request['data'];
                @$data['Bahanbakus']['sisa'] = $reqdata['Bahanbakuses']['sisa'][$i];
                @$data['Bahanbakus']['ket'] = "sisa";
                @$data['Bahanbakus']['dm1'] = $reqdata['Bahanbakuses']['dm1'][$i];
                @$data['Bahanbakus']['dm2'] = $reqdata['Bahanbakuses']['dm2'][$i];
//                print_r($data);exit;
                $this->Bahanbakus->create();
                $this->Bahanbakus->save($data, false);
            }
            $this->Session->setFlash('Data berhasil disimpan', 'success');
            return $this->redirect(array('controller' => 'bahanbakuses', 'action' => 'view/' . $id . '/ygsy'));
        }
//                        else {
//				$this->Session->setFlash(__('The bahanbakus could not be saved. Please, try again.'));
//			}

        $produks = $this->Product->find('list', array('fields' => array('id', 'nama_produk'), 'recursive' => -1));
        $this->set(compact('produks'));
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

}
