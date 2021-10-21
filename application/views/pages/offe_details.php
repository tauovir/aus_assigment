<section class="section banner-form">

    <div class="vc_column-inner ">

        <div class="wpb_wrapper">

            <img src="<?php echo base_url();?>assets/header-para.jpg">

        </div>
    </div>
</section>
<section>
    <div class="sample-page">
        <div class="container">
            <div class="row">
                <!-- Post Content -->
                <div class="col-md-12">

                    <div class="bbp_separator text-center">
                        <div class="title">
                            Offer Details </div>
                        <div class="short-line text-center">
                     <center>    <img src="<?php echo base_url();?>assets/blue-line-short.png" class="img-responsive" alt=""></center>   
                        </div>
                    </div>
                    <div class="right-side">

                     
                        <div class="row  vc_row     ">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper"> 
                                            <h2><?= $offe_details->offer_title;?></h2>                                 
                                            <h2><?= $offe_details->offinpercent;?>% OFF</h2>                                 
                                            <h2>Use <mark><?= $offe_details->coupon_code;?> </mark>Code</h2>                                 
                                                    <?= $offe_details->content;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                       
                    </div>
                </div>
                <!-- Sidebar -->
              
            </div>
        </div>
    </div>
    <!-- End Single Post Section -->
</section>