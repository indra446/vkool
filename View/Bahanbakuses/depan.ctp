<?php
$this->layout = false;
// debug($idses/ip);
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
    <?php echo $this->Form->create('Vendor', array('id' => 'j-forms-validation', 'class' => 'form-horizontal j-forms')); ?>

        <?php $x = 0; //debug($_SESSION["cartbb"]);
        if (!empty($_SESSION["cartbb"])) {
           $ses=1; foreach ($_SESSION["cartbb"] as $k => $item) {            
//                print_r($item);         ?>
                <tr>
                    <td></td>

                    <td><?php echo $item['nama_produk'] ?></td>
                    <td><?php $dimensi=explode(",",$item['dimensi']); echo $dimensi[0]. "x" .$dimensi[1] ?></td>
                    <td>
                       <?php echo $dimensi[0]*$dimensi[1]."mm2"; ?>
                        <input name="data[Penjualan][ket][]" class="form-control" value="<?php echo $item['id']; ?>" type="hidden" >
                        <input name="data[Penjualan][pjg][]" class="form-control" value="<?php echo $dimensi[0]; ?>" placeholder="panjang" type="hidden" >
                        <input name="data[Penjualan][lbr][]" class="form-control" value="<?php echo $dimensi[1]; ?>" placeholder="lebar" type="hidden" >
                        <input name="data[Penjualan][tipe][]" class="form-control" value="1" type="hidden" >
                        <input name="data[Penjualan][idp][]" class="form-control" value="<?php echo $item['idp']; ?>" type="hidden" >
                        <input name="data[Penjualan][jenis][]" class="form-control" value="<?php echo $item['jenis']; ?>" type="hidden" >
                    </td>
                    <td><button type='button' class='btn btn-xs btn-danger' id="<?php  echo $k?>" onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td>
                    <!--<td><button type='button' class='btn btn-xs btn-danger' id="<?php // echo $item['id'];?>" onClick='configurator(this)'><i class='fa fa-trash-o'></i></button></td>-->
                </tr>
                <tr><td colspan="6"><div class="form-content col-md-8">
            <!-- start cloned right side buttons element -->
            <div class="clone-rightside-btn-1">
                <div class="j-row toclone-widget-right toclone">
                    <div class="span6 unit">
                        <div class="input">
                            <?php echo $this->Form->input('telp', array('name' => 'data[Vendor][telp][]', 'placeholder' => 'telepon', 'class' => 'form-control', 'label' => false, 'required' => true)); ?>
                        </div>
                    </div>
                    <div class="span6 unit">
                        <div class="input">
                            <?php echo $this->Form->input('pic', array('name' => 'data[Vendor][pic][]', 'placeholder' => 'pic', 'class' => 'form-control', 'label' => false, 'required' => true)); ?>
                        </div>
                    </div>
                    <button type="button" class="primary-btn clone-btn-right clone">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button type="button" class="secondary-btn clone-btn-right delete">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- end cloned right side buttons element -->		</div></td></tr> 
                <tr>
                    <td>Masukkan Sisa</td>

                    <td><?php // echo $item['nama'] ?></td>
                    <td><input name="data[Penjualan][pjgsisa][]" value="<?php if(!empty($idsesip[$k])){echo $idsesip[$k];}?>" class="form-control" placeholder="panjang" type="number" ></td>
                    <td>
                    	<input  type="hidden" value="<?php echo $k;?>" name="idsession" />
                        <input name="data[Penjualan][lbrsisa][]"  value="<?php if(!empty($idsesil[$k])){echo $idsesil[$k];}?>"  class="form-control" placeholder="lebar" type="number" >
                        <input name="data[Penjualan][ketsisa][]" class="form-control" value="<?php echo $item['id']; ?>" type="hidden" >
                        <input name="data[Penjualan][tipesisa][]" class="form-control" value="2" type="hidden" >
                        <input name="data[Penjualan][jenissisa][]" class="form-control" value="s" type="hidden" >
                        <input name="data[Penjualan][idpsisa][]" class="form-control" value="<?php echo $item['idp']; ?>" type="hidden" >

                    </td>
                    <td></td>
                </tr> 
        <?php $x++;
        $ses++;} }?>
    </table>
        <?php echo $this->Form->end(); 
        		echo $this -> Html -> script(array('lib/jquery', 'lib/jquery-migrate', 'lib/bootstrap', 'lib/jquery.ui', 'lib/jRespond', 'lib/nav.accordion', 'lib/hover.intent', 'lib/hammerjs', 'lib/jquery.hammer', 'lib/smoothscroll', 'lib/jquery.fitvids', 'lib/scrollup', 'lib/smoothscroll', 'lib/jquery.slimscroll', 'lib/jquery.syntaxhighlighter', 'lib/velocity', 'lib/smart-resize','lib/bootbox', 'lib/jquery.maskedinput','lib/jquery.validate', 'lib/jquery.form','lib/j-forms-validations','lib/additional-methods', 'lib/jquery-cloneya', 'apps'));
		
        ?>

    <br>
    <script type="text/javascript">
        function configurator(clicked) {
        var datap = $('input[name="data[Penjualan][pjgsisa][]"]').serialize();
        var datal = $('input[name="data[Penjualan][lbrsisa][]"]').serialize();
            var id = clicked.id;
            $.ajax({
                type: "POST",
                url: "<?php echo $this->webroot; ?>bahanbakuses/del_depan/",
            data: {idp: id,datal:datal,datap:datap },
            success: function (html) {
                jq("#tampilsemua").html(html);
            }
        });
    }
</script>