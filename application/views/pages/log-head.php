<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/wp-content/uploads/2017/02/logo_white-1.png">
    <meta name="robots" content="noindex,follow" />
   

<?php if($this->uri->segment(2)=='assignment'){ ?>
    <title><?= $alldata->metatitle;?></title>
    <meta name="description" content="<?= $alldata->metdescription;?>" />
    <meta name="keywords" content="<?= $alldata->metkeywords;?>">
    <link rel="canonical" href="" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $alldata->metatitle;?>" />
    <meta property="og:description" content="<?= $alldata->metdescription;?>" />
    <meta property="og:url" content="<?php echo base_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="<?= $alldata->metdescription;?>" />
    <meta name="twitter:description" content="<?= $alldata->metdescription;?>" />
    <meta name="twitter:title" content="<?= $alldata->metatitle;?>" />
    <meta name="twitter:site" content="@<?= $alldata->metatitle;?>" />
    <meta name="twitter:creator" content="@<?= $alldata->metatitle;?>" />
    <meta property="og:image" content="<?= base_url();?>assets/products/<?= $alldata->product_image;?>" />

<?php } else { ?>

    <title><?php echo $webconfig->site_name;?> | <?php echo $webconfig->meta_title;?></title>
    <meta name="description" content="<?php echo $webconfig->meta_title;?>" />
    <link rel="canonical" href="" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />

<?php } ?>
    <!-- / Yoast SEO plugin. -->

    <link rel="alternate" type="application/rss+xml" title="<?php echo $webconfig->meta_title;?>" href="feed/" />
    <link rel="alternate" type="application/rss+xml" title="<?php echo $webconfig->meta_title;?>" href="comments/feed/" />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='ticketlab-style-css-css' href='<?php echo base_url();?>assets/wp-content/themes/ticketlab/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='child-style-css' href='<?php echo base_url();?>assets/wp-content/themes/ticketlab-child/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='studio-fonts-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C600%2C700%7CLato%3A400%2C700%2C400italic%2C700italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='ticketlab-style-css' href='<?php echo base_url();?>assets/wp-content/themes/ticketlab-child/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ticketlab-select2.min-css-css' href='<?php echo base_url();?>assets/wp-content/themes/ticketlab/css/select2.min.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='ticketlab-helpers-css-css' href='<?php echo base_url();?>assets/wp-content/themes/ticketlab/css/helpers.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='main-bbt-css-css' href='<?php echo base_url();?>assets/wp-content/themes/ticketlab/css/bbt.css?ver=4.9.8' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style id='main-bbt-css-inline-css' type='text/css'>
        .page-id-1085 .vc_row .sample-page,
        .page-id-1094 .vc_row .sample-page {
            margin-top: 0;
        }
        
        .page-id-1085 .bbp_separator,
        .page-id-1085 .bbp-love,
        .page-id-1094 .bbp_separator,
        .page-id-1094 .bbp-love {
            display: none;
        }
        
        .sample-page.vc_col-sm-3 {
            margin-top: 0;
        }
        
        .header .navbar-brand {
            margin-top: -25px;
        }
        
        .navbar-brand > img {
            width: 68%;
        }
        
        .header_secondary .navbar-brand > img {
            width: 100%;
        }



