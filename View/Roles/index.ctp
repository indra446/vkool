<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Role</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">

	<table class="table data-tbl">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('sys_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($roles as $role): ?>
	<tr>
		<td><?php echo h($role['Role']['id']); ?>&nbsp;</td>
		<td><?php echo h($role['Role']['role']); ?>&nbsp;</td>
		<td><?php echo h($role['Role']['sys_name']); ?>&nbsp;</td>
		<td><?php echo h($role['Role']['created']); ?>&nbsp;</td>
		<td><?php echo h($role['Role']['modified']); ?>&nbsp;</td>
		
                <td class="actions">
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-edit')) . "", array('action' => 'edit', $role['Role']['id']), array('escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 

			<?php echo $this -> Form -> postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $role['Role']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
