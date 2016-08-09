<?php //echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Cetak</span>", array('action' => ''), array('escape' => false, 'class' => 'btn btn-xs btn-success','id'=>'btnPrint')); 
		echo $this -> Html -> script(array('lib/min/jquery-min'));

?> 

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
<div class="Returs view" id="print">
	<div class="widget-header block-header margin-bottom-0 clearfix">
                <div class="pull-left">
                    <h3>Detail Retur</h3>
                    <p>No. : <?php echo $data[0]['Retur']['noretur']; ?></p>
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
			<td><?php echo $data[0]['Retur']['ket']; ?></td>	
		</tr>
	</table>
	<br>
	<div class="w-section-header">
		<h2>Produk Retur</h2>
	</div>
	<table class="table table-bordered foo-data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Produk</th>
				<th>Luas Retur</th>
				<th>Serial Number</th>
				<th>Dimensi</th>
				<th>Luas Dimensi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $data){
			?>
		<tr>
			<td><?php echo $data['Product']['id']?></td>
			<td><?php echo $data['Product']['nama_produk']?></td>
			<td><?php echo $data['Retur']['luas']?></td>
			<td><?php echo $data['Retur']['sn']?></td>
			<td><?php if($data['Product']['dimensi']!=NULL){ $dimensi=explode(",", $data['Product']['dimensi']); echo $dimensi[0]." x ".$dimensi[1];}?></td>
			<td><?php if($data['Product']['dimensi']!=NULL){echo $dimensi[0]*$dimensi[1]." mm2";}?></td>
		</tr>
			<?php }
			?>
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