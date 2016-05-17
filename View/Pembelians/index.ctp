<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Tambah Pembelian</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">

	<table class="table data-tbl">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nomor'); ?></th>
			<th><?php echo $this->Paginator->sort('tgl_transaksi'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pembelians as $pembelian): ?>
	<tr>
		<td><?php echo h($pembelian['Pembelian']['id']); ?>&nbsp;</td>
		<td><?php echo h($pembelian['Pembelian']['nomor']); ?>&nbsp;</td>
		<td><?php echo h($pembelian['Pembelian']['tgl_transaksi']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pembelian['Vendor']['id'], array('controller' => 'vendors', 'action' => 'view', $pembelian['Vendor']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pembelian['Pembelian']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pembelian['Pembelian']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pembelian['Pembelian']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pembelian['Pembelian']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>
