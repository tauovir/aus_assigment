<!-- Start Breadcrumb ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url();?>assets/setting/<?= $banner_image->image;?>);">
        <div class="container">
            <div class="row">
                
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
<label class="form-heading" for="fullname">Full name<span class="text-danger">*</span></label>
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

                       <div class="col-md-5 col-md-push-1 info text-justify">
                                                <h3>Assignment Help</h3>
                                                <ul class="font-deco">
                                                    <li>
                                                        <i class="fas fa-check-double pb-70"></i>
                                                        <span class="pb-80">100+ Students Support Executive to Listen Students Requirement</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-double pb-70"></i>
                                                        <span class="pb-80">Highest Grade for All Academic Needs</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-double pb-70"></i>
                                                        <span class="pb-80">10+ Years Of Experience in Academic Writing</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-double pb-70"></i>
                                                        <span class="pb-80">Global Assignment Helper</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-double pb-70"></i>
                                                        <span class="pb-80">Over 300k+ Satisfied Students</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-double pb-70"></i>
                                                        <span class="pb-80">Assignment Help</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-double pb-70"></i>
                                                        <span class="pb-80">Best Assignment Writer</span>
                                                    </li>
                                                </ul>
                                                
                                            </div>


                </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div class="container content-section-grey">
        <div class="row">
            <div class="col-md-5 text-jsutify col-md-offset-1">
                <h2 class="text-justify apppromotion">We would love to be with you anytime you need<br><br>Get our app with just a click</h2></div>
            <div class="col-md-6 text-center" style="margin-top:20px;">
                <a href="https://play.google.com/store/apps/details?id=com.gyanudaytechnologies.australialegalassignment" target=_blank><img src="assets/img/androidapp.png" class="app-image"></a>
            </div>
        </div>
    </div>
    <!-- Start Top Category & Trending Courses ============================================= -->
                            <div class="top-cat-area inc-trending-courses about-area default-padding">
                                <div class="container seperator">
                                    <h2 class="text-center">Our Featured Services</h2>
                                    <span class="border pb-40"></span>
                                    <div class="row">
                                        <div class="col-md-12 top-cat-items text-light inc-bg-color text-center">
                                            <div class="row">
                                               

<?php $count_fe=1; foreach($highlighted_data as $fe_data){ 
        $this->db->select('*');
        $this->db->from('add_products');
        $this->db->where('id',$fe_data->image_category);
        $this->db->order_by('id','ASC');
        $this->db->limit(1);
        $all_as = $this->db->get()->row();
    ?>
<style type="text/css">
    .top-cat-area .top-cat-items.inc-bg-color .item.mariner<?=$count_fe;?> a::after {
    background: <?= $fe_data->bgcolor;?> none repeat scroll 0 0 !important;
}
</style>
        <div class="col-md-4 col-sm-6 equal-height">
            <div class="item mariner<?=$count_fe;?>" style="background-image: url(<?= base_url();?>assets/products/<?= $all_as->product_image;?>);">
                <a href="<?= base_url();?>assignment/<?= $all_as->id;?>/<?= slugify($all_as->title);?>">
                <img src="<?= base_url();?>assets/setting/<?= $fe_data->image;?>" class="icons">
                        <div class="info">
                            <h4><?= $fe_data->title;?></h4>
                        </div>
                </a>
            </div>
        </div>
<?php  $count_fe++;} ?>
                                            </div>
                                        </div>
                                        
                                        <!-- End Top Category -->
                                        
                                    </div>
                                </div>
                               <div class="more-btn col-md-12 text-center" style="margin-top: 30px;">
                                    <a href="<?= base_url();?>services" class="btn btn-dark border btn-md">More</a>
                                </div>
                            </div>
                            <!-- End Top Categories & Trending Courses -->
                            <!--about start-->
                            <div class="container-fluid abt">
                                <div class="row">
                                    <div class="col-12 statics-container pt-0">
                                        <div class="__heading-container info-container pt-0">
                                           <h4>Why  Australialegalassignmenthelp.com</h3>
                                            <?= $whyassignment->pagecontent;?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Start Why Choose Us
                            ============================================= -->
                            <div class="wcs-area bg-dark text-light">
                                <div class="container-full">
                                    <div class="row">
                                        <div class="col-md-6 thumb bg-cover" style="background-image: url(<?= base_url();?>assets/setting/<?= $why_choose_u->image;?>);"></div>
                                        <div class="col-md-6 content">
                                            <div class="site-heading text-left">
                                                <h2>Why choose us</h2>
                                                <?= $why_chose_data->pagecontent;?>
                                            </div>
                                            <!-- item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Why Chose Us -->
                            <!--Start Why we Are-->
                                
                                <div class="container">
                                <div class="row">
                                    <div class="col-12 statics-container pt-0">
                                        <div class="__heading-container info-container pt-0">
                                             
                                            <?=$about_data2->pagecontent;?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;margin-bottom: 30px;">
                                    <h3  class="--heading text-center">Assignment Help - Best Assignment Helpers Are Online</h3>
                                    <div class="col-md-6 text-justify">
                                        <?=$about_data23->pagecontent;?>
                                        
                                    </div>
                                    <div class="col-md-6 text-justify">
                                       <?=$about_data24->pagecontent;?>
                                        
                                    </div>
                                    
                                </div>
                            </div>
   <div class="content-section-grey">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                            <h2 class="--heading text-center">Assignment Help Services</h2>
                                        </div>
                                    </div>
                                    <div class="row">
