<style type="text/css">

.headerwrapper .header-left {
        width: 230px !important;
    min-height: 60px !important;
    padding: 14px 15px !important;
    float: left !important;
    border-right: 1px solid #ffb606 !important;
    background-color: #ffb606;
    position: relative !important;
}
.headerwrapper {
    background-color: #002147 !important;
    min-height: 60px !important;
    position: fixed !important;
    width: 100% !important;
    z-index: 1000 !important;
}
.leftpanel .nav > li > a i {
    width: 15px !important;
    margin-right: 5px !important;
    color: #ffffff !important;
    font-size: 19px !important;
    top: 1px !important;
    position: relative !important;
    text-align: center !important;
}

.leftpanel .nav > li > a:hover, .leftpanel .nav > li > a:focus, .leftpanel .nav > li > a:active {
    background-color: #000000 !important;
    color: #fff !important;
    font-size: 15px !important;
    font-weight: 500 !important;
}
.leftpanel .nav > li {
    margin: 0 1px 0 0 !important;
    font-size: 14px !important;
    font-weight: 500 !important;
    position: relative !important;
    border-bottom: 1px solid #ffb606 !important;
    background: #002147 !important;
}
.leftpanel .nav > li.active > a, .leftpanel .nav > li.active > a:hover, .leftpanel .nav > li.active > a >i, .leftpanel .nav > li.active > a:hover  > a > i {
    color: #ffb606 !important;
    background-color: #000000 !important;
    font-size: 15px !important;
    font-weight: 500 !important;
}

.leftpanel .nav .children li a:hover {
    text-decoration: none !important;
    background-color: #002147 !important;
    color: #fff !important;
}
.leftpanel .nav > li > a {
    color: #ffffff !important;
    font-size: 15px !important;
    -moz-border-radius: 0 !important;
    -webkit-border-radius: 0 !important;
    border-radius: 0 !important;
    -moz-transition: all 0.2s ease-out 0s !important;
    -webkit-transition: all 0.2s ease-out 0s !important;
    transition: all 0.2s ease-out 0s !important;
    padding: 12px 15px !important;
}

.leftpanel .nav .children li a {
    font-weight: normal !important;
    font-size: 13px !important;
    display: block !important;
    color: #fff !important;
    padding: 10px 10px 10px 40px !important;
    -moz-transition: all 0.2s ease-out 0s !important;
    -webkit-transition: all 0.2s ease-out 0s !important;
    transition: all 0.2s ease-out 0s !important;
}
.pageheader .pageicon {
    width: 50px !important;
    height: 50px !important;
    background-color: #002147 !important;
    display: inline-block !important;
    color: #fff !important;
    font-size: 32px !important;
    border-radius: 3px !important;
    padding-top: 1px !important;
    padding-left: 10px !important;
}
.btn {
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 0px;
    line-height: 21px;
    color: #fff;
    background-color: #002147;
    border-color: #002147;
    -moz-transition: all 0.2s ease-out 0s;
    -webkit-transition: all 0.2s ease-out 0s;
    transition: all 0.2s ease-in-out 0s;
    padding: 8px 15px;
    border-width: 0;
}

</style>

<?php 
            $replyt=1;
            $this->db->select('*');
            $this->db->from('configuration_general');
            $this->db->where('id', $replyt);
            $set = $this->db->get();
            $webconfig = $set->row();
?><section>
            <div class="mainwrapper">
                <div class="leftpanel">
                                     
                     
                    <ul class="nav nav-pills nav-stacked">
                        <li <?php if($this->uri->segment(2)=='dashboard'){ ?> class="active"<?php } ?>><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>                        
 
