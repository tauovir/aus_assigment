 <!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="text-center">GUARANTEED HIGHER GRADE OR GET YOUR MONEY BACK!</h3>
                    <h4 class="text-center">GET HELP INSTANTLY</h4>
                    <form action="<?= base_url();?>order-step-1/submit" method="post" id="login-form" class="white-popup-block">
                        
<div class="col-md-12 login-custom">
    <h4 class="text-center">Fill The Basic Details</h4>
    <div class="col-md-6">
<div class="form-group text-left">
<label class="form-heading" for="fullname">Full name<span class="text-danger">*</span><span class="bbt_registration_error error  text-danger">
<?php echo form_error('fullname');  ?>
<?php echo $this->session->flashdata('fullname'); ?>
</span></label>
<input class="form-control" <?php if (isset($_COOKIE["wssinfotech_login"])) { echo'value="'.$user_detail->name.'" readonly' ; }?> name="fullname" id="fullname" placeholder="Full Name" type="text">


        </div>
<div>
    
</div>
 
</div>



<div class="col-md-6">
    <div class="form-group text-left">
        <label class="form-heading" for="user">Email<span class="text-danger">*</span><span class="bbt_registration_error error  text-danger">
                <?php echo form_error('emailid');  ?>
                <?php echo $this->session->flashdata('emailid'); ?>
            </span> </label>
            <input <?php if (isset($_COOKIE["wssinfotech_login"])) { echo 'readonly'; }?> class="form-control" name="emailid" id="user" value="<?php if (isset($_COOKIE["wssinfotech_login"])) { echo $_COOKIE["wssinfotech_login"]; }?>" placeholder="Email" type="text"> 
            

    </div>
</div>
<div class="col-md-6">
    <div class="form-group text-left">
        <label class="form-heading" for="subject">Subject<span class="text-danger">*</span>
            <span class="bbt_registration_error error text-danger">
            <?php echo form_error('subject');  ?><?php echo $this->session->flashdata('subject'); ?>
           </span>
        </label>
        <select class="form-control" name="subject" id="subject" onchange="chnagesubject(this.value);">
    <?php foreach($all_products->result() as $subjectData){ ?>
        <option value="<?= $subjectData->id;?>"><?= $subjectData->title;?></option>
    <?php } ?>
</select>

 
        <input type="hidden" name="searchid" id="searchid" value="">
        <input type="hidden" name="other_assignment" value="NA">
        <div id="search_products" style="display: none;"></div>
           
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group text-left">
            <label class="form-heading" for="deadline">Urgency<span class="text-danger">*</span><span class="bbt_registration_error error text-danger">
                <?php echo form_error('deadline');  ?>
                <?php echo $this->session->flashdata('deadline'); ?>
             </span> </label>
        <select class="form-control" name="deadline" id="deadline" onchange="chnagedeadline(this.value);">
            <?= $urgency_opt;?>   
        </select>
            
            </div>
        </div>
        <div class="col-md-6">
                                
       <div class="form-group text-left">
<label class="form-heading col-md-12" for="deadline">Number of pages  <span class="text-danger">*</span></label>

                     
                     <div class="input-group number-spinner">
                        <span class="input-group-btn input-group-addon" onclick="changeval(-1);">
                            <button type="button" class="btn btn-danger btn-sze" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                        </span>
                        <input type="hidden"  name="nopages" id="paper" onkeyup="calpapes(this.value);" class="form-control text-center" value="1" max=100 min=1>
                  
                  <input type="text" class="form-control" name="somecontent" id="somecontent" value="1 pages / 250 words" readonly="">


                        <span class="input-group-btn input-group-addon" onclick="changeval(1);">
                            
                            <button type="button" class="btn btn-info btn-sze" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
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


                            <div class="col-md-12 text-center">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit" class="btn btn-danger">
                                        Order Now  <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>



</div>


</form>
</div>
</div>
             <div class="row bs-wizard" style="border-bottom:0;">
                <div class="col-xs-6 bs-wizard-step">
                  <div class="text-center bs-wizard-stepnum">Step 1</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Fill basic details of your assignment</div>
                </div>
                
                
                
                <div class="col-xs-6 bs-wizard-step "><!-- active -->
                  <div class="text-center bs-wizard-stepnum">Step 2</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Fill the requirement & place your order</div>
                </div>

        </div>
    </div>

    </div>
    <!-- End Login Area -->