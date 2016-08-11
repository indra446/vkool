<div class="detailPenjualans index">
	<h2><?php echo __('Detail Penjualans'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('penjualan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('disc'); ?></th>
			<th><?php echo $this->Paginator->sort('hidden_disc'); ?></th>
			<th><?php echo $this->Paginator->sort('karyawan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ket'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($detailPenjualans as $detailPenjualan): ?>
	<tr>
		<td><?php echo h($detailPenjualan['DetailPenjualan']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detailPenjualan['Penjualan']['id'], array('controller' => 'penjualans', 'action' => 'view', $detailPenjualan['Penjualan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($detailPenjualan['Product']['id'], array('controller' => 'products', 'action' => 'view', $detailPenjualan['Product']['id'])); ?>
		</td>
		<td><?php echo h($detailPenjualan['DetailPenjualan']['qty']); ?>&nbsp;</td>
		<td><?php echo h($detailPenjualan['DetailPenjualan']['disc']); ?>&nbsp;</td>
		<td><?php echo h($detailPenjualan['DetailPenjualan']['hidden_disc']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detailPenjualan['Karyawan']['id'], array('controller' => 'karyawans', 'action' => 'view', $detailPenjualan['Karyawan']['id'])); ?>
		</td>
		<td><?php echo h($detailPenjualan['DetailPenjualan']['ket']); ?>&nbsp;</td>
		<td><?php echo h($detailPenjualan['DetailPenjualan']['created']); ?>&nbsp;</td>
		<td><?php echo h($detailPenjualan['DetailPenjualan']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detailPenjualan['DetailPenjualan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detailPenjualan['DetailPenjualan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detailPenjualan['DetailPenjualan']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $detailPenjualan['DetailPenjualan']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Detail Penjualan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Penjualans'), array('controller' => 'penjualans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Penjualan'), array('controller' => 'penjualans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Karyawans'), array('controller' => 'karyawans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Karyawan'), array('controller' => 'karyawans', 'action' => 'add')); ?> </li>
	</ul>
</div>
