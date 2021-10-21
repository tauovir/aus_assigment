<!DOCTYPE html>
<html lang="en">   
<?php 
            $replyt=1;
            $this->db->select('*');
            $this->db->from('configuration_general');
            $this->db->where('id', $replyt);
            $set = $this->db->get();
            $webconfig = $set->row();
?>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $webconfig->site_name;?> Admin</title>
        <link rel="shortcut icon" href="https://www.australialegalassignmenthelp.com/admin/assets/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="<?php echo base_url();?>assets/css/style.default.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/bootstrap-override.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/weather-icons.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/animate.delay.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/toggles.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/pace.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/morris.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/select2.css" rel="stylesheet" />
		<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" />
		<!-- include summernote css/js-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


    </head>
    <body>        
        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="<?php echo base_url();?>" class="logo">
                        <img style="max-width: 80px;" src="<?php echo base_url();?>../assets/setting/<?php echo $webconfig->company_logo;?>" alt="Logo">

                    </a>
                    <div class="pull-right">
                        <a href="#" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->                
                <div class="header-right">                    
                    <div class="pull-right"> 
						  
                                                
                        
                       
                        
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                             
                             
                              <li><a href="<?php echo base_url();?>pages/help_desk"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
							  <li><a href="<?php echo base_url();?>pages/change_password"><i class="glyphicon glyphicon-cog"></i> Change Password</a></li>
                              <li class="divider"></li>
                              <li><a href="<?php echo base_url();?>pages/logout"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>