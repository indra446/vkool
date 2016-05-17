<div class="vendors form">
<?php echo $this->Form->create('Vendor', array('class' => 'form-horizontal j-forms')); ?>
	<div class="form-group">
		<label class="col-md-2 control-label">Nama Vendor</label>
		<div class=" col-md-8">
			<?php echo $this -> Form -> input('nama_vendor', array('class' => 'form-control', 'label' => false)); ?>
		</div>
	</div>	
	<div class="form-group">
		<label class="col-md-2 control-label">Alamat Vendor</label>
		<div class=" col-md-8">
			<?php echo $this -> Form -> textarea('alamat', array('class' => 'form-control', 'label' => false)); ?>
		</div>
	</div>	
	<div class="form-group">
		<label class="col-md-2 control-label">No Telp</label>
		<div class="form-content col-md-8">
<!-- start cloned right side buttons element -->
                                        <div class="clone-rightside-btn-1">
                                            <div class="j-row toclone-widget-right toclone">
                                                <div class="span6 unit">
                                                    <div class="input">
													<?php echo $this -> Form -> input('telp', array('name'=>'data[Vendor][telp][]','placeholder'=>'telepon','class' => 'form-control', 'label' => false)); ?>
                                                    </div>
                                                </div>
                                                <div class="span6 unit">
                                                    <div class="input">
													<?php echo $this -> Form -> input('pic', array('name'=>'data[Vendor][pic][]','placeholder'=>'pic','class' => 'form-control', 'label' => false)); ?>
                                                    </div>
                                                </div>
                                                <button type="button" class="primary-btn clone-btn-right clone">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                <button type="button" class="secondary-btn clone-btn-right delete">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- end cloned right side buttons element -->		</div>
	</div>	
	<div class="form-group">
		<label class="col-md-2 control-label">Aktifkan</label>
		<div class=" col-md-8">
		<label class="col-md-8 checkbox-toggle">
			<input type="hidden" name="data[Vendor][aktif]"  value="0" />
			<input type="checkbox" name="data[Vendor][aktif]" value="1">
					<i></i></label>		</div>		
	</div>                             
	<div class="form-footer">
		<?php echo $this -> Form -> button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
	</div>
	<?php echo $this -> Form -> end(); ?>
</div>
