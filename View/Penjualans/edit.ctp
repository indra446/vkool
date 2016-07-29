<div class="penjualans form">
    <?php echo $this->Form->create('Penjualan', array('class' => 'form-horizontal j-forms')); ?>
        <legend><?php echo __('Edit Penjualan'); ?></legend>
        <?php echo $this->Form->input('id');?>
    <div class="form-group">
        <label class="col-md-2 control-label">Customer</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('customer_id', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Merk</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('merk_id', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Tahun</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('thn', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">No Polis</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('nopol', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">No Mesin</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('nomesin', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">No Rangka</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('norangka', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">User</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('user_id', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>

