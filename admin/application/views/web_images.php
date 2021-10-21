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
					<li> Setting</li>
				</ul>
				<h4>Website Images</h4>
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
<form action="<?php echo base_url();?>pages/web_images/update/<?php echo $this->uri->segment(4); ?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

	<input type="hidden" name="lastimage" value="<?php echo $website_edit_image->image;?>">
<?php  } else { ?>
<form action="<?php echo base_url();?>pages/web_images/add" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

<?php } ?>





<div style="font-size: 11px !important; color: red;">


	<?php echo validation_errors();

echo $this->session->flashdata('success');


?></div>
							

								<div class="form-group">
									<label for="image_category" class="col-sm-3 control-label"><small>Select Image For * </small></label>
									<div class="col-sm-9">
									  
										<select class="form-control" name="image_category" id="image_category">
<option value="1" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==1){ echo 'selected';} } ?>>Banner Image</option>
<option value="2" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==2){ echo 'selected';} } ?>>Other Images</option>
<option value="3" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==3){ echo 'selected';} } ?>>Home Popup special offer</option>
<option value="4" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==4){ echo 'selected';} } ?>>About Image</option>
<option value="5" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==5){ echo 'selected';} } ?>>Vision</option>

<option value="6" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==6){ echo 'selected';} } ?>>Mission</option>

<option value="7" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==7){ echo 'selected';} } ?>>Contact</option>
<option value="8" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==8){ echo 'selected';} } ?>>About Parallax</option>
<option value="9" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==9){ echo 'selected';} } ?>>How It Work Parallax</option>
<option value="10" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==10){ echo 'selected';} } ?>>FAQ Parallax</option>

<option value="11" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==11){ echo 'selected';} } ?>>WHY CHOSE US</option>

 <option value="12" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==12){ echo 'selected';} } ?>>Featured & services</option>

<option value="13" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==13){ echo 'selected';} } ?>>Home Counter</option>

<option value="14" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==14){ echo 'selected';} } ?>>Review Side Add</option>

<option value="15" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==15){ echo 'selected';} } ?>>Footer Logo</option>

<option value="16" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==16){ echo 'selected';} } ?>>Wallet Banner </option>

<option value="17" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==17){ echo 'selected';} } ?>>Offers & Raferral </option>
<option value="18" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==18){ echo 'selected';} } ?>>Profile Right </option>

<option value="19" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==19){ echo 'selected';} } ?>>Service Promotion Image </option>




										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="title" class="col-sm-3 control-label"><small>Title </small></label>
									<div class="col-sm-9">
									   <input type="text" name="title" class="form-control" value="<?php if ($this->uri->segment(3)=='edit') { echo $website_edit_image->title; } ?>" id="title">
									</div>
								</div>


								<div class="form-group">
									<label for="company_logo" class="col-sm-3 control-label"><small>Select Image</small></label>
									<div class="col-sm-9">
									   <input type="file" name="company_logo"  class="form-horizontal" id="company_logo"/>

									   <div style="font-size: 11px !important; color: red;">


	<?php 

echo $this->session->flashdata('image_error');


?></div>
									</div>
								</div>
								

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
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 137px;">Image For</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Member ID (User Id): activate to sort column ascending" style="width: 171px;">Image</th>
                  		
                  		 <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Member ID (User Id): activate to sort column ascending" style="width: 171px;">Title</th>

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
                    <td>
 

<?php if($cimage->type==1){ echo "Banner Image";  } ?>
<?php if($cimage->type==2){ echo "Other Images";  } ?>
<?php if($cimage->type==3){ echo "Home Popup special offer";  } ?>
<?php if($cimage->type==4){ echo "About Image";  } ?>
<?php if($cimage->type==5){ echo "Vision";  } ?>
<?php if($cimage->type==6){ echo "Mission";  } ?>
<?php if($cimage->type==7){ echo "Contact";  } ?>
<?php if($cimage->type==8){ echo "About Parallax";  } ?>
<?php if($cimage->type==9){ echo "How It Work Parallax";  } ?>
<?php if($cimage->type==10){ echo "FAQ Parallax";  } ?>
<?php if($cimage->type==11){ echo "WHY CHOSE US";  } ?>
<?php if($cimage->type==12){ echo "Featured & services";  } ?>
<?php if($cimage->type==13){ echo "Home Counter";  } ?>
<?php if($cimage->type==14){ echo "Review Side Add";  } ?>
<?php if($cimage->type==15){ echo "Footer Logo";  } ?>
<?php if($cimage->type==16){ echo "Wallet Banner";  } ?>
<?php if($cimage->type==17){ echo "Offers & Raferral";  } ?>
<?php if($cimage->type==18){ echo "Profile Right ";  } ?>
<?php if($cimage->type==19){ echo "Service Promotion Image ";  } ?>


                    </td>

                    <td><img src="<?php echo base_url();?>../assets/setting/<?php echo $cimage->image; ?>" style="max-width: 100px;" /></td>
                    <td><?php echo $cimage->title; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="<?php echo base_url();?>pages/web_images/edit/<?php echo $cimage->id; ?>" class="btn btn-info btn-xs">Edit</a>
                            <a href="<?php echo base_url();?>pages/web_images/delete/<?php echo $cimage->id; ?>" class="btn btn-danger btn-xs">Delete</a>
                           
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
 