<style>
    .message {
            color: white;
    border: 1px solid gray;
    margin-left: -5px;
    margin-right: 231px;
    background-color: #d43a36;
    }
</style>
<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Tambah Penjualan</h3>
    </div>
</div>
<br>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script>
<script src="<?php echo $this->webroot; ?>js/jQuery.print.js"></script>
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
        source: "<?php echo $this->webroot; ?>penjualans/autoprodukd",
        minLength: 1,
        });
        $("#samping").autocomplete({
        source: "<?php echo $this->webroot; ?>penjualans/autoprodukd",
        minLength: 1,
        });
        $("#belakang").autocomplete({
        source: "<?php echo $this->webroot; ?>penjualans/autoprodukd",
        minLength: 1,
        });
        $("#aksesoris").autocomplete({
        source: "<?php echo $this->webroot; ?>penjualans/autoprodukd",
        minLength: 1,
        });
        $("#service").autocomplete({
        source: "<?php echo $this->webroot; ?>penjualans/autoprodukd",
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
  function sum() {
            var txttotal = document.getElementById('total').value;
            var txtdiscount = document.getElementById('discount').value;
            var txthiddendiscount = document.getElementById('hiddendiscount').value;
            var result = parseInt(txttotal) - parseInt(txtdiscount)-parseInt(txthiddendiscount);
            if (!isNaN(result)) {
                document.getElementById('totalall').value = result;
            }
        }
</script>

<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap">
            <div class="widget-container margin-top-0">
                <div class="widget-content">
				<div class="widget-header block-header clearfix">
					<div class="btn-group btn-group-justified">
				    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Tambah Penjualan</span>", array('controller' => 'Penjualans','action' => 'add'), array('escape' => false, 'class' => 'btn btn-danger')); ?> 
				    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-shopping-cart','aria-hidden'=>true)) . "&nbsp;<span>Daftar Penjualan Outstanding</span>", array('controller' => 'bahanbakuses'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
				    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-file-text-o')) . "&nbsp;<span>History Penjualan</span>", array('controller' => 'Penjualans','action' => 'histori'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
				     </div>
				</div>                    
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
                        <div id="diprin">
                        <fieldset >
                            <!-- start name -->
                            <div class="unit">
                                <label class="label">Nomor Nota</label>
                                <div class="input">
                                    <label class="icon-right" for="name">
                                        <i class="fa fa-bars"></i>
                                    </label>
                                    <input type="text" id="nota" name="data[Penjualan][nomor]" value="<?php echo $nonota;?>"  readonly class="form-control">
                                    <input type="hidden" id="nota" name="data[Penjualan][noorder]" value="<?php echo $order;?>"  readonly class="form-control">
                                </div>
                            </div>
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
                                        <?php echo $this->Form->input('thn', array('class' => 'form-control','type'=>'number', 'label' => false, 'required','maxlength'=>4)); ?>
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
                                <table>
                                    <tr>
                                        <td>Waktu</td> <td>:</td> <td><?php date_default_timezone_set('Asia/Jakarta'); echo Date('Y-m-d H:i:s'); ?></td>
                                    </tr><tr>
                                        <td>Nama Kasir</td> <td>:</td><td> <?php echo $infousr['Auth']['User']['nama_admin'];?></td>
                                    </tr>
                                </table>
                                
                                <div class="w-section-header">
                                    <!--<h2>Depan</h2>-->
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"><h3>Depan</h3></label>
                                    <div class=" col-md-4 unit">
                                        <?php  echo $this->Form->input('id_product',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
<!--                                    <div class="col-md-1 unit">
                                            <button class="addon-btn adn-50 adn-right" type="button" id="btn-show">
                                                <i class="fa fa-search"></i>
                                            </button>                
                                    </div>-->
                                    <div class="col-xs-1 unit ">
                                        <?php echo $this->Form->input('qty', array('style' => 'width:139%;margin-left:-12px;', 'div' => false, 'class' => 'form-control', 'label' => false,  'placeholder' => 'qty','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('harga', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'placeholder' => 'harga','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('disc', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'placeholder' => 'diskon','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="add_produk">+</button>
                                    </span>
                                </div>
                                <div id="isi_cart"></div>
                                <div class="w-section-header">
                                    <!--<h2>Samping</h2>-->
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"><h3>Samping</h3></label>
                                    <div class=" col-md-4 unit">
                                        <?php  echo $this->Form->input('id_product',array('class' => 'form-control', 'label' => false,'id'=>'samping')); ?>
                                    </div>
                                    <div class="col-xs-1 unit ">
                                        <?php echo $this->Form->input('qty', array('style' => 'width:139%;margin-left:-12px;', 'div' => false, 'class' => 'form-control', 'label' => false,  'placeholder' => 'qty','id'=>'qtysamping','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('harga', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false,  'placeholder' => 'harga','id'=>'hargasamping','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('disc', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'placeholder' => 'diskon','id'=>'discsamping','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="add_samping">+</button>
                                    </span>
                                </div>
                                <div id="samping_view"></div>
                                <div class="w-section-header">
                                    <!--<h2>Belakang</h2>-->
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"><h3>Belakang</h3></label>
                                    <div class=" col-md-4 unit">
                                        <?php  echo $this->Form->input('id_product',array('class' => 'form-control', 'label' => false,'id'=>'belakang')); ?>
                                    </div>
                                    <div class="col-xs-1 unit ">
                                        <?php echo $this->Form->input('qty', array('style' => 'width:139%;margin-left:-12px;', 'div' => false, 'class' => 'form-control', 'label' => false,  'placeholder' => 'qty','id'=>'qtybelakang','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('harga', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false,  'placeholder' => 'harga','id'=>'hargabelakang','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('disc', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'placeholder' => 'diskon','id'=>'discbelakang','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="add_belakang">+</button>
                                    </span>
                                </div>
                                <div id="belakang_view"></div>
                                            <div class="w-section-header">
                                    <!--<h2>Aksesoris</h2>-->
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"><h3>Aksesoris</h3></label>
                                    <div class=" col-md-4 unit">
                                        <?php  echo $this->Form->input('id_product',array('class' => 'form-control', 'label' => false,'id'=>'aksesoris')); ?>
                                    </div>
                                    <div class="col-xs-1 unit ">
                                        <?php echo $this->Form->input('qty', array('style' => 'width:139%;margin-left:-12px;', 'div' => false, 'class' => 'form-control', 'label' => false,  'placeholder' => 'qty','id'=>'qtyaksesoris','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('harga', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false,  'placeholder' => 'harga','id'=>'hargaaksesoris','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('disc', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'placeholder' => 'diskon','id'=>'discaksesoris','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="add_aksesoris">+</button>
                                    </span>
                                </div>
                                <div id="aksesoris_view"></div>
                                            <div class="w-section-header">
                                    <!--<h2>Service</h2>-->
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"><h3>Service</h3></label>
                                    <div class=" col-md-4 unit">
                                        <?php  echo $this->Form->input('id_product',array('class' => 'form-control', 'label' => false,'id'=>'service')); ?>
                                    </div>
                                    <div class="col-xs-1 unit ">
                                        <?php echo $this->Form->input('qty', array('style' => 'width:139%;margin-left:-12px;', 'div' => false, 'class' => 'form-control', 'label' => false,  'placeholder' => 'qty','id'=>'qtyservice','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('harga', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false,  'placeholder' => 'harga','id'=>'hargaservice','type'=>'number','min'=>'0')); ?>
                                    </div>
                                    <div class="col-xs-2 unit" >
                                        <?php echo $this->Form->input('disc', array('style' => 'width:100%;margin-right:-10px;', 'div' => false, 'class' => 'col-xs-2 form-control', 'label' => false, 'placeholder' => 'diskon','id'=>'discservice','type'=>'number','min'=>'0')); ?>
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
<!--                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-success" id="hit">Hitung</button>
                                    </span>-->
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Discount</label>
                                    <div class=" col-md-4">
                                        <input type="text" class="form-control" id="discount" name="data[Penjualan][disc]"  onkeyup="sum();">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Hidden Discount</label>
                                    <div class=" col-md-4">
                                        <input type="text" class="form-control" id="hiddendiscount" name="data[Penjualan][hidden_disc]"  onkeyup="sum();">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Total All</label>
                                    <div class=" col-md-4">
                                        <input type="text" class="form-control" id="totalall" name="totalall" readonly="" >
                                    </div>
                                </div>
                                <hr align="right">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Sales</label>
                                    <div class=" col-md-8">
                                        <?php echo $this->Form->input('id_karyawan', array('required'=>true,'class' => 'form-control', 'label' => false)); ?>
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
                    </div>
                    <!-- end /.content -->

                    <div class="form-footer block-form-footer">
                        <!--<input type="submit" class="btn btn-xs primary-btn multi-submit-btn" name="add" value="Preview Work Order">-->
                        <button type="button" class="btn btn-warning btn-xs multi-submit-btn" id="printe">print</button>
                         <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary multi-submit-btn')); ?>
                        <!-- <button type="button" class="btn btn-primary primary-btn multi-next-btn">Selanjutnya</button> -->
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
        data: { idp : $("#PenjualanIdProduct").val(),jml :$("#PenjualanQty").val(),harga :$("#PenjualanHarga").val(),diskon :$("#PenjualanDisc").val() },
        success: function(html) {
        $('#PenjualanIdProduct').val("");
        $('#PenjualanQty').val("");
        $('#PenjualanHarga').val("");
        $('#PenjualanDisc').val("");
        jq("#isi_cart").html(html);
        $("#PenjualanTotal").load('<?php echo $this->webroot; ?>Penjualans/jumlahtot');
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
        data: { idp : $("#samping").val(),jml :$("#qtysamping").val(),harga :$("#hargasamping").val(),diskon :$("#discsamping").val() },
        success: function(html) {
        $('#samping').val("");
        $('#qtysamping').val("");
        $('#hargasamping').val("");
        $('#discsamping').val("");
        jq("#samping_view").html(html);
        $("#PenjualanTotal").load('<?php echo $this->webroot; ?>Penjualans/jumlahtot');
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
        data: { idp : $("#belakang").val(),jml :$("#qtybelakang").val(),harga :$("#hargabelakang").val(),diskon :$("#discbelakang").val() },
        success: function(html) {
        $('#belakang').val("");
        $('#qtybelakang').val("");
        $('#hargabelakang').val("");
        $('#discbelakang').val("");
        jq("#belakang_view").html(html);
        $("#PenjualanTotal").load('<?php echo $this->webroot; ?>Penjualans/jumlahtot');
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
        data: { idp : $("#aksesoris").val(),jml :$("#qtyaksesoris").val(),harga :$("#hargaaksesoris").val(),diskon :$("#discaksesoris").val() },
        success: function(html) {
        $('#aksesoris').val("");
        $('#qtyaksesoris').val("");
        $('#hargaaksesoris').val("");
        $('#discaksesoris').val("");
        jq("#aksesoris_view").html(html);
        $("#PenjualanTotal").load('<?php echo $this->webroot; ?>Penjualans/jumlahtot');
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
        data: { idp : $("#service").val(),jml :$("#qtyservice").val(),harga :$("#hargaservice").val(),diskon :$("#discservice").val() },
        success: function(html) {
        $('#service').val("");
        $('#qtyservice').val("");
        $('#hargaservice').val("");
        $('#discservice').val("");
        jq("#service_view").html(html);
        $("#PenjualanTotal").load('<?php echo $this->webroot; ?>Penjualans/jumlahtot');
        }
        
        });}
        });
        
       
        
      $('#btn-show').on('click', function(){
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
function config_vendor(clicked) {
var $$e=jQuery.noConflict();
		bootbox.hideAll()
		var id = clicked.id;
		document.getElementById("vendor").value = id;																		 
}
</script>
<!--<script>
$(document).ready(function(){
$("#hit").click(function(){
$("#PenjualanTotal").load('<?php // echo $this->webroot; ?>Penjualans/jumlahtot');
});
});
</script>-->
<script type="text/javascript">
       $(document).ready(function() {
         $("#printe").click(function() {
             $("#diprin").print({
            globalStyles: true,
            mediaPrint: false,
            stylesheet: null,
            noPrintSelector: ".no-print",
            iframe: true,
            append: null,
            prepend: null,
            manuallyCopyFormValues: true,
            deferred: $.Deferred(),
            timeout: 250,
                title: null,
                doctype: '<!doctype html>'
    });
         });

     });
</script>
 <style>
@media print 
{
  @page { margin: 0; }
  body  { margin: 1.6cm;font-size:6px; }
}
 </style>
 
