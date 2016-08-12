<?php
$this->layout = false;
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Produk</th>
            <th>Dimensi</th>
            <th>Luas</th>
            <th>Hapus</th>
        </tr>
    </thead><tbody>
        <?php $x = 0;
        if (!empty($_SESSION["cartbb"])) {
            foreach ($_SESSION["cartbb"] as $k => $item) {           ?>
                <tr>
                    <td></td>

                    <td><?php echo $item['nama'] ?></td>
                    <td><?php echo $dm=$item['dimensi'] ?></td>
                    <td>
                       <?php echo $dm1=explode(",",$dm)[0];  $dm2=explode(",",$dm)[1]; ?>
                        <input name="data[Penjualan][ket][]" class="form-control" value="<?php echo $item['id']; ?>" type="hidden" >
                        <input name="data[Penjualan][tipe][]" class="form-control" value="1" type="hidden" >
                    </td>
                    <!--<td><button type='button' class='btn btn-xs btn-danger' id="<?php // echo $item['id'];?>" onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td>-->
                </tr> 
                <tr>
                    <td>Masukkan Sisa</td>

                    <td><?php echo $item['nama'] ?></td>
                    <td><input name="data[Penjualan][pjg][]" class="form-control" required="required" placeholder="panjang" type="number" ></td>
                    <td>
                        <input name="data[Penjualan][lbr][]" class="form-control" required="required" placeholder="lebar" type="number" >
                        <input name="data[Penjualan][ket][]" class="form-control" value="<?php echo $item['id']; ?>" type="hidden" >
                        <input name="data[Penjualan][tipe][]" class="form-control" value="2" type="hidden" >
                    </td>
                    <td><button type='button' class='btn btn-xs btn-danger' id="<?php echo $item['id'];?>" onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td>
                </tr> 
        <?php $x++;
        } }?>
    </table>
    <br>
    <script type="text/javascript">
        function configurator(clicked) {
//     alert(id);
            var id = clicked.id;
            $.ajax({
                type: "POST",
                url: "<?php echo $this->webroot; ?>bahanbakuses/del_depan/",
            data: {idp: id},
            success: function (html) {
                jq("#tampilsemua").html(html);
            }
        });
    }
</script>