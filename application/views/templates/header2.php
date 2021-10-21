<?php 
function search($array, $key, $value) { 
    $results = array(); 
    if (is_array($array)) { 
        if (isset($array[$key]) && $array[$key] == $value) { 
            $results[] = $array; 
        } 
        foreach ($array as $subarray) { 
            $results = array_merge($results,  
            search($subarray, $key, $value)); 
        } 
    } 
    return $results; 
} 
    $res = search($ary, 'c_code', $countryCode); 
    foreach ($res as $var) { 
        $phonecode = $var["code"]; 
    } 
    if(!isset($_SESSION['country']['phonecode'])){
        $_SESSION['country']['phonecode']=$phonecode;
    } 
?> 

<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php if ($this->uri->segment(1)=='new-assignment') { // for new assignment page meta content ?>

    <title>Order New Assignment | AustraliaLegalAssignmentHlep </title>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="http://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
 <?php if ($this->uri->segment(1)=='my-wallet') { // for my-wallet page meta content ?>

    <title>Your Money is safe with us | Australia Legal Assignment Help</title>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="http://www.australialegalassignmenthelp.com/">
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
 <?php if ($this->uri->segment(1)=='my-order') { // for my-order page meta content ?>

    <title> See All Your Order Here  </title>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="http://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>


 <?php if ($this->uri->segment(1)=='order-details') { // for about page meta content ?>

    <title>Get Your Order Full Details | Australia Legal Assignment Help</title>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="http://www.australialegalassignmenthelp.com//" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
 <?php if ($this->uri->segment(1)=='my-profile') { // for my-profile page meta content ?>

    <title>my-profile </title>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="http://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>

 <?php if ($this->uri->segment(1)=='my-offers') { // for about page meta content ?>

    <title>Grab Your Offer Today | Australia Legal Assignment Help </title>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="http://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>


 <?php if ($this->uri->segment(1)=='downloads') { // for about page meta content ?>

    <title>My downloads Grab Your Offer Today | Australia Legal Assignment Help </title>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="http://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>




        <link rel="shortcut icon" href="<?= base_url();?>assets/img/favicon.png" type="image/x-icon">
        <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/flaticon-set.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/magnific-popup.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/owl.carousel.min.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/owl.theme.default.min.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/animate.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/bootsnav.css" rel="stylesheet" />
       
        <link href="<?= base_url();?>assets/style.css" rel="stylesheet">
        <link href="<?= base_url();?>assets/css/responsive.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    </head>
    <body>
        <!-- Preloader Start -->
        <div class="se-pre-con"></div>
        <!-- Preloader Ends -->
        <!-- Start Header Top
        ============================================= -->
        <div class="top-bar-area address-two-lines bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 address-info">
                        <div class="info box">
                            <ul>
                                
                                <li>
                                    <span><i class="fas fa-envelope-open"></i> Email</span><?php echo $webconfig->organization_email;?>
                                </li>
                                <li>
                                    <span><i class="fas fa-phone"></i> Contact</span><?php echo $webconfig->other_mobile;?>
                                </li>
                            </ul>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
        <!-- End Header Top -->
        <!-- Header 
        ============================================= -->
        <header id="home">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default navbar-sticky bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?= base_url();?>">
                            <img src="<?php echo base_url();?>assets/setting/<?php echo $webconfig->company_logo;?>" class="logo" alt="Logo">
                        </a>
                    </div>
        <div class="dashboard-menu" id="navbar-menu">
            <a class="btn btn-info btn-xs" href="<?= base_url();?>new-assignment">
                <i class="fa fa-plus" aria-hidden="true"></i> 
                New Assignment
            </a>
            <a href="<?= base_url();?>my-wallet"  class="icn-btn">
               <img src="<?= base_url();?>assets/wallet.png">
               <sup class="text-danger">$<?=$totalwallet;?></sup>
            </a>
            <a  href="<?= base_url();?>my-order" class="icn-btn">
                <img src="<?= base_url();?>assets/email.png" /> 
            </a>

 
    <span class="btn-group btn-group-warning" href="javascript:void();">
        <span data-toggle="dropdown" class="btn1 btn btn-warning  btn-xs"><?=substr($user_detail->name,0,1);?></span>
        <span data-toggle="dropdown"  class="btn2 btn btn-warning  btn-xs">
            <p><?=$user_detail->name;?></p>
            <p><?=$user_detail->id;?></p>
            

        </span>

        <ul class="dropdown-menu">
                <?php if(isset($_COOKIE["wssinfotech_login"])){ ?>
                 <li><a href="<?= base_url();?>my-profile" >My Profile</a></li>
                <?php } else { ?>
                    <li class="text-center"> 
                        <a href="<?= base_url();?>login">
                            <button class="btn btn-10" type="button">Sign In</button>
                        </a>

                        <div class="new-user-container">
                      <p>New User? <a href="<?= base_url();?>register">Start here.</a> </p>
                      </div>


                    </li>
                <?php } ?>
                <li><a href="<?= base_url();?>my-wallet">My Wallet</a></li>
                <li><a href="<?= base_url();?>my-offers">My Offers</a></li>
                <li><a href="<?= base_url();?>downloads">My Downloads</a></li>
                <?php if(isset($_COOKIE["wssinfotech_login"])){ ?>
                    <li><a href="<?= base_url();?>logout" >Logout</a></li>
                <?php }  ?>
      </ul>
    </span>
        
        </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </header>


<style type="text/css">
   
</style>


   <?php 
        function slugify($text){
            // replace non letter or digits by -
            $text = preg_replace('~[^\pL\d]+~u', '-', $text);
            // transliterate
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
            // remove unwanted characters
            $text = preg_replace('~[^-\w]+~', '', $text);
            // trim
            $text = trim($text, '-');
            // remove duplicated - symbols
            $text = preg_replace('~-+~', '-', $text);
            // lowercase
            $text = strtolower($text);
            if (empty($text)) {
              return 'n-a';
            }
            return $text;
        }
    ?>