  <!-- Start Breadcrumb  about_img
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url();?>assets/setting/<?= $about_img->image;?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?= base_url();?>"><i class="fas fa-home"></i> Home</a></li>
                  
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Info
    ============================================= -->
    <div class="contact-info-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Contact Info -->
                <div class="contact-info">
                    <!--<div class="col-md-4 col-sm-4">-->
                    <!--    <div class="item">-->
                    <!--        <div class="icon">-->
                    <!--            <i class="fas fa-mobile-alt"></i>-->
                    <!--        </div>-->
                    <!--        <div class="info">-->
                    <!--            <h4>Call Us</h4>-->
                    <!--            <span><?php echo $webconfig->other_mobile;?></span>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-md-6 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <h4>Address</h4>
                                <span><?php echo $webconfig->address;?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info">
                                <h4>Email Us</h4>
                                <span>enquiry@australialegalassignmenthelp.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Info -->

                <div class="seperator col-md-12">
                    <span class="border"></span>
                </div>

                <!-- Start Maps & Contact Form -->
                <div class="maps-form">
                    <div class="col-md-6 maps">
                        <h3>Our Location</h3>
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60949550.79698232!2d95.47468769797501!3d-21.189562525113576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sin!4v1589553597075!5m2!1sen!2sin"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 form">
                        <div class="heading">
                            <h3>Contact Us</h3>
                            <p>
                                
                            </p>
                        </div>
                        <form action="<?php echo base_url();?>contact/send" method="POST">
                        <div class="col-md-12">
                            <?php echo $this->session->flashdata('email_sent'); ?>
                            <?php echo $this->session->flashdata('email_faield'); ?>
                        </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="contact_name" name="contact_name" placeholder="Name" type="text">
                                        <span class="alert-error alert-danger"><?php echo form_error('contact_name');  ?><?php echo $this->session->flashdata('contact_name'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="contact_email" name="contact_email" placeholder="Email*" type="email">
                                        <span class="alert-error alert-danger"><?php echo form_error('contact_email');  ?><?php echo $this->session->flashdata('contact_email'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="ContactFormSubject" name="ContactFormSubject" placeholder="Subject" type="text">
                                        <span class="alert-error alert-danger"><?php echo form_error('ContactFormSubject');  ?><?php echo $this->session->flashdata('ContactFormSubject'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="contact_body" name="contact_body" placeholder="Tell Me About Courses *"></textarea>
<span class="alert-error alert-danger"><?php echo form_error('contact_body');  ?><?php echo $this->session->flashdata('contact_body'); ?></span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Maps & Contact Form -->

            </div>
        </div>
    </div>
    <!-- End Contact Info -->