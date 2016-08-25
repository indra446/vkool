<?php $this -> layout = false;
$url = explode("/", $_SERVER['REQUEST_URI']);
?>

<table class="table table-bordered">
	<thead>
		<tr>
			<th><font style="font-weight: bold!important;">Nama</font></th>
			<th><font style="font-weight: bold!important;">Dimensi</th>
			<th width="5%"><font style="font-weight: bold!important;">Hapus</th>
		</tr>
	</thead>
	<tbody>
		<?php // debug($_SESSION["cart_retur"]);die();
		if (!empty($_SESSION["cart_retur"])) {
			$x = 0;
			foreach ($_SESSION["cart_retur"] as $k => $item) {
				if ($item['id'] != NULL) {
					if ($item['norandom'] == $url[4]) {
						echo "<tr><td>" . $item['nama'] . "<input type='hidden' name='data[Retur][product_id][]' value='$item[id]'></td>
	<td>" . $item['dm1'] . " x ".$item['dm2']."<input type='hidden' name='data[Retur][idbaku][]' value='$item[idbaku]'></td>
	<td><button type='button' class='btn btn-xs btn-danger' id='" . $k . "' onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td></tr>";
					}
				}
				$x++;
			}
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
			url: "<?php echo $this -> webroot; ?>Returs/del_produk/"+norandom,
			data: { idp : id,norandom:norandom },
			success: function(html) {
			$("#isi_cart").html(html);
			}
		});
	}

</script>
