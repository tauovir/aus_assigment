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
                            <button type="button" class="btn btn-danger" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
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
                    <h3>Still In Two Minds? Check Our <?= $tcount;?> Genuine Reviews!</h3>

                    <h4>Listen To Our 98% Happy Clients</h4>
                </div>
            </div>
<?php if($offer_image->num_rows()>0){ ?>            
<div class="col-xs-12 text-center">
    
     <?php 
            foreach($offer_image->result() as $review_image){ ?>
                 <div class="col-md-12 text-center hidden-sm hidden-xs thumb">
                     <br />
                     <a href="<?= $review_image->title?>">
                    <img src="<?= base_url();?>assets/setting/<?= $review_image->image?>" alt="Thumb">
                    </a>
                    <br />
                    <hr />
                    
                </div>
         <?php   }
        ?>           
        
</div>            
<?php } ?>         
     
        
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

<?php if (isset($_COOKIE["wssinfotech_login"])) { ?>

<!--
//// comment section start here
-->

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


<div class="form-group col-sm-12" id="rating-ability-wrapper">
	    <label class="control-label" for="rating">
	   
	    <span class="field-label-info"></span>
	    <input type="hidden" id="selected_rating" name="rating" value="1" required="required">
	    </label>
	    <h2 class="bold rating-header" style="">
	    <span class="selected-rating">1</span><small> / 5</small>
	    </h2>
	    <button type="button" class="btnrating btn btn-warning btn-lg" data-attr="1" id="rating-star-1">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	</div>
	
	
	
	
	
	
<div class="col-md-12">
  <div class="form-group">
   
<input placeholder="Your Name" name="author" class="form-control" id="author" type="text" value="<?=$user_detail->name;?>" aria-required="true" >
        <?php echo form_error('author');  ?>
  </div>
</div>
 
    <input placeholder="Email" name="email" class="form-control" onblur="validateEmail(this);" id="email" type="hidden" value="<?=$_COOKIE["wssinfotech_login"];?>" readonly aria-required="true">
    <?php echo form_error('email');  ?>
   
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
<!--
//// comment section end here
-->
<?php } else { ?>
<div class="container-fluid">
<div class="order-now-common-row ">
<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
<h4 class="order-title">Add a review</h4>
<h3 class="order-title-tagline">Please login to post your review ?</h3>
<div class="more-btn col-md-12 text-center">
<a href="<?= base_url();?>login" class="btn btn-dark border btn-md">Login Now</a>
</div>
 


                                    </div>
                                </div>
                            </div>

<?php } ?>

                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- End Single Post Section -->
</section>
<script type="text/javascript">
    	
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
    padding: 2px !important;
    font-size: 10px !important;
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