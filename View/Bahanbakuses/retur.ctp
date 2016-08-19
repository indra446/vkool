<?php
	$this->layout=false;
	// debug($dataretur);die();
?> 
		<?php

		echo $this -> Html -> script(array('lib/jquery', 
		'lib/jquery-migrate',
		 'lib/bootstrap', 
		 'lib/jquery.ui', 
		 'lib/jRespond',
		  // 'lib/nav.accordion',
		   // 'lib/hover.intent', 
		   'lib/hammerjs', 
		   'lib/jquery.hammer', 
		   // 'lib/smoothscroll', 
		   // 'lib/jquery.fitvids', 
		   // 'lib/scrollup', 
		   // 'lib/smoothscroll',
		    'lib/jquery.slimscroll',
		     'lib/jquery.syntaxhighlighter', 
		     'lib/velocity', 
		     'lib/smart-resize',
		     // 'lib/bootbox',
		      // 'lib/jquery.maskedinput',
		      'lib/jquery.validate', 
		      'lib/jquery.form',
		      'lib/j-forms-validations',
		      'lib/additional-methods', 
		      // 'lib/jquery-cloneya',
		      'lib/j-forms', 
		      'lib/login-validation', 
		      'apps'));
		echo $this -> Html -> script(array('lib/jquery.dataTables','lib/dataTables.responsive','lib/dataTables.tableTools','lib/dataTables.bootstrap','lib/select2.full','lib/jquery.mask','lib/footable.all','lib/jquery.noty','lib/bootstrap-datepicker'));
		echo $this -> fetch('script');
		?>  
 <table class="table data-tbl-retur">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Tipe</th>
			<th>Pilih</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($dataretur as $dr){?>
			<tr>
				<td><?php echo $dr['products']['nama_produk'];?></td>
				<td><?php echo $dr['products']['tipe'];?></td>
				<td><input value="pilih" class="btn btn-info  btn-xs" type="button" onClick="configretur(this)" id="<?php echo $dr['bahanbakus']['id']; ?>"/></td>
			</tr>
		<?php } ?>	
	</tbody>
	</table>
