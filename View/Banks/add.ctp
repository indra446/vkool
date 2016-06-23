<div class="karyawans form">
    <?php echo $this->Form->create('Karyawan', array('class' => 'form-horizontal j-forms')); ?>
    <div class="form-group">
        <label class="col-md-2 control-label">No KTP</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('no_ktp', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
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
<!--        <div class="form-group">
            <label class="col-md-2 control-label">Unit </label>
            <div class=" col-md-8">
    <?php // echo $this->Form->input('unit_id', array('class' => 'form-control', 'label' => false)); ?>
            </div>
        </div>-->
<!--    <div class="form-group">
        <label class="col-md-2 control-label">Unit</label>
        <div class="form-content col-md-8">
             start cloned right side buttons element 
            <div class="clone-rightside-btn-1">
                <div class="j-row toclone-widget-right toclone">
                    <div class="col-md-8 unit">
                        <div class="input">
                            <?php echo $this->Form->input('unit_id', array('name' => 'data[Karyawan][unit_id][]', 'placeholder' => 'telepon', 'class' => 'form-control', 'label' => false)); ?>
                        </div>
                    </div>
                    <button type="button" class="primary-btn clone-btn-right clone">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button type="button" class="secondary-btn clone-btn-right delete">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
             end cloned right side buttons element 		
        </div>
    </div>-->
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

