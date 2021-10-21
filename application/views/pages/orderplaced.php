<section class="section banner-form">

    <div class="vc_column-inner ">

        <div class="wpb_wrapper">

            <img src="<?php echo base_url();?>assets/wp-content/header-dash.jpg">

        </div>
    </div>
</section>

<style type="text/css">
    .error {
        float: right;
    }
</style>

<section>
    <div class="search2 knowledge">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="breadcrumbalign">
                                <ul class="breadcrumb">
                                    <li><a href="<?= base_url();?>" title="Home">Home</a></li><i class="fa fa-angle-right"></i>
                                    <li><a href="javascript:void();" title="Dashboard">Order Placed</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-5">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Content -->
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
<style type="text/css">
    .vbbbhn{
        background: #046302;
        color: #fff !important;
        padding: 6px;
        font-size: 23px !important;
    }
</style>
                            <div id="bbp-user-body">
                                <div class="col-sm-12 text-center">
                                    <p class="vbbbhn">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i> Order Placed successfully
                                    </p>

<?php
//Set useful variables for paypal form
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
//$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; //LIVE PayPal API URL

//$paypal_id = 'drsharma@gmail.com'; //Business Email
$paypal_id = 'sachinchaudhary1008@gmail.com'; //Business Email
//$paypal_id = 'test'; //Business LIVE Email
?>
<form  class="form-horizontal" action="<?php echo $paypal_url; ?>" method="post">
<div class="form-group">
<div class="aab controls col-md-4 "></div>
<div class="controls col-md-8 ">

<input type="submit" name="submit" value="Place Order" class="btn btn-success" />
</div>
</div>
<!-- Identify your business so that you can collect the payments. --><br>
<input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">
<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="Pen">
<input type="hidden" name="item_number" value="abbgvb12345">
<input type="hidden" name="amount" value="50">
<input type="hidden" name="currency_code" value="USD">
<!-- Specify URLs -->
<input type='hidden' name='cancel_return' value='http://fullhomeworkhelp.wssinfotech.com/pages/cancel'>
<input type='hidden' name='return' value='http://fullhomeworkhelp.wssinfotech.com/pages/success'>
</form>



                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Sidebar -->
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="widget-container bbp_widget_login">
                            <div class="title">
                                <p>Login</p>
                            </div>
                            <div class="short-line">
                                <img src="<?= base_url();?>assets/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                            </div>
                            <div class="bbp-logged-in">
                                <a href="https://bigbangthemes.net/TicketLab_WP/forums/user/fb-2269598766500971/" class="submit user-submit">
                                    <?php if($user_detail->profilepic==''){ ?>
                                        <img alt='' src='<?= base_url();?>assets/avtar_demo.png' class='avatar avatar-40 photo' height='40' width='40' />
                                        <?php } else {?>
                                            <img alt='' src='<?= base_url();?>assets/setting/<?= $user_detail->profilepic;?>' class='avatar avatar-40 photo' height='40' width='40' />
                                            <?php } ?>

                                </a>
                                <h4><a href="<?= base_url();?>pages/dashboard" rel="nofollow"><?= $user_detail->name?></a></h4>

                                <a href="<?= base_url();?>pages/logout" class="button logout-link">Log Out</a> </div>

                        </div>
                        <div class="widget-container widget_recent_entries">
                            <div class="title">
                                <p>Recent Posts</p>
                            </div>
                            <div class="short-line">
                                <img src="<?= base_url();?>assets/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                            </div>
                            <ul>
                                <li>
                                    <a href="">What options come with your knowledge base</a>
                                </li>

                            </ul>
                        </div>
                        <div class="widget-container widget-submit-topic">
                            <div class="title">
                                <p>Get Support</p>
                            </div>
                            <div class="short-line">
                                <img src="<?= base_url();?>assets/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                            </div>
                            <a href="<?= base_url();?>pages/enquiry">
                                <button type="submit" class="btn btn-default btn-submit">
                                    Submit Support Ticket </button>
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Section -->
</section>