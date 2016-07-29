<?php //echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Cetak</span>", array('action' => ''), array('escape' => false, 'class' => 'btn btn-xs btn-success','id'=>'btnPrint')); 
		echo $this -> Html -> script(array('lib/min/jquery-min'));

?> 

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
<div class="pembelians view" id="print">
	<div class="widget-header block-header margin-bottom-0 clearfix">
                <div class="pull-left">
                    <h3>Nota Pembelian</h3>
                    <p>No. : <?php echo $data[0]['Pembelian']['nomor']; ?></p>
                </div>
                <div class="pull-right w-action">
					Tanggal : <?php echo $tgl; ?>
                </div>
        </div><br>
	<table cellspacing="5">
		<tr>
			<td><font style="font-weight: bold">Vendor dari</td>
			<td>:</td>
			<td><?php echo $data[0]['Vendor']['nama_vendor']; ?></td>	
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><?php echo $data[0]['Vendor']['alamat']; ?></td>	
		</tr>
		<tr>
			<td><font style="font-weight: bold">Ket</td>
			<td>:</td>
			<td><?php echo $data[0]['Pembelian']['ket']; ?></td>	
		</tr>
	</table>
	<br>
	<div class="w-section-header">
		<h2>Detail Pembelian</h2>
	</div>
	<table class="table table-bordered foo-data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Produk</th>
				<th>Jumlah</th>
				<th>Dimensi</th>
				<th>Harga Satuan</th>
				<th>Diskon</th>
				<th>Subtotal</th>
			</tr>
		</thead>
		<tbody>
			<?php $gtotal=""; foreach ($data as $data){
				$disc=str_replace("%", "", $data['Pembelian']['pot_item']) / 100;
				$total=($data['Pembelian']['harga']*$data['Pembelian']['jml'])-($data['Pembelian']['harga']*$data['Pembelian']['jml'])*$disc;
			?>
		<tr>
			<td><?php echo $data['Pembelian']['id']?></td>
			<td><?php echo $data['Product']['nama_produk']?></td>
			<td><?php echo $data['Pembelian']['jml']?></td>
			<td><?php if($data['Product']['dimensi']!=NULL){ $dimensi=explode(",", $data['Product']['dimensi']); echo $dimensi[0]." x ".$dimensi[1];}?></td>
			<td align="right"><?php echo number_format($data['Pembelian']['harga'],2,',','.');?></td>
			<td><?php echo $data['Pembelian']['pot_item']?></td>
			<td align="right"><?php echo number_format($total,2,',','.');?></td>
		</tr>
			<?php $gtotal+=$total;}
			?>
		<tfoot>
			<tr>
				<td colspan="6" align="right">Potongan =</td><td align="right"><?php if(!empty($data['Pembelian']['potongan'])){echo number_format($data['Pembelian']['potongan'],2,',','.');}?>
				</td>
			</tr>
			<tr>
				<td colspan="6" align="right">Biaya Kirim =</td><td align="right"><?php if(!empty($data['Pembelian']['biaya_kirim'])){ echo number_format($data['Pembelian']['biaya_kirim'],2,',','.');}?>
				</td>
			</tr>
			<tr>
				<td colspan="6" align="right">PPN =</td><td align="right"><?php if(!empty($data['Pembelian']['ppn'])){echo number_format($data['Pembelian']['ppn'],2,',','.');}?>
				</td>
			</tr>
			<tr class="success">
				<td colspan="6" align="right">Grand Total =</td><td align="right"><?php echo number_format($gtotal-$data['Pembelian']['potongan']+$data['Pembelian']['biaya_kirim']+$data['Pembelian']['ppn'],2,',','.');?></td>
			</tr>
		</tfoot>	
		</tbody>
	</table>

</div>	
<button id="btnPrint" class="btn btn-xs btn-success"><i class="fa fa-print"></i>&nbsp;Cetak</button>
	<?php
		echo $this -> Html -> script(array('lib/jquery.printElement.min'));
	?>
<script type="text/javascript">
       $(document).ready(function() {
         $("#btnPrint").click(function() {
             printElem({});
         });

     });
 function printElem(options){
     $('#print').printElement(options);
 }

    </script>
 <style>
@media print 
{
  @page { margin: 0; }
  body  { margin: 1.6cm;font-size:6px; }
}
 </style>   