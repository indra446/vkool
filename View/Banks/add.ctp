<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Tambah Bank</h3>
    </div>
</div>
<br>
<div class="banks form">
    <?php echo $this->Form->create('Bank', array('class' => 'form-horizontal j-forms')); ?>
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
                <input type="hidden" name="data[Bank][aktif]"  value="0" />
                <input type="checkbox" name="data[Bank][aktif]" value="1">
                <i></i></label>		</div>		
    </div>
    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>

