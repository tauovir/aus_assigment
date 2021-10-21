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

    #bbpress-forums #bbp-your-profile fieldset label[for] {
    float: left;
    width: 100% !important;
    padding: 5px 20px 5px 0;
    text-align: right;
    cursor: pointer;
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
                                    <li><a href="javascript:void();" title="<?= $pag;?>"><?= $pag;?></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <form class="header-search-form" role="search" method="get" action="<?= base_url();?>pages/search">
                                <input class="form-control" name="s" placeholder="Search Knowledge Base..." type="text">
                                <button type="submit" class="submit"><i class="fa fa-search"></i></button>
                            </form>
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
                <div class="col-md-12">

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