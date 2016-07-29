<div class="returs index">
	<h2><?php echo __('Returs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('luas'); ?></th>
			<th><?php echo $this->Paginator->sort('tgl_transaksi'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ket'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($returs as $retur): ?>
	<tr>
		<td><?php echo h($retur['Retur']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($retur['Product']['id'], array('controller' => 'products', 'action' => 'view', $retur['Product']['id'])); ?>
		</td>
		<td><?php echo h($retur['Retur']['luas']); ?>&nbsp;</td>
		<td><?php echo h($retur['Retur']['tgl_transaksi']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($retur['Vendor']['id'], array('controller' => 'vendors', 'action' => 'view', $retur['Vendor']['id'])); ?>
		</td>
		<td><?php echo h($retur['Retur']['ket']); ?>&nbsp;</td>
		<td><?php echo h($retur['Retur']['created']); ?>&nbsp;</td>
		<td><?php echo h($retur['Retur']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $retur['Retur']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $retur['Retur']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $retur['Retur']['id']), array(), __('Are you sure you want to delete # %s?', $retur['Retur']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Retur'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
