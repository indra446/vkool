<div class="pics index">
	<h2><?php echo __('Pics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pic'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pics as $pic): ?>
	<tr>
		<td><?php echo h($pic['Pic']['id']); ?>&nbsp;</td>
		<td><?php echo h($pic['Pic']['pic']); ?>&nbsp;</td>
		<td><?php echo h($pic['Pic']['created']); ?>&nbsp;</td>
		<td><?php echo h($pic['Pic']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pic['Pic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pic['Pic']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pic['Pic']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pic['Pic']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Pic'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pic Vendors'), array('controller' => 'pic_vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pic Vendor'), array('controller' => 'pic_vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
