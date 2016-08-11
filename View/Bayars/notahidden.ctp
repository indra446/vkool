<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script>
<?php
$this->layout=false;
// debug($sudahbayar);
?>
<table style="font-size: 12px">
	<tr>
		<td>No.Nota</td><td>: <?php echo $cek[0]['penjualans']['nomor']?></td>
		<td width="20%">&nbsp;&nbsp;&nbsp;</td>
		<td>Nama</td><td>: <?php echo $cek[0]['customers']['nmplg']?></td>
	</tr>
	<tr>
		<td>No.Order</td><td>: <?php echo $cek[0]['penjualans']['noorder']?></td>
		<td width="20%">&nbsp;&nbsp;&nbsp;</td>
		<td>Alamat</td><td>: <?php echo $cek[0]['customers']['alamat']?></td>
	</tr>
	<tr>
		<td>Tanggal</td><td>: <?php echo date("d/m/Y",strtotime($cek[0]['penjualans']['created']))?></td>
		<td width="20%">&nbsp;&nbsp;&nbsp;</td>
		<td>Telp/Hp</td><td>: <?php echo $cek[0]['customers']['telp']."/".$cek[0]['customers']['hp']?></td>
	</tr>
	<tr>
		<!-- <td>Jatuh Tempo</td><td>: <?php echo date("d/m/Y",strtotime($cek[0]['bayars']['jatuh_tempo']))?></td> -->
		<td>No. Mesin</td><td>: <?php echo $cek[0]['penjualans']['nomesin']?></td>
		<td width="20%">&nbsp;&nbsp;&nbsp;</td>
		<td>Tipe Bayar</td><td>: <?php echo $cek[0]['bayars']['tipe_bayar']?></td>
	</tr>
	<tr>
		<td>No Polisi</td><td>: <?php echo $cek[0]['penjualans']['nopol']?></td>
		<td width="20%">&nbsp;&nbsp;&nbsp;</td>
		<td>Merk/Tipe Mobil</td><td>: <?php echo $cek[0]['merks']['merk']."/".$cek[0]['model']['model']?></td>
	</tr>
	<tr>
		<td>No. Rangka</td><td>: <?php echo $cek[0]['penjualans']['norangka']?></td>
		<td width="20%">&nbsp;&nbsp;&nbsp;</td>
		<td></td><td></td>
	</tr>
</table>
<table class="table table-bordered" style="font-size:11px">
	<tr  style="background-color: #ccc">
		<td>Bagian</td>
		<td>Nama Barang</td>
		<td width="5%">Qty</td>
		<td>Harga</td>
		<td>Disc</td>
		<td>Subtotal</td>
	</tr>
<?php $total="";foreach ($cek as $d){?>
	<tr>
		<td><?php echo $d['categories']['kategori']?></td>
		<td><?php echo $d['products']['nama_produk']?></td>
		<td><?php echo $d['detail_penjualans']['qty']?></td>
		<td align="right"><?php echo number_format($d['detail_penjualans']['harga'],0,',','.')?></td>
		<td align="right"><?php echo $d['detail_penjualans']['disc_item']?></td>
		<td align="right"><?php echo number_format(($d['detail_penjualans']['qty']*$d['detail_penjualans']['harga'])-$d['detail_penjualans']['disc_item'],0,',','.')?></td>
	</tr>
<?php $total +=($d['detail_penjualans']['qty']*$d['detail_penjualans']['harga'])-$d['detail_penjualans']['disc_item'];}?>	

	<tr>
		<td>Total</td><td align="right"><?php echo number_format($total,0,',','.')?></td>
		<td colspan="3">Diskon</td>
		<td align="right"><?php echo number_format($cek[0]['penjualans']['disc']+$cek[0]['penjualans']['hidden_disc'],0,',','.')?></td>

	</tr>

</table>
<table class="table table-bordered" style="font-size:11px">
	<tr>
		<td style="background-color: #ccc">Grand Total</td>
		<td align="right"><?php echo number_format($total-($cek[0]['penjualans']['disc']+$cek[0]['penjualans']['hidden_disc']),0,',','.')?></td>
		<td style="background-color: #ccc">Sudah Bayar</td>
		<td align="right"><?php echo number_format($sudahbayar,0,',','.');?></td>
	</tr>
	<tr>
		<td style="background-color: #ccc">Bayar</td>
		<td align="right"><?php echo number_format($d['bayars']['bayar'],0,',','.')?></td>
		<td style="background-color: #ccc"><?php if($sudahbayar < ($total-($cek[0]['penjualans']['disc']+$cek[0]['penjualans']['hidden_disc']))) { echo "Kurang Bayar";}else{echo "Uang Kembali";}?></td>
		<td align="right"><?php echo str_replace("-", "", number_format(($total-($cek[0]['penjualans']['disc']+$cek[0]['penjualans']['hidden_disc']))-$sudahbayar,0,',','.'));?></td>
	</tr>
</table>
