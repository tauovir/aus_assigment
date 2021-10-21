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
					<li>Manage Blogs</li>
				</ul>
				<h4>Manage Blogs</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">
				<a href="<?= base_url();?>pages/adminblogslist/" class="btn btn-info btn-xs pull-right">List Of Blog</a>
				<br />
				<br />
			</div>


			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
<?php 
	if ($this->uri->segment(3)=='edit') {
       echo form_open_multipart('Pages/adminblogs/update/'.$this->uri->segment(4));
	} else {
		echo form_open_multipart('Pages/adminblogs/insert/');
	}?>
<div style="font-size: 11px !important; color: green;"><?php echo $this->session->flashdata('success'); ?></div>
			
<div class="card-body">
                <div class="row">
					 <input type="hidden" name="addin" id="addin" value="NA" class="form-control" placeholder="Enter Banner Content.." >
					<div class="col-md-6 col-lg-6">
							<div class="form-group ">
                            <label class="form-label">Image</label>
                         
                                    <input type="file" name="gallery" id="gallery" value="" class="form-control">
                                    <p style="color: red !important; font-size: 14px;">
                                    	<?php if(isset($error)){ echo $error;} ?>
                                    </p>
                             
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">

                        <div class="form-group ">
                             
                            <label class="form-label">Banner Content</label>
                            
<input type="text" name="title" id="title" value="<?php if ($this->uri->segment(3)=='edit') { echo $query[0]->title; } ?>" class="form-control" placeholder="Enter Title.." >
                                 
                        </div>
                    </div>






                    <div class="col-md-12 col-lg-12">

                        <div class="form-group ">
                            
                            <label class="form-label">Content</label>
                                    <textarea name="url" class="ckeditor" id="editor1"  ><?php if ($this->uri->segment(3)=='edit') { echo $query[0]->url; } ?></textarea>
                        </div>
                    </div>

<div class="col-md-6 col-lg-6">
<div class="form-group">
	<label class="control-label required" for="metatitle">Meta Title</label>
            
                <input class="form-control" type="text" name="metatitle" id="metatitle" value="<?php if($this->uri->segment(3)=='edit'){ echo $query[0]->metatitle;  } else { echo set_value('metatitle');}?>" autocomplete="off" />
			 
</div>
</div>

<div class="col-md-6 col-lg-6">
<div class="form-group">
    <label class="control-label required" for="metkeywords">Meta Keywords</label>
    <input class="form-control" type="text" name="metkeywords" id="metkeywords" value="<?php if($this->uri->segment(3)=='edit'){ echo $query[0]->metkeywords;  } else { echo set_value('metkeywords');}?>" autocomplete="off" />      
</div>
</div>


<div class="col-md-6 col-lg-6">
<div class="form-group">
    <label class="control-label required" for="metdescription">Meta Description</label>
            
                <input class="form-control" type="text" name="metdescription" id="metdescription" value="<?php if($this->uri->segment(3)=='edit'){ echo $query[0]->metdescription;  } else { echo set_value('metdescription');}?>" autocomplete="off" />
             
</div>
</div>

 
                </div>

            </div>
             <div class="card-footer text-right">
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary ml-auto">Save Blogs</button>
                </div>
            </div>
    </form>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>