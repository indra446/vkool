<script src="<?php echo $this->webroot; ?>js/jq/jquery-1.10.2.js"></script>
<script src="<?php echo $this->webroot; ?>js/jq/jquery-ui.js"></script>
<script type="text/javascript">
    $(function () {
        $("#namane").autocomplete({
            source: "auto",
            minLength: 1,
            select: function (event, data) {
                $('input[name=hp]').val(data.item.hp);
                $('textarea[name=alamat]').val(data.item.alamat);
//                document.getElementById('hp').readOnly = true;
//                document.getElementById('alamat').readOnly = true;
            }
        });
        $("#model").autocomplete({
            source: "model",
            minLength: 2,
        });
        
    });
</script>
<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap">
            <div class="widget-container margin-top-0">
                <div class="widget-content">
                    <form action="php/demo.php" method="post" class="j-forms j-multistep" id="j-forms" novalidate>
                        <!-- end /.header-->
                        <div class="form-content">
                            <!-- start steps -->
                            <div class="wizard-breadcrumb default-style">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 step">
                                        <div class="steps">
                                            <span class="step-number">Step 1</span>
                                            <p>Tambah Pelanggan Baru</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 step">
                                        <div class="steps">
                                            <span class="step-number">Step 2</span>
                                            <p>Input Pesanan</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 step">
                                        <div class="steps">
                                            <span class="step-number">Step 3</span>
                                            <p>Comments</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end steps -->
                            <fieldset>
                                <!-- start name -->
                                <div class="unit">
                                    <label class="label">Nama Pelanggan</label>
                                    <div class="input">
                                        <label class="icon-right" for="name">
                                            <i class="fa fa-user"></i>
                                        </label>
                                        <input type="text" id="namane" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 unit">
                                        <label class="label">Nomor Telepon</label>
                                        <div class="input">
                                            <label class="icon-right" for="phone">
                                                <i class="fa fa-phone"></i>
                                            </label>
                                            <input type="text"  placeholder="Nama" class="form-control" name="hp" id="hp">
                                        </div>
                                    </div>
                                    <div class="col-md-4 unit">
                                    </div>
                                </div>
                                <!-- end name -->
                                <!-- start email phone -->
                                <div class="row">
                                    <div class="col-md-8 unit">
                                    </div>
                                    <div class="col-md-8 unit">
                                        <label class="label">Alamat</label>
                                        <div class="input">
                                            <label class="icon-right" for="email">
                                                <i class="fa fa-envelope-o"></i>
                                            </label>
                                            <!--<textarea class="form-control" placeholder="Alamat"  name="alamat" id="alamat"></textarea>-->
                                            <!--<input type="text"   placeholder="Nama" class="form-control" name="alamat">-->
                                            <?php echo $this->Form->input('alamat', array('class' => 'form-control', 'label' => false,'name'=>'alamat','type'=>'textarea')); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 unit">
                                    </div>
                                    <div class="col-md-8 unit">
                                        <label class="label">Merk</label>
                                        <div class="input">
                                            <label class="icon-right" for="email">
                                                <i class="fa fa-envelope-o"></i>
                                            </label>
                                            <?php // echo $this->Form->input('merk_id', array('class' => 'form-control', 'label' => false)); ?>
                                            <?php echo $this -> Form -> input('merk_id', array('class'=>'form-control select2','options'=>$merks,'empty' => '>> Pilih Merk <<', 'label' => false,'class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 unit">
                                    </div>
                                    <div class="col-md-8 unit">
                                        <label class="label">Model</label>
                                        <div class="input">
                                            <label class="icon-right" for="email">
                                                <i class="fa fa-envelope-o"></i>
                                            </label>
                                            <?php echo $this->Form->input('model', array('class' => 'form-control', 'label' => false)); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 unit">
                                    </div>
                                    <div class="col-md-8 unit">
                                        <label class="label">Tahun</label>
                                        <div class="input">
                                            <label class="icon-right" for="email">
                                                <i class="fa fa-envelope-o"></i>
                                            </label>
                                            <?php echo $this->Form->input('thn', array('class' => 'form-control', 'label' => false)); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 unit">
                                    </div>
                                    <div class="col-md-8 unit">
                                        <label class="label">No Mesin</label>
                                        <div class="input">
                                            <label class="icon-right" for="email">
                                                <i class="fa fa-envelope-o"></i>
                                            </label>
                                            <?php echo $this->Form->input('nomesin', array('class' => 'form-control', 'label' => false)); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 unit">
                                    </div>
                                    <div class="col-md-8 unit">
                                        <label class="label">No Rangka</label>
                                        <div class="input">
                                            <label class="icon-right" for="email">
                                                <i class="fa fa-envelope-o"></i>
                                            </label>
                                            <?php echo $this->Form->input('norangka', array('class' => 'form-control', 'label' => false, 'required')); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 unit">
                                    </div>
                                </div>
                                <!-- end email phone -->
                            </fieldset>
                            <fieldset>
                                <!-- start guests -->
                                <div class="row">
                                    <h3>Depan</h3>
                                    <div class="col-md-6 unit">
                                        <label class="label">Nama</label>
                                        <div class="input">
                                            <label class="icon-right" for="adults">
                                                <i class="fa fa-male"></i>
                                            </label>
                                            <input type="text" id="adults" name="adults" class="form-control">
                                            <span class="tooltip tooltip-right-top">Number of adult guests</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 unit">
                                        
                                        <label class="label">Qty</label>
                                        <div class="input">
                                            <label class="icon-right" for="children">
                                                <i class="fa fa-female"></i>
                                            </label>
                                            <input type="text" id="children" name="children" class="form-control">
                                            <span class="tooltip tooltip-right-top">Number of children</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 unit">
                                        
                                        <label class="label">Harga</label>
                                        <div class="input">
                                            <label class="icon-right" for="children">
                                                <i class="fa fa-female"></i>
                                            </label>
                                            <input type="text" id="children" name="children" class="form-control">
                                            <span class="tooltip tooltip-right-top">Number of children</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end guests -->

                                <!-- start date -->
                                <div class="row">
                                    <div class="col-md-6 unit">
                                        <label class="label">Check-in date</label>
                                        <div class="input">
                                            <label class="icon-right" for="date_from">
                                                <i class="fa fa-calendar"></i>
                                            </label>
                                            <input type="text" id="date_from" name="date_from" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 unit">
                                        <label class="label">Check-out date</label>
                                        <div class="input">
                                            <label class="icon-right" for="date_to">
                                                <i class="fa fa-calendar"></i>
                                            </label>
                                            <input type="text" id="date_to" name="date_to" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- end date -->

                            </fieldset>

                            <fieldset>

                                <!-- start message -->
                                <div class="unit">
                                    <label class="label">Comments/Message</label>
                                    <div class="input">
                                        <textarea spellcheck="false" name="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <!-- end message -->

                                <!-- start response from server -->
                                <div id="response"></div>
                                <!-- end response from server -->

                            </fieldset>

                        </div>
                        <!-- end /.content -->

                        <div class="form-footer block-form-footer">
                            <button type="submit" class="btn btn-success primary-btn multi-submit-btn">Booking</button>
                            <button type="button" class="btn btn-primary primary-btn multi-next-btn">Selanjutnya</button>
                            <button type="button" class="btn btn-info secondary-btn multi-prev-btn">Back</button>
                        </div>
                        <!-- end /.footer -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>