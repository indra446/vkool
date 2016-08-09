<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Tambah Karyawan</h3>
    </div>
</div>
<br>
<div class="karyawans form">
    <?php echo $this->Form->create('Karyawan', array('id'=>'j-forms-validation','class' => 'form-horizontal j-forms')); ?>
    <div class="form-group">
        <label class="col-md-2 control-label">No KTP</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('no_ktp', array('type'=>'number','class' => 'form-control', 'label' => false,'required'=>true)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Nama</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('nama', array('class' => 'form-control', 'label' => false,'required'=>true)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Alamat</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('alamat', array('class' => 'form-control', 'label' => false,'required'=>true)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Keterangan</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('ket', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Tanggal Join</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('date_join', array('class' => 'form-contro', 'label' => false,'required'=>true)); ?>
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

