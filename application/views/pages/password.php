<div id="bbp-user-body " class="col-sm-12">

    <form id="bbp-your-profile" action="<?= base_url();?>pages/changepassword/save" method="post" enctype="multipart/form-data">

   

        <?php echo $this->session->flashdata('success');?>
            <fieldset class="bbp-form">
                <legend>Account</legend>
                <div id="password">
                    <fieldset class="bbp-form password">
                        <label>Old Password</label>
                        <input type="password" name="oldpassword" id="oldpassword" size="16" value="" autocomplete="off" tabindex="108" />
                        <span class="bbt_registration_error error"><?php echo form_error('oldpassword');  ?><?php echo $this->session->flashdata('oldpassword'); ?></span>
                        <span class="description">If you would like to change the password type a old password.</span>
                        <label>New Password</label>
                        <input type="password" name="password" id="password" size="16" value="" autocomplete="off" tabindex="108" />
                        <span class="bbt_registration_error error"><?php echo form_error('password');  ?><?php echo $this->session->flashdata('password'); ?></span>
                        <span class="description">If you would like to change the password type a new one. Otherwise leave this blank.</span>
                        <label>Confirm New Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" size="16" value="" autocomplete="off" tabindex="109" />
                        <span class="bbt_registration_error error">
    <?php echo form_error('confirmpassword');  ?><?php echo $this->session->flashdata('confirmpassword'); ?>
    </span>
                        <span class="description">Type your new password again.</span>


                         <button type="submit" tabindex="110" id="bbp_user_edit_submit" name="bbp_user_edit_submit" class="btn btn-success btn-sm pull-left">Update Profile</button>
                    </fieldset>
                </div>

            </fieldset>

             

    </form>
</div>