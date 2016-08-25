
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
			<?php echo $this -> Form -> input('ket', array('id'=>'ket','type'=>'textarea','class' => 'form-control', 'label' => false)); ?>
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
    
    <div class="form-group unit">
        <label class="col-md-2 control-label">Produk yang diretur</label>
        <div class=" col-md-6">
        	 <div class="widget right-50">
            <?php echo $this->Form->input('produk', array('readonly'=>true,'id'=>'produk','class' => 'form-control', 'label' => false, 'required' => true)); ?>
                <label class="addon adn-50 adn-right" for="diterima">
				<button class="addon-btn adn-50 adn-right" type="button" id="btn-produk">
                     <i class="fa fa-search"></i>
                 </button>   
                </label>
               </div>
        </div>
    </div>	
    <div class="form-group unit">
        <label class="col-md-2 control-label"></label>
        <div class=" col-md-8">
 			<div id="isi_cart"></div>
        </div>
    </div>	

    <div class="form-group">
		<label class="col-md-2 control-label">Produk diterima</label>
        <div class=" col-md-4">
        	 <div class="widget right-50">
            <?php echo $this->Form->input('produkid', array('readonly'=>true,'id'=>'produkid','class' => 'form-control', 'label' => false, 'required' => true)); ?>
                <label class="addon adn-50 adn-right" for="diterima">
				<button class="addon-btn adn-50 adn-right" type="button" id="btn-proterima">
                     <i class="fa fa-search"></i>
                 </button>   
                </label>
               </div>
        </div>
        <div class=" col-md-2 unit input-group" >
            <?php echo $this->Form->input('qty', array('id'=>'qty','class' => 'form-control', 'label' => false, 'placeholder'=>'qty','type'=>'number','min'=>0)); ?>
        <span class="input-group-btn">
			<button type="button" class="btn btn-success" id="add_produk">+</button>
		</span>
        </div>
    </div>	
    <div class="form-group unit">
        <label class="col-md-2 control-label"></label>
        <div class=" col-md-8">
 			<div id="isi_terima"></div>
        </div>
    </div>	 

	<div class="form-footer">
		<?php echo $this -> Form -> button('Simpan', array('type' => 'button','id'=>'simpan', 'class' => 'btn btn-primary')); ?>
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
<div id="tbinven" style="display:none">
   <table class="table data-tbl">
	<thead>
	<tr>
			<th>Nama Produk</th>
			<th>Dimensi (mm)</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bhnbaku as $bhnbaku){?>
	<tr>
		<td><?php echo h($bhnbaku['products']['nama_produk']); ?>&nbsp;</td>
		<td><?php echo $bhnbaku['bahanbakus']['dm1']." x ".$bhnbaku['bahanbakus']['dm2']; ?>&nbsp;</td>
		<td class="actions">
			<input value="pilih" class="btn btn-info  btn-xs" type="button" onClick="configinven(this)" id="<?php echo h($bhnbaku['bahanbakus']['id']); ?>"/>
			<!-- <input type="radio" name="pilih" id="<?php echo h($bhnbaku['Vendor']['id']); ?>" value="<?php echo h($bhnbaku['Vendor']['id']); ?>"></label> -->
 		</td>

	</tr>
	<?php } ?>
	</tbody>
	</table>
</div>
<div id="tbterima" style="display:none">
   <table class="table data-tbl">
	<thead>
	<tr>
			<th>Nama Produk</th>
			<th>Dimensi (mm)</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($produk as $produk){?>
	<tr>
		<td><?php echo h($produk['products']['nama_produk']); ?>&nbsp;</td>
		<td><?php echo str_replace(",", "x", $produk['products']['dimensi']); ?>&nbsp;</td>
		<td class="actions">
			<input value="pilih" class="btn btn-info  btn-xs" type="button" onClick="configterima(this)" id="<?php echo $produk['products']['id']."|".$produk['products']['nama_produk']; ?>"/>
			<!-- <input type="radio" name="pilih" id="<?php echo h($bhnbaku['Vendor']['id']); ?>" value="<?php echo h($bhnbaku['Vendor']['id']); ?>"></label> -->
 		</td>

	</tr>
	<?php } ?>
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
 	var prod=$("#produkid").val();
 	var qty=$("#qty").val();
    var norandom = $("#norandom").val();
 	 if(prod==""){
 	  alert("Produk masih kosong");
      return false;
 	 }else if(qty==""){
 	  alert("Jumlah masih kosong");
      return false;
     }else{
	 	$.ajax({
		type: "POST",
		url: "<?php echo $this -> webroot; ?>Returs/terima/"+norandom,
		data: { norandom:norandom ,idp : prod,qty :qty },
		success: function(html) {
		$('#produkid').val("");
	
		$('#qty').val("");
		jq("#isi_terima").html(html);
		}
		});
	}
 	});
 $('#simpan').on('click', function(){
 	var tgl=$("#date-widget").val();
 	var vendor=$("#vendor").val();
    var norandom = $("#norandom").val();
    var ket = $("#ket").val();
 	 if(tgl==""){
 	  alert("Tanggal masih kosong");
      return false;
 	 }else if(vendor==""){
 	  alert("Vendor masih kosong");
      return false;
     }else{
	 	$.ajax({
		type: "POST",
		url: "<?php echo $this -> webroot; ?>Returs/add",
		data: { tgl:tgl ,vendor : vendor,norandom :norandom,ket:ket },
		success: function(html) {
			$('#date-widget').val("");
			$('#vendor').val("");
			$("#ket").val("");
			alert('Data berhasil disimpan');
			window.location.href="<?php echo $this->webroot;?>Returs/index";
			

			// $("#ket").val("");
		}
		});
	}
 	});
 	
	// function configurator(clicked) {
   $('#btn-produk').on('click', function(){
      var container = $('#tbinven').clone();
      container.find('table').attr('id', 'example');
      container.find('table').attr('class', 'table data-tbl');

      var box = bootbox.dialog({
        show: false,
        message: container.html(),
        title: "Pilih Sisa Produk",
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
   
   $('#btn-proterima').on('click', function(){
      var container = $('#tbterima').clone();
      container.find('table').attr('id', 'example');
      container.find('table').attr('class', 'table data-tbl');

      var box = bootbox.dialog({
        show: false,
        message: container.html(),
        title: "Pilih Produk",
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
function configterima(clicked) {
var $$e=jQuery.noConflict();
		bootbox.hideAll()
		var id = clicked.id;
		document.getElementById("produkid").value = id;		
		// alert(id)
	
		// $$e("#liat").html("<div align=center> loading...<br><img src='<?php echo $this->webroot;?>img/ajax-loader.gif' /></div>");  
																 
}
function configinven(clicked) {
var $$e=jQuery.noConflict();
		bootbox.hideAll()
		var id = clicked.id;
    	var norandom = $$e("#norandom").val();
		// document.getElementById("vendor").value = id;		
	 	$$e.ajax({
		type: "POST",
		url: "<?php echo $this -> webroot; ?>Returs/cart/"+norandom,
		data: { id : id,norandom:norandom},
		success: function(html) {
		$$e("#isi_cart").html(html);
		}
		});	
		// $$e("#liat").html("<div align=center> loading...<br><img src='<?php echo $this->webroot;?>img/ajax-loader.gif' /></div>");  
																 
}





	
</script>
