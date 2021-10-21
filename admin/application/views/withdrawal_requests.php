<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-user"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="<?php echo base_url();?>">Dashboard</a></li>
					<li>Withdrawal Request</li>
				</ul>
				<h4>Withdrawal Request</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">
				<div class="table-responsive">

					     <div class="text-danger">  <?php echo validation_errors(); ?></div>

                                     <?php echo  $this->session->flashdata('final_success') ? '<div class="text-success text-center"><b>' . $this->session->flashdata('final_success') . '</b></div>' : ''; ?>


					<table id="example" class="table table-striped table-bordered " style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Request Id</th>
								<th>Request Amount</th>								
								<th> Date</th>
								<th>Remark</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$counts=1;
							foreach($req_width->result() as $all_member_result){
						?>	
							
							<tr>
								<td><?php echo $counts; ?></td>
								<td><?php echo $all_member_result->requested_by;?></td>
								<td><?php echo $all_member_result->amount;?> (<a data-toggle="modal" data-target="#memberDetails" onClick="getRecords(<?php echo $all_member_result->requested_by;?>);" href="">Details</a>) </td>								
								<td><?php echo $all_member_result->create_date;?></td>
								<td><?php echo $all_member_result->remarks;?></td>
								<td><?php if($all_member_result->status==1){ ?>Paid


<a href="javascript:void();" data-toggle="modal" data-target="#memberDetails" class="btn btn-success btn-xs" onclick="makepayment(<?= $all_member_result->id;?>);">View Paid Details</a>


									<?php }  else { echo 'UnPaid'; ?> &nbsp;
<a href="javascript:void();" data-toggle="modal" data-target="#memberDetails" class="btn btn-success btn-xs" onclick="makepayment(<?= $all_member_result->id;?>);">Pay Now</a>

								<?php }?></td>
							</tr>
							
						<?php $counts++; } ?>
							
							
						</tbody>
					</table>
				</div>	
			
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>
<!-- Associated Member Modal -->
<script>
function getRecords(str){

	$('.membertitle').text(str);
	//$('#model_head').text('Profile Id : '+str);
	$.ajax({
    type: "POST",
    url: '<?php echo base_url();?>pages/getProdile/'+str,
    data: "id="+str,
    success: function(data) {
         
          $('#model_body').html(data);
     }

   });
}

</script>	
 



 <script>
function makepayment(str){

 
	$.ajax({
    type: "POST",
    url: '<?php echo base_url();?>pages/getPayWisth/'+str,
    data: "id="+str,
    success: function(data) {
         
          $('#model_body2').html(data);
     }

   });
}

</script>	
 
 

<div id="associatedMemberList" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Associated Member List Of <span class="membertitle2"></span></h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
       
    </div>

  </div>
</div>
<!-- End Associated Member Modal -->

<!-- Member Modal -->
<div id="memberDetails" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" >Confirm Payment	 <span class="membertitle"></span></h4>
      </div>
      <div class="modal-body" id="model_body2">
        <p>Some text in the modal.</p>
      </div>
       
    </div>

  </div>
</div>
<!-- End Member Modal -->