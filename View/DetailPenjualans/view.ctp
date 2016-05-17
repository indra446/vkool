<div class="detailPenjualans view">
<h2><?php echo __('Detail Penjualan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($detailPenjualan['DetailPenjualan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Penjualan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detailPenjualan['Penjualan']['id'], array('controller' => 'penjualans', 'action' => 'view', $detailPenjualan['Penjualan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detailPenjualan['Product']['id'], array('controller' => 'products', 'action' => 'view', $detailPenjualan['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($detailPenjualan['DetailPenjualan']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disc'); ?></dt>
		<dd>
			<?php echo h($detailPenjualan['DetailPenjualan']['disc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hidden Disc'); ?></dt>
		<dd>
			<?php echo h($detailPenjualan['DetailPenjualan']['hidden_disc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Karyawan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detailPenjualan['Karyawan']['id'], array('controller' => 'karyawans', 'action' => 'view', $detailPenjualan['Karyawan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ket'); ?></dt>
		<dd>
			<?php echo h($detailPenjualan['DetailPenjualan']['ket']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($detailPenjualan['DetailPenjualan']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($detailPenjualan['DetailPenjualan']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detail Penjualan'), array('action' => 'edit', $detailPenjualan['DetailPenjualan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detail Penjualan'), array('action' => 'delete', $detailPenjualan['DetailPenjualan']['id']), array(), __('Are you sure you want to delete # %s?', $detailPenjualan['DetailPenjualan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detail Penjualans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail Penjualan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Penjualans'), array('controller' => 'penjualans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Penjualan'), array('controller' => 'penjualans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Karyawans'), array('controller' => 'karyawans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Karyawan'), array('controller' => 'karyawans', 'action' => 'add')); ?> </li>
	</ul>
</div>
