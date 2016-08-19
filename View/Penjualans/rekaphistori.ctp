<?php //$this->layout=false;?>
<!-- <div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Histori Penjualan</h3>
    </div>
</div>
<br>
<?php
// debug($data);
?>
<div class="widget-header block-header clearfix">
	<div class="btn-group btn-group-justified">
    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Tambah Penjualan</span>", array('controller' => 'Penjualans','action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-shopping-cart','aria-hidden'=>true)) . "&nbsp;<span>Daftar Penjualan Outstanding</span>", array('controller' => 'bahanbakuses'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-file-text-o')) . "&nbsp;<span>History Penjualan</span>", array('controller' => 'Penjualans','action' => 'histori'), array('escape' => false, 'class' => 'btn btn-danger')); ?> 
     </div>
</div>

<div class="pembelians form">
	<h4>Filter</h4>
<?php echo $this->Form->create('Penjualan', array('id'=>'j-forms-validation','class' => 'form-horizontal j-forms')); ?>
    <div class="form-group unit">
        <label class="col-md-2 control-label">Nomor Nota</label>
        <div class=" col-md-4">
            <?php echo $this->Form->input('nomor', array('id'=>'nomor','class' => 'form-control', 'label' => false)); ?>
        </div>
        <label class="col-md-2 control-label">Pelanggan</label>
        <div class=" col-md-4">
            <?php echo $this->Form->input('pelanggan', array('id'=>'pelanggan','class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>	
       <div class="form-group">
               <label class="col-md-2 control-label">Periode</label>
               <div class="col-md-4">
                  <div class="input-daterange input-group">
                   <input type="text" class="form-control" name="start" id="start"/>
                   <span class="input-group-addon">s/d</span>
                   <input type="text" class="form-control" name="end" id="end"/>
                  </div>
               </div>
       </div>	
       <div class="form-footer">
		<?php echo $this -> Form -> button('Lihat', array('id'=>'lihat','type' => 'button', 'class' => 'btn btn-primary')); ?>
	</div>
</div>
<hr-->
<div id="data">
	<table id="tbhistori" class="table">
	<thead>
	<tr>
			<th>Nomor Nota</th>
			<th>Tanggal</th>
			<th>Nama Pelanggan</th>
			<th class="actions">Aksi</th>
	</tr>
	</thead>
	<tbody>

	</tbody>
	</table>
		<?php
// 
		// echo $this -> Html -> script(array('lib/jquery', 'lib/jquery-migrate', 'lib/bootstrap', 'lib/jquery.ui', 'lib/jRespond', 'lib/nav.accordion', 'lib/hover.intent', 'lib/hammerjs', 'lib/jquery.hammer', 'lib/smoothscroll', 'lib/jquery.fitvids', 'lib/scrollup', 'lib/smoothscroll', 'lib/jquery.slimscroll', 'lib/jquery.syntaxhighlighter', 'lib/velocity', 'lib/smart-resize','lib/bootbox', 'lib/jquery.maskedinput','lib/jquery.form','lib/j-forms-validations','lib/additional-methods', 'lib/jquery-cloneya','lib/j-forms', 'lib/login-validation', 'apps'));
		// echo $this -> Html -> script(array('lib/jquery.dataTables','lib/dataTables.responsive','lib/dataTables.tableTools','lib/dataTables.bootstrap'));
		// echo $this -> fetch('script');
		?>
<?php echo $this -> Html -> script(array('jquery-1.10.2')); ?>

<script type="text/javascript">
// var jq=jQuery.noConflict();
		// jq("#tbrekaphistori").dataTable({
		// // oTable=$tb('#example').dataTable({
		// "sPaginationType" : "full_numbers",
        // "iDisplayLength": 10,
        // "bProcessing": true,
        // "bServerSide": true,
        // "sAjaxSource": "<?php echo $this->webroot;?>Penjualans/rekaphistori",
        // "sDom": 'frtip',
        // "aoColumns": [
            // {mData:"Penjualan.nomor"},
            // {mData:"Penjualan.created"},
            // {mData:"Cus.nama"},
            // {mData:"Penjualan.nomor"}
//          
        // ],
        // "aoColumnDefs" : [{
// 
				// "sWidth" : "10%",
				// "aTargets" : [3]
			// },{
// 
				// "sWidth" : "20%",
				// "aTargets" : [0,1]
			// },],
//         
//         
        // "fnCreatedRow": function(nRow, aData, iDataIndex){
            // // $tb('td:eq(3)',nRow).html("<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>");
            // jq('td:eq(3)',nRow).html('<a class="btn btn-primary btn-xs" href="<?php echo $this->webroot;?>Penjualans/detail/'+aData.Penjualan.id+'"><i class="fa fa-chevron-circle-right"></i>&nbsp;Detail</a>');
        // }
    // });
	    // jq( '#lihat' ).on( 'click', function() {
// 	    
	    	// jq('#data').html('<div align="center">sedang memproses data...<br><img src="<?php echo $this -> webroot; ?>img/loading.gif" /></div>');
	    	// var nm=jq("#nomor").val();
	    	// var plg=jq("#pelanggan").val();
	    	// var tgla=jq("#start").val();
	    	// var tglb=jq("#end").val();
				// jq.ajax({
				// type: "POST",
				// url: "<?php echo $this -> webroot; ?>Penjualans/rekaphistori",
				// data: { 1:tgla,2:tglb,3:nm,4:plg },
				// success: function(html) {
				// jq("#data").html(html);
				// }
			// });
            // //code
            // return false;
        // });
</script>
