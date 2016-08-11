<div class="box box-success">
<?php echo $this -> Form -> create('Group'); ?>
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Nama Role</label>
				<?php
			
				echo $this -> Form -> input('name',array('class'=>'form-control','label'=>false,'placeholder'=>'Nama Group'));
				?>
			
			</div>

		</div><!-- /.box-body -->

		<div class="box-footer">
						<?php echo $this -> Form -> button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'));

			?>
		</div>
	<?php echo $this -> Form -> end(); ?>
</div>
