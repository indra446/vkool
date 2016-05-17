<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Vendor</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">

	<table class="table data-tbl">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('nama_vendor'); ?></th>
			<th><?php echo $this->Paginator->sort('alamat'); ?></th>
			<th><?php echo $this->Paginator->sort('aktif'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($vendors as $vendor): ?>
	<tr>
		<td><?php echo h($vendor['Vendor']['nama_vendor']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['alamat']); ?>&nbsp;</td>
		<td><?php if($vendor['Vendor']['aktif']==1){ echo "<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>";}else{echo "<button class='btn btn-danger  btn-xs'><i class='zmdi zmdi-minus-circle-outline zmdi-hc-fw'></i></button>";} ?>&nbsp;</td>
		<td class="actions">
            <a onClick="configurator(this)" href="#"  class="btn btn-info btn-xs" id="<?php echo h($vendor['Vendor']['id']); ?>"><i class="fa fa-folder-open"></i></a>
			<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-edit')) . "", array( 'action' => 'edit', $vendor['Vendor']['id']), array('escape' => false,'class'=>'btn btn-primary btn-xs')); ?> 
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $vendor['Vendor']['id']),  array('escape' => false,'class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $vendor['Vendor']['id'])); ?>
		</td>

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>
<?php //echo $this -> Html -> script(array('lib/bootbox')); ?>
<script type="text/javascript">

function configurator(clicked) {
var $$e=jQuery.noConflict();
		// alert(clicked.id);
	// $$e("#isi").load("<?php echo $this->webroot;?>Pegawais/view/"+id);
		var id = clicked.id;
	 bootbox.dialog({
        title: "Detail Vendor",
        message: "<embed width='100%' height='400px' src='<?php echo $this->webroot;?>Vendors/view/"+id+"'>"
    });
		// $$e("#liat").html("<div align=center> loading...<br><img src='<?php echo $this->webroot;?>img/ajax-loader.gif' /></div>");  
																 
}



	
</script>