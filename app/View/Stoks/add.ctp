<div class="stoks form">
<?php echo $this->Form->create('Stok'); ?>
	<fieldset>
		<legend><?php echo __('Add Stok'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('jml');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stoks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
