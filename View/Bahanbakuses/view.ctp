<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script>
<script>
  function sum() {
            var txttotal = document.getElementById('total').value;
            var txtdiscount = document.getElementById('discount').value;
            var txthiddendiscount = document.getElementById('hiddendiscount').value;
            var result = parseInt(txttotal) - parseInt(txtdiscount)-parseInt(txthiddendiscount);
            if (!isNaN(result)) {
                document.getElementById('totalall').value = result;
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
    <table class="table data-tbl">
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
            <?php foreach ($bakus as $baku): ?>
                <tr>
                    <td><?php echo h($baku['categories']['kategori']); ?>&nbsp;</td>
                    <td><?php echo h($baku['products']['nama_produk']); ?>&nbsp;</td>
                    <td><?php echo h($baku['detail_penjualans']['qty']); ?>&nbsp;</td>
                    <td><?php echo h($baku['detail_penjualans']['harga']); ?>&nbsp;</td>
                    <td><?php echo h($baku['0']['subtotal']); ?>&nbsp;</td>

                    <td class="actions">
                        <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . "", array('action' => 'edit', $baku['detail_penjualans']['id']), array('title' => 'edit', 'escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 
                        <?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $baku['detail_penjualans']['id']), array('title' => 'hapus', 'escape' => false, 'class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $baku['detail_penjualans']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
    <div class="form-group">
        <label class="col-md-8 control-label">Total</label>
        <div class=" col-md-4">
            <?php // echo $this->Form->input('total', array('class' => 'form-control', 'label' => false,'value'=>$totals)); ?>
            <input type="text" name='total' id='total' value="<?php echo $totals[0][0]['total'];?>" >
            <!--<div id="PenjualanTotal"></div>-->
        </div>
<!--        <span class="input-group-btn">
            <button type="button" class="btn btn-success" id="hit">Hitung</button>
        </span>-->
    </div>
    <div class="form-group">
        <label class="col-md-8 control-label">Discount</label>
        <div class=" col-md-4">
            <input type="text" class="form-control" id="discount" name="discount" value="<?php echo $disc[0]['detail_penjualans']['disc'];?>" onkeyup="sum();">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-8 control-label">Hidden Discount</label>
        <div class=" col-md-4">
            <input type="text" class="form-control" id="hiddendiscount" name="hiddendiscount" value="<?php echo $disc[0]['detail_penjualans']['hidden_disc'];?>" onkeyup="sum();">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-8 control-label">Total All</label>
        <div class=" col-md-4">
            <input type="text" class="form-control" id="totalall" name="totalall">
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
        message: "<embed width='100%' height='450' src='<?php echo $this->webroot; ?>bahanbakuses/bayar/"+id+"'>",
        buttons: {
          cancel: {
            label: "Close",
            className: "btn-danger"
          }
        }    });
}	
</script>