<?php
$this -> layout = false;
// debug($_SESSION["cart_retur"]);die();

?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID Produk</th>
			<th>Nama</th>
			<th>Jml Retur</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
<?php
// debug($_SESSION["cart_retur"]);die();
if(!empty($_SESSION["cart_retur"])) {
$x=0;
foreach($_SESSION["cart_retur"] as $k => $item){
	if($item['id']!=NULL){
		
	// if($item['dimensi']!=NULL){
		// $dimensi=explode(",",$item['dimensi']);
		// $d=$dimensi[0]." x ".$dimensi[1]." mm";
		// $luas=$dimensi[0]*$dimensi[1]." mm2";
	// }else{
		// $d="";
		// $luas="";
	// }	
	echo "<tr><td>".$item['id']."<input type='hidden' name='data[Retur][product_id][]' value='$item[id]'></td><td>".$item['nama']."</td>
	<td>".$item['jml']."<input type='hidden' name='data[Retur][idbaku][]' value='$item[idbaku]'></td>
	<td><button type='button' class='btn btn-xs btn-danger' id='".$k."' onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td></tr>"; 
	}
	$x++;
	}
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
	url: "<?php echo $this -> webroot; ?>Returs/del_produk/",
	data: { idp : id },
	success: function(html) {
	jq("#isi_cart").html(html);
	}
	});																		 
}
	
</script>
