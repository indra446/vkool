<!--<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script>--> 

<h4>Nomor Nota: <?php echo $data[0]['penjualans']['nomor']?></h4>


<table class="table table-striped">
<thead>
	<tr>
		<th >Tanggal</th>
		<th width="15%">Jumlah Bayar</th>
		<th width="5%">Nota</th>

	</tr>
</thead>
<tbody>
	<?php $total="";foreach ($data as $d){?>
		<tr>
			<td><?php echo date("d/m/Y", strtotime($d['bayars']['created'])); ?></td>
			<td align="right"><?php echo number_format($d['bayars']['bayar'],0,',','.')?></td>
			<td>	
			<a id="<?php echo $d['bayars']['id']; ?>" onClick="configurator(this)" href="#myModal" role="button" class="btn btn-xs btn-danger" data-toggle="modal" title="cetak nota"><li class="fa fa-folder-open-o"></li></a>
				<?php //echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-print')) . "", array( 'action' => 'cetaknota', $d['bayars']['id']), array('title'=>'cetak nota','escape' => false,'class'=>'btn btn-danger btn-xs')); ?> 
			</td>
		</tr>
	<?php
			$total +=$d['bayars']['bayar'];}
 ?>
</tbody>
<tfoot>
	<tr>
		<th>TOTAL</th>
		<td align="right"><?php echo number_format($total,0,',','.')?></td>
		<th></th>
	</tr>
	<tr>
		<th>Kurang Bayar</th>
		<td align="right">0</td>
		<th></th>
	</tr>
</tfoot>	
</table>
				<div class="widget-header block-header clearfix">
					<div class="btn-group btn-group">
				    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-chevron-circle-left ')) . "&nbsp;<span>Back</span>", array('controller' => 'Penjualans', 'action' => 'detail/'.$data[0]['bayars']['id_penjualan']), array('escape' => false, 'class' => 'btn btn-primary')); ?> 
				     </div>
				</div> 
<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><a href="<?php echo $_SERVER["REQUEST_URI"]; ?>"><span aria-hidden="true">&times;</span></a><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Preview Nota</h4>
      </div>
      <div class="modal-body">
<script type="text/javascript">
                                                        var $$e=jQuery.noConflict();
                  
															function configurator(clicked) {
																// alert(clicked.id);
																var id = clicked.id;
																  $$e("#liat").html("<div align=center> loading...<br><img src='<?php echo $this->webroot;?>img/loading.gif' /></div>");  
																 $$e("#liat").load("<?php echo $this->webroot;?>Bayars/nota/"+id);
																
																 
															}
											
														</script>
														<div id="liat"></div>
      </div>
      <div class="modal-footer">
       <button class="btn btn-info" onclick="printDiv('liat')" aria-hidden="true">Print</button>
       <!--<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>-->
       <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><a href="<?php echo $_SERVER["REQUEST_URI"]; ?>">Close</a></button>

      </div>
    </div>
  </div>
</div>	
	<?php
		echo $this -> Html -> script(array('lib/jquery.printElement.min'));
	?>
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
 <style>
@media print 
{
  @page { margin: 0; }
  body  { margin: 1.6cm;font-size:6px; }
}
 </style>			