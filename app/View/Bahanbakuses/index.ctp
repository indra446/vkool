<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script>   
				<div class="widget-header block-header clearfix">
					<div class="btn-group btn-group-justified">
				    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Tambah Penjualan</span>", array('controller' => 'Penjualans','action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
				    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-shopping-cart','aria-hidden'=>true)) . "&nbsp;<span>Daftar Penjualan Outstanding</span>", array('controller' => 'bahanbakuses'), array('escape' => false, 'class' => 'btn btn-danger')); ?> 
				    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-file-text-o')) . "&nbsp;<span>History Penjualan</span>", array('controller' => 'Penjualans','action' => 'histori'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
				     </div>
				</div>    
<?php echo $this->Form->create('Bahanbakuses',array('class' => 'form-horizontal j-forms')); ?>   
<div class="form-group">
    <h3>Penjualan</h3>
    <label class="col-md-2 control-label">Nomer Nota</label>
    <div class=" col-md-4 unit">
        <div class="input text"><input name="data[bahanbakuses][nota]" id="produk" class="form-control ui-autocomplete-input"  type="text" autocomplete="off" value="<?php echo $nota;?>">
        </div>     
    </div>
    <label class="col-md-2 control-label">Pelanggan</label>
    <div class="col-xs-4 unit " >
        <input name="data[bahanbakuses][pelanggan]"  id="potitem" class="form-control"   maxlength="100" type="text" value="<?php echo $nama;?>"> 
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Periode</label>
    <div class="col-md-7">
        <div class="input-daterange input-group">
            <input type="text" readonly class="form-control" name="data[bahanbakuses][awal]" id="start" value="<?php echo $tgl_awal;?>"/>
            <span class="input-group-addon">s/d</span>
            <input type="text" readonly class="form-control" name="data[bahanbakuses][akhir]" id="end" value="<?php echo $tgl_akhir;?>"/>
        </div>
    </div>
</div>
<div class="form-footer">
        <?php echo $this->Form->button('Filter', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
<div class="widget-container">
    <table class="table data-tbl">
        <thead>
            <tr>
                <th>Nomer Nota</th>
                <th>Tanggal</th>
                <th>Nama Pelanggan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bahanbakuses as $bahanbakus):   ?>
                <tr>
                    <?php $id=($bahanbakus['penjualans']['id']); ?>
                    <td><?php echo $bahanbakus['penjualans']['nomor']; ?>&nbsp;</td>
                    <td><?php echo substr($bahanbakus['penjualans']['created'],0,10); ?>&nbsp;</td>
                    <td><?php echo h($bahanbakus['customers']['nama']); ?>&nbsp;</td>
                    <td><?php $b=($bahanbakus['bahanbakus']['id']); if(!empty($b)){?>
                        <a href="<?php echo $this->webroot;?>bahanbakuses/view/<?php echo $id;?>/ueurwoe" class="btn btn-primary btn-xs">Detail</a>
                        <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-chevron-circle-right')) . " Detail", array( 'action' => 'detail', $id), array('title'=>'edit','escape' => false,'class'=>'btn btn-warning btn-xs')); ?> 
                        <?php }else{?>
                        <a href="<?php echo $this->webroot;?>bahanbakuses/add/<?php echo $id;?>/ueurwoe" class="btn btn-primary btn-xs">Input Bahan Baku</a>
                        <a href="<?php echo $this->webroot;?>bahanbakuses/view/<?php echo $id;?>/ueurwoe" class="btn btn-primary btn-xs">Detail</a>
                        <?php //echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-chevron-circle-right')) . " Detail", array( 'action' => 'detail', $id), array('title'=>'edit','escape' => false,'class'=>'btn btn-warning btn-xs')); ?> 
                        <?php } ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

