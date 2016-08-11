<div class="products form">
	<?php echo $this -> Form -> create('Product', array('id' => 'j-forms-validation', 'class' => 'form-horizontal j-forms')); ?>
	<div class="w-section-header">
		<h3>Pilih periode laporan</h3>
	</div>

	<div class="j-row">
		<div class="span6 unit">
			<div class="input unit">
				<label class="icon-right" for="inline-range-from"> <i class="fa fa-calendar"></i> </label>
				<input class="form-control" type="text" id="inline-range-from" readonly="">
			</div>
			<div id="inline-from"></div>
		</div>
		<div class="span6 unit">
			<div class="input unit">
				<label class="icon-right" for="inline-range-to"> <i class="fa fa-calendar"></i> </label>
				<input class="form-control" type="text" id="inline-range-to" readonly="">
			</div>
			<div id="inline-to"></div>
		</div>
	</div>
	<div class="form-footer">
		<?php echo $this -> Form -> button('Lihat', array('id'=>'lihat','type' => 'button', 'class' => 'btn btn-primary')); ?>
	</div>
	<?php echo $this -> Form -> end(); ?>
</div>
<hr>
<div id="data"></div>
<?php echo $this -> Html -> script(array('jquery-1.10.2')); ?>

<script type="text/javascript">
var jq=jQuery.noConflict();
	    jq( '#lihat' ).on( 'click', function() {
	    
	    	jq('#data').html('<div align="center">sedang memproses data...<br><img src="<?php echo $this -> webroot; ?>img/loading.gif" /></div>');
	    	var tgla=jq("#inline-range-from").val();
	    	var tglb=jq("#inline-range-to").val();
				jq.ajax({
				type: "POST",
				url: "<?php echo $this -> webroot; ?>Products/laplabarugi",
				data: { 1:tgla,2:tglb },
				success: function(html) {
				jq("#data").html(html);
				}
			});
            //code
            return false;
        });
</script>