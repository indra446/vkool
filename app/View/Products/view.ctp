<?php //debug($sisa); ?>
<div class="products view">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-angle-double-left')) . " back", array('action' => 'stock'), array('escape' => false, 'class' => 'btn btn-info')); ?> 
<br><br>
	<div class="w-section-header">
                        <h2>Inventory Detail</h2>
                    </div>
                    <dl class="dl-horizontal">
                        <dt>ID Produk</dt>
                        <dd><?php echo h($product[0]['products']['id']); ?></dd>
                        <dt>Nama Produk</dt>
                        <dd><?php echo h($product[0]['products']['nama_produk']); ?></dd>
                        <dt>Jenis Produk</dt>
                        <dd><?php
							if ($product[0]['parent']['parent_id'] != NULL) {echo h($product[0]['parent']['parent']) . " > ";
							} echo $product[0]['categories']['kategori'] . " ( " . $product[0]['products']['satuan'] . " )";
 ?></dd>
                        <!-- <dd><?php
						if ($product[0]['products']['dimensi'] != NULL) { $dimensi = explode(",", $product[0]['products']['dimensi']);
							echo $dimensi[0] . " x " . $dimensi[1] . " mm ( Luas = " . number_format($dimensi[0] * $dimensi[1], 0, ',', '.') . " mm2)";
						}
						?></dd> -->
                        <dt>Deskripsi</dt>
                        <dd><?php echo h($product[0]['products']['deskripsi']); ?></dd>
                     </dl>
                  <hr>   
 <h4>Stok yang masih tersedia</h4>
<table class="table data-tbl">
	<thead>
	<tr>
			<th>Dimensi</th>
			<th>Luas/Unit</th>
			<th>Jumlah</th>
	</tr>
	</thead>
	<tbody>
	<?php $a=0;foreach ($sisa as $sisa): ?>
	<tr>
		<td><?php if ($sisa['products']['dimensi'] != NULL) {
					 $dimensi = explode(",", $sisa['products']['dimensi']);
						echo $dimensi[0] . " x " . $dimensi[1] . " mm";
						}
						?></td>
		<td><?php if ($sisa['products']['dimensi'] != NULL) { echo h(number_format($dimensi[0] * $dimensi[1], 0, ',', '.'))." mm2";} ?></td>
		<td align="right"><?php echo h($sisa[0]['sisa']); ?></td>
	</tr>
<?php $a +=$sisa[0]['sisa'];endforeach; ?>
	<?php $i=1;foreach ($baku as $baku): ?>
	<tr>
		<td><?php if ($baku['bahanbakus']['dm1'] != NULL && $baku['bahanbakus']['dm2'] != NULL) {
						echo $baku['bahanbakus']['dm1'] . " x " . $baku['bahanbakus']['dm2'] . " mm";
						}
						?></td>
		<td><?php if ($baku['bahanbakus']['dm1'] != NULL && $baku['bahanbakus']['dm2'] != NULL)  { echo h(number_format($baku['bahanbakus']['dm1'] * $baku['bahanbakus']['dm2'], 0, ',', '.'))." mm2";} ?></td>
		<td align="right">1</td>
	</tr>
<?php $i++;endforeach; ?>
<tfoot><td colspan="2"><font style="font-weight: bold">Total</td><td align="right"><font style="font-weight: bold"><?php echo ($a+$i)-1;?></td></tfoot>
	</tbody>
	</table></div>