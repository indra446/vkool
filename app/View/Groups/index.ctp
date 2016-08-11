<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . "&nbsp;<span>Tambah Role</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">
		<table class="table data-tbl">
			<thead>
	<tr>
			<th><?php echo $this -> Paginator -> sort('name'); ?></th>
			<th><?php echo $this -> Paginator -> sort('created'); ?></th>
			<th><?php echo $this -> Paginator -> sort('modified'); ?></th>
			<th class="actions">Aksi</th>
	</tr>
	</thead><tbody>
	<?php foreach ($groups as $group): ?>
	<tr>
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-edit')) . "", array('action' => 'edit', $group['Group']['id']), array('escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 

			<?php echo $this -> Form -> postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $group['Group']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
		</td>
	</tr>
<?php 
		endforeach;
 ?></tbody>
	</table>

</div>		
