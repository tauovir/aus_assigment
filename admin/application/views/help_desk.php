<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-user"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="">Dashboard</a></li>
					<li>Pending KYC</li>
				</ul>
				<h4>Pending KYC</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">

<?php if($this->session->flashdata('success')){ ?>
	<div class="alert alert-success errorHandler no-display">
		<?php echo validation_errors(); ?>
	    <?php echo $this->session->flashdata('success'); ?> 
	</div> 
<?php } ?>


				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Query</th>
								<th>Admin Reply</th>								
								<th>Query By</th>
								<th>Assignment</th>
								<th>Query Date</th>
								 						
							</tr>
						</thead>
						<tbody>

<?php $count=1; foreach($help_desks->result() as $help_data){ 

					$this->db->select('*');
					$this->db->from('tbl_members');
					$this->db->where('email', $help_data->query_by);
        			$profile = $this->db->get();
		

		$this->db->select('*');
        $this->db->from('add_products');
		$s = array('id'=>$help_data->productid);
		$this->db->where($s);
		$assignment_data=$this->db->get()->row();



        			if($profile->num_rows()>0){ 

        			$val_profile = $profile->row();
	?>

							<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $help_data->query;?></td>
								<td><?php echo $help_data->admin_reply; if($help_data->admin_reply==''){ ?> 
<a data-toggle="modal" data-target="#memberDetails" class="btn btn-default pull-right" onclick="replyQuery('<?php echo $help_data->id;?>','<?php echo $val_profile->name;?>','<?php echo $help_data->query_by;?>','<?php echo $help_data->query;?>');" href=""><i class="fa fa-reply-all" aria-hidden="true"></i></a>  <?php } ?></td>								
								<td><?php echo $help_data->query_by;?> (<?php echo $val_profile->name;?>) </td>
								<td>
<a target="_blank" href="<?= base_url();?>../pages/assignment/<?php echo str_replace(array('(',')', ' ', "'", '/','\/', ' /[^a-zA-Z0-9_ %\ [\]\.\(\)%&-]/s') ,'-',$assignment_data->title); ?>/<?= $assignment_data->id;?>">
									<?php echo word_limiter($assignment_data->title,2);?> 
</a>
							</td>
								<td><?php echo $help_data->create_date;?> </td>
							 
							</tr>

<?php $count++; }  } ?>


						</tbody>
					</table>
				</div>	
			
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>


<script type="text/javascript">
	function replyQuery(ids,nmes,by,text) {
		  var heading = 'Reply to '+by+' ('+nmes+')';
		  $('#model_title').text(heading);
		  $('#msg').text(text);
		  $('#replyto').val(ids);
	}
</script>
<!-- Associated Member Modal -->
 
<!-- Member Modal -->
<div id="memberDetails" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="model_title">Member Details</h4>
      </div>
      <div class="modal-body">

      	<form method="post" action="<?php echo base_url();?>pages/help_desk/reply">
      		<div class="row">
      			<div class="col-sm-12">
      				<p id="msg"></p>
      			</div>

      			<div class="col-sm-12">
      				<input type="hidden" name="replyto" id="replyto" value="">
      				<textarea name="rplymsg" class="form-control" required=""></textarea>
      			</div>


      			<div class="col-sm-12">
      			 <br />
      				<input type="submit" name="save" class="btn btn-default" value="Reply">

      			</div>
      		</div>
      			
      		
      	</form>
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>