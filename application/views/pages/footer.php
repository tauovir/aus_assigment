﻿ 
 <?php if($this->uri->segment(2)=='' or $this->uri->segment(2)=='home'){ } else { ?>
 
 <style>
     @media (max-width: 767px){
         
         .header {
    padding: 0px !important;
}
.header {
    height: 100px;
    display: table;
   position: relative !important;
    width: 100%;
    z-index: 9;
}


.header .header-align {
    display: table-cell;
    vertical-align: middle;
    height: 80px;
    background: #ffffff !important;
}

.header .navbar-brand {
    margin-top: -73px !important;
}
}

 </style>
 <?php } ?>
 <div id="bbt_login_modal" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header" style="">
                    <h4 class="modal-title" id="mySmallModalLabel">Log In Now                           <a class="anchorjs-link" href="#mySmallModalLabel"><span class="anchorjs-icon"></span></a>
                        </h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 textAlignCenter">
                            <p class="title">Login</p>
                            <img src="<?php echo base_url();?>assets/wp-content/themes/ticketlab/images/line_blue_xs.png" class="img-responsive" alt="" />

                            <form action="<?= base_url();?>pages/login/submit" method="post" name="loginform" onsubmit="return validateFormLogin()">
                                <div class="login-details">
                                    <div class="login-placeholder  text-left">
                                        <label for="user">Enter user name * </label>
                                        <input name="username" id="user" placeholder="Username" type="text">
                                        <i class="fa fa-user"></i>
                                        <input type="hidden" name="lasturl" value='<?php if(isset($_SESSION['checkout']['user'])){ echo $_SESSION['checkout']['user']; } else { echo $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";} ?>'>
                                    
                                    <label for="user" id="username-error"></label>
                                    </div>
                                    <div class="login-placeholder text-left">
                                         <label for="pass">Enter password * </label>
                                        <input name="password" id="pass" placeholder="Password" type="password">
                                        <i class="fa fa-lock"></i>
                                         <label for="pass" id="password-eroor"></label>
                                    </div>
                                    <a href="<?= base_url();?>pages/forgot_password" style="color: red !important; font-size: 13px !important; float: right !important; text-align: right !important;">Forgot Password ?</a>
                                    <br/>
                                    <br/>
                                    <div class="login-button">
                                        <input type="submit" name="wp-submit" id="wp-submit" class="bbt-btn-login" value="LOGIN" />
                                       
                                    </div>
<div><a href="<?= base_url();?>pages/register" style="margin: 0px 0px 0px 0px !important;
    font-size: 10px !important;
    font-weight: 600 !important;
    font-family: sans-serif !important; color: #888 !important;">Don't have an account? Click here to 
   <span style="color: red !important;">Sign Up</span></a> </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 textAlignCenter">
                              

                            <div class="login-details">
                     <!--           
                <div class="register-button">
                    <a href="<?php echo base_url();?>pages/register"><button type="submit" name="bbt_form_submit" class="bbt-btn-login"/>REGISTER</button></a>
                </div>-->
                                    <div class="social-login">
                                        <a href="#" data-app-id="275761936196701" class="btn btn-default btn-submit btn-facebook-login"><i class="fa fa-facebook"></i> Facebook Login</a>

                                        <a href="#" class="btn btn-default btn-submit btn-twitter" onclick="window.open('?bbt-tw-login=1','Twitter_Auth','location=0,status=0,width=800,height=600')"><i class="fa fa-google"></i> Google Login</a>
                                    </div>
                                    <div id="bbt_success_message"></div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
<style type="text/css">
    #bbt_login_modal .modal-body .login-details a {
    float: none;
    display: block;
    height: auto !important;
    line-height: 30px !important;
    margin: 5px !important;
    color: #fff !important;
    font-size: 17px !important;
    font-weight: 600 !important;
}
.modal-body .login-details a {
    float: left !important;
    width: 100% !important;
    font-size: 11px !important;
    text-align: left !important;
    color: #3c4145 !important;
    opacity: 0.8;
    margin-bottom: 47px !important;
}

