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
		<title>
			<?php //echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php echo $this -> Html -> meta('icon');

			// echo $this -> fetch('meta');
			echo $this -> Html -> css(array('font-awesome','material-design-iconic-font','bootstrap','animate'
			,'layout','components','widgets','plugins','pages','bootstrap-extend','common','responsive'	));

			echo $this -> fetch('css');


		?>
</head>	
<body class="login-page">
<!--Page Container Start Here-->
<section class="login-container boxed-login">
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
	
<?php


echo $content_for_layout;
?>

</div>
</div>

</section>
<?php

			echo $this -> Html -> script(array('lib/jquery','lib/jquery-migrate','lib/bootstrap','lib/jRespond','lib/hammerjs'
			,'lib/jquery.hammer','lib/smoothscroll','lib/smart-resize','lib/jquery.validate','lib/jquery.form','lib/j-forms','lib/login-validation'));
			echo $this -> fetch('script');
?>

</body>
</html>