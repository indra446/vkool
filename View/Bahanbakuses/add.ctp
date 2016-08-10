<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Pilih Bahan Baku</h3>
    </div>
</div>
<br>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script>
<script type="text/javascript">
    $(function () {
        $("#BahanbakusesIdTeknisi").autocomplete({
            source: "<?php echo $this->webroot; ?>karyawans/ajax",
            minLength: 1,
        });
    });
</script>
<div class="bahanbakuses form">
    <?php echo $this->Form->create('Bahanbakuses', array('class' => 'form-horizontal j-forms')); ?>      
    <div class="form-group">
        <label class="col-md-2 control-label">Waktu</label>
        <label class="col-md-2 control-label">:</label>
        <div class=" col-md-2">
            <p style="margin-top: 7px;"> <?php echo Date('Y-m-d H:i:s'); ?></p>
        </div>
    </div>
    <?php foreach ($detailpenjualan as $detail): ?>
    <?php // print_r($detail);?>
    <div class="form-group">
            <label class="col-xs-2 control-label"><h3 style="margin: 0px 0px;"><?php echo $detail['categories']['kategori'];?></h3></label>
            <div class=" col-xs-8 unit">
                <div class="input text"><input name="data[Penjualan][id_product]" class="form-control ui-autocomplete-input" type="text" id="PenjualanIdProduct<?php echo $detail['detail_penjualans']['id_product'];?>" autocomplete="off" value="<?php echo $detail['0']['produkid'];?>"></div>  
            </div>
            <span class="input-group-btn">
              <?php $dimesi=$detail['products']['dimensi']; if(!empty($dimesi)){?>  <button type="button" class="btn btn-success" id="show<?php echo $detail['detail_penjualans']['id'];?>">Pilih</button><?php }?>
            </span>
        </div>
    <div id="tampil<?php echo $detail['categories']['kategori'];?><?php echo $detail['detail_penjualans']['id'];?>"></div>
    <?php endforeach; ?>
    <hr>
    <div class="form-group">
        <label class="col-md-2 control-label">Teknisi</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('id_teknisi', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>

<?php foreach ($detailpenjualan as $detail): ?>
<div id="modal<?php echo $id=$detail['detail_penjualans']['id'];?>"  style="display:none">
    <?php  $cate=$detail['detail_penjualans']['id_product'];?>
    <table class="table data-tbl">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Dimensi</th>
                <th>Luas/Jumlah</th>
                <th class="actions">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($sisa as $prod): 
				$idp=str_replace(",p","", $prod[0]['id']);
                if($prod['0']['sisa']>0 && $idp==$cate){    
//                    print_r($prod);
                ?>
                <tr>
                    <td><?php echo $prod['products']['nama_produk']; ?>&nbsp;</td>
                    <td><?php if ($prod['products']['dimensi'] != NULL) {
					 $dimensi = explode(",", $prod['products']['dimensi']);
						echo $dimensi[0] . " x " . $dimensi[1] . " mm";
                                                } ?>&nbsp;</td>
					<td><?php  echo $prod['0']['sisa'];  ?></td>
                    <td class="actions">
                        <input value="pilih" class="btn btn-info  btn-xs" type="button" onClick="configurator<?php echo $id?>(this)" id="<?php echo $prod[0]['id'] . "," . $prod['products']['nama_produk']; ?>"/>
                        
                    </td>

                </tr>
            <?php } endforeach;
            foreach ($bhnbaku as $baku):
              	// $idb=str_replace("p", "", $produ[0]['id']);
//                      print_r($cate);
                if($baku['bahanbakus']['product_id']==$cate && (!empty($baku['bahanbakus']['dm1']))){
                ?>
                <tr>
                    <td><?php echo $baku['products']['nama_produk']; ?>&nbsp;</td>
                    <td><?php if ($baku['bahanbakus']['dm1'] != NULL) {
						echo $baku['bahanbakus']['dm1'] . " x " . $baku['bahanbakus']['dm2'] . " mm";
						} ?>&nbsp;</td>
					<td><?php if ($baku['bahanbakus']['dm1'] != NULL) { echo h(number_format($baku['bahanbakus']['dm2'] * $baku['bahanbakus']['dm1'], 0, ',', '.'))." mm2";} ?></td>
                    <td class="actions">
                        <input value="pilih" class="btn btn-info  btn-xs" type="button" onClick="configurator<?php echo $id;?>(this)" id="<?php echo $baku[0]['id'] . "," . $baku['products']['nama_produk']; ?>"/>
                        
                    </td>

                </tr>
            <?php } 
            endforeach; ?>
        </tbody>
    </table>
</div>
<?php endforeach;?>
<?php
echo $this->Html->css(array('jquery.dataTables.min'));
echo $this->Html->script(array('lib/jquery.dataTables'));
?>
<script type="text/javascript">
    $(document).ready(function () {
<?php foreach ($detailpenjualan as $detail): ?> 
        $('#show<?php echo $detail['detail_penjualans']['id'];?>').on('click', function () {
            var container = $('#modal<?php echo $detail['detail_penjualans']['id'];?>').clone();
            container.find('table').attr('id', 'example<?php echo $detail['detail_penjualans']['id_product'];?>');
            container.find('table').attr('class', 'table data-tbl');

            var box = bootbox.dialog({
                show: false,
                message: container.html(),
                title: "Pilih Bahan Baku",
                buttons: {
                    cancel: {
                        label: "Close",
                        className: "btn-danger"
                    }
                }
            });

            box.on("shown.bs.modal", function () {
                $('#example').DataTable();
            });

            box.modal('show');
        });
        <?php    endforeach;?>

    });
    
    <?php foreach ($detailpenjualan as $detail): ?> 
         function configurator<?php echo $detail['detail_penjualans']['id'];?>(clicked) {
        var $$e = jQuery.noConflict();
        bootbox.hideAll()
        var id = clicked.id;
         $.ajax({
                    type: "POST",
                    url: "<?php echo $this->webroot; ?>Bahanbakuses/depan/",
                    data: {idp:id },
                    success: function (html) {
                        $('#PenjualanIdProduct').html("");
                        $('#PenjualanQty').html("");
                        $('#PenjualanHarga').html("");
                        jq("#tampil<?php echo $detail['categories']['kategori'];?><?php echo $detail['detail_penjualans']['id'];?>").html(html);
                    }
                });
    }
       <?php    endforeach;?>
   
    
</script>

