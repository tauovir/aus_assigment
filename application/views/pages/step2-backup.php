   <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="text-center">GUARANTEED HIGHER GRADE OR GET YOUR MONEY BACK!</h3>
                    <h4 class="text-center">GET HELP INSTANTLY</h4>
<form action="<?= base_url();?>order-step-2/<?php echo $this->uri->segment(2);?>/save" method="post" enctype="multipart/form-data" class="white-popup-block">
    <div class="col-md-12 login-custom">
        <h4 class="text-center">Fill Assignment Details</h4>
            <div class="col-md-12">
                <!--Accordion wrapper-->
<div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
  <div class="card"> 
    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98">
      <h5 class="text-uppercase mb-0 py-1 text-right">
        <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse98" aria-expanded="false" aria-controls="collapse98">
          <i class="fa fa-angle-down"></i>
        </a>
      </h5>
    </div>
    <div id="collapse98" class="collapse" role="tabpanel" aria-labelledby="heading98"
      data-parent="#accordionEx23">
      <div class="card-body">
        <div class="row">
 
    <div class="col-md-6">
        <div class="form-group">
            <label for="fullname">Full Name </label>
            <input class="form-control" name="fullname" id="fullname" value="<?php echo $order_data->fullname;?>"  placeholder="Full Name *" type="text">
            <span class="bbt_registration_error error  text-danger">
                <?php echo form_error('fullname');  ?>
                <?php echo $this->session->flashdata('fullname'); ?>
            </span> 
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>E-mail </label>
            <input class="form-control" name="emailid" id="user" value="<?php echo $order_data->email;?>"  placeholder="Email*" type="email" readonly>
            <span class="bbt_registration_error error  text-danger">
                <?php echo form_error('emailid');  ?>
                <?php echo $this->session->flashdata('emailid'); ?>
            </span> 
        </div>
    </div>



                            <div class="col-md-6">
                                
                                    <div class="form-group">
                                        <label>Enter Your Subject</label>
<input class="form-control" value="<?php echo $order_data->subject;?>"  name="subject" id="search" onkeyup="getassignmetn(this.value);"  placeholder="Subject*" type="Subjects">
<input type="hidden" name="searchid" id="searchid" value="<?php echo $order_data->subject_id;?>">
  <input type="hidden" name="other_assignment" value="<?php echo $order_data->other_assignment;?>">
  
 <div id="search_products" style="display: none;">
 </div>
  <span class="bbt_registration_error error text-danger"><?php echo form_error('subject');  ?><?php echo $this->session->flashdata('subject'); ?></span> 

                                    </div>
                                
                            </div>
    <div class="col-md-6">
        <label>Deadline</label>
        <div class="form-group">
            <input class="form-control form_datetime" name="deadline" id="calendar" placeholder="Deadline" type="text" value="<?php echo $order_data->deadline;?>" readonly="">
            <span class="bbt_registration_error error text-danger">
                <?php echo form_error('deadline');  ?>
                <?php echo $this->session->flashdata('deadline'); ?>
            </span> 
        </div>
    </div>
 
        <div class="col-md-6">
            <div class="form-group">
                <label>No. of Pages <span>(1 page = 250 words)</span></label>
                       <div class="input-group number-spinner">
                        <span class="input-group-btn" onclick="changeval(-1);">
                            <a class="btn btn-danger" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></a>
                        </span>
                        <input type="text" name="nopages" id="paper" class="form-control text-center" value="<?php echo $order_data->pages;?>" max="100" min="1" onkeyup="calpapes(this.value);">
                        <span class="input-group-btn" onclick="changeval(1);">
                            <a class="btn btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></a>
                        </span>
                    </div>
                    <span class="bbt_registration_error error text-danger">
                        <?php echo form_error('nopages');  ?>
                        <?php echo $this->session->flashdata('nopages'); ?>
                    </span> 
                </div>
            </div>
            <div class="col-md-6">
            <div class="form-group" style="margin-top: 35px !important; text-align: center;">
                    <span class="alert-error" id="pagescount"><?php echo $order_data->pages*250;?> Words </span>
                </div>
            </div>
</div>


        </div>
      </div>
    </div>

</div>
<!--Accordion wrapper-->
            </div>




            <div class="col-md-6">
                <div class="form-group">
                    <label for="Work_Level">Your Current Level of Study</label>
                    <select class="form-control" name="study_level" id="study_level">
                        <option value="">Chose Subject</option>
                        <?php foreach($all_studylevel as $study_value){ ?>
                        <option value="<?= $study_value->id;?>"><?= $study_value->name;?></option>
                        <?php } ?>
                    </select>
 <span class="bbt_registration_error text-danger"><?php echo form_error('study_level');  ?><?php echo $this->session->flashdata('study_level'); ?></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Reference Style of Assignment</label>
                    <select class="form-control" name="assi_referencce" id="assi_referencce">
                        <option value="">Chose Subject</option>
                        <?php foreach($all_reference as $refrence_value){ ?>
                        <option value="<?= $refrence_value->id;?>"><?= $refrence_value->name;?></option>
                        <?php } ?>
                    </select>
                    <span class="bbt_registration_error  text-danger"><?php echo form_error('assi_referencce');  ?><?php echo $this->session->flashdata('assi_referencce'); ?></span> 
                </div>
            </div>
                            
            <div class="col-md-6">
                <div class="form-group">
                    <label>Enter Your Contact Number</label>
                    <input class="form-control" name="mobile" id="mobile"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Phone" type="text">
                    <span class="bbt_registration_error  text-danger"><?php echo form_error('mobile');  ?><?php echo $this->session->flashdata('mobile'); ?></span>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Upload Your File </label>
<input type="file" name="assign_file" id="assign_file" class="form-control">
                        <span class="bbt_registration_error  text-danger"><?php echo form_error('assign_file');  ?><?php echo $this->session->flashdata('assign_file'); ?></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group comments">
                    <label>Tell us More About </label>
                    <textarea class="form-control" name="assi_desrip" id="assi_desrip" placeholder="Tell Me About Courses *"></textarea>
                    <span class="bbt_registration_error  text-danger"><?php echo form_error('assi_desrip');  ?><?php echo $this->session->flashdata('assi_desrip'); ?></span>
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