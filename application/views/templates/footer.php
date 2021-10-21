 <footer class="bg-dark default-padding-top text-light">
                                <div class="container">
                                    <div class="row">
                                        <div class="f-items">
                                            <div class="col-md-3 item">
                                                <div class="f-item">
<img src="<?php echo base_url();?>assets/setting/<?php echo $footer_logo->image;?>" alt="Logo">
                                                   
<div class="social">
    <ul>
    <?php if($webconfig->facebook!=''){ ?>
        <li><a href="<?= $webconfig->facebook;?>"><i class="fab fa-facebook-f"></i></a></li>
    <?php } ?>
    <?php if($webconfig->twitter!=''){ ?>
        <li><a href="<?= $webconfig->twitter;?>"><i class="fab fa-twitter"></i></a></li>
    <?php } ?>
    <?php if($webconfig->youtube!=''){ ?>
        <li><a href="<?= $webconfig->youtube;?>"><i class="fab fa-youtube"></i></a></li>
    <?php } ?>
    <?php if($webconfig->pinterest!=''){ ?>
        <li><a href="<?= $webconfig->pinterest;?>"><i class="fab fa-dribbble"></i></a></li>
    <?php } ?>
    <?php if($webconfig->linkedin!=''){ ?>
        <li><a href="<?= $webconfig->linkedin;?>"><i class="fab fa-linkedin"></i></a></li>
    <?php } ?>
    </ul>
</div>
<p>Current Date-Time : <?= date('d-m-Y h:i:s A');?></p>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 item">
                                                <div class="f-item link">
                                                    <h4>Get To Know Us </h4>
                                                    <ul>
<li><a href="<?= base_url();?>about-us">About Us</a></li>
<li><a href="<?= base_url();?>how-it-work">How It Works</a></li>
<li><a href="<?= base_url();?>reviews">Reviews</a></li>
<li><a href="<?= base_url();?>contact">Contact Us</a></li>
<li><a href="<?= base_url();?>blog">Blog </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 item">
                                                <div class="f-item link">
                                                    <h4>Support</h4>
                                                    <ul>
<li><a href="<?= base_url();?>faq">FAQs</a></li>
<li><a href="<?= base_url();?>terms-and-condition">Terms And Condition</a></li>
<li><a href="<?= base_url();?>privacy-policy">Privacy Policy</a></li>
<li><a href="<?= base_url();?>revision-and-refund-policy">Revision And Refund Policy</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 item">
                                                <div class="f-item address">
                                                    <h4>Email Us</h4>
                                                    <ul class="font-deco">
                                                        <li>
                                                            <i class="fas fa-envelope"></i>
                                                            <p>Email <span><a href="mailto:enquiry@australialegalassignmenthelp.com">enquiry@australialegalassignmenthelp.com</a></span></p>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-map"></i>
                                                            <p><strong>Office</strong> <span style="text-transform: capitalize;"><?php echo $webconfig->address;?></span></p>
                                                        </li>
                                                    </ul>
                                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <p>Copyright © <?= date('Y');?>.<?php if($webconfig->powerd_by!=''){ ?> <a href="<?= $webconfig->powerd_by_link;?>" target="_blank"><?= $webconfig->powerd_by;?></a> All Rights Reserved.
                
<?php } ?> </p>
                                    </div>
                                    <div class="col-md-6 text-right link">
                                        <ul>
<li><a href="<?= base_url();?>terms-and-condition">Terms of user</a></li>
<li><a href="<?= base_url();?>contact">Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <script src="<?= base_url();?>assets/js/jquery-1.12.4.min.js"></script>
                <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
                <script src="<?= base_url();?>assets/js/equal-height.min.js"></script>
                <script src="<?= base_url();?>assets/js/jquery.appear.js"></script>
                <script src="<?= base_url();?>assets/js/jquery.easing.min.js"></script>
                <script src="<?= base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
                <script src="<?= base_url();?>assets/js/modernizr.custom.13711.js"></script>
                <script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>
                <script src="<?= base_url();?>assets/js/wow.min.js"></script>
                <script src="<?= base_url();?>assets/js/isotope.pkgd.min.js"></script>
                <script src="<?= base_url();?>assets/js/imagesloaded.pkgd.min.js"></script>
                <script src="<?= base_url();?>assets/js/count-to.js"></script>
                <script src="<?= base_url();?>assets/js/bootsnav.js"></script>
                <script src="<?= base_url();?>assets/js/main.js"></script>
                <!-- <script type="text/javascript" src="<?= base_url();?>assets/js/jquery.min.js"></script> -->

    <!--- rateyo.js for Review rating Js --> 
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.rateyo.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.jqueryscript.net/demo/Clean-jQuery-Date-Time-Picker-Plugin-datetimepicker/jquery.datetimepicker.css"/>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
 
