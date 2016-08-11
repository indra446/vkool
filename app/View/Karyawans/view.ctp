<div class="karyawans view">
<h2><?php echo __('Karyawan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($karyawan['Karyawan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Ktp'); ?></dt>
		<dd>
			<?php echo h($karyawan['Karyawan']['no_ktp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($karyawan['Karyawan']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat'); ?></dt>
		<dd>
			<?php echo h($karyawan['Karyawan']['alamat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($karyawan['Unit']['id'], array('controller' => 'units', 'action' => 'view', $karyawan['Unit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aktif'); ?></dt>
		<dd>
			<?php echo h($karyawan['Karyawan']['aktif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($karyawan['Karyawan']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($karyawan['Karyawan']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Karyawan'), array('action' => 'edit', $karyawan['Karyawan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Karyawan'), array('action' => 'delete', $karyawan['Karyawan']['id']), array(), __('Are you sure you want to delete # %s?', $karyawan['Karyawan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Karyawans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Karyawan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detail Penjualans'), array('controller' => 'detail_penjualans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail Penjualan'), array('controller' => 'detail_penjualans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pic Vendors'), array('controller' => 'pic_vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pic Vendor'), array('controller' => 'pic_vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Detail Penjualans'); ?></h3>
	<?php if (!empty($karyawan['DetailPenjualan'])): ?>
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
	<?php foreach ($karyawan['DetailPenjualan'] as $detailPenjualan): ?>
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
	<h3><?php echo __('Related Pic Vendors'); ?></h3>
	<?php if (!empty($karyawan['PicVendor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Karyawan Id'); ?></th>
		<th><?php echo __('Pic Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($karyawan['PicVendor'] as $picVendor): ?>
		<tr>
			<td><?php echo $picVendor['id']; ?></td>
			<td><?php echo $picVendor['karyawan_id']; ?></td>
			<td><?php echo $picVendor['pic_id']; ?></td>
			<td><?php echo $picVendor['created']; ?></td>
			<td><?php echo $picVendor['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pic_vendors', 'action' => 'view', $picVendor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pic_vendors', 'action' => 'edit', $picVendor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pic_vendors', 'action' => 'delete', $picVendor['id']), array(), __('Are you sure you want to delete # %s?', $picVendor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pic Vendor'), array('controller' => 'pic_vendors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
