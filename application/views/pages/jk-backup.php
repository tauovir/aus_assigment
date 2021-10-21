<script type="text/javascript">
        $(window).load(function(){
                $('#onload').modal('show');
            });
</script>
<style>
    a.collapsed {
    background: #feb506;
    color: white;
    padding: 5px;
    border: 0px solid;
    border-radius: 50%;
    width: 26px;
    height: 26px;
    padding: 2px 6px 0px 6px;
    font-size: 19px;
}
/*phone code css*/
</style>

<div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8  col-md-offset-2">
                    <h3 class="text-center">GUARANTEED HIGHER GRADE OR GET YOUR MONEY BACK!</h3>
                    <h4 class="text-center">GET HELP INSTANTLY</h4>
<form action="<?= base_url();?>order-step-2/<?php echo $this->uri->segment(2);?>/save" method="post" enctype="multipart/form-data" class="white-popup-block">


<?php echo $this->session->flashdata('success_regiter'); ?>
    <div class="col-md-12 login-custom">
    <article class="card-group-item">
        <header class="card-header text-right">
            <a href="javascript:void();" data-toggle="collapse" data-target="#collapse44" aria-expanded="false" class="collapsed">
                <i class="fa fa-chevron-down"></i>
            </a>
        </header>
        <div class="filter-content collapse" id="collapse44" style="">
            <div class="card-body">
                         <h4 class="text-center">Assignment Basic Details</h4>


<div class="col-md-6">
<div class="form-group text-left">
<label class="form-heading" for="fullname">Full name<span class="text-danger">*</span></label>
<input class="form-control" name="fullname" id="fullname" placeholder="Full Name" readonly="" value="<?= $order_data->fullname;?>" type="text">
</div>
</div>

                            <div class="col-md-6">
                                     <div class="form-group text-left">
<label class="form-heading" for="user">Email <span class="text-danger">*</span></label>
<input <?php if (isset($_COOKIE["wssinfotech_login"])) { echo 'readonly'; }?> class="form-control" name="emailid" id="user" value="<?= $order_data->email;?>" placeholder="Email" type="text"> <span class="bbt_registration_error error  text-danger"><?php echo form_error('emailid');  ?><?php echo $this->session->flashdata('emailid'); ?></span> 

                                    </div>
                                </div>
                            <div class="col-md-6">
                                 
 <div class="form-group text-left">
<label class="form-heading" for="subject">Subject <span class="text-danger">*</span></label>
<select class="form-control" name="subject" id="subject" onchange="chnagesubject(this.value);">
 
<?php foreach($all_products->result() as $subjectData){ ?>
<option value="<?= $subjectData->id;?>" <?php if($subjectData->id==$order_data->subject){ ?> selected="" <?php } ?>><?= $subjectData->title;?></option>
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
<?php 
    $this->db->select('*');
    $this->db->from('assignment_urgency');
    $this->db->where('assignment_id',$order_data->subject);
    $all_Urgency = $this->db->get()->result();
    foreach ($all_Urgency as $urgency_data) {
            $this->db->select('*');
            $this->db->from('urgency');
            $this->db->where('id',$urgency_data->urgency_id);
            $urgency = $this->db->get()->row(); ?>
<option value='<?= $urgency_data->id; ?>' <?php if($urgency_data->id==$order_data->deadline){ ?> selected="" <?php } ?>><?= $urgency->name; ?></option>
<?php } ?>
  
</select>



  <span class="bbt_registration_error error text-danger"><?php echo form_error('deadline');  ?><?php echo $this->session->flashdata('deadline'); ?></span> 
                                    </div>
                                
                            </div>
                            <div class="col-md-6">
                                
       <div class="form-group text-left">
<label class="form-heading col-md-12" for="deadline">Number of pages  <span class="text-danger">*</span></label>
        <div class="input-group number-spinner">
            <span class="input-group-btn" onclick="changeval(-1);">
                            <button type="button" class="btn btn-danger" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                        </span>
                        <input type="hidden"  name="nopages" id="paper" onkeyup="calpapes(this.value);" class="form-control text-center" value="<?= $order_data->pages;?>" max=100 min=1>
                  <input type="text" class="form-control" name="somecontent" id="somecontent" value="<?= $order_data->pages;?> pages / <?= $order_data->pages*250;?> words" readonly="">
                        <span class="input-group-btn" onclick="changeval(1);">
                            <button type="button" class="btn btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                        </span>
                    </div>
                </div>
            </div>
                              
    <div class="col-md-6">
        <div class="form-group">
            <p class="titles">Your Price <span   id="pricecalculate">0 </span></p> 
        </div>
    </div> 
    </div> <!-- card-body.// -->
    </div>
</article> <!-- card-group-item.// -->
                           
<div class="row">
    <div class="col-md-12">
<h4 class="text-center">Fill Assignment Details</h4>
    </div>
</div>

        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Work_Level">Your Current Level of Study</label>
                    <select class="form-control" name="study_level" id="study_level">
                        <option value="">Select Current Level of Study</option>
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
                                 <label for="mobile">Contact Number</label>
                            </div>
                                            <div class="col-md-4 col-xs-5">
                                <!--<?php $code =  $this->db->get('tbl_countries')->result();   ?> -->
                                <!--<select  class="form-control" style="padding:0px" name="phonecode">-->
                                <!--<?php foreach($code as $c ): ?>-->
                                <!--<option value="+<?= $c->phonecode; ?>" <?= ($_SESSION['country']['phonecode']==$c->phonecode) ? 'selected' : '' ?>><?= $c->sortname; ?> (+<?= $c->phonecode; ?>)</option>-->
                                    <!--<input type="text" value="+<?=$_SESSION['country']['phonecode'];?>" readonly class="form-control" />-->
                                <!--<?php endforeach; ?>-->
                                <!--</select>-->
                            </div> 
                            
                            
                            
                            <div class="col-md-8 col-xs-7">
                                
                                    <div class="form-group">
                                       
<input class="form-control" name="mobile"  id="mobile" value="<?php if($user_detail->mobile!=0){ echo $user_detail->mobile;}?>"    placeholder="Contact Number*" type="number">
   <span class="bbt_registration_error error  text-danger"><?php echo form_error('mobile');  ?><?php echo $this->session->flashdata('mobile'); ?></span>
                                    </div>
                                </div>
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
                    <label>Tell us More About your assignment </label>
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
                  <a href="<?= base_url();?>order-step-1" class="bs-wizard-dot"></a>
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