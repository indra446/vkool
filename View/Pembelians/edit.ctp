<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Edit Pembelian</h3>
    </div>
</div>
<br>
<div class="pembelians form">
<?php echo $this->Form->create('Pembelian'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pembelian'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nomor');
		echo $this->Form->input('tgl_transaksi');
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('ket');
		echo $this->Form->input('product_id');
		echo $this->Form->input('jml');
		echo $this->Form->input('ukuran');
		echo $this->Form->input('potongan');
		echo $this->Form->input('biaya_kirim');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pembelian.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pembelian.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pembelians'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
