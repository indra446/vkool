<?php //debug($data); 
$this->layout=false;?>
<div class="w-section-header">
	<h2><?php echo $data[0]['penjualans']['nomor']?></h2>
</div>
<table>
	<tr>
		<td>Nama Pelanggan</td><td>: <?php echo $data[0]['customers']['nama']?></td>
	</tr>
	<tr>	
		<td>Waktu</td><td>: <?php echo date("d/m/Y H:i:s", strtotime($data[0]['penjualans']['created'])); ?></td>
	</tr>
</table>
<table class="table table-bordered">
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
			<td align="right"><?php if(!empty($d['detail_penjualans']['disc_item'])){echo number_format($d['detail_penjualans']['disc_item'],0,',','.');}?></td>
			<td align="right"><?php echo number_format(($d['detail_penjualans']['qty']*$d['detail_penjualans']['harga'])-$d['detail_penjualans']['disc_item'],0,',','.')?></td>
		</tr>
	<?php $total += ($d['detail_penjualans']['qty'] * $d['detail_penjualans']['harga'])-$d['detail_penjualans']['disc_item'];
			}
 ?>
<tr>
	<td colspan="5" align="right" style="font-weight: bold">Total = </td>
	<td align="right"><?php echo number_format($total,0,',','.')?></td>
</tr>		
<tr>
	<td colspan="5" align="right" style="font-weight: bold">Discount =</td>
	<td align="right"><?php echo number_format($data[0]['penjualans']['disc'],0,',','.')?></td>
</tr>		
<tr>
	<td colspan="5" align="right" style="font-weight: bold">Hidden Discount =</td>
	<td align="right"><?php echo number_format($data[0]['penjualans']['hidden_disc'],0,',','.')?></td>
</tr>		
<tr>
	<td colspan="5" align="right" style="font-weight: bold">Total Setelah Discount =</td>
	<td align="right"><?php echo number_format($total-($data[0]['penjualans']['disc']+$data[0]['penjualans']['hidden_disc']),0,',','.')?></td>
</tr>		
<tr>
	<td colspan="5" align="right" style="font-weight: bold">Total Tagihan =</td>
	<td align="right"><?php echo number_format($total-($data[0]['penjualans']['disc']+$data[0]['penjualans']['hidden_disc']),0,',','.')?></td>
</tr>		
		
</tbody>	
</table>
