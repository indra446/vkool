<div class="vendors form">
<?php echo $this->Form->create('Vendor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vendor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nama_vendor');
		echo $this->Form->input('alamat');
		echo $this->Form->input('aktif');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vendor.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Vendor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pembelians'), array('controller' => 'pembelians', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pembelian'), array('controller' => 'pembelians', 'action' => 'add')); ?> </li>
	</ul>
</div>
