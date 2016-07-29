<?php
App::uses('AppController', 'Controller');
/**
 * Bayars Controller
 *
 * @property Bayar $Bayar
 * @property PaginatorComponent $Paginator
 */
class BayarsController extends AppController {

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
		$this->Bayar->recursive = 0;
		$this->set('Bayars', $this->Paginator->paginate());
	}
    public function ceklunas($id=null) {
    	$cek=$this->Bayar->query("SELECT
			Sum(bayars.bayar)-bayars.total as tagihan
			FROM
			bayars
			WHERE
			bayars.id_penjualan = $id");
		return $cek;

	}
    public function nota($id=null) {
    	$cek=$this->Bayar->query("SELECT
			penjualans.nomor,penjualans.id,
			penjualans.noorder,
			penjualans.created,
			merks.nama AS merk,
			customers.nama AS nmplg,
			customers.alamat,
			customers.telp,
			customers.hp,
			bayars.tipe_bayar,
			model.nama AS model,
			penjualans.nomesin,
			penjualans.norangka,
			penjualans.nopol,
			bayars.jatuh_tempo,
			detail_penjualans.id_product,
			products.nama_produk,
			categories.kategori,
			detail_penjualans.harga,detail_penjualans.hidden_disc,
			detail_penjualans.disc,
			bayars.bayar,
			bayars.total,detail_penjualans.qty
			FROM
			bayars
			INNER JOIN penjualans ON bayars.id_penjualan = penjualans.id
			INNER JOIN customers ON penjualans.customer_id = customers.id
			INNER JOIN merks ON penjualans.merk_id = merks.id
			INNER JOIN merks AS model ON penjualans.model_id = model.id
			INNER JOIN detail_penjualans ON detail_penjualans.penjualan_id = penjualans.id
			INNER JOIN products ON detail_penjualans.id_product = products.id
			INNER JOIN categories ON products.category_id = categories.id
			WHERE
			bayars.id = $id");
		$sudahbayar=$this->Bayar->query("SELECT
			sum(bayar)bayar
			FROM
			bayars
			INNER JOIN penjualans ON bayars.id_penjualan = penjualans.id
			WHERE
			bayars.id_penjualan = ".$cek[0]['penjualans']['id']." AND bayars.id < $id
			GROUP BY
			bayars.id_penjualan");
		if(!empty($sudahbayar)){
			$sudahbayar=$sudahbayar[0][0]['bayar'];
		}else{
			$sudahbayar=0;
		}	
		$this->set(compact('cek','sudahbayar'));

	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bayar->exists($id)) {
			throw new NotFoundException(__('Invalid detail penjualan'));
		}
		$options = array('conditions' => array('Bayar.' . $this->Bayar->primaryKey => $id));
		$this->set('Bayar', $this->Bayar->find('first', $options));
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function riwayat($id = null) {
		$data=$this->Bayar->query("SELECT
				bayars.id,
				bayars.bayar,
				bayars.id_penjualan,
				bayars.total,
				bayars.created,
				bayars.modified,
				penjualans.nomor,
				penjualans.id,
				detail_penjualans.hidden_disc,
				detail_penjualans.disc
				FROM
				bayars
				INNER JOIN penjualans ON bayars.id_penjualan = penjualans.id
				INNER JOIN detail_penjualans ON detail_penjualans.penjualan_id = penjualans.id
				WHERE
				bayars.id_penjualan=$id
				GROUP BY bayars.id");
		$this->set(compact('data'));		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bayar->create();
			if ($this->Bayar->save($this->request->data)) {
				$this->Session->setFlash(__('The detail penjualan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detail penjualan could not be saved. Please, try again.'));
			}
		}
		$penjualans = $this->Bayar->Penjualan->find('list');
		$products = $this->Bayar->Product->find('list');
		$karyawans = $this->Bayar->Karyawan->find('list');
		$this->set(compact('penjualans', 'products', 'karyawans'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bayar->exists($id)) {
			throw new NotFoundException(__('Invalid detail penjualan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bayar->save($this->request->data)) {
				$this->Session->setFlash(__('The detail penjualan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detail penjualan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bayar.' . $this->Bayar->primaryKey => $id));
			$this->request->data = $this->Bayar->find('first', $options);
		}
		$penjualans = $this->Bayar->Penjualan->find('list');
		$products = $this->Bayar->Product->find('list');
		$karyawans = $this->Bayar->Karyawan->find('list');
		$this->set(compact('penjualans', 'products', 'karyawans'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bayar->id = $id;
		if (!$this->Bayar->exists()) {
			throw new NotFoundException(__('Invalid detail penjualan'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bayar->delete()) {
			$this->Session->setFlash(__('The detail penjualan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The detail penjualan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
