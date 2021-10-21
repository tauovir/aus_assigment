<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-file-image-o" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="<?php echo base_url();?>" style="color: gray !important;">Dashboard</a></li>
					<li>Our Featured Services</li>
				</ul>
				<h4>Our Featured Services</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">


<?php if ($this->uri->segment(3)=='edit') { ?>
<form action="<?php echo base_url();?>pages/highlighted/update/<?php echo $this->uri->segment(4); ?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

	<input type="hidden" name="lastimage" value="<?php echo $website_edit_image->image;?>">
<?php  } else { ?>
<form action="<?php echo base_url();?>pages/highlighted/add" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

<?php } ?>





<div style="font-size: 11px !important; color: red;">


	<?php echo validation_errors();

echo $this->session->flashdata('success');


?></div>
							
 
	                            <div class="form-group">
									<label for="image_category" class="col-sm-3 control-label"><small>URL </small></label>
									<div class="col-sm-9">
			<select name="image_category" id="image_category" class="form-control">
				<option value="">Select Assignment</option>
<?php foreach ($all_products->result() as $hei_value) { ?>
<option value="<?= $hei_value->id;?>" <?php if ($this->uri->segment(3)=='edit') { if($hei_value->id==$website_edit_image->image_category){ echo 'selected'; } } ?>><?= $hei_value->title;?></option>
<?php } ?>
			</select>

									</div>
								</div>

                                <div class="form-group">
									<label for="bgcolor" class="col-sm-3 control-label"><small>Background Color </small></label>
									<div class="col-sm-9">
<input type="color" name="bgcolor" class="form-control" value="<?php if ($this->uri->segment(3)=='edit') { echo $website_edit_image->bgcolor; } ?>" id="bgcolor" style="padding: 0px; height: 32px !important; width: 50px;">
									</div>
								</div>



								<div class="form-group">
									<label for="title" class="col-sm-3 control-label"><small>Name </small></label>
									<div class="col-sm-9">
									   <input type="text" name="title" class="form-control" value="<?php if ($this->uri->segment(3)=='edit') { echo $website_edit_image->title; } ?>" id="title">
									</div>
								</div>


								<div class="form-group">
									<label for="company_logo" class="col-sm-3 control-label"><small>Select Image Icon</small></label>
									<div class="col-sm-9">
									   <input type="file" name="company_logo"  class="form-horizontal" id="company_logo"/>

									   <div style="font-size: 11px !important; color: red;">


	<?php 

echo $this->session->flashdata('image_error');


?></div>
									</div>
								</div>
								
 
  <input type="hidden" name="content" class="form-control" value="NA" id="content">

 

								<div class="form-group text-left">
									<div class="col-sm-offset-3 col-sm-7">
										<button class="btn btn-success" type="submit"><span class="fa fa-plus-circle"></span>&nbsp;Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  



		<div class="row">
    <div class="col-sm-12">
        <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="example_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 18px;">#</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Member ID (User Id): activate to sort column ascending" style="width: 171px;">Image</th>
                  		
        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Member ID (User Id): activate to sort column ascending" style="width: 171px;">Title</th>
        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Member ID (User Id): activate to sort column ascending" style="width: 171px;">Color</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 64px;">Action</th>
                </tr>
            </thead>
            <tbody>

                

<?php
	$count=1;
foreach($website_image as $cimage){


?>

                <tr role="row" class="odd">
                    <td class="sorting_1"><?php echo $count;?></td>
                    

                    <td><img src="<?php echo base_url();?>../assets/setting/<?php echo $cimage->image; ?>" style="max-width: 100px;" /></td>
                    <td><?php echo $cimage->title; ?></td>
                    <td align="center">
                        <p style="background:<?php echo $cimage->bgcolor; ?>; color:<?php echo $cimage->bgcolor; ?>; padding:10px; margin-top:30px; width:100px;"></p>
                        
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="<?php echo base_url();?>pages/highlighted/edit/<?php echo $cimage->id; ?>" class="btn btn-info btn-xs">Edit</a>
                            <a href="<?php echo base_url();?>pages/highlighted/delete/<?php echo $cimage->id; ?>" class="btn btn-danger btn-xs">Delete</a>
                           
                        </div>
                    </td>
                </tr>

<?php $count++; } ?>



                
            </tbody>
        </table>
    </div>
</div>


	</div><!-- contentpanel -->
	
</div>
< 
<!-- End Associated Member Modal -->
 