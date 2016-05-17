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
		<title><?php echo $title_for_layout; ?>
		</title>
		<?php echo $this -> Html -> meta('icon');

			// echo $this -> fetch('meta');
			echo $this -> Html -> css(array('font-awesome', 'material-design-iconic-font', 'bootstrap', 'animate', 'layout', 'components', 'widgets', 'plugins', 'pages', 'bootstrap-extend', 'common', 'responsive'));
			echo $this -> fetch('css');
		?>
		<style>
	/* If you want you can use font-face */


/*.container {width: 960px; margin: 0 auto; overflow: hidden;}*/

.clock {width:400px; margin:0 auto; padding:4px; color:#000; }

#Date { font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; font-size:14px; text-align:right;  }

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
			<div class="top-search-bar">
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
			</div>
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
								<a href="index.html" title="Admin Template"><?php echo $this -> Html -> image("logo.png", array('fullBase' => true)); ?></a>
							</div>
						</li>
					</ul>
					<!--Mobile Search and Rightbar Toggle-->
					<ul class="branding-right pull-right">
						<li>
							<a href="#" class="btn-mobile-search btn-top-search"><i class="zmdi zmdi-search"></i></a>
						</li>
						<li>
							<a href="#" class="btn-mobile-bar"><i class="zmdi zmdi-menu"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<!--Topbar Left Branding With Logo End-->
			<!--Topbar Right Start-->
			<div class="topbar-right pull-right">
				<div class="clearfix">
					<div class="clock">
					   <div id="Date"></div>
					      <ul>
					          <li id="hours"></li>
					          <li id="point">:</li>
					          <li id="min"></li>
					          <li id="point">:</li>
					          <li id="sec"></li>
					      </ul>
					</div>
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
								<a href="#"><i class="zmdi zmdi-account"></i> </a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-key"></i> </a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-settings"></i> </a>
							</li>
						</ul>
					</div>
				</div>
				<?php
				switch ($usr) {
					case 1 :
						echo $this -> element('menu/menu_super');
						break;
					case 2 :
						echo $this -> element('menu/menu_kasir');
						break;
					case 3 :
						echo $this -> element('menu/menu_teknisi');
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
					<h2><?php echo ucwords(strtolower(str_replace("_", " ", $params['controller']))); ?></h2>
					<p>
						<?php echo strtolower($params['action']); ?>
					</p>
				</div>
				<div class="col-md-6 col-sm-6">
					<ul class="list-page-breadcrumb">
						<li>
							<?php echo $this -> Html -> link("Home ".$this -> Html -> tag('i', '', array('class' => 'zmdi zmdi-chevron-right')), array('controller' => 'Pages','action'=>'home'), array('escape' => false)); ?>
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
		<?php echo $this -> Session -> flash(); echo $content_for_layout; ?>
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

		echo $this -> Html -> script(array('lib/jquery', 'lib/jquery-migrate', 'lib/bootstrap', 'lib/jquery.ui', 'lib/jRespond', 'lib/nav.accordion', 'lib/hover.intent', 'lib/hammerjs', 'lib/jquery.hammer', 'lib/smoothscroll', 'lib/jquery.fitvids', 'lib/scrollup', 'lib/smoothscroll', 'lib/jquery.slimscroll', 'lib/jquery.syntaxhighlighter', 'lib/velocity', 'lib/smart-resize', 'lib/jquery.validate', 'lib/jquery.form', 'lib/j-forms', 'lib/login-validation', 'apps'));
		echo $this -> Html -> script(array('lib/jquery.dataTables','lib/dataTables.responsive','lib/dataTables.tableTools','lib/dataTables.bootstrap','lib/select2.full'));
		echo $this -> fetch('script');
		?>
<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year   
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var seconds = new Date().getSeconds();
	// Add a leading zero to seconds value
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);
	
setInterval( function() {
	// Create a newDate() object and extract the minutes of the current time on the visitor's
	var minutes = new Date().getMinutes();
	// Add a leading zero to the minutes value
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
	
setInterval( function() {
	// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
	// Add a leading zero to the hours value
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);	
});
</script>

	</body>
</html>