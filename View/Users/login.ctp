<div class="login-form-container">
            <?php echo $this -> Form -> create('User', array('url' => array('controller' => 'users', 'action' => 'login'),'class' => 'j-forms'));?>

        <div class="login-form-header">
            <div class="logo">
                <a href="index.html" title="Admin Template"><img src="<?php echo $this->webroot;?>img/logo-dark.png" alt="logo"></a>
            </div>
        </div>
        <div class="login-form-content">



            <!-- start login -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="login">
                        <i class="zmdi zmdi-account"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="text" id="login" name="data[User][username]" placeholder="Username">
                </div>
            </div>
            <!-- end login -->

            <!-- start password -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="password">
                        <i class="zmdi zmdi-key"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="password" id="password" name="data[User][password]" placeholder="Password">

	                </div>
            </div>
            <!-- end password -->


            <!-- start keep logged -->
            <!-- <div class="unit">
                <label class="checkbox">
                    <input type="checkbox" name="logged" value="true" checked="">
                    <i></i>
                    Keep me logged in
                </label>
            </div> -->
            <!-- end keep logged -->

            <!-- start response from server -->
            <div class="response"><?php echo $this -> Session -> flash(); ?></div>
            <!-- end response from server -->



        </div>
        <div class="login-form-footer">
            <button type="submit" class="btn-block btn btn-primary">Sign in</button>
        </div>

            <?php echo $this -> Form -> end();?>
</div>

