<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            <?php echo form_open("", "class='login100-form validate-form flex-sb flex-w'");?>
                <span class="login100-form-title p-b-32">
                    <center>Sign Up</center>
                </span>

                <?php
                    if($this->session->flashdata('alert')) {
                        echo $this->session->flashdata('alert');
                    }
                ?>
                
                <!-- Name -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <!-- First Name -->
                        <span class="txt1 p-b-11">First Name</span>
                        <div class="wrap-input100 validate-input m-b-36" data-validate = "First Name is required">
                            <?php echo form_input($first_name);?>
                            <span class="focus-input100"></span>
                        </div>
                        <span class="validation m-b-12">
                            <?php echo form_error('first_name'); ?>
                        </span>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <!-- Last Name -->
                        <span class="txt1 p-b-11">Last Name</span>
                        <div class="wrap-input100 validate-input m-b-36" data-validate = "Last Name is required">
                            <?php echo form_input($last_name);?>
                            <span class="focus-input100"></span>
                        </div>
                        <span class="validation m-b-12">
                            <?php echo form_error('last_name'); ?>
                        </span>
                    </div>      
                </div>    
                
                <!-- Email -->
                <span class="txt1 p-b-11">Email</span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
                        <?php echo form_input($email);?>
                        <span class="focus-input100"></span>
                    </div>
                    <span class="validation m-b-12">
                        <?php echo form_error('email'); ?>
                </span>

                <!-- Phone -->
                <span class="txt1 p-b-11">Phone Number</span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Phone Number is required">
                        <?php echo form_input($phone);?>
                        <span class="focus-input100"></span>
                    </div>
                    <span class="validation m-b-12">
                        <?php echo form_error('phone'); ?>
                </span>
                
                <div class="row">
                    <!-- Password -->
                    <div class="col-xs-12 col-sm-6">
                        <span class="txt1 p-b-11">Password</span>
                        <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                            <span class="btn-show-pass">
                                <i class="fa fa-eye"></i>
                            </span>
                            <?php echo form_input($password);?>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="validation m-b-12">
                            <?php echo form_error('password'); ?>
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="col-xs-12 col-sm-6">
                        <span class="txt1 p-b-11">Re-Password</span>
                        <div class="wrap-input100 validate-input m-b-12" data-validate = "Re-Password is required">
                            <span class="btn-show-pass">
                                <i class="fa fa-eye"></i>
                            </span>
                            <?php echo form_input($password_confirm);?>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="validation m-b-12">
                            <?php echo form_error('password_confirm'); ?>
                        </div>
                    </div>
                </div>

                <!-- Button Action -->
                <div class="container-login100-form-btn p-t-24">
                    <button class="login100-form-btn">
                        Sign Up
                    </button>
                </div>

            <?php echo form_close(); ?>

            <footer class="text-center">
                <p class="p-t-32">Already have an account? 
                    <a href="<?php echo base_url(); ?>login" class="txt3">
                        <strong style="color: #1683e9; ">LOGIN</strong>
                    </a>
                </p>
            </footer>
        </div>
    </div>
</div>