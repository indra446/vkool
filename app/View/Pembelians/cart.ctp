<?php
$this -> layout = false;
// debug($_SESSION["cart_item"])

?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID Produk</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Dimensi</th>
			<th>Harga Satuan</th>
			<th>Disc</th>
			<th>Subtotal</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
<?php

if(!empty($_SESSION["cart_item"])) {
$x=0;
$total="";	
// debug($_SESSION["cart_item"]);
foreach($_SESSION["cart_item"] as $k => $item){

// foreach ($_SESSION["cart_item"] as $item){
	if($item['id']!=NULL){
	$disc= $item['potitem'] / 100;
	$pot= (str_replace(".", "", $item['harga'])*$item['jml'])*$disc;
		
	if($item['dimensi']!=NULL){
		$dimensi=explode(",",$item['dimensi']);
		$d=$dimensi[0]." x ".$dimensi[1];
	}else{
		$d="";
	}	
	echo "<tr><td>".$item['id']."</td><td>".$item['nama']."</td>
	<td>".$item['jml']."</td><td>".$d."</td><td align='right'>".$item['harga']."</td><td align='right'>".$item['potitem']." %</td><td align='right'>".number_format(((str_replace(".", "", $item['harga'])*$item['jml'])-$pot),0,',','.')."</td>
	<td><button type='button' class='btn btn-xs btn-danger' id='".$item['id']."' onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td></tr>"; 
	}
	$x++;
$total +=str_replace(".", "", $item['harga'])*$item['jml']-str_replace(".", "", $pot);
	}
}
?>
	</tbody>
<tfoot>
	<tr>
		<td colspan="6"><div align="right">Total</div></td>
		<td><div class=" col-xs-6" align='right'><?php echo  number_format($total,0,',','.')?>
		</td><td></td>
	</tr>
	<tr>
		<td colspan="6"><div align="right">Discount</div></td>
		<td><div class=" col-xs-6" align='right'><?php echo $this -> Form -> input('potongan', array('onFocus'=>'startCalc();','onBlur'=>'stopCalc();','id'=>'potongan','class' => 'form-control money-mask', 'label' => false)); ?>
		</td><td></td>
	</tr>
	<tr>
		<td colspan="6"><div align="right">Total setelah discount</div></td>
		<td><div class=" col-xs-6" align='right'><?php echo $this -> Form -> input('total', array('id'=>'total','class' => 'form-control money-mask', 'label' => false)); ?>
		</td><td></td>
	</tr>	
	<tr>
		<td colspan="6"><div align="right">Biaya Kirim</div></td>
		<td><div class=" col-xs-6" align='right'><?php echo $this -> Form -> input('kirim', array('id'=>'kirim','class' => 'form-control money-mask', 'label' => false)); ?>
		</td><td></td>
	</tr>
	<tr>
		<td colspan="6"><div align="right">PPN</div></td>
		<td><div class=" col-xs-6" align='right'><?php echo $this -> Form -> input('ppn', array('id'=>'ppn','class' => 'form-control money-mask', 'label' => false,'value'=>0)); ?>
		</td><td></td>
	</tr>
</tfoot>
</table>
<script type="text/javascript">
function configurator(clicked) {
// alert(id)
	var id = clicked.id;
 	$.ajax({
	type: "POST",
	url: "<?php echo $this -> webroot; ?>Pembelians/del_produk/",
	data: { idp : id },
	success: function(html) {
	jq("#isi_cart").html(html);
	}
	});																		 
}
	
</script>
<script>
    function startCalc() {
        interval = setInterval("calc()", 1);
    }

    function numberWithCommas(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        return parts.join(".");
    }

    function calc() {
        var a = document.getElementById('potongan').value;
        d = a.replace(/,/g, '');
        // b = document.getElementById('prov').value;
        // e = b.replace(/,/g, '');
        // c = document.getElementById('apbn').value;
        // f = c.replace(/,/g, '');
        var k = <?php echo $total;?>-d;
        document.getElementById('total').value = numberWithCommas(k);
    }

    function stopCalc() {
        clearInterval(interval);
    }
</script>