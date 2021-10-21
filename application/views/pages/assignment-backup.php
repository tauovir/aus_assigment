   <!-- Start Breadcrumb  ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url();?>assets/products/<?= $alldata->product_image;?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 style="margin-top: 50px;">Want To Get Assistance From World’s No.1 Assignment Writing Service?</h2>
                    <p>Consult Our Highly-Qualified And Experienced Writers To Attain Academic Excellence</p>

                </div>
                        <div class="col-md-7 form pb-50">
                        <div class="heading">
                            <h3>No.1 Writing Service Provider</h3>
                            <p>
                               Assignment Help By Australia Experts And Secure Top Grades In All Your Assignments
                            </p>
                        </div>
                        <form action="<?= base_url();?>order-step-1/submit" method="POST" >
                            <div class="col-md-6">
                                    <div class="form-group text-left">
<label class="form-heading" for="fullname">Full name <span class="text-danger">*</span></label>
<input <?php if (isset($_COOKIE["wssinfotech_login"])) { echo'value="'.$user_detail->name.'" readonly' ; }?> class="form-control" name="fullname" id="fullname" placeholder="Full Name" type="text">
                                    </div>
                                </div>
                            <div class="col-md-6">
                                     <div class="form-group text-left">
<label class="form-heading" for="user">Email <span class="text-danger">*</span></label>
<input <?php if (isset($_COOKIE["wssinfotech_login"])) { echo 'readonly'; }?> class="form-control" name="emailid" id="user" value="<?php if (isset($_COOKIE["wssinfotech_login"])) { echo $_COOKIE["wssinfotech_login"]; }?>" placeholder="Email" type="text"> <span class="bbt_registration_error error  text-danger"><?php echo form_error('emailid');  ?><?php echo $this->session->flashdata('emailid'); ?></span> 

                                    </div>
                                </div>
                            <div class="col-md-6">
                                 
 <div class="form-group text-left">
<label class="form-heading" for="subject">Subject <span class="text-danger">*</span></label>
<select class="form-control" name="subject" id="subject" onchange="chnagesubject(this.value);">
 
    <?php foreach($all_products->result() as $subjectData){ ?>
        <option value="<?= $subjectData->id;?>"><?= $subjectData->title;?></option>
    <?php } ?>
</select>

 
<input type="hidden" name="searchid" id="searchid" value="">
  <input type="hidden" name="other_assignment" value="NA">
 <div id="search_products" style="display: none;">
 </div>
  <span class="bbt_registration_error error text-danger"><?php echo form_error('subject');  ?><?php echo $this->session->flashdata('subject'); ?></span> 
                                    </div>
                                
                            </div>
                            <div class="col-md-6">
                                
<div class="form-group text-left">
<label class="form-heading" for="deadline">Urgency <span class="text-danger">*</span></label>


 <select class="form-control" name="deadline" id="deadline" onchange="chnagedeadline(this.value);">
    <?= $urgency_opt;?>   
</select>



  <span class="bbt_registration_error error text-danger"><?php echo form_error('deadline');  ?><?php echo $this->session->flashdata('deadline'); ?></span> 
                                    </div>
                                
                            </div>
                            <div class="col-md-6">
                                
       <div class="form-group text-left">
<label class="form-heading" for="deadline">Number of pages  <span class="text-danger">*</span></label>

                     
                     <div class="input-group number-spinner">
                        <span class="input-group-btn" onclick="changeval(-1);">
                            <button type="button" class="btn btn-danger" data-dir="dwn"><span class="glyphicon glyphicon-plus"></span></button>
                        </span>
                        <input type="hidden"  name="nopages" id="paper" onkeyup="calpapes(this.value);" class="form-control text-center" value="1" max=100 min=1>
                  
                  <input type="text" class="form-control" name="somecontent" id="somecontent" value="1 pages / 250 words" readonly="">


                        <span class="input-group-btn" onclick="changeval(1);">
                            
                            <button type="button" class="btn btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                        </span>
                    </div>
                </div>
                                
                            </div>
                              
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!--<h3 id="">1 page = 250 words</h3>
                                            <p class="titles"   id="pagescount">0 Words </p>
 -->
                                           <p class="titles">Your Price <span   id="pricecalculate">0 </span></p> 



                                        </div>
                                    </div> 
                           
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit" class="btn btn-danger">
                                        Order Now  <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                          
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Course Details 
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <div class="top-info">
                            <!-- Title-->
                            <div class="title">
                                <h3 title="<?= $alldata->title;?> "><?= $alldata->title;?> </h3>
                            </div>
                            <!-- End Title-->
                        </div>
                        <!-- End Top Info -->

                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info" style="margin-top: 20px;">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <?= $alldata->description;?>
                                    </div>
                                </div>
                                <!-- End Single Tab -->


                               
                                
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <aside>
<div class="sidebar-item category">
  <div class="title">
    <h4>Service Category</h4>
  </div>
  <div class="sidebar-info">
    <ul>
      <?php foreach($all_products->result() as $moreservice){ ?>
      <li><a href="<?= base_url();?>assignment/<?= $moreservice->id;?>/<?= slugify($moreservice->title);?>"><?= $moreservice->title;?></a></li>
    <?php } ?>
    </ul>
  </div>
  
  
  <div class="row">
        <div class="col-xs-12 text-center">
               <div class=" text-center div-shadow  margin-top-25px">
          <h2 class="title">Australia Assignment Help</h2>
          <h4 class="sub-title">Still In Two Minds? Check Our <?= $tcount;?> Genuine Reviews!</h4>
          <h4 class="sub-title">Listen To Our 98% Happy Clients</h4>
      </div> </div>
      <div class="col-xs-12 text-center">
             <div class="div-shadow-background text-center div-shadow  margin-top-25px">
        <div class="rating-block">
          <h4 class="h2">Average user rating</h2>
          <h2 class="bold padding-bottom-7"><?= $reviewavg;?> <small>/ 5</small></h2>
