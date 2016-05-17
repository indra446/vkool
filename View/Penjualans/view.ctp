<div class="penjualans view">
<h2><?php echo __('Penjualan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($penjualan['Penjualan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($penjualan['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $penjualan['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Merk'); ?></dt>
		<dd>
			<?php echo $this->Html->link($penjualan['Merk']['id'], array('controller' => 'merks', 'action' => 'view', $penjualan['Merk']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thn'); ?></dt>
		<dd>
			<?php echo h($penjualan['Penjualan']['thn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nopol'); ?></dt>
		<dd>
			<?php echo h($penjualan['Penjualan']['nopol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nomesin'); ?></dt>
		<dd>
			<?php echo h($penjualan['Penjualan']['nomesin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Norangka'); ?></dt>
		<dd>
			<?php echo h($penjualan['Penjualan']['norangka']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($penjualan['User']['tb_skpd_id'], array('controller' => 'users', 'action' => 'view', $penjualan['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($penjualan['Penjualan']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($penjualan['Penjualan']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Penjualan'), array('action' => 'edit', $penjualan['Penjualan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Penjualan'), array('action' => 'delete', $penjualan['Penjualan']['id']), array(), __('Are you sure you want to delete # %s?', $penjualan['Penjualan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Penjualans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Penjualan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Merks'), array('controller' => 'merks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Merk'), array('controller' => 'merks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
