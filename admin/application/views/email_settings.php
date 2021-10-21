<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="pageicon pull-left">
                <i class="fa fa-cogs" aria-hidden="true"></i>
            </div>
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="index.php">Dashboard</a></li>
                    <li>Setting</li>
                </ul>
                <h4>Email Settings</h4>
            </div>
        </div>
        <!-- media -->
    </div>
    <!-- pageheader -->

    <div class="contentpanel">
        <div class="row">
            <div class="col-sm-12 col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="">
                            <div class="panel-body">
                                <form action="<?php echo base_url();?>pages/email_settings/save" class="form-horizontal" id="EmailsettingIndexForm" method="post" accept-charset="utf-8">
 <?php if(validation_errors()){ ?>
	<div class="alert alert-danger errorHandler no-display">
		<?php echo validation_errors(); ?>
	    
	</div> 



 <?php } ?>

 	<?php if($this->session->flashdata('success')){ ?>
	<div class="alert alert-success errorHandler no-display">
		 
	    <?php echo $this->session->flashdata('success'); ?> 
	</div> 
<?php } ?>

                                    <!-- <div class="form-group">
                                        <label for="site_name" class="col-sm-2 control-label">Email Type</label>
                                       <div class="col-sm-4">
										<label class="radio-inline"><input type="radio" name="data[Emailsetting][type]" id="EmailsettingTypeMail" value="Mail" checked="checked" />LOCALHOST</label><label class="radio-inline"><input type="radio" name="data[Emailsetting][type]" id="EmailsettingTypeSmtp" value="Smtp" />SMTP			</div>                        
									</div> -->
                                        <div id="smtp">
                                            <div class="form-group">
                                                <label for="host" class="col-sm-2 control-label">Server Name / Host</label>
                                                <div class="col-sm-4">
<input name="host" class="form-control" placeholder="Server Name / Host" maxlength="100" type="text" id="host" value="<?php echo $email_setting->host;?>" /> 
 

</div>
                                                <label for="port" class="col-sm-2 control-label">Port</label>
                                                <div class="col-sm-4">
<input name="port" class="form-control" placeholder="Port" maxlength="10" value="<?php echo $email_setting->port;?>" type="text" id="port" /> </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label">User Name</label>
                                                <div class="col-sm-4">
<input name="username" class="form-control" placeholder="User Name" value="<?php echo $email_setting->username;?>" maxlength="100" type="text" id="username" /> </div>
                                                <label for="password" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-4">
<input name="password" class="form-control" value="<?php echo $email_setting->password;?>" placeholder="Password" type="password" id="password" /> </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-left">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success"><span class="fa fa-refresh"></span>&nbsp;Save Settings</button>
                                            </div>
                                        </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-sm-12 -->
            </div>
            <!-- row -->
        </div>
        <!-- contentpanel -->

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#smtp').hide();
            $('#EmailsettingTypeSmtp').click(function() {
                $('#smtp').show();
            });
            $('#EmailsettingTypeMail').click(function() {
                $('#smtp').hide();
            });
        });
    </script>