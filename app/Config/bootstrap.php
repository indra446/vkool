<?php
/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Model'                     => array('/path/to/models', '/next/path/to/models'),
 *     'Model/Behavior'            => array('/path/to/behaviors', '/next/path/to/behaviors'),
 *     'Model/Datasource'          => array('/path/to/datasources', '/next/path/to/datasources'),
 *     'Model/Datasource/Database' => array('/path/to/databases', '/next/path/to/database'),
 *     'Model/Datasource/Session'  => array('/path/to/sessions', '/next/path/to/sessions'),
 *     'Controller'                => array('/path/to/controllers', '/next/path/to/controllers'),
 *     'Controller/Component'      => array('/path/to/components', '/next/path/to/components'),
 *     'Controller/Component/Auth' => array('/path/to/auths', '/next/path/to/auths'),
 *     'Controller/Component/Acl'  => array('/path/to/acls', '/next/path/to/acls'),
 *     'View'                      => array('/path/to/views', '/next/path/to/views'),
 *     'View/Helper'               => array('/path/to/helpers', '/next/path/to/helpers'),
 *     'Console'                   => array('/path/to/consoles', '/next/path/to/consoles'),
 *     'Console/Command'           => array('/path/to/commands', '/next/path/to/commands'),
 *     'Console/Command/Task'      => array('/path/to/tasks', '/next/path/to/tasks'),
 *     'Lib'                       => array('/path/to/libs', '/next/path/to/libs'),
 *     'Locale'                    => array('/path/to/locales', '/next/path/to/locales'),
 *     'Vendor'                    => array('/path/to/vendors', '/next/path/to/vendors'),
 *     'Plugin'                    => array('/path/to/plugins', '/next/path/to/plugins'),
 * ));
 *
 */

/**
 * Custom Inflector rules, can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the inflection functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 *
 */

/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 */
CakePlugin::loadAll();
 /*Loads all plugins at once
/* CakePlugin::load('DebugKit'); //Loads a single plugin named DebugKit
 *
 */

/**
 * You can attach event listeners to the request lifecyle as Dispatcher Filter . By Default CakePHP bundles two filters:
 *
 * - AssetDispatcher filter will serve your asset files (css, images, js, etc) from your themes and plugins
 * - CacheDispatcher filter will read the Cache.check configure variable and try to serve cached content generated from controllers
 *
 * Feel free to remove or add filters as you see fit for your application. A few examples:
 *
 * Configure::write('Dispatcher.filters', array(
 *		'MyCacheFilter', //  will use MyCacheFilter class from the Routing/Filter package in your app.
 *		'MyPlugin.MyFilter', // will use MyFilter class from the Routing/Filter package in MyPlugin plugin.
 * 		array('callbale' => $aFunction, 'on' => 'before', 'priority' => 9), // A valid PHP callback type to be called on beforeDispatch
 *		array('callbale' => $anotherMethod, 'on' => 'after'), // A valid PHP callback type to be called on afterDispatch
 *
 * ));
 */
Configure::write('Dispatcher.filters', array('AssetDispatcher', 'CacheDispatcher'));

/**
 * Configures default file logging options
 */

CakePlugin::load('Acl', array('bootstrap' => true));
CakePlugin::load('AclExtras');
App::uses('ClassRegistry', 'Utility');
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array('engine' => 'FileLog', 'types' => array('notice', 'info', 'debug'), 'file' => 'debug', ));
CakeLog::config('error', array('engine' => 'FileLog', 'types' => array('warning', 'error', 'critical', 'alert', 'emergency'), 'file' => 'error', ));

/********************************************************************
 * Define base url for accounting
********************************************************************/
define('BASE_FINANCE_URL', 'http://127.0.0.1:81');

if (!function_exists('apiAccountingPembelian')) {
	function apiAccountingPembelian($data_ori){
		if($data_ori['description'] == '')
			$data_ori['description'] = 'Purchase transaction for ' . $data_ori['date'];

		if($data_ori['discount'] == '')
			$data_ori['discount'] = 0;

		if($data_ori['shipping'] == '')
			$data_ori['shipping'] = 0;

		if($data_ori['tax'] == '')
			$data_ori['tax'] = 0;

		$data_ok = [];
		foreach ($data_ori['datas'] as $key => $ori) {
			$data_ok[] = $ori;
		}

		$purchase = 0;
		$item_discount = 0;
		foreach ($data_ok as $key => $ori) {
			$price_item = str_replace(".", "", $ori['harga']) * $ori['jml'];
			$disc_item = str_replace(".", "", $ori['harga']) * ($ori['potitem'] / 100) * $ori['jml'];
			$purchase = $purchase + $price_item;
			$item_discount = $item_discount + $disc_item;
		}

		$ch = curl_init();
	
 
 		curl_setopt($ch, CURLOPT_URL, BASE_FINANCE_URL."/purchase/api");
 		curl_setopt($ch, CURLOPT_POST, 1);
 
 		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
 					 'date' => $data_ori['date'],
 					 'description' => $data_ori['description'],
 					 'discount' => $data_ori['discount'],
 					 'shipping' => $data_ori['shipping'],
 					 'tax' => $data_ori['tax'],
 					 'purchase' => $purchase,
 					 'item_discount' => round($item_discount))));					 
 
 		// receive server response ...
 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 		$server_output = curl_exec ($ch);
 
 		curl_close ($ch);
 
 		return json_decode($server_output,true);
	}
}

if (!function_exists('apiAccountingPenjualan')) {
	function apiAccountingPenjualan($data_ori){
		$total_sale = 0;

		if($data_ori['cart_depan'] != null){
			foreach ($data_ori['cart_depan'] as $key => $depan) {
				$total_sale = $total_sale + $depan['subtotal'];
			}
		}

		if($data_ori['cart_samping'] != null){
			foreach ($data_ori['cart_samping'] as $key => $samping) {
				$total_sale = $total_sale + $samping['subtotal'];
			}
		}

		if($data_ori['cart_belakang'] != null){
			foreach ($data_ori['cart_belakang'] as $key => $belakang) {
				$total_sale = $total_sale + $belakang['subtotal'];
			}
		}

		if($data_ori['cart_aksesoris'] != null){
			foreach ($data_ori['cart_aksesoris'] as $key => $aksesoris) {
				$total_sale = $total_sale + $aksesoris['subtotal'];
			}
		}

		if($data_ori['cart_service'] != null){
			foreach ($data_ori['cart_service'] as $key => $servis) {
				$total_sale = $total_sale + $servis['subtotal'];
			}
		}
		
		$ch = curl_init();
	
 
 		curl_setopt($ch, CURLOPT_URL, BASE_FINANCE_URL."/sale/api");
 		curl_setopt($ch, CURLOPT_POST, 1);
 
 		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
 					 'date' => $data_ori['date'],
 					 'description' => $data_ori['description'],
 					 'discount' => $data_ori['discount'],
 					 'hiddendiscount' => $data_ori['hiddendiscount'],
 					 'sale' => $total_sale)));					 
 
 		// receive server response ...
 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 		$server_output = curl_exec ($ch);
 
 		curl_close ($ch);
 		
 		return json_decode($server_output,true);
	}
}
