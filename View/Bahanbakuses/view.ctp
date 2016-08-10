<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Pembayaran</h3>
    </div>
</div>
<br>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script>
<script>
  function sum() {
            var txttotal = document.getElementById('totaldepan').value;
            var txtdiscount = document.getElementById('discount').value;
            var txthiddendiscount = document.getElementById('hiddendiscount').value;
            var result = parseInt(txttotal) - parseInt(txtdiscount)-parseInt(txthiddendiscount);
            if (!isNaN(result)) {
                document.getElementById('totalall').value = result;
            }
        }
</script>
<script>
  function sumi() {
            var bayare = document.getElementById('bayar').value;
            var sisatag = document.getElementById('sisatagihan').value;
            var result = parseInt(sisatag)- parseInt(bayare);
            if (!isNaN(result)) {
                document.getElementById('kbayar').value = result;
            }
        }
</script>
<script>
$(document).ready(function(){
$("#tambah").click(function(){
$("#showtambah").load('<?php echo $this->webroot; ?>bahanbakuses/tambah/<?php echo $id;?>');
});
$("#reload").click(function(){
location.reload();
});
});
</script>
<table style="width: 28%;">
    <tr>
        <td>Nomer Order</td>
        <td>:</td>
        <td><?php echo $id;?></td>
    </tr>
    <tr>
        <td>Waktu</td>
        <td>:</td>
        <td><?php date_default_timezone_set('Asia/Jakarta'); echo Date('Y-m-d H:i:s'); ?></td>
    </tr>
    <tr>
        <td>Nama Kasir</td>
        <td>:</td>
        <td><?php echo $infousr['Auth']['User']['nama_admin'];?></td>
    </tr>
</table>
<br>
<div class="widget-header block-header clearfix">
    <button class="btn btn-success" id="tambah">Tambah Item</button> 
    <!--<button class="btn btn-success" id="reload">Reload</button>--> 
