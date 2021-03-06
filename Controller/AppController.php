<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
 ob_start();
class AppController extends Controller {

	public $components = array('Acl', 'Auth' => array('authorize' => array('Actions' => array('actionPath' => 'controllers'))), 'Session');
	public $helpers = array('Html', 'Form', 'Session', 'js');

	public function beforeFilter() {
		$this -> theme = 'Kacafilm';
		$this -> Auth -> allow('konversi_tanggal');
		//Configure AuthComponent
		$this -> Auth -> authorize = 'Actions';
		$this -> Auth -> loginAction = array('controller' => 'users', 'action' => 'login');
		$this -> Auth -> logoutRedirect = array('controller' => 'users', 'action' => 'login');
		$this -> Auth -> loginRedirect = array('controller' => 'pages', 'action' => 'display');
		$this -> Auth -> actionPath = 'controllers/';
		$params=$this->params;
		// debug($this->params);die();
		$this->set(compact('params'));

	}

	public function beforeRender() {
		$this -> disableCache();
		// $this -> theme = 'Kacafilm';
		
		$infousr = $this -> Session -> read();
		$usr = $this -> Session -> read("Auth.User.group_id");
		$this->set(compact('usr','infousr'));

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
}
