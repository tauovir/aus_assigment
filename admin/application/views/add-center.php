<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-inr"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="">Dashboard</a></li>
					<li>Add Center</li>
				</ul>
				<h4>Add Center</h4>
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
							<form action="<?php echo base_url();?>Pages/add_center/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/add_center/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
								 
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
								   <label class="control-label required" for="name">Center Name</label>
									<input type="text" class="form-control" name="name" id="name" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->name;  } else {  echo set_value('name'); }?>" autocomplete="off"/>
									<span name ='form_err'></span>
								</div>

								<div class="form-group">
								   <label class="control-label required" for="status">Status</label>
									
									<select class="form-control" name="status" id="status">
										 
										<option value="1">Active</option>
										<option value="0">InActive</option>
									
									</select>
								</div>




								<div class="form-group">
									<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product">Add Center</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>