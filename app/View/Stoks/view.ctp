<div class="stoks view">
<h2><?php echo __('Stok'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stok['Stok']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stok['Product']['id'], array('controller' => 'products', 'action' => 'view', $stok['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jml'); ?></dt>
		<dd>
			<?php echo h($stok['Stok']['jml']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($stok['Stok']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($stok['Stok']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stok'), array('action' => 'edit', $stok['Stok']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stok'), array('action' => 'delete', $stok['Stok']['id']), array(), __('Are you sure you want to delete # %s?', $stok['Stok']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stoks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stok'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