</div>
<div id="showtambah"></div>
<br>
<br>
 <?php // echo $this->Form->create('Bahanbakuses',array('class' => 'form-horizontal j-forms')); ?>   
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Nama</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Subtotal</th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bakus as $baku): 
//                print_r($baku);?>
                <tr>
                    <td><?php echo h($baku['categories']['kategori']); ?>&nbsp;</td>
                    <td><?php echo h($baku['products']['nama_produk']); ?>&nbsp;</td>
                    <td><?php echo h($baku['detail_penjualans']['qty']); ?>&nbsp;</td>
                    <td><?php echo h($baku['detail_penjualans']['harga']); ?>&nbsp;</td>
                    <td><?php echo h($baku['0']['subtotal']); ?>&nbsp;</td>

                    <td class="actions">
                        <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . "", array('controller'=>'detailpenjualans','action' => 'edit', $baku['detail_penjualans']['id'],$id,'ok'), array('title' => 'edit', 'escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 
                        <?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('controller'=>'detailpenjualans','action' => 'delete', $baku['detail_penjualans']['id'],$id,'ok'), array('title' => 'hapus', 'escape' => false, 'class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $baku['detail_penjualans']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
    <div class="form-group">
        <label class="col-md-8 control-label">Total</label>
        <div class=" col-md-4">
            <?php // echo $this->Form->input('total', array('class' => 'form-control', 'label' => false,'value'=>$totals)); ?>
            <input type="text" name='total' id='totaldepan' value="<?php echo $t0=$totals[0][0]['total'];?>" >
            <!--<div id="PenjualanTotal"></div>-->
        </div>
<!--        <span class="input-group-btn">
            <button type="button" class="btn btn-success" id="hit">Hitung</button>
        </span>-->
    </div>
    <div class="form-group">
        <label class="col-md-8 control-label">Discount</label>
        <div class=" col-md-4">
            <input type="text" class="form-control" id="discount" name="discount" value="<?php echo $d1=$disc[0]['penjualans']['disc'];?>" onkeyup="sum();">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-8 control-label">Hidden Discount</label>
        <div class=" col-md-4">
            <input type="text" class="form-control" id="hiddendiscount" name="hiddendiscount" value="<?php echo $d2=$disc[0]['penjualans']['hidden_disc'];?>" onkeyup="sum();">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-8 control-label">Total All</label>
        <div class=" col-md-4">
            <input type="text" class="form-control" id="totalall" name="totalall" value="<?php echo $t0-$d1-$d2;?>">
        </div>
    </div>
    <br>
    <br>
    <div class="form-footer" align="right">
        <?php // echo $this->Form->button('Bayar', array('type' => 'submit', 'class' => 'btn btn-primary','style'=>'margin: 10px 16px 0px 0px;')); ?>
        <!--<button class="btn btn-primary" class="bayar" style="margin: 10px 16px 0px 0px;">Bayar</button>-->
         <a onClick="configurator(this)" href="#" title="lihat"  class="btn btn-info btn-xs" id="<?php echo $id; ?>"><i class="fa fa-folder-open"></i>Bayar</a>
    </div>
    
    <?php // echo $this->Form->end(); ?>
</div>
<br>
<br>
<script type="text/javascript">
function configurator(clicked) {
var $$e=jQuery.noConflict();
                var id = clicked.id;
         bootbox.dialog({
        title: "Input Pembayaran",
        message: '<table class="table">' +
            '<tr><td>Total</td><td>:</td><td><?php echo $totalnya=$totals[0][0]['total'];?></td></tr>' +
            '<tr><td>Discount</td><td>:</td><td><?php echo $dis1=$disc[0]['penjualans']['disc'];?></td></tr>'+
            ' <tr><td>Hidden Discount</td><td>:</td><td><?php echo $dis2=$disc[0]['penjualans']['hidden_disc'];?></td></tr><tr><td>Total Tagihan</td><td>:</td><td><?php echo $t=$totalnya-$dis1-$dis2;?></td></tr><tr><td>Pembayaran</td><td>:</td><td></td></tr><tr><td>Sisa Tagihan</td><td>:</td><td ><input type="text" class="form-control" id="sisatagihan" name="discount" readonly value="<?php echo $totalnya-$dis1-$dis2;?>" onkeyup="sumi();"></td></tr><tr></table>'+
            '<form class="form-horizontal"> ' +
            '<div class="form-group"> ' +
            '<label class="col-md-4 control-label" for="name">Metode Pembayaran</label> ' +
            '<div class="col-md-8"> ' +
             '<select name="data[Bayar][tipe_bayar]" id="tipebayar" class="form-control">'+
             '<option value="Tunai">Tunai</option><option value="Debit">Debit</option><option value="Kartu Kredit">Kartu Kredit</option></select>'+
            '</div></div> ' +
            '<div class="form-group"> ' +
            '<label class="col-md-4 control-label" for="name">Keterangan</label> ' +
            '<div class="col-md-8"> ' +
            '<input id="ket" name="ket" type="textarea" placeholder="Keterangan" class="form-control"> ' +
            '</div></div> ' +
            '<div class="form-group"> ' +
            '<label class="col-md-4 control-label" for="name">Bayar</label> ' +
            '<div class="col-md-8"> ' +
            '<input id="bayar" name="bayar" type="text" placeholder="Bayar"  class="form-control" onkeyup="sumi();"> ' +
            '<input id="total" name="bayar" type="hidden" value="<?php echo $t;?>" placeholder="Bayar" class="form-control"> ' +
            '<input id="idpenju" name="bayar" type="hidden" value="<?php echo $id;?>" placeholder="Bayar" class="form-control"> ' +
            '</div></div> ' +
            '<div class="form-group"> ' +
            '<label class="col-md-4 control-label" for="name">Kurang Bayar</label> ' +
            '<div class="col-md-8"> ' +
            '<input id="kbayar" name="kbayar" type="text" placeholder="Kurang Bayar"  class="form-control"> ' +
            '</div></div> ' +
             '<div class="form-group"> ' +
            '<label class="col-md-4 control-label" for="name">Lunas</label> ' +
            '<div class="col-md-8"> ' +
            '<select  id="lunas" class="form-control">'+
            '<option value="0"></option><option value="1">Lunas</option></select>'+
            '</div></div> ' +
            '</form>',
//            '<a href="<?php // echo $this->webroot;?>" target="_blank">Preview Nota</a>',
        buttons: {
          cancel: {
            label: "Close",
            className: "btn-danger"
          },
                 success: {
                label: "Save",
                className: "btn-success",
                callback: function () {
//                    var tipe = $('#name').val();
//                    var tipebayar = $('#tipebayar').val();
                  $.ajax({
                 type: "POST",
                url: "<?php echo $this->webroot; ?>bahanbakuses/bayar/",
                data: { tipe : $("#tipebayar").val(),ket :$("#ket").val(),bayar :$("#bayar").val(),kbayar :$("#kbayar").val(),idpenju:$("#idpenju").val(),total:$("#total").val(),lunas:$("#lunas").val() },
                success: function(html) {
                alert('Pembayaran Sukses.');	
                $('#tipebayar').html("");
                $('#ket').html("");
                $('#bayar').html("");
                $('#kbayar').html("");
                jq("#service_view").html(html);
                }
                  });
                }
          }      
        }    });
}	
</script>