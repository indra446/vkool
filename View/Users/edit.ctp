<div class="box box-danger">

<?php echo $this -> Form -> create('User'); ?>
<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Nama User</label>
				<?php echo $this -> Form -> input('id');
				echo $this -> Form -> input('nama_admin', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Nama Group'));
				?>
			
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<?php echo $this -> Form -> input('username', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Nama Group')); ?>
			
			</div>
						<div class="form-group">
				<label for="exampleInputEmail1">Password</label>
				<?php echo $this -> Form -> input('password', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Nama Group')); ?>
			
			</div>


		</div><!-- /.box-body -->

		<div class="box-footer">
						<?php echo $this -> Form -> button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
		</div>
		<?php echo $this -> Form -> end(); ?>
		</div>

                                                    <?php echo $this -> Form -> postLink(__('<li class="fa fa-trash-o"></li>  Delete'), array('action' => 'delete', $this -> Form -> value('User.id')), array('escape'=>false,'class'=>'btn btn-danger'), __('Are you sure you want to delete # %s?', $this -> Form -> value('User.id'))); ?>
                                                 	<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-user')) . "&nbsp;<span>Lihat User</span>", array( 'action' => 'index'), array('escape' => false,'class'=>'btn btn-success')); ?> 
