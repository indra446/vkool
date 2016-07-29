<div class="widget-container">

	<table class="table data-tbl">
	<thead>
	<tr>
			<th>ID</th>
			<th>Nama Produk</th>
			<!-- <th rowspan="2">Jml Pembelian</th>
			<th rowspan="2">Jml Penjualan</th> -->
			<th>Stok</th>
			<th>Satuan</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<!-- <tr>
		<th>Sistem</th>
		<th>Gudang</th>
	</tr> -->
	</thead>
	<tbody>
	<?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['products']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['products']['nama_produk']); ?>&nbsp;</td>
		<!-- <td><?php echo h($product[0]['beli']); ?>&nbsp;</td>
		<td><?php echo h($product['a']['jual']); ?>&nbsp;</td> -->
		<td><?php echo $product[0]['sisa']+$product['baku']['jmlbaku']; ?>&nbsp;</td>
		<!-- <td><?php echo h($product['stoks']['jml']); ?>&nbsp;</td> -->
		<td><?php echo h($product['products']['satuan']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-folder-open-o')) . "", array( 'action' => 'view', $product['products']['id']), array('title'=>'lihat','escape' => false,'class'=>'btn btn-info btn-xs')); ?> 
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-edit')) . "", array( 'action' => 'check', $product['products']['id']), array('title'=>'sesuaikan','escape' => false,'class'=>'btn btn-primary btn-xs')); ?> 
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>
