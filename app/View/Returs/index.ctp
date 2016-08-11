<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Retur</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">

	<table class="table data-tbl">
	<thead>
	<tr>
			<th>ID Retur</th>
			<th>Tgl Transaksi</th>
			<th>Vendor</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($returs as $retur): ?>
	<tr>
		<td><?php echo h($retur['Retur']['noretur']); ?>&nbsp;</td>
		<td><?php echo date("d/m/Y",strtotime($retur['Retur']['tgl_transaksi'])); ?>&nbsp;</td>
		<td><?php echo h($retur['Vendor']['nama_vendor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-folder-open')) . "", array( 'action' => 'view', base64_encode($retur['Retur']['noretur'])), array('title'=>'detail','escape' => false,'class'=>'btn btn-primary btn-xs')); ?> 
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', base64_encode($retur['Retur']['noretur'])),  array('title'=>'hapus','escape' => false,'class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $retur['Retur']['noretur'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>
