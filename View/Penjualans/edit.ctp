<div class="penjualans form">
<?php echo $this->Form->create('Penjualan'); ?>
	<fieldset>
		<legend><?php echo __('Edit Penjualan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('merk_id');
		echo $this->Form->input('thn');
		echo $this->Form->input('nopol');
		echo $this->Form->input('nomesin');
		echo $this->Form->input('norangka');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Penjualan.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Penjualan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Penjualans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Merks'), array('controller' => 'merks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Merk'), array('controller' => 'merks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
