		<?php echo $this -> Html -> meta('icon');

			// echo $this -> fetch('meta');
			echo $this -> Html -> css(array('font-awesome', 'material-design-iconic-font', 'bootstrap', 'animate', 'layout', 'components', 'widgets', 'plugins', 'pages', 'bootstrap-extend', 'common', 'responsive'));
			echo $this -> fetch('css');
		?>
<?php $this->layout=false;?>

<div class="widget-container">

	<table class="table data-tbl">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('nama_vendor'); ?></th>
			<th><?php echo $this->Paginator->sort('alamat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($vendors as $vendor): ?>
	<tr>
		<td><?php echo h($vendor['Vendor']['nama_vendor']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['alamat']); ?>&nbsp;</td>
		<td class="actions">
 		</td>

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
		<?php

		echo $this -> Html -> script(array('lib/jquery', 'lib/jquery-migrate', 'lib/bootstrap', 'lib/jquery.ui', 'lib/jRespond', 'lib/nav.accordion', 'lib/hover.intent', 'lib/hammerjs', 'lib/jquery.hammer', 'lib/smoothscroll', 'lib/jquery.fitvids', 'lib/scrollup', 'lib/smoothscroll', 'lib/jquery.slimscroll', 'lib/jquery.syntaxhighlighter', 'lib/velocity', 'lib/smart-resize','lib/bootbox', 'lib/jquery.maskedinput','lib/jquery.validate', 'lib/jquery.form','lib/j-forms-validations','lib/additional-methods', 'lib/jquery-cloneya','lib/j-forms', 'lib/login-validation', 'apps'));
		echo $this -> Html -> script(array('lib/jquery.dataTables','lib/dataTables.responsive','lib/dataTables.tableTools','lib/dataTables.bootstrap','lib/select2.full'));
		echo $this -> fetch('script');
		?>
