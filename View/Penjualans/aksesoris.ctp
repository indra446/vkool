<?php
$this -> layout = false;
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Subtotal</th>
			<th>Diskon</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
<?php
$x=0;
if(!empty($_SESSION["cart_aksesoris"])) {
foreach ($_SESSION["cart_aksesoris"] as $k => $item){
	echo  "<tr><td>".$item['nama']."</td>
	<td>".$item['jml']."</td><td>".$item['harga']."</td><td id='st'>".$item['subtotal']."</td><td>".$item['diskon']."</td>
	<td><button type='button' class='btn btn-xs btn-danger' id='".$k."' onClick='configakses(this)'><i class='fa fa-trash-o'></i></button></td></tr>"; 
$x++;}
}
?>
	</tbody>
</table>
<script type="text/javascript">
function configakses(clicked) {
// alert(id)
	var id = clicked.id;
 	$.ajax({
	type: "POST",
	url: "<?php echo $this -> webroot; ?>Penjualans/del_produkaksesoris/",
	data: { idp : id },
	success: function(html) {
	jq("#aksesoris_view").html(html);
	}
	});																		 
}
</script>