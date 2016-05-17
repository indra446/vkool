<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php
		echo $this->Form->input('nama');
		echo $this->Form->input('alamat');
		echo $this->Form->input('telp');
		echo $this->Form->input('hp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Penjualans'), array('controller' => 'penjualans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Penjualan'), array('controller' => 'penjualans', 'action' => 'add')); ?> </li>
	</ul>
</div>
