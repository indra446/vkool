<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Edit Role</h3>
    </div>
</div>
<br>
<div class="box box-danger">
	<?php echo $this -> Form -> create('Group'); ?>
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Nama Group</label>
				<?php
				echo $this -> Form -> input('id');
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
