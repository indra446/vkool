<div class="merks form">
    <?php echo $this->Form->create('Merk', array('class' => 'form-horizontal j-forms')); ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Merk</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('parent_id', array('class' => 'form-control', 'label' => false, 'options' => $parentMerks, 'empty' => '')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Nama Merk/Model</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('nama', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Aktifkan</label>
        <div class=" col-md-8">
            <label class="col-md-8 checkbox-toggle">
                <input type="hidden" name="data[Merk][aktif]"  value="0" />
                <input type="checkbox" name="data[Merk][aktif]" value="1">
                <i></i></label>		</div>		
    </div>
    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
