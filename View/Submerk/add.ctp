<div class="merks form">
    <?php echo $this->Form->create('Merk', array('class' => 'form-horizontal j-forms')); ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Left</label>
        <div class=" col-md-8">
            <?php // echo $this->Form->input('parent_id', array('class' => 'form-control', 'label' => false)); ?>
            <?php echo $this->Form->input('lft', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Right</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('rght', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Nama</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('nama', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Aktifkan</label>
        <div class=" col-md-8">
            <label class="col-md-8 checkbox-toggle">
                <input type="hidden" name="data[Karyawan][aktif]"  value="0" />
                <input type="checkbox" name="data[Karyawan][aktif]" value="1">
                <i></i></label>		</div>		
    </div>
    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
