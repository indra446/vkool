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
if(!empty($_SESSION["cart_belakang"])) {
foreach ($_SESSION["cart_belakang"] as $k => $item){
	echo  "<tr><td>".$item['id']."</td><td>".$item['nama']."</td>
	<td>".$item['jml']."</td><td>".$item['harga']."</td><td>".$item['subtotal']."</td>
	<td><button type='button' class='btn btn-xs btn-danger' id='".$k."' onClick='configblk(this)'><i class='fa fa-trash-o'></i></button></td></tr>"; 
$x++;}
}
?>
	</tbody>
</table>
<script type="text/javascript">
function configblk(clicked) {
// alert(id)
	var id = clicked.id;
 	$.ajax({
	type: "POST",
	url: "<?php echo $this -> webroot; ?>Penjualans/del_produkbelakang/",
	data: { idp : id },
	success: function(html) {
	jq("#belakang_view").html(html);
        $("#PenjualanTotal").load('<?php echo $this->webroot; ?>Penjualans/jumlahtot');
	}
	});																		 
}
</script>