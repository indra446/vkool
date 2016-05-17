<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Produk'); ?></dt>
		<dd>
			<?php echo h($product['Product']['nama_produk']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Category']['id'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipe'); ?></dt>
		<dd>
			<?php echo h($product['Product']['tipe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimensi'); ?></dt>
		<dd>
			<?php echo h($product['Product']['dimensi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Satuan'); ?></dt>
		<dd>
			<?php echo h($product['Product']['satuan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deskripsi'); ?></dt>
		<dd>
			<?php echo h($product['Product']['deskripsi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sn'); ?></dt>
		<dd>
			<?php echo h($product['Product']['sn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aktif'); ?></dt>
		<dd>
			<?php echo h($product['Product']['aktif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detail Penjualans'), array('controller' => 'detail_penjualans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail Penjualan'), array('controller' => 'detail_penjualans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pembelians'), array('controller' => 'pembelians', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pembelian'), array('controller' => 'pembelians', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stoks'), array('controller' => 'stoks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stok'), array('controller' => 'stoks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Detail Penjualans'); ?></h3>
	<?php if (!empty($product['DetailPenjualan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Penjualan Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Disc'); ?></th>
		<th><?php echo __('Hidden Disc'); ?></th>
		<th><?php echo __('Karyawan Id'); ?></th>
		<th><?php echo __('Ket'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['DetailPenjualan'] as $detailPenjualan): ?>
		<tr>
			<td><?php echo $detailPenjualan['id']; ?></td>
			<td><?php echo $detailPenjualan['penjualan_id']; ?></td>
			<td><?php echo $detailPenjualan['product_id']; ?></td>
			<td><?php echo $detailPenjualan['qty']; ?></td>
			<td><?php echo $detailPenjualan['disc']; ?></td>
			<td><?php echo $detailPenjualan['hidden_disc']; ?></td>
			<td><?php echo $detailPenjualan['karyawan_id']; ?></td>
			<td><?php echo $detailPenjualan['ket']; ?></td>
			<td><?php echo $detailPenjualan['created']; ?></td>
			<td><?php echo $detailPenjualan['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'detail_penjualans', 'action' => 'view', $detailPenjualan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'detail_penjualans', 'action' => 'edit', $detailPenjualan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'detail_penjualans', 'action' => 'delete', $detailPenjualan['id']), array(), __('Are you sure you want to delete # %s?', $detailPenjualan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Detail Penjualan'), array('controller' => 'detail_penjualans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pembelians'); ?></h3>
	<?php if (!empty($product['Pembelian'])): ?>
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
	<?php foreach ($product['Pembelian'] as $pembelian): ?>
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
<div class="related">
	<h3><?php echo __('Related Stoks'); ?></h3>
	<?php if (!empty($product['Stok'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Jml'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Stok'] as $stok): ?>
		<tr>
			<td><?php echo $stok['id']; ?></td>
			<td><?php echo $stok['product_id']; ?></td>
			<td><?php echo $stok['jml']; ?></td>
			<td><?php echo $stok['created']; ?></td>
			<td><?php echo $stok['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stoks', 'action' => 'view', $stok['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stoks', 'action' => 'edit', $stok['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stoks', 'action' => 'delete', $stok['id']), array(), __('Are you sure you want to delete # %s?', $stok['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stok'), array('controller' => 'stoks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
