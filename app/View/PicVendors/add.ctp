<div class="picVendors form">
<?php echo $this->Form->create('PicVendor'); ?>
	<fieldset>
		<legend><?php echo __('Add Pic Vendor'); ?></legend>
	<?php
		echo $this->Form->input('karyawan_id');
		echo $this->Form->input('pic_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pic Vendors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Karyawans'), array('controller' => 'karyawans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Karyawan'), array('controller' => 'karyawans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pics'), array('controller' => 'pics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pic'), array('controller' => 'pics', 'action' => 'add')); ?> </li>
	</ul>
</div>
