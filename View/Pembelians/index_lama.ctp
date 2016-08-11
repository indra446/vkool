<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Pembelian</h3>
    </div>
</div>
<br>
<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Tambah Pembelian</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">

	<table class="table data-tbl">
	<thead>
	<tr>
			<th>Nomor</th>
			<th>Tanggal Transaksi</th>
			<th>Vendor</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pembelians as $pembelian): ?>
	<tr>
		<td><?php echo h($pembelian['Pembelian']['nomor']); ?>&nbsp;</td>
		<td><?php echo date("d/m/Y",strtotime($pembelian['Pembelian']['tgl_transaksi'])); ?>&nbsp;</td>
		<td><?php echo h($pembelian['Vendor']['nama_vendor']); ?>&nbsp;</td>
		<!-- <td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pembelian['Pembelian']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pembelian['Pembelian']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pembelian['Pembelian']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pembelian['Pembelian']['id']))); ?>
		</td> -->
		<td class="actions">
            <!-- <a onClick="configurator(this)" href="#"  class="btn btn-info btn-xs" id="<?php echo h($pembelian['Pembelian']['id']); ?>"><i class="fa fa-folder-open"></i></a> -->
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-folder-open')) . "", array( 'action' => 'view', base64_encode($pembelian['Pembelian']['nomor'])), array('escape' => false,'class'=>'btn btn-primary btn-xs')); ?> 
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', base64_encode($pembelian['Pembelian']['nomor'])),  array('escape' => false,'class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete No. Nota # %s?', $pembelian['Pembelian']['nomor'])); ?>
		</td>	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>
