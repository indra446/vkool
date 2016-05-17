<div class="vendors view">
<h2><?php echo __('Vendor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Vendor'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['nama_vendor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['alamat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aktif'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['aktif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vendor'), array('action' => 'edit', $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vendor'), array('action' => 'delete', $vendor['Vendor']['id']), array(), __('Are you sure you want to delete # %s?', $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pembelians'), array('controller' => 'pembelians', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pembelian'), array('controller' => 'pembelians', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pembelians'); ?></h3>
	<?php if (!empty($vendor['Pembelian'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nomor'); ?></th>
		<th><?php echo __('Tgl Transaksi'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Ket'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Jml'); ?></th>
		<th><?php echo __('Ukuran'); ?></th>
		<th><?php echo __('Potongan'); ?></th>
		<th><?php echo __('Biaya Kirim'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vendor['Pembelian'] as $pembelian): ?>
		<tr>
			<td><?php echo $pembelian['id']; ?></td>
			<td><?php echo $pembelian['nomor']; ?></td>
			<td><?php echo $pembelian['tgl_transaksi']; ?></td>
			<td><?php echo $pembelian['vendor_id']; ?></td>
			<td><?php echo $pembelian['ket']; ?></td>
			<td><?php echo $pembelian['product_id']; ?></td>
			<td><?php echo $pembelian['jml']; ?></td>
			<td><?php echo $pembelian['ukuran']; ?></td>
			<td><?php echo $pembelian['potongan']; ?></td>
			<td><?php echo $pembelian['biaya_kirim']; ?></td>
			<td><?php echo $pembelian['user_id']; ?></td>
			<td><?php echo $pembelian['created']; ?></td>
			<td><?php echo $pembelian['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pembelians', 'action' => 'view', $pembelian['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pembelians', 'action' => 'edit', $pembelian['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pembelians', 'action' => 'delete', $pembelian['id']), array(), __('Are you sure you want to delete # %s?', $pembelian['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pembelian'), array('controller' => 'pembelians', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
