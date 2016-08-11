<div class="picVendors view">
<h2><?php echo __('Pic Vendor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($picVendor['PicVendor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Karyawan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($picVendor['Karyawan']['id'], array('controller' => 'karyawans', 'action' => 'view', $picVendor['Karyawan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($picVendor['Pic']['id'], array('controller' => 'pics', 'action' => 'view', $picVendor['Pic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($picVendor['PicVendor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($picVendor['PicVendor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pic Vendor'), array('action' => 'edit', $picVendor['PicVendor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pic Vendor'), array('action' => 'delete', $picVendor['PicVendor']['id']), array(), __('Are you sure you want to delete # %s?', $picVendor['PicVendor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pic Vendors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pic Vendor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Karyawans'), array('controller' => 'karyawans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Karyawan'), array('controller' => 'karyawans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pics'), array('controller' => 'pics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pic'), array('controller' => 'pics', 'action' => 'add')); ?> </li>
	</ul>
</div>
