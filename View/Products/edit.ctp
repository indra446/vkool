<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Edit Produk</h3>
    </div>
</div>
<br>
<div class="products form">
	<?php echo $this -> Form -> create('Product', array('class' => 'form-horizontal j-forms')); ?>
	<div class="form-group">
		<label class="col-md-2 control-label">Nama Produk</label>
		<div class=" col-md-8">
			<?php echo $this -> Form -> input('nama_produk', array('class' => 'form-control', 'label' => false)); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Parent Kategori</label>
		<div class=" col-md-8">
			<?php echo $this -> Form -> input('parent_id', array('class' => 'form-control', 'options' => $parentCat, 'selected'=>$edit['Category']['parent_id'],'label' => false)); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Kategori</label>
		<div class=" col-md-8">
			<?php echo $this -> Form -> input('category_id', array('class' => 'form-control', 'options' => $categories, 'label' => false)); ?>
		</div>
		<div class="col-md-2" style="width: 10%" id="loading"></div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Tipe Produk</label>
		<div class=" col-md-8">
			<div class="inline-group">
				<label class="radio">
					<input type="radio" name="data[Product][tipe]" value="Luas" id="luas" <?php if($edit['Product']['tipe']=='Luas'){ echo "checked";}?>/>
					<i></i> Luas </label>
				<label class="radio">
					<input type="radio" name="data[Product][tipe]" value="Unit" id="unit" <?php if($edit['Product']['tipe']=='Unit'){ echo "checked";}?>>
					<i></i> Unit </label>
			</div>
		</div>
	</div>
	<div class="row" id="dimensi">
		<label class="col-md-2 control-label">Dimensi</label>
		<div class="col-md-2 unit">
			<div class="widget right-10">
				<div class="input">
					<input type="text" placeholder="panjang" id="@" class="form-control" name="data[Product][panjang]" value="<?php echo $edit['Product']['panjang']?>">
				</div>
				<label for="@" class="addon adn-50 adn-right"> mm</label>
			</div>
		</div>
		<div class="col-md-2 unit">
			<div class="widget right-10">
				<div class="input">
					<input type="text" placeholder="lebar" id="$" class="form-control" name="data[Product][lebar]"  value="<?php echo $edit['Product']['lebar']?>">
				</div>
				<label for="$" class="addon adn-50 adn-right">mm</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Satuan Produk</label>
		<div class=" col-md-8">
			<?php echo $this -> Form -> input('satuan', array('class' => 'form-control', 'label' => false)); ?>
		</div>
	</div>	
	<div class="form-group">
		<label class="col-md-2 control-label">Deskripsi</label>
		<div class=" col-md-8">
			<?php 		echo $this->Form->input('id');
			 echo $this -> Form -> textarea('deskripsi', array('class' => 'form-control', 'label' => false)); ?>
		</div>
	</div>	
	<div class="form-group">
		<label class="col-md-2 control-label">Aktifkan</label>
		<div class=" col-md-8">
		<label class="col-md-8 checkbox-toggle">
			<input type="hidden" name="data[Product][aktif]"  value="0" />
					<input type="checkbox" name="data[Product][aktif]" value="1" <?php if($edit['Product']['aktif']==1){ echo "checked";}?>>
					<i></i></label>		</div>		
	</div>	<div class="form-footer">
		<?php echo $this -> Form -> button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
	</div>
	<?php echo $this -> Form -> end(); ?>
</div>
<?php echo $this -> Html -> script(array('jquery-1.10.2')); ?>
<style>
	#dimensi{
		display:none;
	}
</style>
<script type="text/javascript">
	var jq=jQuery.noConflict();
jq( "#ProductParentId" ).change(function() {
jq('#loading').html('<img src="<?php echo $this -> webroot; ?>img/loading.gif" />');
	var id=jq("#ProductParentId").val();
	// alert(id)
	jq.ajax({
	type: "POST",
	url: "<?php echo $this -> webroot; ?>Categories/kategori/"+id,
	// data: { id : jq("#ProductParentId").val()},
	success: function(html) {
jq("#ProductCategoryId").html(html);
jq( "#loading" ).hide();
}
});
});
<?php if($edit['Product']['tipe']=='Luas'){ ?>
	jq("#dimensi").show();
<?php }?>	
jq('#luas').click(function() {
if( jq(this).is(':checked')) {
jq("#dimensi").show();
} 
});

jq('#unit').click(function() {
if( jq(this).is(':checked')) {
jq("#dimensi").hide();
} 
});
</script>