#bbt_login_modal .modal-body .login-details .login-placeholder input {
    width: 100%;
    border: solid #ededed;
    border-width: 0 0 1px 0;
    opacity: 1;
    padding: 10px;
    margin: 0;
    border-radius: 0;
    height: 30px;
    font-size: 13px;
    font-weight: 400;
    color: #3c4145;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}

.social-login .btn-twitter {
    background-color: #e42012 !important;
    margin-left: 20px;
}


</style>
    <footer>

        <div class="social-footer">
            <div class="row margin0" style="    background: #212224;">

<div class="hidden-md hidden-lg hidden-sm col-xs-1"></div>
<?php if($webconfig->facebook!=''){ ?>
                <div class="col-md-5th-1 col-xs-2">
                    <a href="<?= $webconfig->facebook;?>">
                        <div class="box">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <!-- /.box -->
                    </a>
                </div>
<?php } ?>
<?php if($webconfig->twitter!=''){ ?>
                <div class="col-md-5th-1 col-xs-2">
                    <a href="<?= $webconfig->twitter;?>">
                        <div class="box">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <!-- /.box -->
                    </a>
                </div>
<?php } ?>
 
<?php if($webconfig->youtube!=''){ ?>

                <div class="col-md-5th-1 col-xs-2">
                    <a href="<?= $webconfig->youtube;?>">
                        <div class="box">
                            <i class="fa fa-youtube"></i>
                        </div>
                        <!-- /.box -->
                    </a>
                </div>
<?php } ?>
<?php if($webconfig->pinterest!=''){ ?>


                <div class="col-md-5th-1 col-xs-2">
                    <a href="<?= $webconfig->pinterest;?>">
                        <div class="box">
                            <i class="fa fa-pinterest"></i>
                        </div>
                        <!-- /.box -->
                    </a>
                </div>
<?php } ?>
<?php if($webconfig->linkedin!=''){ ?>

                <div class="col-md-5th-1 col-xs-2">
                    <a href="<?= $webconfig->linkedin;?>">
                        <div class="box">
                            <i class="fa fa-linkedin"></i>
                        </div>
                        <!-- /.box -->
                    </a>
                </div>
<?php } ?> 


            </div>
        </div>
      



        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget-container widget_text">
    <img class="img-responsive" src="<?php echo base_url();?>assets/setting/<?php echo $webconfig->company_logo;?>" alt="<?php echo $webconfig->organization_name;?> <?php echo $webconfig->site_name;?>" title="<?php echo $webconfig->organization_name;?> <?php echo $webconfig->site_name;?>">




                            <div class="textwidget">
                                <img src="<?= base_url();?>assets/full-homeword-help.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                     <div class="col-md-8">
                    <div class="col-md-4">
                        <div class="widget-container widget_categories"><span class="widget_title">Information</span> 
                            <ul>
                                <li class="cat-item cat-item-2">
                                    <a href="<?= base_url();?>pages/home">Home</a>
                                </li>
                                <li class="cat-item cat-item-3"><a href="<?= base_url();?>pages/about">About</a>
                                </li>
                                <li class="cat-item cat-item-3"><a href="<?= base_url()?>pages/reviews">Reviews <mark>4.9/10</mark></a>
                                </li>


                               <!-- <li class="cat-item cat-item-4"><a href="<?= base_url();?>pages/services">Services</a>
                                </li>
                               <li class="cat-item cat-item-5"><a href="<?= base_url();?>pages/how_it_work">How It Work</a>
                                </li>
                                <li class="cat-item cat-item-1"><a href="<?= base_url();?>pages/offers">Offers</a>
                                </li>-->
                                <li class="cat-item cat-item-6"><a href="<?= base_url();?>pages/contact">Contact Us</a>
                                </li>
                                <li class="cat-item cat-item-6"><a href="http://www.blogs.fullhomeworkhelp.com" target="_blank" >Blogs</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget-container widget_recent_entries"> <span class="widget_title">POLICY</span> 
                            <ul>
                                <li><a href="<?= base_url();?>pages/vision">Vision</a></li>
                                <li><a href="<?= base_url();?>pages/mission">Mission</a></li>
                                <li><a href="<?= base_url();?>pages/privacy_polocy">Privacy & Policy</a></li>
                                <li><a href="<?= base_url();?>pages/why_choose_us">Why Choose Us</a></li>
                                <li><a href="<?= base_url();?>pages/terms_n_conditions">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget-container widget_mc4wp_form_widget"><span class="widget_title">Reach Out To Us</span> 
                             
                             <h4 style="color: #fff !important;"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $webconfig->site_name;?></h4>

                             <h5 style="color: #fff !important;"><?php echo $webconfig->address;?></h5>
                             
                             <h6><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo $webconfig->other_mobile;?>"><?php echo $webconfig->other_mobile;?></a></h6>

                               <h6>  <i class="fa fa-envelope-o"></i> <a href="enquiry@australialegalassignmenthelp.com">enquiry@australialegalassignmenthelp.com</a></h6>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="copyright-footer">
            Copyright <?= $webconfig->site_name;?> © <?php echo  date('Y');?>. All Rights Reserved 

