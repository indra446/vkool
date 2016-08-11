<div class="pics form">
<?php echo $this->Form->create('Pic'); ?>
	<fieldset>
		<legend><?php echo __('Add Pic'); ?></legend>
	<?php
		echo $this->Form->input('pic');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pic Vendors'), array('controller' => 'pic_vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pic Vendor'), array('controller' => 'pic_vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
