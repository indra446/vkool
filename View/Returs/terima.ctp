<?php $this -> layout = false;
$url = explode("/", $_SERVER['REQUEST_URI']);
?>
<table class="table table-bordered"  width="60%">
	<thead>
		<tr>
			<th><font style="font-weight: bold!important;">Nama</th>
			<th><font style="font-weight: bold!important;">Dimensi</th>
			<th><font style="font-weight: bold!important;">Jml</th>
			<th width="5%"><font style="font-weight: bold!important;">Hapus</th>
		</tr>
	</thead>
	<tbody>
		<?php // debug($_SESSION["terima"]);die();
		if (!empty($_SESSION["terima"])) {
			$x = 0;
			foreach ($_SESSION["terima"] as $k => $item) {
				if ($item['id'] != NULL) {
					if ($item['norandom'] == $url[4]) {
						echo "<tr><td>" . $item['nama'] . "<input type='hidden' name='data[Retur][product_id][]' value='$item[id]'></td>
	<td>" . str_replace(",", "x", $item['dm']) . "</td><td>" . $item['jml'] . "</td>
	<td><button type='button' class='btn btn-xs btn-danger' id='" . $k . "' onClick='delter(this)'><i class='fa fa-trash-o'></i></button></td></tr>";
					}
				}
				$x++;
			}
		}
	?>
	</tbody>

</table>
<script type="text/javascript">
	function delter(clicked) {
		var norandom = $("#norandom").val();
		var id = clicked.id;
		$.ajax({
			type: "POST",
			url: "<?php echo $this -> webroot; ?>Returs/del_terima/"+norandom,
			data: { id : id,norandom:norandom },
			success: function(html) {
			$("#isi_terima").html(html);
			}
		});
	}

</script>
