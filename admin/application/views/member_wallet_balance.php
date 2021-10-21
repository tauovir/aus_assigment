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
					<li>Fund Transfer</li>
				</ul>
				<h4>Fund Transfer</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">



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


				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered " style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Member ID (User Id)</th>								
						 
								<th>Transfer Fund (<i class="fa fa-inr"></i>)</th>
								<th>Wallet (<i class="fa fa-inr"></i>)</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$counts=1;
							foreach($all_members->result() as $all_member_result){

			$this->db->select('*');
			$this->db->from('tbl_income_reports');
			$this->db->where('income_to', $all_member_result->id);
        	$inco_vali = $this->db->get();
        	$wall_first=0.00;
        	if ($inco_vali->num_rows()>0) {
        		foreach ($inco_vali->result() as $wall_data) {
        			$wall_first=$wall_first+$wall_data->amount;
        		}
        	}  



        	$this->db->select('*');
			$this->db->from('tbl_widthdraws');
			$this->db->where('requested_by', $all_member_result->id);
			$this->db->where('status',1);
        	$inco_vali2 = $this->db->get();
        	$wall_first2=0.00;
        	if ($inco_vali2->num_rows()>0) {
        		foreach ($inco_vali2->result() as $wall_data2) {
        			$wall_first2=$wall_first2+$wall_data2->amount;
        		}
        	}  








						?>	
							
							<tr>
								<td><?php echo $counts; ?></td>
								<td><?php echo $all_member_result->name;?></td>
								<td><?php echo $all_member_result->id;?> (<a data-toggle="modal" data-target="#memberDetails" onClick="getRecords(<?php echo $all_member_result->id;?>);" href="">Details</a>) </td>								
								
								<td><?php echo $wall_first2;?>  (<a data-toggle="modal" onClick="getAssociats(<?php echo $all_member_result->id;?>);" data-target="#associatedMemberList" href="">Details</a>)</td>
    								<td><?php echo $finela = $wall_first-$wall_first2;?> </td>
								<td>
								
<?php if($finela>0){ ?>	
<a data-toggle="modal"  data-target="#associatedMemberLTransfer<?php echo $counts; ?>" href="" class="btn btn-xs btn-success" >Transfer Fund </a>
<?php }  else {?>
<a  href="javascript:void();" class="btn btn-xs btn-danger" >Insufficient Fund </a>
<?php } ?>

<div id="associatedMemberLTransfer<?php echo $counts; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Transfer Fund To <?php echo $all_member_result->id;?> <span class="membertitle2"></span></h4>
      </div>
     <div class="modal-body" id="model_body2"><form action="<?= base_url();?>pages/member_wallet_balance/confirm" method="post" enctype="multipart/form-data">
     	<table ><tr>
					<td>

						<input type="hidden" value="2" name="id" readonly="">
						<label class="col-sm-12">Request Amount</label> 
						<input type="hidden" name="userid" value="<?php echo $all_member_result->id;?>">
						<input type="text" name="amount" value="<?= $finela?>"  class="form-control">
						<input type="hidden" name="maxamount" value="<?= $finela?>"  readonly>
						
					</td>
					<td>
						<label class="col-sm-12">Request Date</label> 
						<input type="text" name="create_date" value="" class="form-control">
						<input type="hidden" name="remarks" value="By Admin" class="form-control">
					</td>
			</tr> <tr>
					<td>
						<label class="col-sm-12">Transaction Id / Bank Ref. No.</label> 
						<input type="text" name="transection_id" value="" class="form-control">
					</td>
					<td>
						<label class="col-sm-12">Transaction Date</label> 
						<input type="text" name="transection_date" value="" class="form-control">
					</td>
			</tr><tr>
					<td colspan="2">
						<label class="col-sm-12">Transaction Slip</label> 
						<input type="file" name="company_logo" value="" class="form-control">
					</td>
					 
			</tr><tr>
					<td colspan="2">
						<label>Your Remark</label>
						<textarea name="other_remark" class="form-control"></textarea>
					</td>
			</tr><tr>
				<td colspan="2">
					<input type="submit" name="submit" value="Save" class="btn btn-success form-control">
 				</td>
			</tr></table></form></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


								</td>
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
	function getAssociats(str){
		//alert(str);
		$('.membertitle2').text(str);

	$.ajax({
    type: "POST",
    url: '<?php echo base_url();?>pages/getwalletedetaisl/'+str,
    data: "id="+str,
    success: function(data) {
         
          $('#model_body_wallete').html(data);
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
        <h4 class="modal-title">Wallet / Income Details <span class="membertitle2"></span></h4>
      </div>
      <div class="modal-body" id="model_body_wallete">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
        <h4 class="modal-title" > Profile Details Of <span class="membertitle"></span></h4>
      </div>
      <div class="modal-body" id="model_body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- End Member Modal -->