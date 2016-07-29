<div class="returs form">
<?php echo $this->Form->create('Retur'); ?>
	<fieldset>
		<legend><?php echo __('Add Retur'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('luas');
		echo $this->Form->input('tgl_transaksi');
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('ket');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Returs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
