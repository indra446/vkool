<div class="categories form">
    <?php echo $this->Form->create('Role', array('class' => 'form-horizontal j-forms')); ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Nama Role</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('role', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">System Name</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('sys_name', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
