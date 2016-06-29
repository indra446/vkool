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
			<th>Harga</th>
			<th>Subtotal</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
<?php
$x=0;
if(!empty($_SESSION["cart_item"])) {
// debug($_SESSION["cart_item"]);die();
foreach ($_SESSION["cart_item"] as $item){
	if($item['dimensi']!=NULL){
		$dimensi=explode(",",$item['dimensi']);
		$d=$dimensi[0]." x ".$dimensi[1];
	}else{
		$d="";
	}	
	echo "<tr><td>".$item['id']."</td><td>".$item['nama']."</td>
	<td>".$item['jml']."</td><td>".$d."</td><td>".$item['harga']."</td><td>".$item['potitem']."</td><td>".number_format(str_replace(".", "", $item['harga'])*$item['jml']-(str_replace(".", "", $item['harga'])*$item['jml'])*$item['pot'],0,',','.')."</td>
	<td><button type='button' class='btn btn-xs btn-danger' id='".$x."' onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td></tr>"; 
$x++;}
}
?>
	</tbody>
<tfoot>
	<tr>
		<td colspan="6"><div align="right">Potongan</div></td>
		<td><div class=" col-xs-6"><?php echo $this -> Form -> input('potongan', array('id'=>'potongan','class' => 'form-control money-mask', 'label' => false)); ?>
		</td><td></td>
	</tr>
	<tr>
		<td colspan="6"><div align="right">Biaya Kirim</div></td>
		<td><div class=" col-xs-6"><?php echo $this -> Form -> input('kirim', array('id'=>'kirim','class' => 'form-control money-mask', 'label' => false)); ?>
		</td><td></td>
	</tr>
</tfoot>
</table>
<script type="text/javascript">
	function configurator(clicked) {

var id = clicked.id;
// alert(id)
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