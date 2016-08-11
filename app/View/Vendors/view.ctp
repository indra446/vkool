<?php 
$this -> layout = false;
echo $this -> Html -> css(array('bootstrap', 'animate', 'components', 'widgets', 'plugins', 'pages', 'bootstrap-extend', 'responsive'));
?>
<style>
.table{
	padding:2px;
}
	th {
		font-weight: bold;
	}
	body{
	font-size:8px!important;
	}
</style>
                                <table class="table">
                                      <tr>
									    <th width='10%' class="info">Nama</th>
									    <td>: <?php echo h($vendor['Vendor']['nama_vendor']); ?></td>
									  </tr>
                                      <tr>
									    <th class="info">Alamat</th>
									    <td >: <?php echo h($vendor['Vendor']['alamat']); ?></td>
									  </tr>
				                       <?php foreach ($vendor['PicVendor'] as $d){?> 
                                      <tr>
									    <th class="info"><?php echo $d['pic']; ?></th>
									    <td >: <?php echo $d['telp']; ?></td>
									  </tr>
				                        <?php } ?>
                                      <tr>
									    <th class="info">Bank</th>
									    <td >: <?php echo h($vendor['Bank']['nama'])." ( ".$vendor['Vendor']['norek']." )"; ?></td>
									  </tr>  
                                      <tr>
									    <th class="info">Ket</th>
									    <td >: <?php echo h($vendor['Vendor']['ket']); ?></td>
									  </tr>  
								  </table>
<address>
                        <strong></strong><br>

</address>
<?php //debug($vendor) ?>
