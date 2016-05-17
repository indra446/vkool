
<div class="box box-success">
	<?php echo $this -> Form -> create('User',array('id'=>'j-forms-validation','class'=>'j-forms')); ?>
		
		<div class="control-group unit">
			<label for="input01" class="control-label">Nama Karyawan</label>
			<div class="controls">
	<?php echo $this -> Form -> input('karyawan_id', array('class'=>'form-control select2','options'=>$karyawan,'empty' => '>> Pilih Karyawan <<', 'label' => false,'class'=>'form-control')); ?>

				<?php //echo $this -> Form -> input('nama_admin', array('label' => FALSE,'class'=>'form-control')); ?>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="kelompok">Group</label>
			<div class="controls" >
				<?php echo $this -> Form -> input('group_id', array('empty' => '>> Pilih Group <<', 'label' => false,'class'=>'form-control')); ?>
			</div>
		</div>
		<div class="control-group unit">
			<label for="input03" class="control-label">Username</label>
			<div class="controls">
				<?php echo $this -> Form -> input('username', array('label' => FALSE,'class'=>'form-control')); ?>
			</div>
		</div>
		<div class="control-group unit">
			<label for="input04" class="control-label">Password</label>
			<div class="input">
				<?php echo $this -> Form -> input('password', array('id'=>'password','label' => FALSE,'class'=>'form-control','name'=>'password')); ?>
			</div>
		</div>
			<div class="form-group unit">
					<label class="control-label">Ulangi Password</label>

				<?php echo $this->Form->input('password',array('id'=>'confirm-password','label'=>false,'class' => 'form-control','name' => 'confirm_password'));
				?>
		</div>
		<br>
		<div class="box-footer">

			<?php echo $this -> Form -> button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'));
			?>
		</div>

	<?php echo $this -> Form -> end(); ?>
</div>