<?php if($webconfig->powerd_by!=''){ ?>
| Design & Developed By <a href="<?= $webconfig->powerd_by_link;?>" target="_blank"><?= $webconfig->powerd_by;?></a>
                
<?php } ?> 


            </div>

    </footer>
    <script>
        (function() {
            function addEventListener(element, event, handler) {
                if (element.addEventListener) {
                    element.addEventListener(event, handler, false);
                } else if (element.attachEvent) {
                    element.attachEvent('on' + event, handler);
                }
            }

            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields && urlFields.length > 0) {
                for (var j = 0; j < urlFields.length; j++) {
                    addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
                }
            } /* test if browser supports date fields */
            var testInput = document.createElement('input');
            testInput.setAttribute('type', 'date');
            if (testInput.type !== 'date') {

                /* add placeholder & pattern to all date fields */
                var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
                for (var i = 0; i < dateFields.length; i++) {
                    if (!dateFields[i].placeholder) {
                        dateFields[i].placeholder = 'YYYY-MM-DD';
                    }
                    if (!dateFields[i].pattern) {
                        dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                    }
                }
            }

        })();
    </script>
    <link rel='stylesheet' id='js_composer_front-css' href='<?php echo base_url();?>assets/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.4.5' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/plugins/bbpress/templates/default/js/editor.js?ver=2.5.14-6684' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/plugins/bbt_fw_plugin//src/js/bbt-plugin-framework.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "<?php echo base_url();?>assets/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.1' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab-child/js/smoothscroll.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab-child/js/bbt-child.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab-child/js/adwords-gclid.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-includes/js/comment-reply.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/bootstrap.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/snap.svg-min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/owl.carousel.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/hovers.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/jquery.carouFredSel-6.0.4-packed.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/general.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/isotope.pkgd.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/packery-mode.pkgd.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/imagesloaded.pkgd.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/jquery.swipebox.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/jquery.knob.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/ZeroClipboard.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/prism.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/moment.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/bootstrap-datetimepicker.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/select2.full.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/select2.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/bbt_wp.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/bbt_shortcodes.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/js/bbt.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/themes/ticketlab/bbt_framework/static/js/bbt-framework.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-includes/js/wp-embed.min.js?ver=4.9.8' defer='defer'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.4.5' defer='defer'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mc4wp_forms_config = [];
        /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js?ver=4.3.3' defer='defer'></script>
   <!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
  window.__lc = window.__lc || {};
  window.__lc.license = 11340507;
  (function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
  })();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/11340507/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->
</body>

</html>