<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Bahan Baku</h3>
    </div>
</div>
<br>
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
        <div class="input text"><input name="data[bahanbakuses][nota]" id="produk" class="form-control"  value="<?php if(!empty($nota)) { echo $nota;} ?>" type="text">
        </div>     
    </div>
    <label class="col-md-2 control-label">Pelanggan</label>
    <div class="col-xs-4 unit " >
        <input name="data[bahanbakuses][pelanggan]"  id="potitem" class="form-control" value="<?php if(!empty($nama)){ echo $nama;} ?>"  maxlength="100" type="text" > 
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Periode</label>
    <div class="col-md-7">
        <div class="input-daterange input-group">
            <input type="text" class="form-control" name="data[bahanbakuses][awal]" id="start"/>
            <span class="input-group-addon">s/d</span>
            <input type="text" class="form-control" name="data[bahanbakuses][akhir]" id="end"/>
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
                        <a href="<?php echo $this->webroot;?>bahanbakuses/view/<?php echo $id;?>/ueurwoe" class="btn btn-primary btn-xs">Bayar</a>
                        <?php // echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-chevron-circle-right')) . " Detail", array( 'action' => 'detail', $id), array('title'=>'edit','escape' => false,'class'=>'btn btn-warning btn-xs')); ?> 
                        <?php // echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-chevron-circle-right')) . " Detail", array( 'action' => 'detail', $id), array('title'=>'edit','escape' => false,'class'=>'btn btn-warning btn-xs')); ?> 
                             <?php
                        echo $this->Js->link("Detail", "/bahanbakuses/popdetail/" .$id, array('update' => '#view',
                            'htmlAttributes' => array(
                                'data-toggle' => 'modal',
                                'data-target' => '#viewModal' . $id,
                                'class' => 'btn btn-warning btn-xs'
                        )));
                        ?>
                        <!----modal edit-->
                        <div class="modal fade" id="viewModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php }else{?>
                        <a href="<?php echo $this->webroot;?>bahanbakuses/add/<?php echo $id;?>/ueurwoe" class="btn btn-primary btn-xs">Input Bahan Baku</a>
                        <a href="<?php echo $this->webroot;?>bahanbakuses/view/<?php echo $id;?>/ueurwoe" class="btn btn-primary btn-xs">Bayar</a>
                        <?php
                        echo $this->Js->link("Detail", "/bahanbakuses/popdetail/" .$id, array('update' => '#view',
                            'htmlAttributes' => array(
                                'data-toggle' => 'modal',
                                'data-target' => '#viewModal' . $id,
                                'class' => 'btn btn-warning btn-xs'
                        )));
                        ?>
                        <!----modal edit-->
                        <div class="modal fade" id="viewModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

