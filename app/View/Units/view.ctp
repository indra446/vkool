<div class="units view">
<h2><?php echo __('Unit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unit'), array('action' => 'edit', $unit['Unit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Unit'), array('action' => 'delete', $unit['Unit']['id']), array(), __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Karyawans'), array('controller' => 'karyawans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Karyawan'), array('controller' => 'karyawans', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Karyawans'); ?></h3>
	<?php if (!empty($unit['Karyawan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('No Ktp'); ?></th>
		<th><?php echo __('Nama'); ?></th>
		<th><?php echo __('Alamat'); ?></th>
		<th><?php echo __('Unit Id'); ?></th>
		<th><?php echo __('Aktif'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($unit['Karyawan'] as $karyawan): ?>
		<tr>
			<td><?php echo $karyawan['id']; ?></td>
			<td><?php echo $karyawan['no_ktp']; ?></td>
			<td><?php echo $karyawan['nama']; ?></td>
			<td><?php echo $karyawan['alamat']; ?></td>
			<td><?php echo $karyawan['unit_id']; ?></td>
			<td><?php echo $karyawan['aktif']; ?></td>
			<td><?php echo $karyawan['created']; ?></td>
			<td><?php echo $karyawan['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'karyawans', 'action' => 'view', $karyawan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'karyawans', 'action' => 'edit', $karyawan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'karyawans', 'action' => 'delete', $karyawan['id']), array(), __('Are you sure you want to delete # %s?', $karyawan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Karyawan'), array('controller' => 'karyawans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
