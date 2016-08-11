<?php //debug($cek);?>
<script>
    function startCalc() {
        interval = setInterval("calc()", 1);
    }
    function numberWithCommas(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
    function calc() {
        var a = document.getElementById('sistem').value;
        d = a.replace(/,/g, '');
        b = document.getElementById('gudang').value;
        e = b.replace(/,/g, '');
        var k = e-d;
        document.getElementById('selisih').value = numberWithCommas(k);
    }

    function stopCalc() {
        clearInterval(interval);
    }
</script>
<div class="products view">
<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-angle-double-left')) . " back", array('action' => 'stock'), array('escape' => false, 'class' => 'btn btn-info')); ?> 
                <br><br>
	<div class="w-section-header">
                        <h2>Penyesuaian Inventory</h2>
                    </div>             	       <dl class="dl-horizontal">
                        <dt>ID Produk</dt>
                        <dd><?php echo h($product['Product']['id']); ?></dd>
                        <dt>Nama Produk</dt>
                        <dd><?php echo h($product['Product']['nama_produk']); ?></dd>
                        <dt>Jenis Produk</dt>
                        <dd><?php
							if ($product['Category']['parent_id'] != NULL) {echo h($product['Category']['ParentCategory']['kategori']) . " > ";
							} echo $product['Category']['kategori'] . " ( " . $product['Product']['satuan'] . " )";
 ?></dd>
                        <dd><?php
						if ($product['Product']['dimensi'] != NULL) { $dimensi = explode(",", $product['Product']['dimensi']);
							echo $dimensi[0] . " x " . $dimensi[1] . " mm ( Luas = " . number_format($dimensi[0] * $dimensi[1], 0, ',', '.') . " mm2)";
						}
						?></dd>
                        <dt>Deskripsi</dt>
                        <dd><?php echo h($product['Product']['deskripsi']); ?></dd>
                     </dl>
                  <hr>  
     <div class="products form">
	<?php echo $this -> Form -> create('Product', array('id' => 'j-forms-validation', 'class' => 'form-horizontal j-forms')); ?>
    <div class="form-group unit">
        <label class="col-md-2 control-label">Jumlah Stok Sistem</label>
        <div class=" col-md-2">
			<div class="widget right-10">
				<div class="input">
				<?php echo $this -> Form -> input('jml_sistem', array('id'=>'sistem','disabled'=>true,'class' => 'form-control', 'label' => false, 'value' => $cek[0][0]['sisa'])); ?>
				</div>
				<label for="$" class="addon adn-200 adn-right">&nbsp;<?php echo $cek[0]['products']['satuan'];?>&nbsp;</label>
			</div>
        </div>
    </div>		
    <div class="form-group unit">
        <label class="col-md-2 control-label">Jumlah Stok Gudang</label>
        <div class=" col-md-2">
			<div class="widget right-10">
				<div class="input">
				<?php echo $this -> Form -> input('jml', array('onFocus'=>'startCalc();','onBlur'=>'stopCalc();','id'=>'gudang','class' => 'form-control', 'label' => false,'value'=>$cek[0][0]['jml'])); ?>
				</div>
				<label for="$" class="addon adn-200 adn-right">&nbsp;<?php echo $cek[0]['products']['satuan'];?>&nbsp;</label>
			</div>
        </div>
    </div>	
    <div class="form-group unit">
        <label class="col-md-2 control-label">Selisih</label>
        <div class=" col-md-2">
			<div class="widget right-10">
				<div class="input">
				<?php echo $this -> Form -> input('selisih', array('readonly'=>true,'id'=>'selisih','class' => 'form-control', 'label' => false)); ?>
				</div>
				<label for="$" class="addon adn-200 adn-right">&nbsp;<?php echo $cek[0]['products']['satuan'];?>&nbsp;</label>
			</div>
        </div>
    </div>	
	<div class="form-group">
		<label class="col-md-2 control-label">Alasan perubahan jumlah stok</label>
		<div class="input col-md-8">
			<?php echo $this -> Form -> input('alasan', array('type'=>'textarea','id'=>'textarea','class' => 'form-control', 'label' => false)); ?>
		</div>
	</div>		<div class="form-footer">
		<?php echo $this -> Form -> button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
	</div>
	<?php echo $this -> Form -> end(); ?>
</div> 
</div>
