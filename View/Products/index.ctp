<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Produk</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">

	<table class="table data-tbl">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nama_produk'); ?></th>
			<th><?php echo $this->Paginator->sort('Category.kategori','kategori'); ?></th>
			<th><?php echo $this->Paginator->sort('satuan'); ?></th>
			<th><?php echo $this->Paginator->sort('aktif'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['nama_produk']); ?>&nbsp;</td>
		<td><?php echo h($product['Category']['kategori']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['satuan']); ?>&nbsp;</td>
		<td><?php if($product['Product']['aktif']==1){ echo "<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>";}else{echo "<button class='btn btn-danger  btn-xs'><i class='zmdi zmdi-minus-circle-outline zmdi-hc-fw'></i></button>";} ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-edit')) . "", array( 'action' => 'edit', $product['Product']['id']), array('escape' => false,'class'=>'btn btn-primary btn-xs')); ?> 
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $product['Product']['id']),  array('escape' => false,'class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>
