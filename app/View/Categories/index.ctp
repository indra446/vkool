<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Kategori</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">

	<table class="table data-tbl">
	<thead>
	<tr>
			<th>No.</th>
			<th><?php echo $this->Paginator->sort('Category.parent_id','parent kategori'); ?></th>
			<th><?php echo $this->Paginator->sort('kategori'); ?></th>
			<th><?php echo $this->Paginator->sort('aktif'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categories as $key=>$category): ?>
		<?php 
			if($category['ParentCategory']['kategori'] == null)
				$category['ParentCategory']['kategori'] = '-';
		?>
	<tr>
		<td><?php echo h($key+1); ?>&nbsp;</td>
		<td><?php echo h($category['ParentCategory']['kategori']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['kategori']); ?>&nbsp;</td>
		<td><?php if($category['Category']['aktif']==1){ echo "<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>";}else{echo "<button class='btn btn-danger  btn-xs'><i class='zmdi zmdi-minus-circle-outline zmdi-hc-fw'></i></button>";} ?>&nbsp;</td>
		<td><?php echo h($category['Category']['created']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-edit')) . "", array( 'action' => 'edit', $category['Category']['id']), array('title'=>'edit','escape' => false,'class'=>'btn btn-primary btn-xs')); ?> 
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $category['Category']['id']),  array('title'=>'hapus','escape' => false,'class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>
