<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-inr"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="index.php">Dashboard</a></li>
					<li>Add Package</li>
				</ul>
				<h4>Add Package</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						
						<?php if($this->uri->segment(3)=='edit'){ ?>
							<form action="<?php echo base_url();?>Pages/add_package/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/add_package/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
								<input type="hidden" name="inf_token" value="28d5456a8ff445c4125bf1435795a2ec" />
								
									
									
<?php if($this->session->flashdata('success')){ ?>
<div class="alert alert-danger errorHandler no-display">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<?php echo validation_errors(); ?>
    <?php echo $this->session->flashdata('success'); ?> 
	</div> 
<?php } ?>
								
								
<?php if(validation_errors()){ ?>
<div class="alert alert-danger errorHandler no-display">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<?php echo validation_errors(); ?>
     
	</div> 
<?php } ?>
								
							 

								<div class="form-group">
								   <label class="control-label required" for="package_activation_name">Name</label>
<input type="text" class="form-control" name="package_activation_name" id="package_activation_name" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->package_activation_name;  } else { echo set_value('package_activation_name'); }?>" autocomplete="off"/>
									<span name ='form_err'></span>
								</div>

								<div class="form-group">
								   <label class="control-label required" for="package_activation_amount">Amount</label>
									<div class="input-group input-group-hide">
										
											<input class="form-control" type="text" name="package_activation_amount" id="package_activation_amount" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->package_activation_amount;  } else {  echo set_value('package_activation_amount'); }?>" autocomplete="off" />
										
											<span id="errmsg1"></span>
									</div>
									<span name ='form_err'></span>
								</div>

											<div class="form-group">
									<label class="control-label required" for="package_activation_item_cost">Package Item Cost</label>
									   <input class="form-control" type="text" name="package_activation_item_cost" id="package_activation_item_cost"value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->package_activation_item_cost;  } else { echo set_value('package_activation_item_cost');}?>" autocomplete="off"/> 
									   <span id="errmsg2"></span>
									   <span name ='form_err'></span>
								</div>
								
											<div class="form-group">
									<label class="control-label required" for="package_activation_gift_amount">Gift Amount</label>
										<input class="form-control" type="text" name="package_activation_gift_amount" id="package_activation_gift_amount" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->package_activation_gift_amount;  } else { echo set_value('package_activation_gift_amount');}?>" autocomplete="off"/> 
										<span id="errmsg2"></span>
										<span name ='form_err'></span>
								</div>
								<div class="form-group">
									<label class="control-label required" for="package_gift_amount_percentage_per_child">Gift % Amount</label>
									<div class="input-group input-group-hide">												
										<input class="form-control" type="text" name="package_gift_amount_percentage_per_child" id="package_gift_amount_percentage_per_child" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->package_gift_amount_percentage_per_child;  } else { echo set_value('package_gift_amount_percentage_per_child');}?>" autocomplete="off"/>												
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product">Add Package</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>