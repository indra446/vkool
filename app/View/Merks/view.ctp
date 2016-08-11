<div class="merks view">
<h2><?php echo __('Merk'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($merk['Merk']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Merk'); ?></dt>
		<dd>
			<?php echo $this->Html->link($merk['ParentMerk']['id'], array('controller' => 'merks', 'action' => 'view', $merk['ParentMerk']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($merk['Merk']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($merk['Merk']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($merk['Merk']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aktif'); ?></dt>
		<dd>
			<?php echo h($merk['Merk']['aktif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($merk['Merk']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($merk['Merk']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Merk'), array('action' => 'edit', $merk['Merk']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Merk'), array('action' => 'delete', $merk['Merk']['id']), array(), __('Are you sure you want to delete # %s?', $merk['Merk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Merks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Merk'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Merks'), array('controller' => 'merks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Merk'), array('controller' => 'merks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Penjualans'), array('controller' => 'penjualans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Penjualan'), array('controller' => 'penjualans', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Merks'); ?></h3>
	<?php if (!empty($merk['ChildMerk'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Nama'); ?></th>
		<th><?php echo __('Aktif'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($merk['ChildMerk'] as $childMerk): ?>
		<tr>
			<td><?php echo $childMerk['id']; ?></td>
			<td><?php echo $childMerk['parent_id']; ?></td>
			<td><?php echo $childMerk['lft']; ?></td>
			<td><?php echo $childMerk['rght']; ?></td>
			<td><?php echo $childMerk['nama']; ?></td>
			<td><?php echo $childMerk['aktif']; ?></td>
			<td><?php echo $childMerk['created']; ?></td>
			<td><?php echo $childMerk['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'merks', 'action' => 'view', $childMerk['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'merks', 'action' => 'edit', $childMerk['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'merks', 'action' => 'delete', $childMerk['id']), array(), __('Are you sure you want to delete # %s?', $childMerk['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Merk'), array('controller' => 'merks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Penjualans'); ?></h3>
	<?php if (!empty($merk['Penjualan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Merk Id'); ?></th>
		<th><?php echo __('Thn'); ?></th>
		<th><?php echo __('Nopol'); ?></th>
		<th><?php echo __('Nomesin'); ?></th>
		<th><?php echo __('Norangka'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($merk['Penjualan'] as $penjualan): ?>
		<tr>
			<td><?php echo $penjualan['id']; ?></td>
			<td><?php echo $penjualan['customer_id']; ?></td>
			<td><?php echo $penjualan['merk_id']; ?></td>
			<td><?php echo $penjualan['thn']; ?></td>
			<td><?php echo $penjualan['nopol']; ?></td>
			<td><?php echo $penjualan['nomesin']; ?></td>
			<td><?php echo $penjualan['norangka']; ?></td>
			<td><?php echo $penjualan['user_id']; ?></td>
			<td><?php echo $penjualan['created']; ?></td>
			<td><?php echo $penjualan['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'penjualans', 'action' => 'view', $penjualan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'penjualans', 'action' => 'edit', $penjualan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'penjualans', 'action' => 'delete', $penjualan['id']), array(), __('Are you sure you want to delete # %s?', $penjualan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Penjualan'), array('controller' => 'penjualans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
