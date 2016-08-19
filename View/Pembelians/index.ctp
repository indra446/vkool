
<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Pembelian</h3>
    </div>
</div>
<br>
<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Tambah Pembelian</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">

	<table id="tb_beli" class="table foo-data-table">
	<thead>
	<tr>
			<th>Nomor</th>
			<th>Tanggal Transaksi</th>
			<th>Vendor</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	
	</tbody>
	</table>

</div>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
      </div>
      <div class="modal-body">
      	Anda yakin akan menghapus data pembelian?
      	<h4 id="isidel"></h4>
		<script type="text/javascript">
               var $$e=jQuery.noConflict();
                  
						function config_del(clicked) {
						var id = clicked.id;
							 $$e("#liatdel").load("<?php echo $this->webroot;?>Pembelians/hapus/"+id);
							 $$e("#isidel").load("<?php echo $this->webroot;?>Pembelians/isidel/"+id);
						}
											
		</script>
      </div>
      <div class="modal-footer">
       
      	<div id="liatdel"></div>

      </div>
    </div>
  </div>
</div>
<!-- <script type="text/javascript">
	// var oTable;
	var $tb = jQuery.noConflict();
	$tb( document ).ready(function() {
		$tb("#tb_beli").dataTable({
		// oTable=$tb('#example').dataTable({
		"sPaginationType" : "full_numbers",
        "iDisplayLength": 10,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "<?php echo $this->webroot;?>Pembelians/index",
        "sDom": 'frtip',
        "aoColumns": [
            {mData:"Pembelian.nomor"},
            {mData:"Pembelian.tgl_transaksi"},
            {mData:"Vendor.nama_vendor"},
            {mData:"Pembelian.nomor"}
         
        ],
        "aoColumnDefs" : [{

				"sWidth" : "10%",
				"aTargets" : [3]
			},{

				"sWidth" : "15%",
				"aTargets" : [0,1]
			},],
        
        
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            // $tb('td:eq(3)',nRow).html("<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>");
            $tb('td:eq(3)',nRow).html('<a class="btn btn-primary btn-xs" href="<?php echo $this->webroot;?>Pembelians/view/'+aData.Pembelian.nomor+'"><i class="fa fa-folder-open"></i></a><a id="'+aData.Pembelian.nomor+'" onClick="config_del(this)" href="#myModal" role="button" class="btn btn-xs btn-danger" data-toggle="modal"><i class="fa fa-trash-o"></i></a>');
        }
    });
 });
</script> -->