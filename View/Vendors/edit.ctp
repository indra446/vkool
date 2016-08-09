<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Edit Vendor</h3>
    </div>
</div>
<br>
<div class="vendors form">
    <?php echo $this->Form->create('Vendor', array('class' => 'form-horizontal j-forms')); ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Nama Vendor</label>
        <div class=" col-md-8">
            <?php
            echo $this->Form->input('id');
            echo $this->Form->input('nama_vendor', array('class' => 'form-control', 'label' => false));
            ?>
        </div>
    </div>	
    <div class="form-group">
        <label class="col-md-2 control-label">Alamat Vendor</label>
        <div class=" col-md-8">
            <?php echo $this->Form->textarea('alamat', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>	
    <div class="form-group">
        <label class="col-md-2 control-label">No Telp</label>
        <div class="form-content col-md-8">
            <!-- start cloned right side buttons element -->
            <div class="clone-rightside-btn-1">
                <?php foreach ($edit['PicVendor'] as $d) { ?>
                    <div class="j-row toclone-widget-right toclone">
                        <div class="span6 unit">
                            <div class="input">
                                <?php echo $this->Form->input('telp', array('value' => $d['telp'], 'name' => 'data[Vendor][telp][]', 'placeholder' => 'telepon', 'class' => 'form-control', 'label' => false)); ?>
                            </div>
                        </div>
                        <div class="span6 unit">
                            <div class="input">
                                <?php echo $this->Form->input('pic', array('value' => $d['pic'], 'name' => 'data[Vendor][pic][]', 'placeholder' => 'pic', 'class' => 'form-control', 'label' => false)); ?>
                            </div>
                        </div>
                        <button type="button" class="primary-btn clone-btn-right clone">
                            <i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="secondary-btn clone-btn-right delete">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                <?php } ?>
            </div>
            <!-- end cloned right side buttons element -->		</div>
    </div>	
    <div class="form-group unit">
        <label class="col-md-2 control-label">Nomor Rekening</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('norek', array('class' => 'form-control', 'label' => false, 'required' => true)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Bank</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('bank_id', array('class' => 'form-control', 'label' => false, 'options' => $banks, 'empty' => 'kosong')); ?>
        </div>
    </div>
    <div class="form-group unit">
        <label class="col-md-2 control-label">Keterangan</label>
        <div class=" col-md-8">
            <?php echo $this->Form->textarea('ket', array('class' => 'form-control', 'label' => false, 'required' => true)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Aktifkan</label>
        <div class=" col-md-8">
            <label class="col-md-8 checkbox-toggle">
                <input type="hidden" name="data[Vendor][aktif]"  value="0" />
                <input type="checkbox" name="data[Vendor][aktif]" value="1" <?php
                if ($edit['Vendor']['aktif'] == 1) {
                    echo "checked";
                }
                ?>>
                <i></i></label>		</div>		
    </div>                             
    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>