<li<?php if($this->uri->segment(2)=='all_member' or $this->uri->segment(2)=='active_member' or $this->uri->segment(2)=='in_active_member'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><i class="fa fa-user"></i> <span>Manage Members</span></a>
                            <ul class="children">
                                <li><a href="<?php echo base_url();?>pages/all_member">All Members List</a></li>
<!--

<li><a href="<?php echo base_url();?>pages/active_member">Active Members List</a></li>


<li><a href="<?php echo base_url();?>pages/in_active_member">In-Active Members List</a></li>  -->
                           </ul>
                        </li>
 
<li<?php if($this->uri->segment(2)=='online_orders' or $this->uri->segment(2)=='offline_orders'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><i class="fa fa-cubes"></i> <span>Orders</span></a>
                            <ul class="children">
                                <li><a href="<?php echo base_url();?>pages/online_orders">Online Orders</a></li>
                                							
                            </ul>
</li> 
						
 

<li <?php if($this->uri->segment(2)=='Urgency' or $this->uri->segment(2)=='category'or $this->uri->segment(2)=='assignment_list' or $this->uri->segment(2)=='add_assignment'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><i class="fa fa-wrench fa-fw"></i> <span>Projects & Assignment</span></a>
                            <ul class="children">

<li><a href="<?php echo base_url();?>pages/level_study">Level of study</a></li>
<li><a href="<?php echo base_url();?>pages/ref_styl_siisgnment">
Reference style of assignment</a></li>



<li><a href="<?php echo base_url();?>pages/category">Assignment Type</a></li>
<li><a href="<?php echo base_url();?>pages/Urgency">Urgency</a></li>

<li><a href="<?php echo base_url();?>pages/add_assignment">Add Assignment or Service</a></li>
<li><a href="<?php echo base_url();?>pages/assignment_list"> Assignment or Service List</a></li>
<li><a href="<?php echo base_url();?>pages/assignment_request"> Assignment Request</a></li>
                             </li>
                            </ul>
                        </li>
 




<li <?php if($this->uri->segment(2)=='category' or $this->uri->segment(2)=='assignment_list' or $this->uri->segment(2)=='add_assignment'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><i class="fa fa-wrench fa-fw"></i> <span>Samples</span></a>
    <ul class="children">
        <li><a href="<?php echo base_url();?>pages/category_samples">Samples Type</a></li>
        <li><a href="<?php echo base_url();?>pages/add_samples">Add Samples</a></li>
        <li><a href="<?php echo base_url();?>pages/samples_list">Samples List</a></li>  
    </ul>                   
</li>







                 
<li <?php if($this->uri->segment(2)=='configuration_general' or $this->uri->segment(2)=='web_images'  or $this->uri->segment(2)=='how_it_word' or $this->uri->segment(2)=='configuration_payment_setting' or $this->uri->segment(2)=='manage_pages'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><i class="fa fa-wrench fa-fw"></i> <span>Setting</span></a>
                            <ul class="children">
                               <li><a href="<?php echo base_url();?>pages/configuration_general">General</a></li>
                                <li><a href="<?php echo base_url();?>pages/web_images">Manage Images</a></li>
                                <li><a href="<?php echo base_url();?>pages/manage_pages">Manage Pages</a></li>
                                <li><a href="<?php echo base_url();?>pages/how_it_word">How It Work</a></li>
                                <li><a href="<?php echo base_url();?>pages/videos">Videos</a></li>
<li><a href="<?php echo base_url();?>pages/assignment-help-services">Assignment Help Services</a></li>

<li><a href="<?php echo base_url();?>pages/highlighted">Our Featured Services</a></li>


<li><a href="<?php echo base_url();?>pages/highlighted2">Highlighted Notification 2</a></li>
<li><a href="<?php echo base_url();?>pages/faq">FAQ</a></li>
                        <li>
                            <a href="<?php echo base_url();?>pages/adminblogs">Manage Blogs</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>pages/neft_bank_detail">Bank Account Details</a>
                        </li>
                               <!-- <li><a href="<?php echo base_url();?>pages/configuration_payment_setting">Payment Setting</a></li> -->
                            </ul>
                        </li>

<li <?php if($this->uri->segment(2)=='email_settings' or $this->uri->segment(2)=='sms_settings' or $this->uri->segment(2)=='send_emails' or $this->uri->segment(2)=='send_sms'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><i class="fa fa-shield"></i> <span>Email & SMS</span></a>
                            <ul class="children">

								<li><a href="<?php echo base_url();?>pages/send_sms">Send SMS</a></li>									
                            </ul>
                        </li>	
 

<li <?php if($this->uri->segment(2)=='Order_report' or $this->uri->segment(2)=='fund_transfer_report'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><i class="fa fa-shield"></i> <span>Report & Feedback</span></a>
                            <ul class="children">

<li><a href="#<?php echo base_url();?>pages/Order_report" target="_blank">Order Report</a></li>

<li><a href="#<?php echo base_url();?>pages/fund_transfer_report"  target="_blank">Payment Report</a></li>                                  
<li><a href="#<?php echo base_url();?>pages/fund_transfer_report"  target="_blank">Feedback</a></li>                                  
                            </ul>
                        </li> 


                        <li <?php if($this->uri->segment(2)=='offer_n_coupon_cod' or $this->uri->segment(2)=='offer_n_coupon_cod_view'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> <span>Offers & Coupon Code</span></a>
                            <ul class="children">

<li><a href="<?php echo base_url();?>pages/offer_n_coupon_cod" >Add</a></li>

<li><a href="<?php echo base_url();?>pages/offer_n_coupon_cod_view">View</a></li>                                  
                            </ul>
                        </li> 


 


<li <?php if($this->uri->segment(2)=='help_desk'){ ?> class="active"<?php } ?>><a href="<?php echo base_url();?>pages/help_desk"><i class="fa fa-envelope-o"></i> <span>Help Desk</span></a></li>

<li><a href="<?php echo base_url();?>pages/logout"><i class="fa fa-envelope-o"></i> <span>LogOut</span></a></li>
                        
                        
                    </ul>
                    
                </div><!-- leftpanel -->