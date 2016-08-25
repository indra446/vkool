<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Edit Bahan Baku</h3>
    </div>
</div>
<br>
<div class="categories form">
    <?php echo $this->Form->create('DetailPenjualan', array('class' => 'form-horizontal j-forms')); ?>
    <?php echo $this->Form->input('id'); ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Nama</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('product_id', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Qty</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('qty', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Harga</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('harga', array('class' => 'form-control', 'label' => false,'type'=>'number')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Diskon</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('disc', array('class' => 'form-control', 'label' => false,'type'=>'number')); ?>
        </div>
    </div>
     <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
