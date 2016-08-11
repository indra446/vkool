<?php // debug($data); ?>
<div class="w-section-header">
	<h2>Transaksi Penjualan</h2>
</div>
<table>
	<tr>
		<td>Nomor Nota</td><td>: <?php echo $data[0]['penjualans']['nomor']?></td>
	</tr>
	<tr>	
		<td>Waktu</td><td>: <?php echo date("d/m/Y H:i:s", strtotime($data[0]['penjualans']['created'])); ?></td>
	</tr>
</table>
<table class="table table-striped">
<thead>
	<tr>
		<th width="15%">Kategori</th>
		<th>Item</th>
		<th width="5%">Qty</th>
		<th align="right" width="10%">Harga</th>
		<th align="right" width="10%">Disc</th>
		<th align="right" width="10%">Subtotal</th>
	</tr>
</thead>
<tbody>
	<?php $total="";foreach ($data as $d){?>
		<tr>
			<td><?php echo $d['categories']['kategori']?></td>
			<td><?php echo $d['products']['nama_produk']?></td>
			<td><?php echo $d['detail_penjualans']['qty']?></td>
			<td align="right"><?php echo number_format($d['detail_penjualans']['harga'],0,',','.')?></td>
			<td align="right"><?php echo number_format($d['detail_penjualans']['disc'],0,',','.')?></td>
			<td align="right"><?php echo number_format(($d['detail_penjualans']['qty']*$d['detail_penjualans']['harga'])-$d['detail_penjualans']['disc'],0,',','.')?></td>
		</tr>
	<?php $total += ($d['detail_penjualans']['qty'] * $d['detail_penjualans']['harga'])-$d['detail_penjualans']['disc'];
			}
 ?>
<tr>
	<td></td>
	<td>Total</td>
	<td></td>
	<td></td>
	<td></td>
	<td align="right"><?php echo number_format($total,0,',','.')?></td>
</tr>		
<tr>
	<td></td>
	<td>Discount</td>
	<td></td>
	<td></td>
	<td></td>
	<td align="right"><?php echo number_format($data[0]['detail_penjualans']['disc'],0,',','.')?></td>
</tr>		
<tr>
	<td></td>
	<td>Hidden Discount</td>
	<td></td>
	<td></td>
	<td></td>
	<td align="right"><?php echo number_format($data[0]['detail_penjualans']['hidden_disc'],0,',','.')?></td>
</tr>		
<tr>
	<td></td>
	<td>Total Setelah Discount</td>
	<td></td>
	<td></td>
	<td></td>
	<td align="right"><?php echo number_format($total-($data[0]['detail_penjualans']['disc']+$data[0]['detail_penjualans']['hidden_disc']),0,',','.')?></td>
</tr>		
<tr>
	<td></td>
	<td>Total Tagihan</td>
	<td></td>
	<td></td>
	<td></td>
	<td align="right"><?php echo number_format($total-($data[0]['detail_penjualans']['disc']+$data[0]['detail_penjualans']['hidden_disc']),0,',','.')?></td>
</tr>		
<tr>
	<td></td>
	<td>Sudah Bayar</td>
	<td></td>
	<td></td>
	<td></td>
	<td align="right"><?php echo number_format($total-($data[0]['detail_penjualans']['disc']+$data[0]['detail_penjualans']['hidden_disc']),0,',','.')?></td>
</tr>		
<tr>
	<td></td>
	<td>Belum Bayar</td>
	<td></td>
	<td></td>
	<td></td>
	<td align="right">0</td>
</tr>		
</tbody>	
</table>
				<div class="widget-header block-header clearfix">
					<div class="btn-group btn-group">
				    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-chevron-circle-left ')) . "&nbsp;<span>Back</span>", array('controller' => 'Penjualans', 'action' => 'histori'), array('escape' => false, 'class' => 'btn btn-primary')); ?> 
				    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-money', 'aria-hidden' => true)) . "&nbsp;<span>Riwayat Pembayaran</span>", array('controller' => 'Bayars','action'=>'riwayat/'.$data[0]['penjualans']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?> 
				     </div>
				</div> 