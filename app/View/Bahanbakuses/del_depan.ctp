<?php
$this -> layout = false;
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID Produk</th>
			<th>Nama</th>
			<th>Panjang</th>
			<th>Lebar</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
<?php
$x=0;
if(!empty($_SESSION["depan"])) {
foreach ($_SESSION["depan"] as $item){
	echo  "<tr><td>".$item['id']."</td><td>".$item['nama']."</td>
	<td>".$item['lbr']."</td><td>".$item['pjg']." mm2</td>
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
	url: "<?php echo $this -> webroot; ?>bahanbakuses/del_depan/",
	data: { idp : id },
	success: function(html) {
	jq("#tampil_depan").html(html);
	}
	});																		 
}
</script>