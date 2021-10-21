  <!-- Page -->
    <style type="text/css">
        @media only screen and (min-width: 1367px) {
            .banner-form {
                width: 469px;
                position: absolute;
                z-index: 1;
                margin-left: 61%;
                margin-top: 8%;
            }
        }
        
        @media only screen and (min-width: 1025px) and (max-width: 1366px) {
            .banner-form {
                width: 469px;
                position: absolute;
                z-index: 1;
                margin-left: 61%;
                margin-top: 8%;
            }
        }
        
        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            .banner-form {
                width: 609px;
                position: absolute;
                z-index: 1;
                margin-left: 20%;
                margin-top: 20%;
            }
        }
        
        @media only screen and (max-width: 767px) {
            .banner-form {
                width: 100%;
                position: absolute;
                z-index: 1;
                margin-left: 0%;
                margin-top: 25%;
            }
            .header .navbar-brand {
                margin-top: -71px !important;
            }
        }
        
        .form-heading {
            font-family: cursive;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: .01em;
            color: #fff;
        }
        
        .modal-content2 {
            position: relative;
            background-color: #000000c9;
            background-image: linear-gradient(to top, #dc0000bd, #f7b0b0a3);
            background-clip: padding-box;
            border: 1px solid #999;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 6px;
            outline: 0;
            -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
            box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        }
        
        input.banner-formfireld {
            height: 32px !important;
            padding: 5px;
            font-weight: 600;
            color: #000;
            font-size: 14px;
            text-transform: uppercase;
            opacity: 1;
            border-bottom: 1px solid #ffffff;
            opacity: 1 !important;
        }
        
        .login-placeholderx .fa {
            color: #252525 !important;
        }
        
        .chk input.banner-formfireld {
            width: 95% !important;
        }
        
        .chk .fa {
            margin-top: 8px !important;
        }
        
        #paper {
            width: 60% !important;
        }
        
        #plus {
            width: 19% !important;
            height: 32px !important;
            padding: 5px;
            font-weight: 600;
            color: #000;
            text-transform: uppercase;
            opacity: 1;
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px solid #ededed;
            margin: -4px !important;
        }
        
        #minus {
            width: 19% !important;
            height: 32px !important;
            padding: 5px;
            font-weight: 600;
            color: #000;
            text-transform: uppercase;
            opacity: 1;
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px solid #ededed;
            margin: -4px !important;
        }

        

    </style>

<link rel="stylesheet" type="text/css" href="https://www.jqueryscript.net/demo/Clean-jQuery-Date-Time-Picker-Plugin-datetimepicker/jquery.datetimepicker.css"/>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<script src="https://www.jqueryscript.net/demo/Clean-jQuery-Date-Time-Picker-Plugin-datetimepicker/jquery.js"></script>
<script src="https://www.jqueryscript.net/demo/Clean-jQuery-Date-Time-Picker-Plugin-datetimepicker/jquery.datetimepicker.js"></script>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
    mask:'9999/19/39',
});
</script>
<style type="text/css">
    .error{
        font-size: 13px;
        color: #d60000;
        font-family: initial;
        text-align: left;
    }
    label{
        float: left;
    }
</style>
    <div id="bbt_login_modal" class="modal fade bs-example-modal-md in" tabindex="-1" role="dialog" aria-hidden="false" style="display: block; position: relative;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-body" style="padding: 12px;">
                    
                <div class="row">
                     
                    <div class="col-md-12 textAlignCenter">

                        <p class="title" style="margin-top: 5px;">Fill Assignment Details</p>
                        <img src="<?= base_url();?>assets/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="">

                        <div class="login-details">
<form id="bbt_reg_form" action="<?= base_url();?>pages/step1p" method="post" enctype="multipart/form-data">
 <div id="multiCollapseExample1">
      <div class="card card-body">
 
                                        <div class="login-details">
                                            <div class="  vc_col-sm-12">
