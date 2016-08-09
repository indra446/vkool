<?php 
$this -> layout = false;
echo $this -> Html -> css(array('bootstrap', 'animate', 'components', 'widgets', 'plugins', 'pages', 'bootstrap-extend', 'responsive'));
?>
<style>
	.table {
		padding: 2px;
		font-size: 11px;
	}
	th {
		font-weight: bold;
	}
	
</style>
<div class="w-section-header">
                        <h2><?php echo h($vendor['Vendor']['nama_vendor']); ?></h2>
                    </div>                              
                        <p><?php echo h($vendor['Vendor']['alamat']); ?></p>
                        
                      <table class="table" width="70%" style="margin-left: 5%;margin-right: 5%">
                                     
				                       <?php foreach ($vendor['PicVendor'] as $d){?> 
                                      <tr>
									    <th class="info" width="15%"><?php echo $d['pic']; ?></th>
									    <td >: <?php echo $d['telp']; ?></td>
									  </tr>
				                        <?php } ?>
                                      <tr>
									    <th class="info">Bank</th>
									    <td >: <?php echo h($vendor['Bank']['nama']) . " ( " . $vendor['Vendor']['norek'] . " )"; ?></td>
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
