<?php
/**
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
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

// $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<?php echo $this -> Html -> charset(); ?>
		<title><?php echo $title_for_layout; ?></title>
		<?php echo $this -> Html -> meta('icon');

			// echo $this -> fetch('meta');
			echo $this -> Html -> css(array('font-awesome', 'material-design-iconic-font', 'bootstrap', 'animate', 'layout', 'components', 'widgets', 'plugins', 'pages', 'bootstrap-extend', 'common', 'responsive'));
			echo $this -> fetch('css');
		?>
		<style>
	/* If you want you can use font-face */


/*.container {width: 960px; margin: 0 auto; overflow: hidden;}*/

.clock {width:400px; margin:0 auto; padding:4px; color:#000; }

#Date { font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; font-size:16px;   }

.clock ul {margin:0 auto; padding:0px; list-style:none; text-align:right; }
.clock li { display:inline; font-size:14px; text-align:right; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; }

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left:0px; padding-right:0px; }

/* Simple <a href="http://www.jqueryscript.net/animation/">Animation</a> */
@-webkit-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }	
}

@-moz-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }	
}
</style>
	</head>
	<body class="leftbar-view">
		<header class="topbar clearfix">
			<!--Top Search Bar Start Here-->
			<!-- <div class="top-search-bar">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="search-input-addon">
								<span class="addon-icon"><i class="zmdi zmdi-search"></i></span>
								<input type="text" class="form-control top-search-input" placeholder="Search">
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!--Top Search Bar End Here-->
			<!--Topbar Left Branding With Logo Start-->
			<div class="topbar-left pull-left">
				<div class="clearfix">
					<ul class="left-branding pull-left clickablemenu ttmenu dark-style menu-color-gradient">
						<li>
							<span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span>
						</li>
						<li>
							<div class="logo">
								<a href="<?php echo $this->webroot;?>pages/home" title="Admin Template"><?php echo $this -> Html -> image("logo.png", array('fullBase' => true)); ?></a>
							</div>
						</li>
					</ul>
					<!--Mobile Search and Rightbar Toggle-->
					<!-- <ul class="branding-right pull-right">
						<li>
							<a href="#" class="btn-mobile-search btn-top-search"><i class="zmdi zmdi-search"></i></a>
						</li>
						<li>
							<a href="#" class="btn-mobile-bar"><i class="zmdi zmdi-menu"></i></a>
						</li>
					</ul> -->

				</div>
			</div>
			<!--Topbar Left Branding With Logo End-->
			<!--Topbar Right Start-->
					<div class="topbar-right pull-right clock">
					      <ul>
					          <li id="hours"></li>
					          <li id="point">:</li>
					          <li id="min"></li>
					          <li id="point">:</li>
					          <li id="sec"></li>
					      </ul>
					</div>
			<div class="branding-righ pull-right">
				<div class="clearfix">
					<!-- <div class="clock">
					   <div id="Date"></div>
					      <ul>
					          <li id="hours"></li>
					          <li id="point">:</li>
					          <li id="min"></li>
					          <li id="point">:</li>
					          <li id="sec"></li>
					      </ul>
					</div> -->
				</div>
			</div>
			<!--Topbar Right End-->
		</header>
		<!--Topbar End Here-->
		<!--Leftbar Start Here-->
		<aside class="leftbar material-leftbar">
			<div class="left-aside-container">
				<div class="user-profile-container">
					<div class="user-profile clearfix">
						<div class="admin-user-thumb">
                		<?php echo $this -> Html -> image("avatar.png", array('fullBase' => true)); ?>
						</div>
						<div class="admin-user-info">
							<ul>
								<li>
									<a href="#"><?php echo $infousr['Auth']['User']['nama_admin']?></a>
								</li>
								<li>
									<a href="#"><?php echo strtolower($infousr['Auth']['User']['Group']['name'])?></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="admin-bar">
						<ul>
							<li>
								<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'zmdi zmdi-power')), array('controller' => 'Users', 'action' => 'logout'), array('escape' => false,'title'=>'logout')); ?>					
							</li>
							<li>
								<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'zmdi zmdi-key')), array('controller' => 'Users', 'action' => 'edit',$infousr['Auth']['User']['id']), array('escape' => false,'title'=>'edit user')); ?>					
							</li>

						</ul>
					</div>
				</div>
				<?php
				switch ($usr) {
					case 1 :
						echo $this -> element('menu/menu_super');
						break;
					case 4 :
						echo $this -> element('menu/menu_kasir');
						break;
					case 3 :
						echo $this -> element('menu/menu_teknisi');
						break;
					case 7 :
						echo $this -> element('menu/menu_recep');
						break;
					default :
						echo $this -> element('menu/menu_kosong');
				}
				?>
			</div>
		</aside>
		<!--Leftbar End Here-->
		<!--Page Container Start Here-->
<section class="main-container">
	<div class="container-fluid">
		<div class="page-header filled full-block light">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h2><div id="Date"></div>