<div class="login-placeholder login-placeholderx">

<label>Your email ID *</label>
<input name="emailid" id="user" value="<?= set_value('emailid') ?>"  class="banner-formfireld" placeholder="Email" type="text" autocomplete="off">
                                                    <i class="fa fa-user"></i>
 <span class="bbt_registration_error error"><?php echo form_error('emailid');  ?><?php echo $this->session->flashdata('emailid'); ?></span> 

</div>
                                            </div>
                                            <div class="  vc_col-sm-12">
<div class="login-placeholder login-placeholderx">
    <label>Your assignment *</label>
<input name="subject" id="search" value="<?= set_value('subject') ?>" class="banner-formfireld" onkeyup="getassignmetn(this.value);" placeholder="Subject" type="text" autocomplete="off">
<input type="hidden" name="searchid" id="searchid" value="<?= set_value('searchid') ?>">
                                                   <i class="fa fa-book"></i>
                                                   <div id="search_products"></div>
<input type="hidden" name="other_assignment" value="NA">
 <span class="bbt_registration_error error"><?php echo form_error('subject');  ?><?php echo $this->session->flashdata('subject'); ?></span> 
</div>
                                            </div>
                                              <div class="  vc_col-sm-12 ">
<div class="login-placeholder login-placeholderx">
<label>Your assignment deadline *</label>
<input name="deadline" id="calendar" value="<?= set_value('deadline') ?>" class="form_datetime banner-formfireld" placeholder="Deadline" type="text" autocomplete="off">

                                                    <i class="fa fa-calendar"></i>
 <span class="bbt_registration_error error"><?php echo form_error('deadline');  ?><?php echo $this->session->flashdata('deadline'); ?></span> 

</div>
                                            </div>

                                            <div class="  vc_col-sm-6 ">
<div class="  vc_col-sm-12 ">  
                                                <label>No. of pages / words *</label>
                                            </div>  
                                                <div class="login-placeholder login-placeholderx">

                                                    <button id="minus" class="banner-formfireld" type="button" onclick="changeval(-1);">-</button>
<input name="nopages" id="paper"   class="banner-formfireld" value="<?= set_value('nopages') ?>" min="1" placeholder="1 Pages" title="1 Pages" type="number" style="margin: 0px !important; text-align: center;">
                                                    <button id="plus" class="banner-formfireld" type="button" onclick="changeval(1);">+</button>
 <span class="bbt_registration_error error"><?php echo form_error('nopages');  ?><?php echo $this->session->flashdata('nopages'); ?></span> 
                                                </div>

                                            </div>
                                            <div class="  vc_col-sm-6 text-left ">
                                                <p class="form-heading" id="pagescount" style="color: #08a7ef; font-size: 14px; margin-top: 30px; ">
                                                     <?=  set_value('nopages')*250;?> words</p>

                                            </div>
 
                                           <!-- <div class=" vc_col-sm-4 text-left login-button">
                                                <input type="submit" name="wp-submit" id="wp-submit" class="bbt-btn-login" value="update">

                                            </div>-->
                                        </div>
                                    
    </div>
  </div>
 

                            


 
  <div class="col-md-12">
        <div class="bbt_registration_error"></div>
       <br>
            <div class="register-button" style="margin-top: 20px;">
             <br>
           <input type="submit" name="bbt_form_submit" class="bbt-btn-login" value="Get Free Quote" style="margin-top: 20px;">
    </div>
</form>
                        </div>
                    </div>
<script type="text/javascript">
    $(".form_datetime").datetimepicker();
</script> 

 <script type="text/javascript">

  jQuery(document).ready(function(){
  jQuery('#search').focus(function(){
       jQuery('.search_products').show();
   }).focusout(function(){
       jQuery('.search_products').hide();
   });
});