<script src="https://www.jqueryscript.net/demo/Clean-jQuery-Date-Time-Picker-Plugin-datetimepicker/jquery.datetimepicker.js"></script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: 'Y/m/d g:i A',
        formatTime: 'g:i A',
        minDate: 0,
        minTime: 0,

    });
</script>
<script type="text/javascript">

function chnagedeadline(time) {
    var subject = $('#subject').find(":selected").val(); 
    var paper = $('#paper').val();
    $.ajax({
            url: '<?php echo base_url();?>pages/calculateprice/'+subject+'/'+time+'/'+paper+'/<?php echo $webconfig->inr_doller_rate;?>/<?php echo $currencyCode;?>',
            type: 'POST',
            data: {str: time},
            error: function() {
                $('#pricecalculate').html(0);
            },
            success: function(data) {
                $('#pricecalculate').html(data);
            }
    });
}


    function chnagesubject(str) {
        $('#searchid').val(str);

        if (str!='') {
            $.ajax({
                    url: '<?php echo base_url();?>pages/geturgency/'+str,
                    type: 'POST',
                    data: {str: str},
                    error: function() {
                        $('#search_products').hide();
                     },
                    success: function(data) {
                       $('#deadline').html(data);
                        var deadline = $('#deadline').find(":selected").val();
                        var paper = $('#paper').val();
                        $.ajax({
                                url: '<?php echo base_url();?>pages/calculateprice/'+str+'/'+deadline+'/'+paper+'/<?php echo $webconfig->inr_doller_rate;?>/<?php echo $currencyCode;?>',
                                type: 'POST',
                                data: {str: str},
                                error: function() {
                                    $('#pricecalculate').html(0);
                                 },
                                success: function(data) {
                                   $('#pricecalculate').html(data);
                                }
                        });
                    }
            });
        }
}
function calpapes(arg) {
            
            var newval =  Number(arg);
            if (newval > 0) {
               
                jQuery('#paper').val(newval);
                var word = newval*250;
                jQuery('#pagescount').html(word+' words');
                jQuery('#pages_n').html(arg+' no.OF pages');
                var deadline = $('#deadline').find(":selected").val();
                var subject = $('#subject').find(":selected").val();
                        
    $.ajax({
        url: '<?php echo base_url();?>pages/calculateprice/'+subject+'/'+deadline+'/'+newval+'/<?php echo $webconfig->inr_doller_rate;?>/<?php echo $currencyCode;?>',
        type: 'POST',
        data: {str: subject},
            error: function() {
                $('#pricecalculate').html(0);
            },
            success: function(data) {
                $('#pricecalculate').html(data);
            }
        });
    }
}
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

$(document).ready(function(){
    var deadline = $('#deadline').find(":selected").val();
    var subject = $('#subject').find(":selected").val();
    var paper = $('#paper').val();
    var word = Number(paper)*250;
    jQuery('#pagescount').html(word+' words');
    $.ajax({
        url: '<?php echo base_url();?>pages/calculateprice/'+subject+'/'+deadline+'/'+paper+'/<?php echo $webconfig->inr_doller_rate;?>/<?php echo $currencyCode;?>',
        type: 'POST',
        data: {str: subject},
        error: function() {
            $('#pricecalculate').html(0);
        },
        success: function(data) {
            $('#pricecalculate').html(data);
        }
    });
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
                jQuery('#pages_n').html(newval+'  pages');
                jQuery('#pagescount').html(word+' words');
                var deadline = $('#deadline').find(":selected").val();
                var subject = $('#subject').find(":selected").val();
                $('#somecontent').val(newval+' pages / '+word+' words');
                var strid=$('#strid').val();

                var final=newval*strid;
                 $('#text-amt').html(final);
             
                      /*  $.ajax({
                                url: '<?php echo base_url();?>pages/calculateprice/'+subject+'/'+deadline+'/'+newval+'/<?php echo $webconfig->inr_doller_rate;?>/<?php echo $currencyCode;?>',
                                type: 'POST',
                                data: {str: subject},
                                error: function() {
                                    $('#pricecalculate').html(0);
                                 },
                                success: function(data) {
                                   $('#pricecalculate').html(data);
                                }
                        });*/

            }

        }