<?php //echo ucwords(strtolower(str_replace("_", " ", $params['controller']))); ?></h2>
					<p>
						<?php //echo strtolower($params['action']); ?>
					</p>
				</div>
				<div class="col-md-6 col-sm-6">
					<ul class="list-page-breadcrumb">
						<li>
							<?php echo $this -> Html -> link("Home ".$this -> Html -> tag('i', '', array('class' => 'zmdi zmdi-chevron-right')), array('controller' => 'pages','action'=>'home'), array('escape' => false)); ?>
						</li>
						<li>
							<?php echo $this -> Html -> link(ucwords(strtolower(str_replace("_", " ", $params['controller'])))." ".$this -> Html -> tag('i', '', array('class' => 'zmdi zmdi-chevron-right')), array('controller' => $params['controller'],'action'=>'index'), array('escape' => false)); ?>
						</li>
						<li class="active-page">
							<?php echo strtolower($params['action']); ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<div class="row">
		<div class="widget-wrap">
		<?php echo $this -> Session -> flash(); 
		echo $content_for_layout; ?>
		</div>
	</div>	
	
	</div>
	<!--Footer Start Here -->
	<!-- <footer class="footer-container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="footer-left">
						<span>© 2015 <a href="http://themeforest.net/user/westilian">westilian</a></span>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="footer-right">
						<span class="footer-meta">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="http://themeforest.net/user/westilian">westilian</a></span>
					</div>
				</div>
			</div>
		</div>
	</footer> -->
	<!--Footer End Here -->
</section>		
		<!--Page Container End Here-->
		<!--Rightbar Start Here-->
		
		<?php

		echo $this -> Html -> script(array('lib/jquery', 'lib/jquery-migrate', 'lib/bootstrap', 'lib/jquery.ui', 'lib/jRespond', 'lib/nav.accordion', 'lib/hover.intent', 'lib/hammerjs', 'lib/jquery.hammer', 'lib/smoothscroll', 'lib/jquery.fitvids', 'lib/scrollup', 'lib/smoothscroll', 'lib/jquery.slimscroll', 'lib/jquery.syntaxhighlighter', 'lib/velocity', 'lib/smart-resize','lib/bootbox', 'lib/jquery.maskedinput','lib/jquery.validate', 'lib/jquery.form','lib/j-forms-validations','lib/additional-methods', 'lib/jquery-cloneya','lib/j-forms', 'lib/login-validation', 'apps'));
		echo $this -> Html -> script(array('lib/jquery.dataTables','lib/dataTables.responsive','lib/dataTables.tableTools','lib/dataTables.bootstrap','lib/select2.full','lib/jquery.mask','lib/footable.all','lib/jquery.noty','lib/bootstrap-datepicker'));
		echo $this -> fetch('script');
		?>
	
