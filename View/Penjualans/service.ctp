<?php
$this -> layout = false;
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID Produk</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Subtotal</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
<?php
$x=0;
if(!empty($_SESSION["cart_service"])) {
foreach ($_SESSION["cart_service"] as $item){
	echo  "<tr><td>".$item['id']."</td><td>".$item['nama']."</td>
	<td>".$item['jml']."</td><td>".$item['harga']."</td><td id='st'>".$item['subtotal']."</td>
	<td><button type='button' class='btn btn-xs btn-danger' id='".$x."' onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td></tr>"; 
$x++;}
}
?>
	</tbody>
</table>
<script type="text/javascript">
function configurator(clicked) {
// alert(id)
	var id = clicked.id;
 	$.ajax({
	type: "POST",
	url: "<?php echo $this -> webroot; ?>Penjualans/del_produkservice/",
	data: { idp : id },
	success: function(html) {
	jq("#service_view").html(html);
	}
	});																		 
}
</script>