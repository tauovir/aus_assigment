  <!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="<?= base_url();?>pages/login/submit" method="post"  id="login-form" class="white-popup-block">
                        
                        <div class="col-md-8 login-custom col-md-offset-2">
                            <h4 class="text-center">login to your registered account!</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="username">Enter Email</label>
                                        <!-- <input type="email" id="email" name="username" placeholder="Email*" > -->
<input class="form-control" value="<?php if(isset($_COOKIE["remloginid"])){ echo $_COOKIE["remloginid"];}?>" placeholder="Email*" type="email" name="username" id="username">
                                         <span class="bbt_registration_error  text-danger"><?php echo form_error('username');  ?><?php echo $this->session->flashdata('username'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="password">Enter Password</label>
<input class="form-control" value="<?php if(isset($_COOKIE["rempasswordusernameusername"])){ echo $_COOKIE["rempasswordusernameusername"];}?>" placeholder="Password*" type="text" name="password" id="password">
                                        <div class="bbt_registration_error text-danger"><?php echo form_error('password');  ?> <?php echo $this->session->flashdata('password'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <label for="loginRemember">
                                        <input type="checkbox" id="loginRemember" name="loginRemember" value="1">
                                        Remember Me
                                    </label>
                                    <a title="Lost Password" href="<?= base_url();?>forget-password" class="lost-pass-link">Lost your password?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" style="width:100%">
                                        Login
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Not a member yet? <a href="<?= base_url();?>register">Register now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->