<div class="units form">
<?php echo $this->Form->create('Unit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Unit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('unit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Unit.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Unit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Karyawans'), array('controller' => 'karyawans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Karyawan'), array('controller' => 'karyawans', 'action' => 'add')); ?> </li>
	</ul>
</div>
