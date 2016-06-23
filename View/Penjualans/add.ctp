<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script>
<script type="text/javascript">
    $(function () {
        $("#namane").autocomplete({
            source: "auto",
            minLength: 1,
            select: function (event, data) {
                $('input[name=hp]').val(data.item.hp);
                $('textarea[name=alamat]').val(data.item.alamat);
//                document.getElementById('hp').readOnly = true;
//                document.getElementById('alamat').readOnly = true;
            }
        });
        $("#PenjualanIdKaryawan").autocomplete({
            source: "<?php echo $this->webroot;?>karyawans/ajax",
            minLength: 1,
        });
        $("#PenjualanIdProduct").autocomplete({
        source: "<?php echo $this->webroot; ?>penjualans/autoproduk",
        minLength: 1,
        });
        $("#samping").autocomplete({
        source: "<?php echo $this->webroot; ?>penjualans/autoproduk",
        minLength: 1,
        });
        $("#belakang").autocomplete({
        source: "<?php echo $this->webroot; ?>penjualans/autoproduk",
        minLength: 1,
        });
        $("#aksesoris").autocomplete({
        source: "<?php echo $this->webroot; ?>penjualans/autoaksesoris",
        minLength: 1,
        });
        $("#service").autocomplete({
        source: "<?php echo $this->webroot; ?>penjualans/autoservice",
        minLength: 1,
        });
        var jq = jQuery.noConflict();
        jq("#PenjualanMerkId").change(function () {
            jq('#loading').html('<img src="<?php echo $this->webroot; ?>img/loading.gif" />');
            var id = jq("#PenjualanMerkId").val();
//         alert(id);
            jq.ajax({
                type: "POST",
                url: "<?php echo $this->webroot; ?>Merks/merk/" + id,
                // data: { id : jq("#ProductParentId").val()},
                success: function (html) {
                    jq("#PenjualanModelId").html(html);
                    jq("#loading").hide();
                }
            });
        });
        
       $('.btn-show').on('click', function(){
      var container = $('#modal').clone();
      container.find('table').attr('id', 'example');
      container.find('table').attr('class', 'table data-tbl');

      var box = bootbox.dialog({
        show: false,
        message: container.html(),
        title: "Pilih Vendor",
        buttons: {
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
    function configurator(clicked) {
var $$e=jQuery.noConflict();
		bootbox.hideAll()
		var id = clicked.id;
		document.getElementById("vendor").value = id;															 
}
</script>
<script>
    function kalkulatorTambah(PenjualanProductId,qty) { 
        var hasil =eval(qty) * eval(PenjualanProductId);
        var h=document.getElementById('harga');
        h.value=hasil;
        document.getElementById('harga').innerHTML = hasil;
    }
</script>
<script>
    function kalkulatorTambah1(PenjualanProductId1,qty1) { 
        var hasil1 =eval(qty1) * eval(PenjualanProductId1);
        var h1=document.getElementById('harga1');
        h1.value=hasil1;
        document.getElementById('harga1').innerHTML = hasil1;
    }
</script>
<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap">
            <div class="widget-container margin-top-0">
                <div class="widget-content">
                    <?php echo $this->Form->create('Penjualan', array('class' => 'j-forms j-multistep', 'id' => 'j-forms')); ?>
                    <!--<form action="php/demo.php" method="post" class="j-forms j-multistep" id="j-forms" novalidate>-->
                    <!-- end /.header-->
                    <div class="form-content">
                        <!-- start steps -->
                        <div class="wizard-breadcrumb default-style">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 step">
                                    <div class="steps">
                                        <span class="step-number">Step 1</span>
                                        <p>Tambah Pelanggan Baru</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 step">
                                    <div class="steps">
                                        <span class="step-number">Step 2</span>
                                        <p>Input Pesanan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end steps -->
                        <fieldset>
                            <!-- start name -->
                            <div class="unit">
                                <label class="label">Nama Pelanggan</label>
                                <div class="input">
                                    <label class="icon-right" for="name">
                                        <i class="fa fa-user"></i>
                                    </label>
                                    <input type="text" id="namane" name="name" placeholder="Nama Pelanggan" class="form-control">
                                     <?php // echo $this->Form->input('customer_id', array('class' => 'form-control', 'label' => false)); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 unit">
                                    <label class="label">Nomor Telepon</label>
                                    <div class="input">
                                        <label class="icon-right" for="phone">
                                            <i class="fa fa-phone"></i>
                                        </label>
                                        <input type="text"  placeholder="Nomor Telfon" class="form-control" name="hp" id="hp">
                                    </div>
                                </div>
                                <div class="col-md-4 unit">
                                </div>
                            </div>
                            <!-- end name -->
                            <!-- start email phone -->
                            <div class="row">
                                <div class="col-md-8 unit">
                                </div>
                                <div class="col-md-8 unit">
                                    <label class="label">Alamat</label>
                                    <div class="input">
                                        <label class="icon-right" for="email">
                                            <i class="fa fa-envelope-o"></i>
                                        </label>
                                        <?php echo $this->Form->input('user_id', array('class' => 'form-control','type'=>'hidden', 'label' => false,'value'=>$user_id)); ?>
                                        <?php echo $this->Form->input('alamat', array('class' => 'form-control', 'label' => false, 'name' => 'alamat', 'type' => 'textarea')); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 unit">
                                </div>
                                <div class="col-md-8 unit">
                                    <label class="label">Merk</label>
                                    <div class="input">
                                        <label class="icon-right" for="email">
                                            <i class="fa fa-envelope-o"></i>
                                        </label>
                                        <?php echo $this->Form->input('merk_id', array('class' => 'form-control select2', 'options' => $merks, 'empty' => '>> Pilih Merk <<', 'label' => false, 'class' => 'form-control')); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 unit">
                                </div>
                                <div class="col-md-8 unit">
                                    <label class="label">Model</label>
                                    <div class="input">
                                        <label class="icon-right" for="email">
                                            <i class="fa fa-envelope-o"></i>
                                        </label>
                                        <?php echo $this->Form->input('model_id', array('class' => 'form-control', 'options' => array(), 'label' => false, 'type' => 'select', 'required')); ?>
                                    </div>
                                </div>
                                <div class="col-md-2" style="width: 10%" id="loading"></div>
                                <div class="col-md-4 unit">
                                </div>
                                <div class="col-md-8 unit">
                                    <label class="label">Tahun</label>
                                    <div class="input">
                                        <label class="icon-right" for="email">
                                            <i class="zmdi zmdi-time zmdi-hc-fw"></i>
                                        </label>
                                        <?php echo $this->Form->input('thn', array('class' => 'form-control','type'=>'number', 'label' => false, 'required')); ?>
                                    </div>
                                </div>
                                <div class="col-md-8 unit">
                                    <label class="label">Nomor Polisi</label>
                                    <div class="input">
                                        <label class="icon-right" for="email">
                                            <i class="zmdi zmdi-time zmdi-hc-fw"></i>
                                        </label>
                                        <?php echo $this->Form->input('nopol', array('class' => 'form-control', 'label' => false, 'required')); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 unit">
                                </div>
                                <div class="col-md-8 unit">
                                    <label class="label">No Mesin</label>
                                    <div class="input">
                                        <label class="icon-right" for="email">
                                            <i class="zmdi zmdi-alarm-check zmdi-hc-fw"></i>
                                        </label>
                                        <?php echo $this->Form->input('nomesin', array('class' => 'form-control', 'label' => false, 'required')); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 unit">
                                </div>
                                <div class="col-md-8 unit">
                                    <label class="label">No Rangka</label>
                                    <div class="input">
                                        <label class="icon-right" for="email">
                                            <i class="zmdi zmdi-airplay zmdi-hc-fw"></i>
                                        </label>
                                        <?php echo $this->Form->input('norangka', array('class' => 'form-control', 'label' => false, 'required')); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 unit">
                                </div>
                            </div>
                            <!-- end email phone -->
                        </fieldset>
                        <fieldset>
                            <!-- start guests -->
                            <div class="row">
                                <p>Waktu <?php echo Date('Y-m-d\TH:i:s.u'); ?></p>
                                <p>Nama Kasir</p>
                                <div class="w-section-header">
                                    <h2>Depan</h2>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Depan</label>
                                    <div class=" col-md-4 unit">
                                        <?php  echo $this->Form->input('id_product',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                                    <div class="col-xs-2 unit ">
                                        <?php echo $this->Form->input('qty', array('style' => 'width:70%;margin-right:-10px;', 'div' => false, 'class' => 'form-control', 'label' => false, 'required' => true, 'placeholder' => 'qty')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('harga', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'required' => true, 'placeholder' => 'harga')); ?>
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="add_produk">+</button>
                                    </span>
                                </div>
                                <div id="isi_cart"></div>
                                <div class="w-section-header">
                                    <h2>Samping</h2>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Samping</label>
                                    <div class=" col-md-4 unit">
                                        <?php  echo $this->Form->input('id_product',array('class' => 'form-control', 'label' => false,'id'=>'samping')); ?>
                                    </div>
                                    <div class="col-xs-2 unit ">
                                        <?php echo $this->Form->input('qty', array('style' => 'width:70%;margin-right:-10px;', 'div' => false, 'class' => 'form-control', 'label' => false, 'required' => true, 'placeholder' => 'qty','id'=>'qtysamping')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('harga', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'required' => true, 'placeholder' => 'harga','id'=>'hargasamping')); ?>
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="add_samping">+</button>
                                    </span>
                                </div>
                                <div id="samping_view"></div>
                                <div class="w-section-header">
                                    <h2>Belakang</h2>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Belakang</label>
                                    <div class=" col-md-4 unit">
                                        <?php  echo $this->Form->input('id_product',array('class' => 'form-control', 'label' => false,'id'=>'belakang')); ?>
                                    </div>
                                    <div class="col-xs-2 unit ">
                                        <?php echo $this->Form->input('qty', array('style' => 'width:70%;margin-right:-10px;', 'div' => false, 'class' => 'form-control', 'label' => false, 'required' => true, 'placeholder' => 'qty','id'=>'qtybelakang')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('harga', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'required' => true, 'placeholder' => 'harga','id'=>'hargabelakang')); ?>
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="add_belakang">+</button>
                                    </span>
                                </div>
                                <div id="belakang_view"></div>
                                            <div class="w-section-header">
                                    <h2>Aksesoris</h2>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Aksesoris</label>
                                    <div class=" col-md-4 unit">
                                        <?php  echo $this->Form->input('id_product',array('class' => 'form-control', 'label' => false,'id'=>'aksesoris')); ?>
                                    </div>
                                    <div class="col-xs-2 unit ">
                                        <?php echo $this->Form->input('qty', array('style' => 'width:70%;margin-right:-10px;', 'div' => false, 'class' => 'form-control', 'label' => false, 'required' => true, 'placeholder' => 'qty','id'=>'qtyaksesoris')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('harga', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'required' => true, 'placeholder' => 'harga','id'=>'hargaaksesoris')); ?>
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="add_aksesoris">+</button>
                                    </span>
                                </div>
                                <div id="aksesoris_view"></div>
                                            <div class="w-section-header">
                                    <h2>Service</h2>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Service</label>
                                    <div class=" col-md-4 unit">
                                        <?php  echo $this->Form->input('id_product',array('class' => 'form-control', 'label' => false,'id'=>'service')); ?>
                                    </div>
                                    <div class="col-xs-2 unit ">
                                        <?php echo $this->Form->input('qty', array('style' => 'width:70%;margin-right:-10px;', 'div' => false, 'class' => 'form-control', 'label' => false, 'required' => true, 'placeholder' => 'qty','id'=>'qtyservice')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('harga', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'required' => true, 'placeholder' => 'harga','id'=>'hargaservice')); ?>
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="add_service">+</button>
                                    </span>
                                </div>
                                <div id="service_view"></div>
                                <!--add total-->
                                <hr align="right">
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Total</label>
                                    <div class=" col-md-4">
                                       <?php // echo $this->Form->input('total', array('class' => 'form-control', 'label' => false)); ?>
                                        <div id="PenjualanTotal"></div>
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="hit">Hitung</button>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Discount</label>
                                    <div class=" col-md-4">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Hidden Discount</label>
                                    <div class=" col-md-4">
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Total All</label>
                                    <div class=" col-md-4">
                                        Rp 10000
                                    </div>
                                </div>
                                <hr align="right">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Sales</label>
                                    <div class=" col-md-8">
                                        <?php echo $this->Form->input('id_karyawan', array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Informasi Tambahan</label>
                                    <div class=" col-md-8">
                                         <?php echo $this->Form->input('ket', array('class' => 'form-control', 'label' => false,'type'=>'textarea')); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end guests -->
                        </fieldset>
                    </div>
                    <!-- end /.content -->

                    <div class="form-footer block-form-footer">
                        <button type="button" class="btn btn-xs primary-btn multi-submit-btn">Preview Work Order</button>
                         <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary multi-submit-btn')); ?>
                        <button type="button" class="btn btn-primary primary-btn multi-next-btn">Selanjutnya</button>
                        <button type="button" class="btn btn-info secondary-btn multi-prev-btn">Back</button>
                    </div>
                    <!-- end /.footer -->

                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal"  style="display:none">
<table>
	<thead>
	<tr>
			<th>ID Produk</th>
			<th>Nama Produk</th>
			<th>Kategori</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($produks as $produk): ?>
	<tr>
		<td><?php echo h($produk['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($produk['Product']['nama_produk']); ?>&nbsp;</td>
		<td><?php echo h($produk['Product']['category_id']); ?>&nbsp;</td>
		<td class="actions">
			<input value="pilih" class="btn btn-info  btn-xs" type="button" onClick="configurator(this)" id="<?php echo h($produk['Product']['id'])."-".h($produk['Product']['nama_produk']); ?>"/>
			<!-- <input type="radio" name="pilih" id="<?php echo h($produk['Product']['id']); ?>" value="<?php echo h($produk['Product']['id']); ?>"></label> -->
 		</td>

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<script type="text/javascript">
$(document).ready(function() {
 $('#add_produk').on('click', function(){
         var prod=$("#PenjualanIdProduct").val();
         if(prod==""){
         alert("Produk masih kosong");
      return false;
         }else{
        $.ajax({
        type: "POST",
        url: "<?php echo $this->webroot; ?>Penjualans/cart/",
        data: { idp : $("#PenjualanIdProduct").val(),jml :$("#PenjualanQty").val(),harga :$("#PenjualanHarga").val() },
        success: function(html) {
        $('#PenjualanIdProduct').html("");
        $('#PenjualanQty').html("");
        $('#PenjualanHarga').html("");
        jq("#isi_cart").html(html);
        }
        });}
        });
        
         $('#add_samping').on('click', function(){
         var prod=$("#samping").val();
         if(prod==""){
         alert("Produk masih kosong");
      return false;
         }else{
        $.ajax({
        type: "POST",
        url: "<?php echo $this->webroot; ?>Penjualans/samping/",
        data: { idp : $("#samping").val(),jml :$("#qtysamping").val(),harga :$("#hargasamping").val() },
        success: function(html) {
        $('#samping').html("");
        $('#qtysamping').html("");
        $('#hargasamping').html("");
        jq("#samping_view").html(html);
        }
        });}
        });
        //belakang//
          $('#add_belakang').on('click', function(){
         var prod=$("#belakang").val();
         if(prod==""){
         alert("Produk masih kosong");
      return false;
         }else{
        $.ajax({
        type: "POST",
        url: "<?php echo $this->webroot; ?>Penjualans/belakang/",
        data: { idp : $("#belakang").val(),jml :$("#qtybelakang").val(),harga :$("#hargabelakang").val() },
        success: function(html) {
        $('#belakang').html("");
        $('#qtybelakang').html("");
        $('#hargabelakang').html("");
        jq("#belakang_view").html(html);
        }
        });}
        });
        //aksesoris//
          $('#add_aksesoris').on('click', function(){
         var prod=$("#aksesoris").val();
         if(prod==""){
         alert("Produk masih kosong");
      return false;
         }else{
        $.ajax({
        type: "POST",
        url: "<?php echo $this->webroot; ?>Penjualans/aksesoris/",
        data: { idp : $("#aksesoris").val(),jml :$("#qtyaksesoris").val(),harga :$("#hargaaksesoris").val() },
        success: function(html) {
        $('#aksesoris').html("");
        $('#qtyaksesoris').html("");
        $('#hargaaksesoris').html("");
        jq("#aksesoris_view").html(html);
        }
        });}
        });
        //service//
            $('#add_service').on('click', function(){
         var prod=$("#service").val();
         if(prod==""){
         alert("Produk masih kosong");
      return false;
         }else{
        $.ajax({
        type: "POST",
        url: "<?php echo $this->webroot; ?>Penjualans/service/",
        data: { idp : $("#service").val(),jml :$("#qtyservice").val(),harga :$("#hargaservice").val() },
        success: function(html) {
        $('#service').html("");
        $('#qtyservice').html("");
        $('#hargaservice').html("");
        jq("#service_view").html(html);
        }
        });}
        });
        
        });
</script>
<script>
$(document).ready(function(){
$("#hit").click(function(){
$("#PenjualanTotal").load('<?php echo $this->webroot; ?>Penjualans/jumlahtot');
});
});
</script>