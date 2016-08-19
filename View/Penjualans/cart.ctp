<?php
$this -> layout = false;
$url=explode("/",$_SERVER['REQUEST_URI']); 
// echo $url[4];
// debug($_SESSION["cart_depan"]);
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Qty</th>
			<th>Harga</th>
			<th>Diskon</th>
            <th>Subtotal</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
<?php

$x=0;
if(!empty($_SESSION["cart_depan"])) {
foreach($_SESSION["cart_depan"] as $k => $item){
	if($item['norandom']==$url[4]){
	echo  "<tr><td>".$item['nama']."</td>
	<td><input type='hidden' name='data[DetailPenjualan][id_product][]' value=".$item['id'].">".$item['jml']."<input type='hidden' name='data[DetailPenjualan][qty][]' value=".$item['jml']."></td><td>".$item['harga']."<input type='hidden' name='data[DetailPenjualan][harga][]' value=".$item['harga']."></td><td>".$item['diskon']."<input type='hidden' name='data[DetailPenjualan][disc][]' value=".$item['diskon']."></td><td id='st'>".$item['subtotal']."</td>
	<td><button type='button' class='btn btn-xs btn-danger' id='".$k."' onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td></tr>"; 
	}
	$x++;}
}
?>
	</tbody>
</table>
<script type="text/javascript">
function configurator(clicked) {
	var norandom = $("#norandom").val();
	var id = clicked.id;
 	$.ajax({
	type: "POST",
	url: "<?php echo $this -> webroot; ?>Penjualans/del_produk/"+norandom,
	data: { idp : id,norandom:norandom },
	success: function(html) {
	jq("#isi_cart").html(html);
	jq("#PenjualanTotal").load('<?php echo $this->webroot; ?>Penjualans/jumlahtot/'+norandom);
	}
	});																		 
}
</script>