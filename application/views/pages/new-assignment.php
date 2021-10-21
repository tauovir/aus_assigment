 

<div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8  col-md-offset-2">
                    <h3 class="text-center">GUARANTEED HIGHER GRADE OR GET YOUR MONEY BACK!</h3>
                    <h4 class="text-center">GET HELP INSTANTLY</h4>
<form action="<?= base_url();?>new-assignment/save" method="post" enctype="multipart/form-data" class="white-popup-block">



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
                        <p class="titles">Your Price : <span id="pricecalculate">0 </span></p> 
                       <!-- <p class="titles">Study Level :  <span id="pricecalculate2">0 </span></p>--> 
                    </div>
                </div> 
<div class="col-md-12 login-custom" style="margin-top:15px;">
    <div class="col-md-6">
        <div class="form-group">
            <label for="Work_Level" class="form-heading">Your Current Level of Study</label>
                <select class="form-control" name="study_level" id="study_level" onchange="calculate(this.value);">
                    <option value="">Select Current Level of Study</option>
                    <?php foreach($all_studylevel as $study_value){ ?>
                    <option value="<?= $study_value->id;?>"><?= $study_value->name;?></option>
                    <?php } ?>
                </select>
            <span class="bbt_registration_error text-danger">
                    <?php echo form_error('study_level');  ?>
                    <?php echo $this->session->flashdata('study_level'); ?>
            </span>
    </div>
</div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-heading">Reference Style of Assignment</label>
                    <select class="form-control" name="assi_referencce" id="assi_referencce">
                        <option value="">Select Reference Style of Assignment</option>
                        <?php foreach($all_reference as $refrence_value){ ?>
                        <option value="<?= $refrence_value->id;?>"><?= $refrence_value->name;?></option>
                        <?php } ?>
                    </select>
                    <span class="bbt_registration_error  text-danger"><?php echo form_error('assi_referencce');  ?><?php echo $this->session->flashdata('assi_referencce'); ?></span> 
                </div>
            </div>
                            
 


 <div class="col-md-6">
                
                
            
                
                  <div class="row">
                            <div class="col-md-12 col-xs-12">
                                 <label for="mobile" class="form-heading">Contact Number</label>
                            </div>
                           
                            
                            
                            
                            <div class="col-md-9 col-xs-8">
                                
                                    <div class="form-group">
                                       
<input class="form-control" name="mobile"  id="mobile" value="<?php if($user_detail->mobile!=0){ echo $user_detail->mobile;}?>"   onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Contact Number*" type="text">
   <span class="bbt_registration_error error  text-danger"><?php echo form_error('mobile');  ?><?php echo $this->session->flashdata('mobile'); ?></span>
                                    </div>
                                </div>
                            </div>
                
                
            </div>




<div class="col-md-6">
    <div class="form-group">
        <label class="form-heading">Upload Your File </label>
            <input type="file" name="assi_desrip_file" id="assi_desrip_file" class="form-control">
                <span class="bbt_registration_error  text-danger">
                    <?php echo form_error('assi_desrip_file');  ?><?php echo $this->session->flashdata('assi_desrip_file'); ?>
                </span>
    </div>
</div>


            <div class="col-md-12">
                <div class="form-group comments">
                    <label class="form-heading">Tell us More About </label>
                    <textarea class="form-control" name="assi_desrip" id="assi_desrip" placeholder="Tell Me About Courses *"></textarea>
            <span class="bbt_registration_error  text-danger">
                <?php echo form_error('assi_desrip');  ?>
                <?php echo $this->session->flashdata('assi_desrip'); ?>
            </span>
            <input type="hidden" name="callbacktime" value="na">
        </div>
    </div>
                <div class="col-md-12">
                    <div class="row text-center">
                        <button type="submit" name="submit">Continue</button>
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
                  <a href="<?= base_url();?>order-step-1" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Fill basic details of your assignment</div>
                </div>
                
                
                
                <div class="col-xs-6 bs-wizard-step "><!-- active -->
                  <div class="text-center bs-wizard-stepnum">Step 2</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                  <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">
                    Fill the requirement & place your order
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function calculate(str) {
        $.ajax({
            url: '<?php echo base_url();?>pages/getstudylevelprice/'+str,
            type: 'POST',
            data: {str: str},
            error: function() {
                $('#pricecalculate2').hide();
            },
            success: function(data) {
                $('#pricecalculate2').html(data);
            }
        });
    }
</script>