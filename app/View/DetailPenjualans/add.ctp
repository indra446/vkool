<div class="detailPenjualans form">
<?php echo $this->Form->create('DetailPenjualan'); ?>
	<fieldset>
		<legend><?php echo __('Add Detail Penjualan'); ?></legend>
	<?php
		echo $this->Form->input('penjualan_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('qty');
		echo $this->Form->input('disc');
		echo $this->Form->input('hidden_disc');
		echo $this->Form->input('karyawan_id');
		echo $this->Form->input('ket');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detail Penjualans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Penjualans'), array('controller' => 'penjualans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Penjualan'), array('controller' => 'penjualans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Karyawans'), array('controller' => 'karyawans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Karyawan'), array('controller' => 'karyawans', 'action' => 'add')); ?> </li>
	</ul>
</div>
