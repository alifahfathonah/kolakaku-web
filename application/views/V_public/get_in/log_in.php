<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            <?php echo form_open("", "class='login100-form validate-form flex-sb flex-w'");?>
                <span class="login100-form-title p-b-32">
                    <center>Login</center>
                </span>

                <?php
                    if($this->session->flashdata('alert')) {
                        echo $this->session->flashdata('alert');
                    }
                ?>
                
                <!-- Email -->
                <span class="txt1 p-b-11">Email</span>
                <div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
                    <input class="input100" type="email" name="email" placeholder="username@kolakaku.com">
                    <span class="focus-input100"></span>
                </div>
                <span class="validation m-b-12">
                    <?php echo form_error('email'); ?>
                </span>
                
                <!-- Password -->
                <span class="txt1 p-b-11">Password</span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password" placeholder="password">
                    <span class="focus-input100"></span>
                </div>
                <div class="validation m-b-12">
                    <?php echo form_error('password'); ?>
                </div>

                <!-- Other Action -->
                <div class="flex-sb-m w-full p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt3">
                            Forgot Password?
                        </a>
                    </div>
                </div>

                <!-- Button Action -->
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

            <?php echo form_close(); ?>

            <footer class="text-center">
                <p class="p-t-32">Don't have an account? 
                    <a href="<?php echo base_url(); ?>signup" class="txt3">
                        <strong style="color: #1683e9; ">SIGN UP</strong>
                    </a>
                </p>
            </footer>
        </div>
    </div>
</div>
	

