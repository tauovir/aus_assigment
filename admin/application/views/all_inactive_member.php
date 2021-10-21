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
					<li>InActive Members</li>
				</ul>
				<h4>InActive Members</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	

			<div class="col-sm-12">		
 

<a href="<?= base_url();?>pages/member_excel/inactive" class="btn btn-warning btn-xs" target="_blank">Export TO Excel / Print</a>
							<br /><br />
				</div>



			<div class="col-sm-12 col-md-12 ">
				<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered " style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Member ID (User Id)</th>
								<th>Mobile No.</th>
							 
								<th>Active Date</th>
									
								<th>Change Status</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$counts=1;
							foreach($all_members as $all_member_result){
						?>	
							
							<tr>
								<td><?php echo $counts; ?></td>
								<td><?php echo $all_member_result->name;?></td>
								<td><?php echo $all_member_result->id;?> (<a data-toggle="modal" data-target="#memberDetails" onClick="getRecords(<?php echo $all_member_result->id;?>);" href="">Details</a>) </td>								
									<td><?php echo $all_member_result->mobile;?> </td>
							
								 
									<td><?php echo $all_member_result->registration_date;?></td>
									
									<td align="center"><?php if($all_member_result->status==1){ ?>

								<a href="<?= base_url();?>pages/member_status/tbl_members/<?php echo $all_member_result->id;?>/0/all_member" class="label label-xs label-danger">	Make red </a>

									<?php }  else { ?> 
										<a href="<?= base_url();?>pages/member_status/tbl_members/<?php echo $all_member_result->id;?>/1/all_member" class="label label-xs label-success">Make Green</a>

										<?php }?>

<a href="javascript:void(0);"   data-toggle="modal" data-target="#associatedMemberList" onclick="getAssociats('<?php echo $all_member_result->name;?>','<?php echo $all_member_result->id;?>');" class="label label-xs label-default">Transection History</a>

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
	function getAssociats(str,str2){
		//alert(str);
		$('.membertitle2').text(str);
	}
</script>

<div id="associatedMemberList" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Transection History Of <span class="membertitle2"></span></h4>
      </div>
      <div class="modal-body">
        <table class="table table-responsive">
        	<thead>
        		<tr>
        			<th>#</th>
        			<th>Amount (<i class="fa fa-inr"></i>)</th>
        			<th>Transection date</th>
        			<th>Transection ID</th>
        		</tr>

        	</thead>
        	<tbody>
        		<tr>
        			<td>1</td>
        			<td><i class="fa fa-inr"></i>1000</td>
        			<td>2019-06-10 16:44:15</td>
        			<td>#123456622523625</td>
        		</tr>
        	</tbody>
        </table>
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