<div class="students-profiel adviros-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center hidden-sm hidden-xs thumb">
                    <img src="<?= base_url();?>assets/setting/<?= $review_image->image?>" alt="Thumb">
                </div>
                <div class="col-md-9 info main-content">
                    <!-- Star Tab Info -->
                    <div class="tab-info">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="">
                                <a href="<?= base_url();?>my-order" aria-expanded="false">
                                    My Orders
                                </a>
                            </li>
                            
                            <li class="active">
                                <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                    Edit Profile
                                </a>
                            </li>
                             <li class="">
                                <a  href="<?= base_url();?>my-wallet" aria-expanded="false">
                                    Wallet
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
<div class="tab-content tab-content-info">
    <div id="tab3" class="tab-pane fade active in">
        <div class="info title">
            <div class="row">
            <div class="col-md-12">

<form action="<?= base_url();?>my-profile/save" method="post" enctype="multipart/form-data">
        <h2 class="entry-title margintop20"> <strong>Personal Details</strong></h2>
            <?php echo $this->session->flashdata('success');?>
                <fieldset class="bbp-form">
 
                <div class="row">
                    <p class="col-md-3 col-sm-12 col-xs-12">
                        <label class="form-heading" for="name">Full name</label></p>
                        <p class=" col-md-9 col-sm-12  col-xs-12">   
                            <input type="text" name="name" id="name" value="<?php echo $user_detail->name;?>" class="form-control" tabindex="101" />
                            <span class=" error">
                                <?php echo form_error('name');  ?>
                                <?php echo $this->session->flashdata('name'); ?>
                            </span>
                        </p>
                </div>

                <div class="row">
                    <p class="col-md-3 col-sm-12 col-xs-12">
                        <label  class="form-heading"  for="gender">Gender</label>
                    </p>
                <p class=" col-md-9 col-sm-12  col-xs-12">  
                    <select name="gender" id="gender" class=" form-control genders">
                        <option value="">Select Gender</option>
                        <option value="Male" <?php if($user_detail->gender=='Male'){ ?> selected=""
                            <?php } ?>>Male</option>
                        <option value="Female" <?php if($user_detail->gender=='Female'){ ?> selected=""
                            <?php } ?>>Female</option>
                    </select>
                    <span class="bbt_registration_error error">
                    <?php echo form_error('gender');  ?><?php echo $this->session->flashdata('gender'); ?></span>
                </p>
                </div>

                 <div class="row">
                    <p class="col-md-3 col-sm-12 col-xs-12">
                   <label class="form-heading" for="  email">Email</label>
                     </p>
                <p class=" col-md-9 col-sm-12  col-xs-12"> 
                    <input type="email" name="email" id="email" value=" <?php echo $user_detail->email;?>" class="form-control" tabindex="102" readonly />
                    <span class="bbt_registration_error error">
    <?php echo form_error('email');  ?><?php echo $this->session->flashdata('email'); ?></span>
</p>
                </div>

          <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                 <label  class="form-heading" for="mobile">Contact Number</label>
                            </div>
<!--                            <div class="col-md-2 col-sm-4 col-xs-4">-->
                                
<!--<input type="text" value="+<?=$_SESSION['country']['phonecode'];?>" readonly class="form-control" />-->
<!--                            </div> -->
                            
                            
                            
                            <div class="col-md-7 col-sm-8 col-xs-8">
                                
                                    <div class="form-group">
                                       
<input class="form-control" name="mobile"  id="mobile"   onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Contact Number*" value="<?php echo $user_detail->mobile;?>" type="text" readonly >
   <span class="bbt_registration_error error  text-danger"><?php echo form_error('mobile');  ?><?php echo $this->session->flashdata('mobile'); ?></span>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            




               


                <div class="row">
                    <p class="col-md-3 col-sm-12 col-xs-12">
                       <label class="form-heading" for="  day">Your date of birth</label>
                    </p>
                   

<p class="col-md-2 col-sm-12 col-xs-12">
    <select  class=" form-control day" name="day" id="day" style="min-width: 125px  !important; max-width: 138px !important;     margin-left: 0px !important;"> 
        <option value="">DD</option>
    <?php for ($d=1; $d <=31; $d++) { ?>
        <option value="<?= $d;?>" <?php if($d==$user_detail->day){ ?>selected <?php } ?>>
            <?php echo  $d;?>
        </option>
    <?php } ?>
    </select>
</p>

<p class="col-md-2 col-sm-12 col-xs-12">
    <select  class=" form-control month" name="month" id="month"  style="min-width: 125px  !important; max-width: 138px !important;     margin-left: 0px !important;"> 
    <option value="">MM</option>
<?php for ($m=1; $m <=12; $m++) { ?>
    <option value="<?= $m;?>" <?php if($m==$user_detail->month){ ?>selected <?php } ?>>
        <?php echo  $m;?>
    </option>
<?php } ?>
</select>
</p>


<p class="col-md-5 col-sm-12 col-xs-12">
   <?php
    $furl = date('Y')-2;
    $turl = date('Y')-80;
?>
<select  class=" form-control year" name="year" id="year"  style="min-width: 125px  !important; max-width: 138px !important;     margin-left: 0px !important;"> 
    <option value="">YYYY</option>
<?php 

    for ($i=$furl; $i >$turl; $i--) { 
?>
  <option value="<?= $i;?>" <?php if($i==$user_detail->year){ ?>selected <?php } ?>><?php echo  $i;?></option>
<?php 
    }
?>
  

</select>
</p>
 
                </div>

                <legend>About Yourself</legend>

                <div class="row">
                    <p class="col-md-3 col-sm-12 col-xs-12">

                   <label class="form-heading" for="  biographial">Biographical Info</label>
                     </p>
                    <p class=" col-md-9 col-sm-12  col-xs-12"> 
<textarea name="biographial" id="biographial" class="form-control" rows="5" cols="30" tabindex="105"><?php echo $user_detail->biographial;?></textarea>
                    <span class="bbt_registration_error error">
                        <?php echo form_error('biographial');  ?><?php echo $this->session->flashdata('biographial'); ?></span>
                    </p>
                </div>

                 <div class="row"> 
                    <div class="col-sm-12">
            
                        <button type="submit" tabindex="110" class="button submit  btn btn-success">Update Profile</button>
                    
                </div>
            </div>
        </fieldset>
    </form>
</div>
</div>
<div class="update-pass">
    <h4>Change Password</h4>
        <div class="row">
            <form action="<?= base_url();?>my-profile/change-password" method="post">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" name="password" id="password"  placeholder="Chose Password" type="password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Retype Password" type="password">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" name="oldpassword" id="oldpassword" placeholder="Old Password" type="password">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
                            <!-- End Single Tab -->
                         
                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Tab Info -->
                </div>
            </div>
        </div>
    </div>
