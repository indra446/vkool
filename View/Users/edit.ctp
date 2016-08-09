<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Edit User</h3>
    </div>
</div>
<br>
<div class="box box-danger">

	<?php echo $this -> Form -> create('User',array('id'=>'j-forms-validation','class'=>'j-forms')); ?>
<div class="box-body">
			<div class="form-group unit">
				<label for="exampleInputEmail1">Nama User</label>
				<?php echo $this -> Form -> input('id');
				echo $this -> Form -> input('nama_admin', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Nama Admin'));
				?>
			
			</div>
			<div class="form-group unit">
				<label for="exampleInputEmail1">Username</label>
				<?php echo $this -> Form -> input('username', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Nama Group')); ?>
			
			</div>
						<div class="form-group unit">
				<label for="exampleInputEmail1">Password</label>
				<?php echo $this -> Form -> input('password', array('id'=>'password','label' => FALSE,'class'=>'form-control','name'=>'password')); ?>
			
			</div>
		<div class="form-group unit">
					<label class="control-label">Ulangi Password</label>

				<?php echo $this->Form->input('password',array('id'=>'confirm-password','label'=>false,'class' => 'form-control','name' => 'confirm_password'));?>
		</div>
		<div class="form-group unit">
					<label class="control-label">Group</label>
			<?php echo $this -> Form -> input('group_id', array('empty' => '>> Pilih Group <<', 'label' => false, 'class' => 'form-control')); ?>
		</div>

		</div><!-- /.box-body -->

		<div class="box-footer">
						<?php echo $this -> Form -> button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
		</div>
		<?php echo $this -> Form -> end(); ?>
		</div>
