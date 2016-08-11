<?php
$this->layout = false;
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Produk</th>
            <th>Panjang</th>
            <th>Lebar</th>
            <th>Hapus</th>
        </tr>
    </thead><tbody>
        <?php $x = 0;
        if (!empty($_SESSION["cartbb"])) {
            foreach ($_SESSION["cartbb"] as $item) {?>
                <tr>
                    <td>Masukkan Sisa</td>

                    <td><?php echo $item['nama'] ?></td>
                    <td><input name="data[Penjualan][pjg][]" class="form-control" required="required" placeholder="panjang" type="number" ></td>
                    <td>
                        <input name="data[Penjualan][lbr][]" class="form-control" required="required" placeholder="lebar" type="number" >
                        <input name="data[Penjualan][ket][]" class="form-control" value="<?php echo $item['id']; ?>" type="hidden" >
                    </td>
                    <td><button type='button' class='btn btn-xs btn-danger' id="<?php echo $item['id'];?>" onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td>
                </tr> 
        <?php $x++;
        } }?>
    </table>
    <br>
    <script type="text/javascript">
        function configurator(clicked) {
     alert(id);
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