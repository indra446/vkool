<?php $this -> layout = false;
			echo $this -> Html -> css(array('font-awesome', 'material-design-iconic-font', 'bootstrap', 'animate', 'layout', 'components', 'widgets', 'plugins', 'pages', 'bootstrap-extend', 'common', 'responsive'));

//debug($data);
?>
<div class="widget-container">
<table class="table data-tbl">
	<thead>
	<tr>
			<th>Nomor Nota</th>
			<th>Tanggal</th>
			<th>Nama Pelanggan</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $data): ?>
	<tr>
		<td><?php echo h($data['a']['nomor']); ?>&nbsp;</td>
		<td><?php echo date("d/m/Y", strtotime($data['a']['created'])); ?>&nbsp;</td>
		<td><?php echo h($data['a']['nama']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-chevron-circle-right')) . " Detail", array( 'action' => 'detail', $data['a']['id']), array('title'=>'edit','escape' => false,'class'=>'btn btn-primary btn-xs')); ?> 
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
		<?php

		echo $this -> Html -> script(array('lib/bootstrap', 'lib/jquery.ui', 'apps'));
		echo $this -> Html -> script(array('lib/jquery.dataTables','lib/dataTables.responsive','lib/dataTables.tableTools','lib/dataTables.bootstrap'));
		echo $this -> fetch('script');
		?>