<div class="pics view">
<h2><?php echo __('Pic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pic['Pic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pic'); ?></dt>
		<dd>
			<?php echo h($pic['Pic']['pic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pic['Pic']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pic['Pic']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pic'), array('action' => 'edit', $pic['Pic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pic'), array('action' => 'delete', $pic['Pic']['id']), array(), __('Are you sure you want to delete # %s?', $pic['Pic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pic Vendors'), array('controller' => 'pic_vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pic Vendor'), array('controller' => 'pic_vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pic Vendors'); ?></h3>
	<?php if (!empty($pic['PicVendor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Karyawan Id'); ?></th>
		<th><?php echo __('Pic Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pic['PicVendor'] as $picVendor): ?>
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
