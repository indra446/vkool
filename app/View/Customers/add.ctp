<div class="karyawans form">
    <?php echo $this->Form->create('Customer', array('class' => 'form-horizontal j-forms')); ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Nama</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('nama', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Alamat</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('alamat', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Telp</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('telp', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Hp</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('hp', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>

