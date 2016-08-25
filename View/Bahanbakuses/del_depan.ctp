<?php $this -> layout = false;
// debug($idsesip);
//debug($_SESSION["cartbb"][0]);
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
           $ses=1; foreach ($_SESSION["cartbb"] as $k => $item) {
           	// debug($item['ids']);
			            
//                print_r($item);         ?>
                <tr>
                    <td></td>

                    <td><?php echo $item['nama_produk'] ?></td>
                    <td><?php $dimensi=explode(",",$item['dimensi']); echo $dimensi[0]. "x" .$dimensi[1] ?></td>
                    <td>
                       <?php echo $dimensi[0] * $dimensi[1] . "mm2"; ?>
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
                <?php $jmlex=sizeof($item['ids'])-1;?>
                <tr><td>Masukkan Sisa</td><td colspan="4"><input  type="hidden" id="idsession" value="<?php echo $k; ?>" name="idsession" />
                        <input name="data[Penjualan][ketsisa][]" class="form-control" value="<?php echo $item['id']; ?>" type="hidden" >
                        <input name="data[Penjualan][tipesisa][]" class="form-control" value="2" type="hidden" >
                        <input name="data[Penjualan][jenissisa][]" class="form-control" value="s" type="hidden" >
                        <input name="data[Penjualan][idpsisa][]" class="form-control" value="<?php echo $item['idp']; ?>" type="hidden" >
                        <div class="form-content col-md-8">
            <!-- start cloned right side buttons element -->
            <div class="clone-rightside-btn-1">
            <?php if($jmlex>0){ for($ii=0;$ii<=$jmlex;$ii++){
            			$idk=explode("%7C", $item['ids'][$ii]);
            		if($idk[1]==$k){
            	?>
                <div class="j-row toclone-widget-right toclone">
                    <div class="span5 unit">
                        <div class="input">
                       		 <input name="jmlsisa[]" class="form-control" value="<?php if (!empty($idsesip[$ii])) {echo $idsesip[$ii]."|".$k;}?>" type="hidden" >
							<input min="0" name="data[Penjualan][pjgsisa][]" value="<?php if (!empty($idsesip[$ii])) {echo $idsesip[$ii];}?>" class="form-control" placeholder="panjang (mm)" type="number" >                        </div>
                    </div>
                    <div class="span2 unit"><p align="center">x</p>
                    </div>
                    <div class="span5 unit">
                        <div class="input">
                        <input min="0" name="data[Penjualan][lbrsisa][]"  value="<?php	if (!empty($idsesil[$ii])) {echo $idsesil[$ii];}	?>"  class="form-control" placeholder="lebar (mm)" type="number" >
                        </div>
                    </div>
                    <button type="button" class="primary-btn clone-btn-right clone">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button type="button" class="secondary-btn clone-btn-right delete">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            <?php } 
				}
				}else{?>
				<div class="j-row toclone-widget-right toclone">
                    <div class="span5 unit">
                        <div class="input">
                       		 <input name="jmlsisa[]" class="form-control" value="<?php echo "|".$x;?>" type="hidden" >
							<input min="0" name="data[Penjualan][pjgsisa][]" value="<?php if (!empty($idsesip[$k])) {echo $idsesip[$k];}?>" class="form-control" placeholder="panjang (mm)" type="number" >                        </div>
                    </div>
                    <div class="span2 unit"><p align="center">x</p>
                    </div>
                    <div class="span5 unit">
                        <div class="input">
                        <input min="0" name="data[Penjualan][lbrsisa][]"  value="<?php	if (!empty($idsesil[$k])) {echo $idsesil[$k];}	?>"  class="form-control" placeholder="lebar (mm)" type="number" >
                        </div>
                    </div>
                    <button type="button" class="primary-btn clone-btn-right clone">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button type="button" class="secondary-btn clone-btn-right delete">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>            <?php } ?>	
            </div>
            <!-- end cloned right side buttons element -->		</div></td></tr>
                <!-- <tr>
                    <td>Masukkan Sisa</td>

                    <td><?php // echo $item['nama'] ?></td>
                    <td></td>
                    <td>

                    </td>
                    <td></td>
                </tr>  -->
        <?php $x++;
					$ses++;
					} }
				?>
    </table>
    <?php
		echo $this -> Html -> script(array( 'lib/jquery.form', 'lib/additional-methods', 'lib/jquery-cloneya', 'lib/j-forms'));
        ?>

    <br>
    <script type="text/javascript">
        function configurator(clicked) {
        var datap = $('input[name="data[Penjualan][pjgsisa][]"]').serialize();
        var datal = $('input[name="data[Penjualan][lbrsisa][]"]').serialize();
        var ids=$('input[name="jmlsisa[]"]').serialize();
            var id = clicked.id;
            $.ajax({
                type: "POST",
                url: "<?php echo $this -> webroot; ?>bahanbakuses/del_depan/",
            data: {ids:ids,idp: id,datal:datal,datap:datap },
            success: function (html) {
                jq("#tampilsemua").html(html);
            }
        });
    }
</script>