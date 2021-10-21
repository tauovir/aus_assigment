<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/css/intlTelInput.css">
   
<!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="<?= base_url();?>register/submit" id="register-form" class="white-popup-block" method="post">
                        
                        <div class="col-md-8 login-custom col-md-offset-2">
                            <h4 Class="text-center">Register a new account</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="email">Enter Your Email</label>
<input class="form-control"  name="email"  id="email" placeholder="Email*" type="email">
<span class="bbt_registration_error error text-danger"><?php echo form_error('email');  ?><?php echo $this->session->flashdata('email'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="name">Enter Username</label>
<input class="form-control" name="name" id="name" placeholder="Username*" type="text">
 <span class="bbt_registration_error error  text-danger"><?php echo form_error('name');  ?><?php echo $this->session->flashdata('name'); ?></span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                            <div class="col-md-12">
                                 <label for="mobile">Contact Number</label>
                            </div>
                             <div class="col-md-12">
                                
                                    <div class="form-group">
                                       <select name="listcountry" id="listcountry" style="display:none"></select>
                        <input type="hidden" name="country" id="country" />
                        <input type="tel" name="phone" id="phone" placeholder="">

                        
                        <input type="hidden" name="phonefull" id="phonefull"  class="form-control" value="<?php if($user_detail->mobile!=0){ echo $user_detail->mobile;}?>    "  required=""  placeholder="Contact Number*"/>
                        
                <!--<input class="form-control" name="mobile"  id="mobile" value="<?php if($user_detail->mobile!=0){ echo $user_detail->mobile;}?>"    placeholder="Contact Number*" type="number">-->
            <span class="bbt_registration_error error  text-danger"><?php echo form_error('mobile');  ?><?php echo $this->session->flashdata('mobile'); ?></span>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="refno">Referral Code</label>
<input class="form-control"  name="refno"  id="refno" value="<?php if(isset($_SESSION['refer']['id'])){ echo $_SESSION['refer']['id'];}?>"  placeholder="Referral Code*" type="text">
      <span class="bbt_registration_error error  text-danger"><?php echo form_error('refno');  ?><?php echo $this->session->flashdata('refno'); ?></span>
                                     </div>
                                </div>

                                  <div class="bbt_registration_error"></div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="bbt_form_submit" style="width:100%" >
                                        Sign up
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Are you a member? <a href="<?= base_url();?>login">Login now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