function getassignmetn(str) {
            if(search==''){
                  $('#search_products').hide();
            } else {
                 $('#search_products').show();
                 $.ajax({
                    url: '<?php echo base_url();?>pages/search_json_data/',
                    type: 'POST',
                    data: {str: str},
                    error: function() {
                        $('#search_products').hide();
                     },
                    success: function(data) {
                       $('#search_products').html(data);
                    }
            });
         }
}    

    function getthisvalues(str,str2) {
       $('#search').val(str);
       $('#searchid').val(str2);
       //hidden
   if (str2==43) {
        $('.other_assignment').removeClass('hidden');
        $('#other_assignment').val('');
   } else {

       $('.other_assignment').addClass('hidden');
        $('#other_assignment').val('0');
        
   }
    }
    </script>
    
    <?php  
    if($this->uri->segment(1)==''){
    if(!isset($_COOKIE["wssinfotech_home"])){
                if($offer_home_image_count>0){ ?>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
       
        <div class="modal-body">

<img src="<?= base_url();?>assets/setting/<?=$offer_home_image->image;?>" class="img-responsive" />


        
        
        </div>
        <div class="modal-footer">
 
   
 
 <label for="donotshowagain">
        <input type="checkbox" name="donotshowagain" id="donotshowagain" style="min-height: 0px;" value="1"> Don't show again</label>
        </div>
       </div>

    </div>
</div>
<script>
        $(window).load(function(){
                $('#onload').modal('show');
            });
</script>
<style>
.modal-body {
    padding: 3px;
}
    .modal-footer {
    padding: 1px 15px;
    text-align: right;
    border-top: 1px solid #e5e5e5;
}

</style>

<script>
/*
   if(!/ [^a-z]/i.test('sohan veer 132')){
    alert('Valid name');
   } else {
      alert('In valid name'); 
   }
    
   
   
    jQuery(document).ready(function(){
        
    jQuery('#fullname').focusout( function(e) {
    alert('Working' );
    });


*/



        jQuery('input[name="donotshowagain"]').click(function(){
            if(jQuery(this).prop("checked") == true){
                 jQuery.ajax({
                        type: "GET",
                        url: "<?php echo base_url();?>pages/popupmodal/s",             
                        dataType: "html",   //expect html to be returned                
                        success: function(response){                    
                            //alert(response);
                        }
                    });
            }
            else if(jQuery(this).prop("checked") == false){
                 jQuery.ajax({
                        type: "GET",
                        url: "<?php echo base_url();?>pages/popupmodal/u",             
                        dataType: "html",   //expect html to be returned                
                        success: function(response){                    
                             //alert(response);
                        }
                    });
            }
        });
    });
</script>
 
<script type="text/javascript">
     $(document).ready(function() {    

        var id = '#dialog';
    
     
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
    
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        
         
        $('#mask').fadeIn(500); 
        $('#mask').fadeTo("slow",0.9);  
    
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();
      
        $(id).css('top',  winH/2-$(id).height()/2);
        $(id).css('left', winW/2-$(id).width()/2);
    
   
        $(id).fadeIn(2000);     
    
 
    $('.window .close').click(function (e) {
        //Cancel the link behavior
        e.preventDefault();
        
        $('#mask').hide();
        $('.window').hide();
    });     
   
    $('#mask').click(function () {
        $(this).hide();
        $('.window').hide();
    });     
    
});
</script>

    <?php } } } ?>
    
    
    <script>
        jQuery(document).ready(function($){
	    
	$(".btnrating").on('click',(function(e) {
	
	var previous_value = $("#selected_rating").val();
	
	var selected_value = $(this).attr("data-attr");
	$("#selected_rating").val(selected_value);
	
	$(".selected-rating").empty();
	$(".selected-rating").html(selected_value);
	
	for (i = 1; i <= selected_value; ++i) {
	$("#rating-star-"+i).toggleClass('btn-warning');
	$("#rating-star-"+i).toggleClass('btn-default');
	}
	
	for (ix = 1; ix <= previous_value; ++ix) {
	$("#rating-star-"+ix).toggleClass('btn-warning');
	$("#rating-star-"+ix).toggleClass('btn-default');
	}
	
	}));
	
		
});
    </script>