jQuery(document).click(function(e) {
  if( e.target.id != 'search_products') {
    jQuery("#search_products").hide();
  }
});      
        function changeval(srg) {
            
            var thisval = jQuery('#paper').val();





            if (thisval == '') {
                var newvar = 0;
            } else {
                var newvar = thisval;
            }

            var newval = Number(newvar) + Number(srg);
            if (newval > 0) {
               
                jQuery('#paper').val(newval);

                var word = newval*250;
                jQuery('#pagescount').html(word+' words');
                 // alert(word);

            }

        }
function getassignmetn(str) {
         if(search==''){
                  jQuery('#search_products').hide();
              } else {
                 jQuery('#search_products').show();
                 jQuery.ajax({
                    url: '<?php echo base_url();?>pages/search_json_data',
                    type: 'POST',
                    data: {str: str},
                    error: function() {
                        jQuery('#search_products').hide();
                     },
                    success: function(data) {
                       jQuery('#search_products').html(data);
                    }
            });
                 
         }
  
    }    

    function getthisvalues(str,str2) {
       $('#search').val(str);
       $('#searchid').val(str2);
    }
    </script>
  <style type="text/css">

#attechfile{

    opacity: 0 !important;
    position: absolute;
    z-index: -999999999;

}


.bbtcn{
    background: #fff !important;
    border: 0px solid !important;
}

  @media only screen and (max-width: 767px) {
  
  
   #search_products{
     display: none ;  
       width: 100% !important;
    margin-left: -1.9% !important;
    text-align: left !important;
    margin-top: -8px !important;
    padding: 0px !important;
    position: absolute !important;
    z-index: 99999 !important;
    max-height: 400px !important;
    overflow-y: scroll !important;
    background: #fff0 !important;
}
}
}

@media only screen and (min-width: 768px) {
 
  
  #search_products{
     display: none ;  
    background: !important;
    width: 75% !important;
    margin-left: 7.6% !important;
    text-align: left !important;
    padding: 0px !important;
    position: absolute !important;
    z-index: 99999 !important;
    max-height: 400px !important;
    overflow-y: scroll !important;
    background: #fff !important;
}

 

}


.list-group-item {
    position: relative;
    display: block;
    padding: 0px 0px !important;
    text-align: left !important;
    margin-bottom: -1px;
    background-color: #fff;
   font-size: 14px;
    font-weight: 800 !important;
    font-family: initial;
    border: 1px solid #ddd;
}

#search_products {
    max-height: 180px;
    overflow-y: scroll;
    position: absolute;
    z-index: 9999;
    width: 90.7%;
    margin-left: 1%;
}
.list-group-item {
    position: relative;
    display: block;
    padding: 0px;
    text-align: left !important;
    margin-bottom: -1px;
    background-color: #fff;
    font-weight: 500;
    border: 1px solid #ddd;
    width: 100%;
    border-radius: 0px;
}

.list-group-item:first-child {
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}

 

 
    
}
      </style> 
                    
                </div>
<style type="text/css">
    .alert{
        padding: 2px;
        text-align: left;
        margin: 10px auto;
    }
</style>
               
                <div id="bbt_success_message"></div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .bbt-btn-google{
        background: #c72828 !important;
        color: #fff !important;
        border: none !important;
         opacity: 0.8 !important;
    }

    .bbt-btn-facebook{
        background: #3f64ca !important;
        color: #fff !important;
        border: none !important;
        opacity: 0.8 !important;
    }
.bbt_reg_username-text{
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
    height: 100px;
}


#bbt_login_modal .modal-body .row:before {
    display: block;
    position: absolute;
    top: 0;
    left: 50%;
    bottom: 0;
    width: 1px;
    background-color: #ffffff !important;
}


label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    color: #828282 !important;
}
input{
    padding: 5px;
    color: #666;
}


.modal-body .login-details input, textarea, select {
    border-top: 0 !important;
    border-left: 0 !important;
    border-right: 0 !important;
    border-bottom: 1px solid #312b2b !important;
    opacity: .5 !important;
    padding:6px;
    width: 100%;
}
</style>