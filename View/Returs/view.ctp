<div class="returs view">
<h2><?php echo __('Retur'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($retur['Retur']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($retur['Product']['id'], array('controller' => 'products', 'action' => 'view', $retur['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Luas'); ?></dt>
		<dd>
			<?php echo h($retur['Retur']['luas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tgl Transaksi'); ?></dt>
		<dd>
			<?php echo h($retur['Retur']['tgl_transaksi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($retur['Vendor']['id'], array('controller' => 'vendors', 'action' => 'view', $retur['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ket'); ?></dt>
		<dd>
			<?php echo h($retur['Retur']['ket']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($retur['Retur']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($retur['Retur']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Retur'), array('action' => 'edit', $retur['Retur']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Retur'), array('action' => 'delete', $retur['Retur']['id']), array(), __('Are you sure you want to delete # %s?', $retur['Retur']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Returs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retur'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
