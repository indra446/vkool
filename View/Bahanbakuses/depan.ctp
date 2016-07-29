<?php
$this -> layout = false;
?>

	
<?php
$x=0;
if(!empty($data)) {?>
    <table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Product ID</th>
			<th>Panjang</th>
			<th>Lebar</th>
			<th>Hapus</th>
		</tr>
	</thead><tbody>
    <?php 
foreach ($data as $item){
//    print_r($item);
    if(!empty($item['bahanbakus']['dm1']))
	echo  "<tr><td>".$item['bahanbakus']['id']."</td><td>".$item['bahanbakus']['id']."</td>
	<td>".$item['bahanbakus']['dm1']."</td><td>".$item['bahanbakus']['dm2']." mm2</td>
	<td><button type='button' class='btn btn-xs btn-danger' id='".$x."' onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td></tr>"; 
$x++;} }?></table> 
<?php 
if(!empty($sisa)) {?>
    <table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Hapus</th>
		</tr>
	</thead><tbody>
<?php foreach ($sisa as $item){
//    print_r($item);
	echo  "<tr><td>".$item['products']['id']."</td>
	<td>".$item['products']['nama_produk']."</td><td>".$item['pembelians']['jml']." </td>
	<td><button type='button' class='btn btn-xs btn-danger' id='".$x."' onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td></tr>"; 
$x++;}
}
?>
        </tbody></table>

<?php if(!empty($data)) {    ?>
<table class="table">
    <tr>
        <td>Masukkan Sisa</td>
        <td>:</td>
        <td><input name="data[Penjualan][pjg][]" class="form-control" required="required" placeholder="panjang" type="number" ></td>
        <td>
            <input name="data[Penjualan][lbr][]" class="form-control" required="required" placeholder="lebar" type="number" >
            <input name="data[Penjualan][ket][]" class="form-control" value="<?php echo $data['0']['bahanbakus']['id'];?>" type="hidden" >
        </td>

    </tr> 
</table>
<?php }?>
<?php if(!empty($sisa)) {    ?>
<table class="table">
    <tr>
        <td>Masukkan Sisa</td>
        <td>:</td>
        <td>
            <input name="data[Penjualan][sisa][]" class="form-control" required="required" placeholder="Sisa" type="number" >
            <input name="data[Penjualan][ket][]" class="form-control" value="<?php echo $sisa['0']['products']['id'];?>" type="hidden" >
        </td>
    </tr> 
</table>
<?php }?>

<br>
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