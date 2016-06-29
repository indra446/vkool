<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script>
<script type="text/javascript">
    $(function() {
        $("#BahanbakusesIdTeknisi").autocomplete({
            source: "<?php echo $this->webroot; ?>karyawans/ajax",
            minLength: 1,
        });
    });
</script>
<div class="bahanbakuses form">
    <?php echo $this->Form->create('Bahanbakuses',array('class' => 'form-horizontal j-forms')); ?>      
    <div class="form-group">
        <label class="col-md-2 control-label">Waktu</label>
        <label class="col-md-2 control-label">:</label>
        <div class=" col-md-2">
            <p style="margin-top: 7px;"> <?php echo Date('Y-m-d H:i:s'); ?></p>
        </div>
    </div>
    <div class="form-group">
        <!--<h3>Depan</h3>-->
        <div class="clone-rightside-btn-1 cloneya-wrap">
            <div class="j-row toclone-widget-right toclone cloneya">
                <div class="span2 unit"></div>
                <div class="span8 unit">
                    <label class="label">Depan</label>
                    <div class="widget right-10">
                        <div class="input">
                            <?php echo $this->Form->input('depan', array('class' => 'form-control', 'label' => false,'name'=>'data[Bahanbakuses][product_id][]','options' => $produks, 'empty' => '>> Pilih Merk <<')); ?> 
                            <?php echo $this->Form->input('ket', array('class' => 'form-control', 'label' => false,'value'=>'depan','type'=>'hidden','name'=>'data[Bahanbakuses][ket][]'));?>
                        </div>
                        <!--                        <button type="submit" class="addon-btn adn-50 adn-right">
                                                    <i class="fa fa-search btn-show" id="btn-show"></i>
                                                </button>-->
                    </div>
                </div>
                <button type="button" class="primary-btn clone-btn-right clone" style="    margin: 26px 49px;">
                    <i class="fa fa-plus"></i>
                </button>
                <button type="button" class="secondary-btn clone-btn-left delete">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <!--<h3>Samping</h3>-->
        <div class="clone-rightside-btn-1 cloneya-wrap">
            <div class="j-row toclone-widget-right toclone cloneya">
                <div class="span2 unit"></div>
                <div class="span8 unit">
                    <label class="label">Samping</label>
                    <div class="widget right-10">
                        <div class="input">
                            <?php echo $this->Form->input('samping', array('class' => 'form-control', 'label' => false,'name'=>'data[Bahanbakuses][product_id][]','options' => $produks, 'empty' => '>> Pilih Merk <<')); ?>
                            <?php echo $this->Form->input('ket', array('class' => 'form-control', 'label' => false,'value'=>'samping','type'=>'hidden','name'=>'data[Bahanbakuses][ket][]'));?>
                        </div>
                        <!--                        <button type="submit" class="addon-btn adn-50 adn-right">
                                                    <i class="fa fa-search btn-show" id="btn-show"></i>
                                                </button>-->
                    </div>
                </div>
                <button type="button" class="primary-btn clone-btn-right clone" style="    margin: 26px 49px;">
                    <i class="fa fa-plus"></i>
                </button>
                <button type="button" class="secondary-btn clone-btn-left delete">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <!--<h3>Belakang</h3>-->
        <div class="clone-rightside-btn-1 cloneya-wrap">
            <div class="j-row toclone-widget-right toclone cloneya">
                <div class="span2 unit"></div>
                <div class="span8 unit">
                    <label class="label">Belakang</label>
                    <div class="widget right-10">
                        <div class="input">
                            <?php echo $this->Form->input('blkg', array('class' => 'form-control', 'label' => false,'name'=>'data[Bahanbakuses][product_id][]','options' => $produks, 'empty' => '>> Pilih Merk <<')); ?>  
                            <?php echo $this->Form->input('ket', array('class' => 'form-control', 'label' => false,'value'=>'belakang','type'=>'hidden','name'=>'data[Bahanbakuses][ket][]'));?>
                        </div>
                        <!--                        <button type="submit" class="addon-btn adn-50 adn-right">
                                                    <i class="fa fa-search btn-show" id="btn-show"></i>
                                                </button>-->
                    </div>
                </div>
                <button type="button" class="primary-btn clone-btn-right clone" style="    margin: 26px 49px;">
                    <i class="fa fa-plus"></i>
                </button>
                <button type="button" class="secondary-btn clone-btn-left delete">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div class="form-group">
        <h3>SISA</h3>
        <div class="clone-rightside-btn-1 cloneya-wrap">
            <div class="j-row toclone-widget-right toclone cloneya">
                <div class="span2 unit"></div>
                <div class="span4 unit">
                    <label class="label">Nama</label>
                    <div class="widget right-10">
                        <div class="input">
                            <?php echo $this->Form->input('sisa', array('class' => 'form-control', 'label' => false,'name'=>'data[Bahanbakuses][sisa][]','options' => $produks, 'empty' => '>> Pilih Merk <<')); ?>                                       
                            <?php // echo $this->Form->input('ket', array('class' => 'form-control', 'label' => false,'value'=>'sisa','type'=>'hidden','name'=>'data[Bahanbakuses][ketsisa][]'));?>
                        </div><input type="hidden" value="sisa" name="data[Bahanbakuses][ketsisa][]">
                        <!--                        <button type="submit" class="addon-btn adn-50 adn-right">
                                                    <i class="fa fa-search btn-show" id="btn-show"></i>
                                                </button>-->
                    </div>
                </div>
                <div class="span2 unit">
                    <label class="label">Dimensi</label>
                    <div class="widget right-10">
                        <div class="input">
                            <!--<input class="form-control" name="data[DetailPenjualan][harga][]" type="number">-->
                            <?php echo $this->Form->input('dm1', array('class' => 'form-control', 'label' => false,'type'=>'number','name'=>'data[Bahanbakuses][dm1][]'));?>
                        </div>
                    </div>
                </div>
                <div class="span2 unit">
                    <label class="label">.</label>
                    <div class="widget right-10">
                        <div class="input">
                        <?php echo $this->Form->input('dm2', array('class' => 'form-control', 'label' => false,'type'=>'number','name'=>'data[Bahanbakuses][dm2][]'));?>
                        </div>
                    </div>
                </div>

                <button type="button" class="primary-btn clone-btn-right clone" style="    margin: 26px 49px;">
                    <i class="fa fa-plus"></i>
                </button>
                <button type="button" class="secondary-btn clone-btn-left delete">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="col-md-2 control-label">Teknisi</label>
        <div class=" col-md-8">
            <?php echo $this->Form->input('id_teknisi', array('class' => 'form-control', 'label' => false)); ?>
        </div>
    </div>
    <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>

