<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-user-plus')) . "&nbsp;<span>Tambah User</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">

	<table class="table data-tbl">
		<thead>
	<tr>
				<th><?php echo $this->Paginator->sort('nama_admin','Nama'); ?></th>
			<th><?php echo $this->Paginator->sort('username','Username'); ?></th>
	
			<th><?php echo $this->Paginator->sort('group_id','Group'); ?></th>
			<th class="actions">Aksi</th>
	</tr></thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>

		<td><?php echo h($user['User']['nama_admin']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>

		<td><?php echo h($user['Group']['name']); ?>&nbsp;</td>
		<td class="actions">
		<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-edit')) . "", array( 'action' => 'edit', $user['User']['id']), array('escape' => false,'class'=>'btn btn-primary btn-xs')); ?> 
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $user['User']['id']),  array('escape' => false,'class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?></tbody>
	</table>
</div>
	
