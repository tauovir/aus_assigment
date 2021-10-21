<section>
    <!-- Blog Section -->
    <div class="sample-page">
        <div class="container">
            <div class="row">
                <!-- Blog Content -->
                <div class="col-md-9">

                    <div class="bbp_separator">
                        <div class="title">
                            <?php echo $user_detail->name;?>
                        </div>
                        <div class="short-line">
                            <img src="<?= base_url();?>assets/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                        </div>
                    </div>

                    <div id="bbpress-forums">

                        <div id="bbp-user-wrapper">

                            <div id="bbp-single-user-details">
                                <div id="bbp-user-avatar">

                                    <span class='vcard'>
                <label  class="url fn n" for="profile_pic" title="<?php echo $user_detail->name;?>" rel="me">
<?php if($user_detail->profilepic==''){ ?>
<img alt='' src='<?= base_url();?>assets/avtar_demo.png' class='avatar avatar-150 photo' height='150' width='150' />
<?php } else {?>
<img alt='' src='<?= base_url();?>assets/setting/<?= $user_detail->profilepic;?>' class='avatar avatar-150 photo' height='150' width='150' />
<?php } ?>

                </label>
            </span>

                                </div>
                                <!-- #author-avatar -->

                                <div id="bbp-user-navigation">
                                    <ul>
                                        <li class="">
                                            <span class="vcard bbp-user-profile-link">
                        <a class="url fn n" href="<?= base_url();?>pages/profile/" title="<?php echo $user_detail->name;?>" rel="me">Profile</a>
                    </span>
                                        </li>

                                        <li class="">
                                            <span class='bbp-user-topics-created-link'>
                        <a href="<?= base_url();?>pages/enquiry/" title="<?php echo $user_detail->name;?>">Enquiry</a>
                    </span>
                                        </li>

                                        <li class="">
                                            <span class='bbp-user-replies-created-link'>
                        <a href="<?= base_url();?>pages/transactions/" title="<?php echo $user_detail->name;?>">Transactions</a>
                        </span>
                                        </li>

                                        <li class="">
                                            <span class="bbp-user-favorites-link">
                            <a href="<?= base_url();?>pages/wallet/" title="<?php echo $user_detail->name;?>">My Wallet</a>
                        </span>
                                        </li>

                                        <li class="">
                                            <span class="bbp-user-favorites-link">
                            <a href="<?= base_url();?>pages/changepassword/" title="<?php echo $user_detail->name;?>">Change Password</a>
                        </span>
                                        </li>

                                    </ul>
                                </div>
                                <!-- #bbp-user-navigation -->
                            </div>
                            <!-- #bbp-single-user-details -->










                        </div>
                    </div>