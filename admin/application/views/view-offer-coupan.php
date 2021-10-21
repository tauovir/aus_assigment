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
					<li>Offer List</li>
				</ul>
				<h4>Offer List</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
 

			<div class="col-sm-12 col-md-12 ">
				<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered " style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Coupon Code</th>
								<th>Off in %</th>
								<th>Color</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$counts=1;
							foreach($allcuponcode->result() as $couponcode_all){
						?>	
							
							<tr>
								<td><?php echo $counts; ?></td>
								<td><?php echo $couponcode_all->offer_title;?></td>
								<td><?php echo $couponcode_all->coupon_code;?></td>								
									<td><?php echo $couponcode_all->offinpercent;?> </td>
							
								<td><?php echo $couponcode_all->color;?></td>
									<td><?php if($couponcode_all->offer_status==1){

										echo 'Active';
									} else{
										echo 'InActive';
									} ?></td>
									
									<td align="center"> 
										<a href="<?php echo base_url();?>pages/offer_n_coupon_cod/edit/<?php echo $couponcode_all->id;?>" class="label label-xs label-success">Edit</a>

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