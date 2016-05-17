<div class="picVendors index">
	<h2><?php echo __('Pic Vendors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('karyawan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pic_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($picVendors as $picVendor): ?>
	<tr>
		<td><?php echo h($picVendor['PicVendor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($picVendor['Karyawan']['id'], array('controller' => 'karyawans', 'action' => 'view', $picVendor['Karyawan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($picVendor['Pic']['id'], array('controller' => 'pics', 'action' => 'view', $picVendor['Pic']['id'])); ?>
		</td>
		<td><?php echo h($picVendor['PicVendor']['created']); ?>&nbsp;</td>
		<td><?php echo h($picVendor['PicVendor']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $picVendor['PicVendor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $picVendor['PicVendor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $picVendor['PicVendor']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $picVendor['PicVendor']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Pic Vendor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Karyawans'), array('controller' => 'karyawans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Karyawan'), array('controller' => 'karyawans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pics'), array('controller' => 'pics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pic'), array('controller' => 'pics', 'action' => 'add')); ?> </li>
	</ul>
</div>
