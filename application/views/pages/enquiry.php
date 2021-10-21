<style type="text/css">
    .error {
        float: right;
    }
</style>

<section class="vc_custom_1490026367457      section" style="padding-top: 10px;">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div >
                           
                            <form action="<?php echo base_url();?>pages/enquiry/<?= $this->uri->segment(3);?>/send" method="post" >
                            
                                <div class="contact">
                                    <div class="contact-left-side">
                                        <p>Make a query for  | <?= $alldata->title;?></p>
                                        <p> <img src="<?php echo base_url();?>assets/blue-line-short.png" class="img-responsive"></p>

                                       <div>
                                        <?php echo validation_errors(); ?>
                                        <?php echo  $this->session->flashdata('success'); ?></div>


                                        <div>
                                            <span class="wpcf7-form-control-wrap your-name">

<label style="margin-top: 10px; margin-bottom: 0px;">Enter title *</label>
<input type="text" name="qtitle" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Title" /></span><i class="fa fa-comments-o"></i>
<span class="bbt_registration_error error"><?php echo form_error('qtitle');  ?><?php echo $this->session->flashdata('qtitle'); ?></span>
</div>
<div> 
 <span class="wpcf7-form-control-wrap your-message">
<label style="margin-top: 10px; margin-bottom: 0px;">Enter your message *</label>
<textarea name="query" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your message"></textarea></span>

<span class="bbt_registration_error error"><?php echo form_error('query');  ?><?php echo $this->session->flashdata('query'); ?></span>


</div>
                                            <br />
                                            <input type="submit" value="SEND" class="wpcf7-form-control wpcf7-submit" />
                                         
                                    </div>
                                </div>
                         
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="contact vc_custom_1487830953783 ">
                            <div class="contact-right-side">
                                <p class="info-title">Our discussion</p>
                                <img src="<?php echo base_url();?>assets/blue-line-short.png" class="img-responsive" alt="" />
<?php 
    foreach ($allquery->result() as $row_data) {
      
?>
                                <div class="info-row">
                                    <div class="blue-icon">
                                        <div class="blue-icon-cercle">
                                            <i class="fa fa-comments-o"></i>
                                        </div>
                                    </div>
                                    <p class="title">#<?= $row_data->ticket_id;?></p>
                                    <p class="title"><?= $row_data->qtitle;?></p>
                                    <p class="description"><strong><?= $row_data->query;?></strong></p>
                                    <p class="description" style="padding-left: 70px;">
                                        <span style="font-size: 16px; color: red; font-weight: 600;">Reply : </span><?= $row_data->admin_reply;?></p>
                                </div>
                                 
<?php } ?>  
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
