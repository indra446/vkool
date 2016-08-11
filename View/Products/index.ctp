<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Produk</h3>
    </div>

</div>
<br>
<div class="widget-header block-header clearfix">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Produk</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 

</div>
<div class="widget-container">

	<table id="tb_product" class="table foo-data-table">
	<thead>
	<tr>
			<th>ID</th>
			<th>Nama Produk</th>
			<th>Kategori</th>
			<th>Satuan</th>
			<th>Aktif</th>
        	<th>Aksi</th>
	</tr>
	</thead>
	<tbody>

	</tbody>
	</table>

</div>