.header .header-align {
    display: table-cell;
    vertical-align: middle;
    height: 80px;
    background: #292a2c26 !important;
}


    </style>

    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-includes/js/jquery/jquery.js?ver=1.12.4' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1' defer='defer'></script>
    <link rel='https://api.w.org/' href='wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo base_url();?>assets/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="" />
    <link rel='shortlink' href='' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed?url=<?php echo $webconfig->meta_title;?>" />
    <link rel="alternate" type="text/xml+oembed" href="<?php echo base_url();?>assets/wp-json/oembed/1.0/embed?url=<?php echo $webconfig->meta_title;?>" />
  
    <meta name="generator" content="<?php echo $webconfig->meta_title;?>" />
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1494269899456 {
            margin-bottom: 60px;
        }
        
        .vc_custom_1488822939894 {
            margin-top: 40px !important;
            margin-bottom: 20px !important;
        }
        
        .vc_custom_1496735609796 {
            padding-bottom: 90px !important;
            background-image: url(<?php echo base_url();?>assets/wp-content/uploads/2017/05/testbg.jpg?id=1846) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
        
        .vc_custom_1488823217485 {
            margin-top: 40px !important;
            margin-bottom: 45px !important;
        }
        
        .vc_custom_1488808062632 {
            margin-top: 0px !important;
            margin-bottom: 60px !important;
        }
        
        .vc_custom_1488805483732 {
            padding-top: 40px !important;
            padding-right: 10px !important;
            padding-bottom: 50px !important;
            padding-left: 10px !important;
        }
        
        .vc_custom_1488822945766 {
            margin-top: 20px !important;
        }
        
        .vc_custom_1496737569211 {
            margin-top: 0px !important;
            padding-top: 60px !important;
        }
        
        .vc_custom_1490004238851 {
            margin-top: 0px !important;
        }
        
        .vc_custom_1488807743299 {
            margin-top: 0px !important;
        }
    </style>
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '152323408750380');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=152323408750380&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body data-rsssl=1 class="home page-template page-template-template-shortcodes-canvas page-template-template-shortcodes-canvas-php page page-id-83 page-home wpb-js-composer js-comp-ver-5.4.5 vc_responsive">

    <!-- Top Bar 
    <div class="tl-top-bar back-top-heading">
        <div class="container">
            <div class="row">
                <div class="vc_col-sm-12">
                    <?= $top_header->pagecontent;?>
                </div>
            </div>
        </div>
    </div>-->
    <style type="text/css">
        .back-top-heading {
            background-image: linear-gradient(to top, #fefec8, #fbfbf3);
            padding: 5px 0px 1px 0px;
            text-align: center;
        }
        
        .openingtext {
            font-family: cursive;
            font-size: 17px;
            letter-spacing: .01em;
            color: #d60303;
        }
        
        .openingtext2 {
            font-family: cursive;
            font-size: 17px;
            letter-spacing: .01em;
            color: #00a4ef;
        }
.modal-dialog {
    margin: 27px auto !important;
}
    </style>

    <div class="tl-top-bar">
        <div class="container">
            <div class="column-left">
                <a href="tel:+91<?php echo $webconfig->other_mobile;?>" class="header-phone"><i class="fa fa-phone-square"></i>Call our support team: +91 <?php echo $webconfig->other_mobile;?></a>
            </div>

            <div class="column-right">
                <ul class="top-social clearfix">
                   <?php if($webconfig->facebook!=''){ ?>

                    <li>
                        <a href="<?= $webconfig->facebook;?>" class="fa fa-facebook">
                        </a>
                    </li>
                    <?php } ?>
<?php if($webconfig->twitter!=''){ ?>
                    <li>
                        <a href="<?= $webconfig->twitter;?>" class="fa fa-twitter">
                        </a>
                    </li>
 <?php } ?> <?php if($webconfig->youtube!=''){ ?>                  
                    <li>
                        <a href="<?= $webconfig->youtube;?>" class="fa fa-youtube">
                        </a>
                    </li>
<?php } ?>  <?php if($webconfig->pinterest!=''){ ?>                  
                    <li>
                        <a href="<?= $webconfig->pinterest;?>" class="fa fa-pinterest">
                        </a>
                    </li><?php } ?>
              <?php if($webconfig->linkedin!=''){ ?>      <li>
                        <a href="<?= $webconfig->linkedin;?>" class="fa fa-linkedin">
                        </a>
                    </li><?php } ?> 
                </ul>

                <div class="dropdown language-selector">
                </div>
            </div>
        </div>
    </div>

    <div class="vc_row">
        <div class="vc_col-sm-12 text-center">
         <center><a href="<?= base_url();?>"> <img src="<?= base_url();?>assets/setting/<?= $webconfig->company_logo;?>" class="img-responsive" style="width: 180px;"></a></center>  
        </div>
    </div>
