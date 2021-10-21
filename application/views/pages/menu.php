 <header>
        <div class="header">
            <div class="header-align">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo Image -->
                                <a href="<?= base_url();?>" title="<?php echo $webconfig->organization_name;?> <?php echo $webconfig->site_name;?>" class="navbar-brand">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/setting/<?php echo $webconfig->company_logo;?>" alt="<?php echo $webconfig->organization_name;?> <?php echo $webconfig->site_name;?>" title="<?php echo $webconfig->organization_name;?> <?php echo $webconfig->site_name;?>">
                                </a>
                                <!-- End of Logo Image -->
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right secondary-nav">
                                    <li id="menu-item-1407" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1407"><a href="<?php echo base_url();?>">Home</a></li>
                                    <li id="menu-item-1407" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1407"><a href="<?php echo base_url();?>pages/about">About</a></li>

                                    <li id="menu-item-1271" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1271"><a href="#">Services</a>
                                        <ul class="dropdown-menu" role="menu">
<?php 
$count1=0;
foreach($all_products->result() as $alldata){ 

    ?>

                                          
<li id="menu-item-1488<?= $count1;?>" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1488">
    <a href="<?= base_url();?>pages/assignment/<?php echo str_replace(array('(',')', ' ', "'", '/','\/', ' /[^a-zA-Z0-9_ %\ [\]\.\(\)%&-]/s') ,'-',$alldata->title); ?>/<?= $alldata->id;?>"><?= $alldata->title;?></a>
</li>

<?php $count1++;} ?>
</ul></li>
                                    <li id="menu-item-1407" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1407"><a href="<?= base_url()?>pages/samples">Samples</a></li>

                                    <li id="menu-item-1407" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1407"><a href="<?= base_url()?>pages/reviews">Reviews <mark><?= $reviewavg;?>/5</mark></a></li>
                                    <li id="menu-item-1458" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1458"><a href="<?php echo base_url();?>pages/contact">Contact Us</a></li>

                                    <li>
                                        <form method="get" role="search" action="#">
                                            <input type="text" name="s" id="search-bar" class="extend-search" placeholder="Search">
                                        </form>
                                    </li>
                                    
                                    
                                    
                                    
                                    
<?php  if (isset($_COOKIE["wssinfotech_login"])) { ?>

<?php 
           $this->db->select('*');
        $this->db->from('tbl_members');
        $w = array('email'=>$_COOKIE["wssinfotech_login"]);
        $this->db->where($w);
        $x=$this->db->get();
        $dx=$x->num_rows();
        $row_data=$x->row();

        $this->db->select('*');
        $this->db->from('tbl_income_reports');
        $this->db->order_by('id','DESC');
        $s = array('income_to' =>$row_data->id);
        $this->db->where($s);
        $all_income=$this->db->get();

                    $dr=0.00;
                    $cr=0.00;
                    $cty=1;
                    foreach($all_income->result() as $orderlist){
                        if ($orderlist->payment_dr_cr=='cr') {
                            $cr=$cr+$orderlist->amount;
                        } else {
                            $dr=$dr+$orderlist->amount;
                        }
                    }
                     ?>                                 
                                    
<li class="hidden-lg hidden-md"><a href="<?= base_url();?>pages/dashboard">Dashboard</a></li>
<li class="hidden-lg hidden-md"><a href="<?= base_url();?>pages/profile">Profile</a></li>
<li class="hidden-lg hidden-md"><a href="<?= base_url();?>pages/enquiry">Enquiry</a></li>
<li class="hidden-lg hidden-md"><a href="<?= base_url();?>pages/dashboard">My Orders</a></li>
<li class="hidden-lg hidden-md"><a href="<?= base_url();?>pages/new-assignment">New Assignment</a></li>
<li class="hidden-lg hidden-md"><a href="<?= base_url();?>pages/wallet">My Wallet ($<?= $cr-$dr;?>)</a></li>
<li class="hidden-lg hidden-md"><a href="<?= base_url();?>pages/changepassword">Change Password</a></li>
<li class="hidden-lg hidden-md"><a href="<?= base_url();?>pages/referral">Your Referral Cod </a></li>
<li class="hidden-lg hidden-md"><a href="<?= base_url();?>pages/logout">Logout</a></li>

<?php } else { ?>
      <li class="hidden-lg hidden-md"><a href="#" data-toggle="modal" data-target=".bs-example-modal-md">Login</a></li>
      <li class="hidden-lg hidden-md"><a href="<?= base_url();?>pages/register">New registration</a></li>
<?php }  ?>


<li class="extra_nav_links dropdown hidden-xs hidden-sm">
<a id="dLabel" role="button" data-toggle="dropdown" class="dropdown-toggle" data-target="#" href="#" style="border: none;">
    <i class="fa fa-user" aria-hidden="true"></i> My Account <span class="caret"></span>
</a>




<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              

<?php  if (isset($_COOKIE["wssinfotech_login"])) { ?>

<?php 
           $this->db->select('*');
        $this->db->from('tbl_members');
        $w = array('email'=>$_COOKIE["wssinfotech_login"]);
        $this->db->where($w);
        $x=$this->db->get();
        $dx=$x->num_rows();
        $row_data=$x->row();

        $this->db->select('*');
        $this->db->from('tbl_income_reports');
        $this->db->order_by('id','DESC');
        $s = array('income_to' =>$row_data->id);
        $this->db->where($s);
        $all_income=$this->db->get();

                    $dr=0.00;
                    $cr=0.00;
                    $cty=1;
                    foreach($all_income->result() as $orderlist){
                        if ($orderlist->payment_dr_cr=='cr') {
                            $cr=$cr+$orderlist->amount;
                        } else {
                            $dr=$dr+$orderlist->amount;
                        }
                    }
                     ?>

<li><a href="<?= base_url();?>pages/dashboard">Dashboard</a></li>
<li><a href="<?= base_url();?>pages/profile">Profile</a></li>
<li><a href="<?= base_url();?>pages/enquiry">Enquiry</a></li>
<li><a href="<?= base_url();?>pages/dashboard">My Orders</a></li>
<li><a href="<?= base_url();?>pages/new-assignment">New Assignment</a></li>
<li><a href="<?= base_url();?>pages/wallet">My Wallet ($<?= $cr-$dr;?>)</a></li>
<li><a href="<?= base_url();?>pages/changepassword">Change Password</a></li>
<li><a href="<?= base_url();?>pages/referral">Your Referral Cod </a></li>
<li><a href="<?= base_url();?>pages/logout">Logout</a></li>

</a>
<?php } else { ?>
      <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-md">Login</a></li>
      <li><a href="<?= base_url();?>pages/register">New registration</a></li>
<?php }  ?>


            </ul>


                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
                <!-- /.container nav -->
            </div>
            <!-- /.header-align -->
        </div>
        <!-- /.header -->
    </header>