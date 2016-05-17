<?php
App::uses('AppController', 'Controller');
/**
 * Vendors Controller
 *
 * @property Vendor $Vendor
 * @property PaginatorComponent $Paginator
 */
class VendorsController extends AppController {

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
		$this -> Vendor -> recursive = 0;
		$this -> set('vendors', $this -> Paginator -> paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this -> Vendor -> exists($id)) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		$options = array('conditions' => array('Vendor.' . $this -> Vendor -> primaryKey => $id));
		$this -> set('vendor', $this -> Vendor -> find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this -> request -> is('post')) {
			// debug($this->request->data);die();
			$this -> loadModel('PicVendor');
			$this -> Vendor -> create();
			if ($this -> Vendor -> save($this -> request -> data)) {
				$jml = sizeof($this -> request -> data['Vendor']['telp']) - 1;
				for ($x = 0; $x <= 1; $x++) {
					$a['PicVendor']['vendor_id'] = $this -> Vendor -> id;
					$a['PicVendor']['telp'] = $this -> request -> data['Vendor']['telp'][$x];
					$a['PicVendor']['pic'] = $this -> request -> data['Vendor']['pic'][$x];
					$this -> PicVendor -> create();
					$this -> PicVendor -> save($a);
				}

				// debug($this -> Vendor -> id);
				// die();
				$this -> Session -> setFlash('Data berhasil disimpan', 'success');
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The vendor could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this -> Vendor -> exists($id)) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		if ($this -> request -> is(array('post', 'put'))) {
			$this -> loadModel('PicVendor');
			// debug($this -> request -> data);
			// die();
			$this -> Vendor -> query("Delete from pic_vendors where vendor_id=" . $id);
			$jml = sizeof($this -> request -> data['Vendor']['telp']) - 1;
			for ($x = 0; $x <= $jml; $x++) {
				$a['PicVendor']['vendor_id'] = $id;
				$a['PicVendor']['telp'] = $this -> request -> data['Vendor']['telp'][$x];
				$a['PicVendor']['pic'] = $this -> request -> data['Vendor']['pic'][$x];
				$this -> PicVendor -> create();
				$this -> PicVendor -> save($a);
			}
			if ($this -> Vendor -> save($this -> request -> data)) {
				$this -> Session -> setFlash('Data berhasil disimpan', 'success');
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The vendor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vendor.' . $this -> Vendor -> primaryKey => $id));
			$this -> request -> data = $this -> Vendor -> find('first', $options);
			$edit = $this -> request -> data;
			// debug($edit);
			$this -> set(compact('edit'));

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
		$this -> loadModel('PicVendor');

		$c = $this -> Vendor -> findById($id);
		$rels = $this -> PicVendor -> find('count', array('conditions' => array('PicVendor.vendor_id' => $id)));

		if (count($rels) > 0) {
			// $this -> Session -> setFlash("NO WAY JOSE");
			$this -> Vendor -> delete($id);
			$this -> Session -> setFlash('Data berhasil dihapus', 'success');
			return $this -> redirect(array('action' => 'index'));
		} else {
			$this -> Vendor -> delete($id);
		}
		// $this -> Vendor -> id = $id;
		// if (!$this -> Vendor -> exists()) {
		// throw new NotFoundException(__('Invalid vendor'));
		// }
		// $this -> request -> allowMethod('post', 'delete');
		// if ($this -> Vendor -> delete()) {
		// $this->Session->setFlash('Data berhasil dihapus', 'success');
		// } else {
		// $this -> Session -> setFlash(__('The vendor could not be deleted. Please, try again.'));
		// }
		// return $this -> redirect(array('action' => 'index'));
	}

}