<?php foreach($testimonial as $assignment_help_ser){ ?>

                                        <div class="col-md-6">
                                            <p class="textCommon text-justify"><strong><?= $assignment_help_ser->title;?></strong>: <?= $assignment_help_ser->content;?></p>
                                        </div>
<?php } ?>


                                    </div>
                                    
                                </div>
                            </div>

                            <!--services details-->
                        
                            <!-- Start Fun Factor home_counter
                            ============================================= -->
                            <div class="fun-factor-area default-padding bottom-less text-center bg-fixed shadow dark-hard" style="background-image: url(<?= base_url();?>assets/setting/<?= $home_counter->image;?>);">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 item">
                                            <div class="fun-fact">
                                                <div class="icon">
                                                    <i class="flaticon-contract"></i>
                                                </div>
                                                <div class="info">
                                                    <!--<span class="timer" data-to="212" data-speed="5000"></span>-->
                                                    <span class="medium">Plagiarism Free </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 item">
                                            <div class="fun-fact">
                                                <div class="icon">
                                                    <i class="flaticon-professor"></i>
                                                </div>
                                                <div class="info">
                                                   <!-- <span class="timer" data-to="128" data-speed="5000"></span>-->
                                                    <span class="medium">100%  Satisfaction</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 item">
                                            <div class="fun-fact">
                                                <div class="icon">
                                                    <i class="flaticon-online"></i>
                                                </div>
                                                <div class="info">
                                                   <!-- <span class="timer" data-to="8970" data-speed="5000"></span>-->
                                                    <span class="medium">Best In Price </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 item">
                                            <div class="fun-fact">
                                                <div class="icon">
                                                    <i class="flaticon-reading"></i>
                                                </div>
                                                <div class="info">
                                                   <!-- <span class="timer" data-to="640" data-speed="5000"></span>-->
                                                    <span class="medium">24*7 Support</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Fun Factor -->
                            <!--Featured Container-->
                            <div class="about-area default-padding">
                                <div class="container">
                                    <div class="row">
                                        
                                        <div class="seperator col-md-12 pb-30">
                                            <h2 class="text-center" title="Featured and services">Our Features</h2>
                                            <span class="border pb-40"></span>
                                        </div>
                                        <div class="our-features pb-60">

<?php foreach($highlighted_data2 as $homehigdata){ ?>

                                            <div class="col-md-6 col-sm-4">
                                                <div class="item mariner">
                                                    <div class="icon">
                                                   <a href="<?= $homehigdata->image_category;?>"> <img src="<?php echo base_url();?>assets/setting/<?php echo $homehigdata->image; ?>" class="icons" title="<?= $homehigdata->title;?>" alt="<?= $homehigdata->title;?>">
                                                   </a>
                                                    </div>
                                                    <div class="info">
                                                        <a href="<?= $homehigdata->image_category;?>"><h4 title="<?= $homehigdata->title;?>"><?= $homehigdata->title;?></h4></a>
                                                        <?= $homehigdata->content;?>
                                                    </div>
                                                </div>
                                            </div>
<?php } ?>
                                            
                                     
                                            
                                    
                                            
                                        </div>
                                        
                                    </div>
                                
                                    <div class="more-btn col-md-12 text-center">
                                        <a href="<?= base_url();?>features" class="btn btn-dark border btn-md">More Features</a>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!-- Start Testimonials
                            ============================================= -->
                            <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
                                <div class="container">
                                    <div class="row">
                                        <div class="site-heading text-center">
                                            <div class="col-md-8 col-md-offset-2">
                                                <h2>Students Review</h2>
                                                <p>
                                                    <?= $student_review->pagecontent;?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="clients-review-carousel owl-carousel owl-theme">
<?php foreach($student_re as $review_student){ ?>
                                                <!-- Single Item -->
                                                <div class="item">
                                                    <div class="col-md-10 col-md-offset-1 info">
                                                        <p>
                                                            <?= $review_student->comment;?>
                                                        </p>
                                                        <h4>
                                                            <?= $review_student->author;?>
                                                        </h4>
                                                        <span><?= $review_student->subject;?></span>
                                                    </div>
                                                </div>
                                                <!-- Single Item -->
<?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonials -->
                            <!--Order now link-->
                            <div class="container-fluid">
                                <div class="order-now-common-row ">
                                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                        <h4 class="order-title">Get Quality Assignment Without Paying Upfront</h4>
                                        <h3 class="order-title-tagline">Hire World's #1 Assignment Help Company</h3>
                                        <div class="more-btn col-md-12 text-center">
                                            <a href="<?= base_url();?>order-step-1" class="btn btn-dark border btn-md">Place Your order</a>
                                        </div>
                                        <a href="<?= base_url();?>reviews" class="demo-link">Check Student Reviews <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--order now link ended-->
                         