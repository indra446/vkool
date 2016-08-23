
<div class="pembelians form">
<?php echo $this->Form->create('Retur', array('id'=>'j-forms-validation','class' => 'form-horizontal j-forms')); ?>
    <div class="form-group unit">
        <label class="col-md-2 control-label">Tanggal Transaksi</label>
        <div class=" col-md-4 unit">
                                    <div class="widget right-50">
                                        <div class="input">
                                            <input name="data[Retur][tgl]" class="form-control" type="text" id="date-widget" placeholder="tanggal" readonly="" required="">
                                        </div>
                                        <label class="addon adn-50 adn-right" for="date-widget">
                                            <i class="fa fa-calendar"></i>
                                        </label>
                                    </div>
    </div>	
    </div>
    <div class="form-group unit">
        <label class="col-md-2 control-label">Vendor</label>
        <div class=" col-md-6">
        	 <div class="widget right-50">
        	 <input type="hidden" value="<?php echo rand();?>" id="norandom">
            <?php echo $this->Form->input('vendorid', array('readonly'=>true,'id'=>'vendor','class' => 'form-control', 'label' => false, 'required' => true)); ?>
                <label class="addon adn-50 adn-right" for="vendor">
                <i class="fa fa-search" id="btn-show"></i>
               </label>
               </div>
        </div>
    </div>	
	<div class="form-group">
		<label class="col-md-2 control-label">Keterangan</label>
		<div class="input col-md-8">
			<?php echo $this -> Form -> input('ket', array('type'=>'textarea','class' => 'form-control', 'label' => false)); ?>
		</div>
	</div>	
<!--    <div class="form-group">
		<label class="col-md-2 control-label">Jenis Retur</label>
		<div class="input col-md-8">
		<?php //	echo $this->Form->input('jenis',array('options' => array(' '=>'--Pilih Salah Satu--','0'=>'Kirim','1'=>'Terima'),'label'=>FALSE,'class'=>'form-control'));?>
		</div>
	</div>	-->
	<div class="w-section-header">
                        <h2>Detail Retur</h2>
                    </div>
	   <!-- <input type="text" name="txtSel" id="txtSel">
		<input name="btnSelect" type="button" id="btn-show"  value="popup" > -->
    
    <div class="form-group">
        <label class="col-md-2 control-label">Produk</label>

        <div class=" col-md-4 unit">
            <?php echo $this->Form->input('produk', array('id'=>'produk','class' => 'form-control', 'label' => false)); ?>
        </div>
        <div class=" col-md-4 unit input-group" >
            <?php echo $this->Form->input('qty', array('id'=>'qty','class' => 'form-control', 'label' => false, 'placeholder'=>'jml produk','type'=>'number','min'=>0)); ?>
        <span class="input-group-btn">
			<button type="button" class="btn btn-success" id="add_produk">+</button>
		</span>
        </div>
    </div>	
 	<div id="isi_cart">
    <!-- <table class="table data-tbl">
	<thead>
		<tr>
			<th>ID Produk</th>
			<th>Nama</th>
			<th>Dimensi</th>
			<th>Luas</th>
			<th>Luas Retur</th>
			<th>Hapus</th>
		</tr>
	</thead>
	</table>	 -->
 		
 	</div>

	<div class="form-footer">
		<?php echo $this -> Form -> button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
	</div>
</div>

<div id="example-container"  style="display:none">
   <table class="table data-tbl">
	<thead>
	<tr>
			<th>Nama Vendor</th>
			<th>Alamat</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($vendors as $vendor): ?>
	<tr>
		<td><?php echo h($vendor['Vendor']['nama_vendor']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['alamat']); ?>&nbsp;</td>
		<td class="actions">
			<input value="pilih" class="btn btn-info  btn-xs" type="button" onClick="config_vendor(this)" id="<?php echo h($vendor['Vendor']['id'])."-".h($vendor['Vendor']['nama_vendor']); ?>"/>
			<!-- <input type="radio" name="pilih" id="<?php echo h($vendor['Vendor']['id']); ?>" value="<?php echo h($vendor['Vendor']['id']); ?>"></label> -->
 		</td>

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<!-- <script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script> -->
<!-- <script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script> -->
<?php
		echo $this -> Html -> css(array('jquery.dataTables.min'));
		echo $this -> Html -> script(array('jquery.min','lib/jquery.dataTables'));

?>

<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script> -->

<script type="text/javascript">

$(document).ready(function() {
 $('#add_produk').on('click', function(){
 	 var prod=$("#produk").val();
    var norandom = $("#norandom").val();
 	 if(prod==""){
 	 alert("Produk masih kosong");
      return false;
 	 }else{
 	$.ajax({
	type: "POST",
	url: "<?php echo $this -> webroot; ?>Returs/cart/",
	data: { orandom:norandom ,idp : $("#produk").val(),qty :$("#qty").val() },
	success: function(html) {
	$('#produk').val("");

	$('#qty').val("");
	jq("#isi_cart").html(html);
	}
	});}
 	});
 	
	// function configurator(clicked) {
   $('#btn-show').on('click', function(){
      var container = $('#example-container').clone();
      container.find('table').attr('id', 'example');
      container.find('table').attr('class', 'table data-tbl');

      var box = bootbox.dialog({
        show: false,
        message: container.html(),
        title: "Pilih Vendor",
        buttons: {
          // ok: {
            // label: "Pilih",
            // className: "btn-success",
            // callback: function() {
              // // var name = $$e('#name').val();
				// // var id = clicked.id;
				// // alert(id)
                    // // DemoCallBack.show(" You've chosen <b>" + answer + "</b>");
            // }
          // },
          cancel: {
            label: "Close",
            className: "btn-danger"
          }
        }
      });
      
      box.on("shown.bs.modal", function() {
         $('#example').DataTable(); 
      });
      
      box.modal('show'); 
   });
});
function config_vendor(clicked) {
var $$e=jQuery.noConflict();
		bootbox.hideAll()
		var id = clicked.id;
		document.getElementById("vendor").value = id;		
		// alert(id)
	
		// $$e("#liat").html("<div align=center> loading...<br><img src='<?php echo $this->webroot;?>img/ajax-loader.gif' /></div>");  
																 
}




	
</script>
