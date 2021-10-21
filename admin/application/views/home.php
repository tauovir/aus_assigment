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
        <title>Login:: Admin</title>
		
	 
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
       
        <style type="text/css">
            .panel {
    margin-bottom: 20px;
    background-color: #0605986b !important;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}
.signin {
    background-color: #00ffe8b5;
    background-image: url('<?= base_url();?>assets/admin-background.jpg');
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

h4,p{
    color: #fff;
}

        </style>
    </head>

    <body class="signin" style="background-color: #00ffe8b5;">      
        
        <section>            
            <div class="panel panel-signin" style=" margin-bottom: 20px;
    
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);">
                <div class="panel-body">
                    <div class="logo text-center">
                        <img src="<?php echo base_url();?>../assets/setting/<?php echo $webconfig->company_logo;?>" style="max-width:200px" alt="Please Wait.." >
                    </div>
                    <br />
                    <h4 class="text-center mb5">Welcome, Admin</h4>
                    <p class="text-center">Sign in to your account</p>
                    <p style="font-size: 11px !important; color: red;"><?php echo validation_errors(); ?></p>
                    <div class="mb30"></div>
                    
                    <?php echo form_open('pages/home/login'); ?>
					
					<?php if (isset($_COOKIE["login_by_sohan"])){
						//echo get_cookie("login_by_sohan");
						
					}?>
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" name="loginid" id="loginid" placeholder="Enter User ID">
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" id="loginpassword" name="loginpassword" placeholder="Enter Password">
                        </div><!-- input-group -->
                        
                        <div class="clearfix">
                            <div class="pull-left">
                                
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success">Login <i class="fa fa-angle-right ml5"></i></button>
                            </div>
                        </div>                      
                    </form>
                    
                </div><!-- panel-body -->                
            </div><!-- panel -->
            
        </section>


        <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/pace.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/retina.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.cookies.js"></script>
        <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    </body>

</html>


