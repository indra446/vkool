<?php //debug($product); ?>
<div class="products view">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-angle-double-left')) . " back", array('action' => 'stock'), array('escape' => false, 'class' => 'btn btn-info')); ?> 
<br><br>
	<div class="w-section-header">
                        <h2>Inventory Detail</h2>
                    </div>
                    <dl class="dl-horizontal">
                        <dt>ID Produk</dt>
                        <dd><?php echo h($product['Product']['id']); ?></dd>
                        <dt>Nama Produk</dt>
                        <dd><?php echo h($product['Product']['nama_produk']); ?></dd>
                        <dt>Jenis Produk</dt>
                        <dd><?php
							if ($product['Category']['parent_id'] != NULL) {echo h($product['Category']['ParentCategory']['kategori']) . " > ";
							} echo $product['Category']['kategori'] . " ( " . $product['Product']['satuan'] . " )";
 ?></dd>
                        <dd><?php
						if ($product['Product']['dimensi'] != NULL) { $dimensi = explode(",", $product['Product']['dimensi']);
							echo $dimensi[0] . " x " . $dimensi[1] . " mm ( Luas = " . number_format($dimensi[0] * $dimensi[1], 0, ',', '.') . " mm2)";
						}
						?></dd>
                        <dt>Deskripsi</dt>
                        <dd><?php echo h($product['Product']['deskripsi']); ?></dd>
                     </dl>
                  <hr>   
 <h4>Stok Potongan</h4>
<table class="table data-tbl">
	<thead>
	<tr>
			<th>id</th>
			<th>dimensi</th>
			<th>gambar</th>
			<th>pembelian</th>
			<th>penjualan</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<!-- <?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['nama_produk']); ?>&nbsp;</td>
		<td><?php echo h($product['Category']['kategori']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['satuan']); ?>&nbsp;</td>
		<td><?php if($product['Product']['aktif']==1){ echo "<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>";}else{echo "<button class='btn btn-danger  btn-xs'><i class='zmdi zmdi-minus-circle-outline zmdi-hc-fw'></i></button>";} ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-edit')) . "", array( 'action' => 'edit', $product['Product']['id']), array('title'=>'edit','escape' => false,'class'=>'btn btn-primary btn-xs')); ?> 
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $product['Product']['id']),  array('title'=>'hapus','escape' => false,'class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?> -->
	</tbody>
	</table></div>
