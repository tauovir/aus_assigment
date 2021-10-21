  <!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="<?= base_url();?>forget-password/submit" method="post"  id="login-form" class="white-popup-block">
                        
                        <div class="col-md-12 ">
                            <h4>login to your registered account!</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="username">Enter Email</label>
<input class="form-control"   placeholder="Email*" type="email" name="username"  id="username">
                                         <span class="bbt_registration_error  text-danger"><?php echo form_error('username');  ?><?php echo $this->session->flashdata('username'); ?></span>

                                  <span class="bbt_registration_error  text-success"> <?php echo $this->session->flashdata('success_password'); ?></span>       
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="row">
                                    <button name="bbt_form_submit" type="submit">
                                        Login
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Back To SignIn <a href="<?= base_url();?>login">Login now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->