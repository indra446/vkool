<!--<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script>-->
<script>
    $(function () {
//            $("#BahanbakusesNama").autocomplete({
//                source: "<?php echo $this->webroot; ?>penjualans/autoprodukd",
//                minLength: 1,
//            });
        });
        
           var jq = jQuery.noConflict();
        jq("#BahanbakusesParentId").change(function () {
            jq('#loading').html('<img src="<?php echo $this->webroot; ?>img/loading.gif" />');
            var id = jq("#BahanbakusesParentId").val();
//         alert(id);
            jq.ajax({
                type: "POST",
                url: "<?php echo $this->webroot; ?>products/produk/" + id,
                // data: { id : jq("#ProductParentId").val()},
                success: function (html) {
                    jq("#BahanbakusesProductId").html(html);
                    jq("#loading").hide();
                }
            });
        });
        
     $("#hide").click(function(){
     $("#sembunyi").hide();
});
</script>
<div id="sembunyi" class="bahanbakuses form">
    <?php echo $this->Form->create('Bahanbakuses', array('class' => 'form-horizontal j-forms')); ?>    
    <div class="form-group">
        <label class="col-md-2 control-label">Kategori</label>
        <div class=" col-md-8">
                        <?php echo $this->Form->input('parent_id', array('class' => 'form-control', 'label' => false, 'options' => $parentCategories, 'empty' => 'kosong')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Nama</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('product_id', array('class' => 'form-control', 'label' => false,'required','placeholder'=>'Ketikkan Nama')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Qty</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('qty', array('class' => 'form-control', 'label' => false,'type'=>'number','required')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Harga</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('harga', array('class' => 'form-control', 'label' => false,'type'=>'number','required')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Diskon</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('disc', array('class' => 'form-control', 'label' => false,'type'=>'number','required')); ?>
        </div>
    </div>

    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
    <br>
    <button class="btn btn-warning btn-xs" id="hide">Hide</button>
</div>

