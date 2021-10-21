 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url();?>assets/setting/<?= $about_img->image;?>);">
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

    <!-- Start About 
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-info">
                    <div class="col-md-12 info">
                        
                        <h2>How it Works</h2>
                        <?= $about_data14->pagecontent;?>
                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>

<div class="container">
<?php 
$count=1;
foreach($how_work as $howitworkresult){ 
 ?>
  <div class="row">
        <div class="col-md-3 text-center"><img src="<?php echo base_url();?>assets/setting/<?php echo $howitworkresult->image; ?>"></div>
        <div class="col-md-9">
            <h2 class="mar-1"><?php echo $howitworkresult->title;?></h2>
            <?php echo $howitworkresult->content;?>
        </div>
        
    </div> 
    <?php } ?>  
</div>
<div class="container">
    <div class="row">
        <div class="about-info">
            <div class="col-md-12 info">
                <?= $about_data15->pagecontent;?>
            </div>
        </div>               
    </div>
</div>