<style type="text/css">
    #search_products {
    max-height: 180px;
    min-height: 150px;
    overflow-y: scroll;
    position: absolute;
    z-index: 9;
    width: 90.7%;
    background: #fff !important;
    margin-left: 0%;
}
.whatsappicon{
    outline: none !important;
    visibility: visible !important;
    resize: none !important;
    box-shadow: none !important;
    overflow: visible !important;
    background: none !important;
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
    -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity 1;}) !important;
    -mz-opacity: 1 !important;
    -khtml-opacity: 1 !important;
    top: auto !important;
    bottom: 29px !important;
    left: 15px!important;
    position: fixed !important;
    border: 0 !important;
    min-height: 0px !important;
    min-width: 0px !important;
    max-height: none !important;
    max-width: none !important;
    padding: 0px !important;
    margin: 0px !important;
    -moz-transition-property: none !important;
    -webkit-transition-property: none !important;
    -o-transition-property: none !important;
    transition-property: none !important;
    transform: none !important;
    -webkit-transform: none !important;
    -ms-transform: none !important;
    width: 65px !important;
    height: 65px !important;
    display: block !important;
    z-index: 99999999999999999999!important;
    background-color: transparent !important;
    cursor: none !important;
    float: none !important;
    border-radius: unset !important;
    pointer-events: auto !important;
}
</style>

<div class="whatsappicon">
    <a href="https://api.whatsapp.com/send?phone=15617317666&text=" target="_blank"><img src="<?=base_url();?>assets/australia-legal-assignment-help-whatsapp.png" /></a>
</div>

<script type="text/javascript">
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#fullname").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 32 && e.which != 8 && e.which != 0 && (e.which < 65 || e.which > 90) && (e.which < 97 || e.which > 122)) {
        //display error message
       // $("#fullname").html("Enter Valid Name").show().fadeOut("slow");
       alert('Enter  valid name!');
               return false;
    }
   });
});
</script>
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ebe66288ee2956d73a15eba/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/js/intlTelInput.js"></script>  
   
 <script>
      $(function () {
      $("#phone").intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: true,
            separateDialCode: true,
            nationalMode: true,
            // geoIpLookup: function (callback) {
            //     $.get("http://ipinfo.io", function () {}, "jsonp").always(function (resp) {
            //         var countryCode = (resp && resp.country) ? resp.country : "";
            //         callback(countryCode);
            //     });
            // },
            initialCountry: "us",
        });

        // get the country data from the plugin
        var countryData = $.fn.intlTelInput.getCountryData(),
          telInput = $("#phone"),
          addressDropdown = $("#listcountry");

        // init plugin
        telInput.intlTelInput({
          utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/js/utils.js" // just for formatting/placeholders etc
        });

        // populate the country dropdown
        $.each(countryData, function(i, country) {
          addressDropdown.append($("<option></option>").attr("value", country.iso2).text(country.name));
        });

        // listen to the telephone input for changes
        telInput.on("countrychange", function() {
          var countryCode = telInput.intlTelInput("getSelectedCountryData").iso2;
          addressDropdown.val(countryCode);
        });

        // trigger a fake "change" event now, to trigger an initial sync
        telInput.trigger("countrychange");

        // listen to the address dropdown for changes
        addressDropdown.change(function() {
          var countryCode = $(this).val();
          telInput.intlTelInput("setCountry", countryCode);
        });

        // update the hidden input on submit
        $("form").submit(countryData,function(i, country) {
          $("#country").val(telInput.intlTelInput("getSelectedCountryData").name);
          $("#phonefull").val('+' + telInput.intlTelInput("getSelectedCountryData").dialCode + $("#phone").val());      
        });

      });
    </script>

    
<!--End of Tawk.to Script-->

 
            </body>
        </html>