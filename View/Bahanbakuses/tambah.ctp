<!--<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script>-->
<script>
    $(function () {
            $("#BahanbakusesNama").autocomplete({
                source: "<?php echo $this->webroot; ?>penjualans/autoproduk",
                minLength: 1,
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
            <?php echo $this->Form->input('nama', array('class' => 'form-control', 'label' => false,'required','placeholder'=>'Ketikkan Nama')); ?>
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

    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
    <br>
    <button class="btn btn-warning btn-xs" id="hide">Hide</button>
</div>

