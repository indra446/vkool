<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Penjualan</h3>
    </div>
</div>
<br>
<div class="widget-header block-header clearfix">
	<div class="btn-group btn-group-justified">
    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Tambah Penjualan</span>", array('controller' => 'Penjualans','action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-shopping-cart','aria-hidden'=>true)) . "&nbsp;<span>Daftar Penjualan Outstanding</span>", array('controller' => 'bahanbakuses'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-file-text-o')) . "&nbsp;<span>History Penjualan</span>", array('controller' => 'Penjualans','action' => 'histori'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
     </div>
</div>
<div class="widget-container">
    <table id="tbjual" class="table foo-data-table">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Pelanggan</th>
                <th>Merk</th>
                <th>Tahun</th>
                <th>No Polisi</th>
                <th>No Mesin</th>
                <th>No Rangka</th>
                <th class="actions">Aksi</th>
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
      	Anda yakin akan menghapus data penjualan?
      	<h4 id="isidel"></h4>
		<script type="text/javascript">
               var $$e=jQuery.noConflict();
                  
						function deljual(clicked) {
						var id = clicked.id;
							 $$e("#liatdel").load("<?php echo $this->webroot;?>Penjualans/hapus/"+id);
							 $$e("#isidel").load("<?php echo $this->webroot;?>Penjualans/isidel/"+id);
						}
											
		</script>
      </div>
      <div class="modal-footer">
       
      	<div id="liatdel"></div>

      </div>
    </div>
  </div>
</div>