<?php if($reviewavg>0 && $reviewavg<=1){  ?>
        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
 <?php } else if($reviewavg>1 && $reviewavg<=2){ ?>
        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
<?php  } if($reviewavg>2 && $reviewavg<=3){  ?>
        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
 <?php } if($reviewavg>3 && $reviewavg<=4){  ?>
        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
 <?php } if($reviewavg>4){  ?>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
            <span class="fa fa-star" aria-hidden="true"></span>
          </button>
 <?php } ?>


          </div>



        </div>
      </div>
      
        
            <div class="col-xs-12 text-center">
                <div class="div-shadow-background text-center div-shadow  margin-top-25px">
                  
<br />
 
<a href="#myModal" class="btn btn-info"  data-target="#myModal">Write A Review</a>
<br />
<br />
                    <h3>Still In Two Minds? Check Our 24 Genuine Reviews!</h3>

                    <h4>Listen To Our 98% Happy Clients</h4>
                </div>
            </div>
     
        
</div>
                        </aside>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
   
<section>
    <div class="sample-page" id="myModal">
        <div class="container">
            <div class="row">
                <!-- Post Content -->
                <div class="col-md-9">

                    <div class="right-side">

                      
 

                        <div class="comments">

                            <div class="comments_navigation pagination-items big">
                            </div>

                            <div id="respond" class="comment-respond">

<form action="<?= base_url();?>assignment/<?= $this->uri->segment(2);?>/<?= $this->uri->segment(3);?>/senddata" method="post" id="commentform" class="comment-form">
                                    <div class="clearfix"></div>
                                    <div class="paragraph-title">
                                        <p class="bold-paragraph">LEAVE COMMENT / REVIEW</p>
                                        <div class="short-line">
                                            <img src="<?= base_url();?>assets/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">


<?php echo  $this->session->flashdata('success'); ?>
                                            <div class="form-group inputs">
                                                <div class="row">
                                                    <div class="col-md-12 text-left">
<div class='rating-stars text-center pull-left'>
    <ul id='stars'>
      <li class='star' title='Poor' data-value='1'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Fair' data-value='2'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5'>
        <i class='fa fa-star fa-fw'></i>
      </li>
    </ul>
  </div>
                                                    </div>
<div class="col-md-6">
  <div class="form-group">
    <input name="rating" id="rating" type="hidden" value="" aria-required="true">
<input placeholder="Your Name" name="author" class="form-control" id="author" type="text" value="" aria-required="true">
        <?php echo form_error('author');  ?>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <input placeholder="Email" name="email" class="form-control" onblur="validateEmail(this);" id="email" type="text" value="" aria-required="true">
    <?php echo form_error('email');  ?>
  </div>
</div>
<div class="col-md-12">
  <div class="form-group">
    <textarea class="form-control" rows="5" name="comment" id="comment" placeholder="Comment"></textarea>
    <?php echo form_error('comment');  ?>
  </div>
</div>
<p class="col-md-12">
    <button type="submit" onclick="getdata();" id="submit"  class="btn btn-danger">
  Post Your Comment & Review  <i class="fa fa-paper-plane"></i>
                                    </button>
    <input type="hidden" name="last" value="<?php echo $this->uri->segment(1);?>">
    <input type="hidden" name="assid" value="<?php echo $this->uri->segment(2);?>">
</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Form ends !-->
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- End Single Post Section -->
</section>
<script type="text/javascript">
    $(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
       // alert(onStar);
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
$('#rating').val(ratingValue);
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
  });
  
  
});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}

    function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            //$('#email').focus();
            return false;
        }

        return true;

}
</script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: 'Y/m/d g:i A',
        formatTime: 'g:i A',
        minDate: 0,
        minTime: 0,

    });
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
            //alert(srg);

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
       jQuery('#search').val(str);
       jQuery('#searchid').val(str2);
    }
    </script>
    <style>
        .btn-sm {
    padding: 2px;
    font-size: 12px;
}
.div-shadow-background .fa {
    background: #f0ad4e00;
    font-size: 20px !important;
    color: #3F51B5;
    color: #ffffff;
    text-shadow: 0px 0px 6px #ffc333;
}
html { scroll-behavior: smooth; } 
    </style>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/review.css">