<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['alamat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telp'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['telp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hp'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['hp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), array(), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Penjualans'), array('controller' => 'penjualans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Penjualan'), array('controller' => 'penjualans', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Penjualans'); ?></h3>
	<?php if (!empty($customer['Penjualan'])): ?>
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
	<?php foreach ($customer['Penjualan'] as $penjualan): ?>
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
