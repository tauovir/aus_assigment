<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-user"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="index.php">Dashboard</a></li>
					<li>Pending KYC</li>
				</ul>
				<h4>Pending KYC</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	

<div class="col-sm-12">		
<a href="<?= base_url();?>pages/kyc_excel/all" class="btn btn-warning btn-xs" target="_blank">All KYC  Export TO Excel / Print</a>

<a href="<?= base_url();?>pages/kyc_excel/active" class="btn btn-success btn-xs" target="_blank">Active KYC Export TO Excel / Print</a>

<a href="<?= base_url();?>pages/kyc_excel/inactive" class="btn btn-danger btn-xs" target="_blank">InActive KYC Export TO Excel / Print</a>
							<br /><br />
				</div>


			<div class="col-sm-12 col-md-12 ">
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Member ID (User Id)</th>								
								<th>KYC Date </th>
								<th>Wallet Balance (Rs.)</th>
								<th>KYC Status</th>
								<th>Action</th>								
							</tr>
						</thead>
						<tbody>
						
<?php foreach($all_kyc as $all){ 
		if ($all->aadhar_card_front_status==0 or $all->aadhar_card_back_status==0 or $all->pancard_status==0) {
			 
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('id',$all->id);
 
        	$memdata = $this->db->get()->row();
		

			$this->db->select('*');
			$this->db->from('tbl_income_reports');
			$this->db->where('income_to', $all->id);
        	$inco_vali = $this->db->get();
        	$wall_first=0.00;
        	if ($inco_vali->num_rows()>0) {
        		foreach ($inco_vali->result() as $wall_data) {
        			$wall_first=$wall_first+$wall_data->amount;
        		}
        	}  



        	$this->db->select('*');
			$this->db->from('tbl_widthdraws');
			$this->db->where('requested_by', $all->id);
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
								<td>1</td>
								<td><?php echo $memdata->name;?></td>
								<td><?php echo $all->id; ?> (<a data-toggle="modal" data-target="#memberDetails" onClick="getRecords(<?php echo $all->id; ?>);" href="">Details</a>) </td>								
								<td><?php echo $all->create_date; ?></td>
								<td><i class="fa fa-inr"></i><?php echo $wall_first-$wall_first2;?> </td>
								<td><span class="label label-danger">In-Active</span></td>
								<td>
									<div class="btn-group">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#memberDetails" onClick="getRecords(<?php echo $all->id; ?>);" ><span class="fa fa-edit"></span>&nbsp;Edit</a>
									</div>
								</td>
							</tr>

<?php 

}
} ?>



						</tbody>
					</table>
				</div>	
			
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>


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


<!-- Associated Member Modal -->
<div id="associatedMemberList" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Associated Member List</h4>
      </div>
      <div class="modal-body">
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