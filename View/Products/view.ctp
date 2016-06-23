<?php //debug($product); ?>
<div class="products view">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-angle-double-left')) . " back", array( 'action' => 'stock'), array('escape' => false,'class'=>'btn btn-info')); ?> 
                    <dl class="dl-horizontal">
                        <dt>ID Produk</dt>
                        <dd><?php echo h($product['Product']['id']); ?></dd>
                        <dt>Nama Produk</dt>
                        <dd><?php echo h($product['Product']['nama_produk']); ?></dd>
                        <dt>Jenis Produk</dt>
                        <dd><?php if($product['Category']['parent_id']!=NULL){echo h($product['Category']['ParentCategory']['kategori']) . " > ";} echo $product['Category']['kategori'] . " ( " . $product['Product']['satuan'] . " )"; ?></dd>
                        <dd><?php
							if ($product['Product']['dimensi'] != NULL) { $dimensi = explode(",", $product['Product']['dimensi']);
								echo $dimensi[0] . " x " . $dimensi[1] . " mm ( Luas = " . number_format($dimensi[0] * $dimensi[1], 0, ',', '.') . " mm2)";
							}
						?></dd>
                        <dt>Deskripsi</dt>
                        <dd><?php echo h($product['Product']['deskripsi']); ?></dd>
                     </dl>
                  <hr>   
</div>
