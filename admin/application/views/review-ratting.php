<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="pageicon pull-left">
                <i class="fa fa-cogs" aria-hidden="true"></i>
            </div>
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="index.php">Review Ratting</a></li>
                    <li>Review Ratting</li>
                </ul>
                <h4>Review Ratting</h4>
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
                            <form action="<?php echo base_url();?>pages/assignmentReview/<?= $this->uri->segment(3);?>/save" class="form-horizontal" id="SmssettingIndexForm" method="post" accept-charset="utf-8">
                               
<?php if(validation_errors()){ ?>
    <div class="alert alert-danger errorHandler no-di/////\\\//\splay">
        <?php echo validation_errors(); ?>
        
    </div> 



 <?php } ?>

    <?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success errorHandler no-display">
         
        <?php echo $this->session->flashdata('success'); ?> 
    </div> 
<?php } ?>


                                 
                                <div class="form-group">
                                    <label for="apilink" class="col-sm-2 control-label">Author Name</label>
                                    <div class="col-sm-4">
<input name="author" class="form-control" placeholder="Author name" maxlength="255" type="text" value="" id="author" />
                                    </div>


<label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-4">
<input name="email" class="form-control" placeholder="Email Id"   type="text" value="" id="email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
<label for="ratting" class="col-sm-2 control-label">Ratting</label>
                                    <div class="col-sm-4">
<input name="ratting" class="form-control" placeholder="Ratting like 5.00, 4.5, 3 etc" maxlength="100" type="number" value="" id="ratting" />
                                    </div>

                                    <label for="ratting" class="col-sm-2 control-label">Subject Name</label>
                                    <div class="col-sm-4">
<input name="subject" class="form-control" placeholder="" type="text" value="" id="subject" />
                                    </div>



                                </div>
                            <div class="row">

                                <br />
                                    <label for="comment" class="col-sm-2 control-label">Comments</label>
                                    <div class="col-sm-10">
                                            <textarea name="comment" id="comment" class="form-control"></textarea>
                                    </div>
                                </div>
                                </div>
                         
                                <div class="form-group text-left">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success"><span class="fa fa-refresh"></span>&nbsp;Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col-sm-12 -->
        </div>
        <!-- row -->
    </div>
    <!-- contentpanel -->
    
    
    	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
							<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>#</th>
										 
											<th  class="width_action">Author</th>													 
											<th  class="width_action">Email</th>													 
											<th  class="width_action">Comment</th>													 
											<th  class="width_action">Ratting</th>													 
											<th class="width_action">Action</th>
										</tr>
									</thead>
									<tbody> 

<?php 
									$count =1;
										foreach($all_category as $myresult){
									?>	
																			
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $myresult->author; ?></td>
											<td><?php echo $myresult->email; ?></td>
											<td><?php echo $myresult->comment; ?></td>
											<td><?php echo $myresult->ratting; ?></td>
																					 										
											 
											<td>                                                                            
 <a href="<?php echo base_url();?>Pages/assignmentReview/<?=$this->uri->segment(3);?>/delete/<?php echo $myresult->id; ?>" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"  title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"><i class="fa fa-trash"></i></a>
												
											</td>       
										</tr>

<?php $count++; } ?>										
									</tbody>
								</table>
								
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->

</div>