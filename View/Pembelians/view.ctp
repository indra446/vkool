<div class="pembelians view">
<h2><?php echo __('Pembelian'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pembelian['Pembelian']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nomor'); ?></dt>
		<dd>
			<?php echo h($pembelian['Pembelian']['nomor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tgl Transaksi'); ?></dt>
		<dd>
			<?php echo h($pembelian['Pembelian']['tgl_transaksi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pembelian['Vendor']['id'], array('controller' => 'vendors', 'action' => 'view', $pembelian['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ket'); ?></dt>
		<dd>
			<?php echo h($pembelian['Pembelian']['ket']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pembelian['Product']['id'], array('controller' => 'products', 'action' => 'view', $pembelian['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jml'); ?></dt>
		<dd>
			<?php echo h($pembelian['Pembelian']['jml']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ukuran'); ?></dt>
		<dd>
			<?php echo h($pembelian['Pembelian']['ukuran']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Potongan'); ?></dt>
		<dd>
			<?php echo h($pembelian['Pembelian']['potongan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Biaya Kirim'); ?></dt>
		<dd>
			<?php echo h($pembelian['Pembelian']['biaya_kirim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pembelian['User']['tb_skpd_id'], array('controller' => 'users', 'action' => 'view', $pembelian['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pembelian['Pembelian']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pembelian['Pembelian']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pembelian'), array('action' => 'edit', $pembelian['Pembelian']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pembelian'), array('action' => 'delete', $pembelian['Pembelian']['id']), array(), __('Are you sure you want to delete # %s?', $pembelian['Pembelian']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pembelians'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pembelian'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
