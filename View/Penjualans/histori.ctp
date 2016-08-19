<div class="widget-header block-header margin-bottom-0 clearfix">
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
		<?php echo $this -> Form -> button('Lihat', array('id'=>'lihat','type' => 'submit', 'class' => 'btn btn-primary')); ?>
	</div>
</div>
<hr>
<div id="data">
	<table id="tbhistori" class="table">
	<thead>
	<tr>
			<th>Nomor Nota</th>
			<th>Tanggal</th>
			<th>Nama Pelanggan</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<!-- <?php foreach ($data as $data): ?>
	<tr>
		<td><?php echo h($data['a']['nomor']); ?>&nbsp;</td>
		<td><?php echo date("d/m/Y", strtotime($data['a']['created'])); ?>&nbsp;</td>
		<td><?php echo h($data['a']['nama']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-chevron-circle-right')) . " Detail", array( 'action' => 'detail', $data['a']['id']), array('title'=>'edit','escape' => false,'class'=>'btn btn-primary btn-xs')); ?> 
		</td>
	</tr>
<?php endforeach; ?> -->
	</tbody>
	</table>
</div>
<?php echo $this -> Html -> script(array('jquery-1.10.2')); ?>

<!-- <script type="text/javascript">
var jq=jQuery.noConflict();
	    jq( '#lihat' ).on( 'click', function() {
	    
	    	jq('#data').html('<div align="center">sedang memproses data...<br><img src="<?php echo $this -> webroot; ?>img/loading.gif" /></div>');
	    	var nm=jq("#nomor").val();
	    	var plg=jq("#pelanggan").val();
	    	var tgla=jq("#start").val();
	    	var tglb=jq("#end").val();
	    	jq('#data').load('<?php echo $this -> webroot; ?>Penjualans/rekaphistori?sEcho=1&iColumns=4&sColumns=%2C%2C%2C&iDisplayStart=0&iDisplayLength=10&mDataProp_0=Penjualan.nomor&sSearch_0=&bRegex_0=false&bSearchable_0=true&bSortable_0=true&mDataProp_1=Penjualan.created&sSearch_1=&bRegex_1=false&bSearchable_1=true&bSortable_1=true&mDataProp_2=Cus.nama&sSearch_2=&bRegex_2=false&bSearchable_2=true&bSortable_2=true&mDataProp_3=Penjualan.nomor&sSearch_3=&bRegex_3=false&bSearchable_3=true&bSortable_3=true&sSearch=&bRegex=false&iSortCol_0=0&sSortDir_0=asc&iSortingCols=1&_=1471490197175');
				// jq.ajax({
				// type: "POST",
				// url: "<?php echo $this -> webroot; ?>Penjualans/rekaphistori",
				// data: { 1:nm,2:tgla,3:tglb,4:plg },
				// success: function(e) {
				// // alert(JSON.stringify(e));
				// // alert(e);
				 // var json=e;
				 // alert(json)
				 // // jq("#data").html(html);
				// }
			// });
            //code
            return false;
        });
</script> -->
<div id="data2"></div>
