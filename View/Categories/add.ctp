<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Tambah Kategori</h3>
    </div>

</div>
<br>
<div class="categories form">
    <?php echo $this->Form->create('Category', array('id'=>'j-forms-validation','class' => 'form-horizontal j-forms')); ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Parent Kategori</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('parent_id', array('class' => 'form-control', 'label' => false, 'options' => $parentCategories, 'empty' => 'kosong')); ?>
        </div>
    </div>
    <div class="form-group unit">
        <label class="col-md-2 control-label">Nama Kategori</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('kategori', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Aktifkan</label>
        <div class=" col-md-8">
            <label class="col-md-8 checkbox-toggle">
                <input type="hidden" name="data[Category][aktif]"  value="0" />
                <input type="checkbox" name="data[Category][aktif]" value="1">
                <i></i></label>		</div>		
    </div>

    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>