<script type="text/javascript">
	// var oTable;
	var $tb = jQuery.noConflict();
	$tb(function() {
		$tb("#tb_product").dataTable({
		// oTable=$tb('#example').dataTable({
		"sPaginationType" : "full_numbers",
        "iDisplayLength": 10,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "<?php echo $this->webroot;?>products/index",
        "sDom": 'frtip',
        "aoColumns": [
            {mData:"Product.id"},
            {mData:"Product.nama_produk"},
            {mData:"Kategori.kategori"},
            {mData:"Product.satuan"},
            {mData:"Product.aktif"},
            {mData:"Product.id"}
         
        ],
        "aoColumnDefs" : [{

				"sWidth" : "5%",
				"aTargets" : [3,4,5]
			},{

				"sWidth" : "3%",
				"aTargets" : [0]
			},],
        
        
        "fnCreatedRow": function(nRow, aData, iDataIndex){
        	var aktif=aData.Product.aktif;
        	if(aktif==1){
            $tb('td:eq(4)',nRow).html("<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>");
           }else{
            $tb('td:eq(4)',nRow).html("<button class='btn btn-danger  btn-xs'><i class='zmdi zmdi-minus zmdi-hc-fw'></i></button>");
           }
            $tb('td:eq(5)',nRow).html('<a class="btn btn-primary btn-xs" href="<?php echo $this->webroot;?>products/edit/'+aData.Product.id+'"><i class="fa fa-edit"></i></a>');
        }
    });
    
		$tb("#tb_beli").dataTable({
		// oTable=$tb('#example').dataTable({
		"sPaginationType" : "full_numbers",
        "iDisplayLength": 10,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "<?php echo $this->webroot;?>Pembelians/index",
        "sDom": 'frtip',
        "aoColumns": [
            {mData:"Pembelian.nomor"},
            {mData:"Pembelian.tgl_transaksi"},
            {mData:"Vendor.nama_vendor"},
            {mData:"Pembelian.nomor"}
         
        ],
        "aoColumnDefs" : [{

				"sWidth" : "10%",
				"aTargets" : [3]
			},{

				"sWidth" : "15%",
				"aTargets" : [0,1]
			},],
        
        
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            // $tb('td:eq(3)',nRow).html("<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>");
            $tb('td:eq(3)',nRow).html('<a class="btn btn-primary btn-xs" href="<?php echo $this->webroot;?>Pembelians/view/'+aData.Pembelian.nomor+'"><i class="fa fa-folder-open"></i></a><a id="'+aData.Pembelian.nomor+'" onClick="config_del(this)" href="#myModal" role="button" class="btn btn-xs btn-danger" data-toggle="modal"><i class="fa fa-trash-o"></i></a>');
        }
    });
		$tb("#tbjual").dataTable({
		// oTable=$tb('#example').dataTable({
		"sPaginationType" : "full_numbers",
        "iDisplayLength": 10,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "<?php echo $this->webroot;?>Penjualans/index",
        "sDom": 'frtip',
        "aoColumns": [
            {mData:"Penjualan.nomor"},
            {mData:"Cus.nama"},
            {mData:"Merk.nama"},
            {mData:"Penjualan.thn"},
            {mData:"Penjualan.nopol"},
            {mData:"Penjualan.nomesin"},
            {mData:"Penjualan.norangka"},
            {mData:"Penjualan.nomor"}
         
        ],
        "aoColumnDefs" : [{

				"sWidth" : "10%",
				"aTargets" : [3]
			},{

				"sWidth" : "15%",
				"aTargets" : [0,1]
			},],
        
        
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            // $tb('td:eq(3)',nRow).html("<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>");
            $tb('td:eq(7)',nRow).html('<a class="btn btn-primary btn-xs" href="<?php echo $this->webroot;?>Penjualans/edit/'+aData.Penjualan.id+'"><i class="fa fa-edit"></i></a><a id="'+aData.Penjualan.id+'" onClick="deljual(this)" href="#myModal" role="button" class="btn btn-xs btn-danger" data-toggle="modal"><i class="fa fa-trash-o"></i></a>');
        }
    });

 	    var nomor=$tb("#nomor").val();	
		$tb("#tbhistori").dataTable({
		// $tb('#tbhistori').dataTable({
		"sPaginationType" : "full_numbers",
        "iDisplayLength": 10,
        "bRetrive":true,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "<?php echo $this->webroot;?>Penjualans/histori",
    	"sDom": 'frtip',
        "aoColumns": [
            {mData:"Penjualan.nomor"},
            {mData:"Penjualan.created"},
            {mData:"Cus.nama"},
            {mData:"Penjualan.nomor"}
         
        ],
        "aoColumnDefs" : [{

				"sWidth" : "10%",
				"aTargets" : [3]
			},{

				"sWidth" : "20%",
				"aTargets" : [0,1]
			},],
        
        
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            // $tb('td:eq(3)',nRow).html("<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>");
            $tb('td:eq(3)',nRow).html('<a class="btn btn-primary btn-xs" href="<?php echo $this->webroot;?>Penjualans/detail/'+aData.Penjualan.id+'"><i class="fa fa-chevron-circle-right"></i>&nbsp;Detail</a>');
        }
    });
 $tb('#tbrekaphistori').dataTable({
		"sPaginationType" : "full_numbers",
        "iDisplayLength": 10,
        // "bRetrive":true,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "<?php echo $this->webroot;?>Penjualans/rekaphistori/no="+nomor,
        "sDom": 'frtip',
        "aoColumns": [
            {mData:"Penjualan.nomor"},
            {mData:"Penjualan.created"},
            {mData:"Cus.nama"},
            {mData:"Penjualan.nomor"}
         
        ],
        "aoColumnDefs" : [{

				"sWidth" : "10%",
				"aTargets" : [3]
			},{

				"sWidth" : "20%",
				"aTargets" : [0,1]
			},],
        
        
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            // $tb('td:eq(3)',nRow).html("<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>");
            $tb('td:eq(3)',nRow).html('<a class="btn btn-primary btn-xs" href="<?php echo $this->webroot;?>Penjualans/detail/'+aData.Penjualan.id+'"><i class="fa fa-chevron-circle-right"></i>&nbsp;Detail</a>');
        }
    });

 });
 // $tb(document).ready(function() {
//  	
 	    // $tb('#nomor, #pelanggan').keyup( function() {
 	    // var nomor=$tb("#nomor").val();	
 	    	// // alert(nomor)
 	    // $tb("#tbhistori").dataTable().fnDestroy();	
       
// 
// 
// 
    	// } );
// } ); 	
</script>		
<script type="text/javascript">
var jq=jQuery.noConflict();

jq(document).ready(function() {
	 jq('#harga').mask('000.000.000.000', {reverse: true});// Create two variable with the names of the months and days in an array
	 // jq('#potitem').mask('000.000.000.000', {reverse: true});// Create two variable with the names of the months and days in an array
	 jq('#potongan').mask('000.000.000', {reverse: true});// Create two variable with the names of the months and days in an array
	 jq('#kirim').mask('000.000.000', {reverse: true});// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year   
jq('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var seconds = new Date().getSeconds();
	// Add a leading zero to seconds value
	jq("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);
	
setInterval( function() {
	// Create a newDate() object and extract the minutes of the current time on the visitor's
	var minutes = new Date().getMinutes();
	// Add a leading zero to the minutes value
	jq("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
	
setInterval( function() {
	// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
	// Add a leading zero to the hours value
	jq("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);	
    
});
</script>

	</body>
</html>