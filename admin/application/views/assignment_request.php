<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-user"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="<?php echo base_url();?>" style="color: #666 !important;">Dashboard</a></li>
					<li>Assignment Request</li>
				</ul>
				<h4>Assignment Request</h4>
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
								<th>Assignment Name</th>
								<th>Price (<i class="fa fa-usd" aria-hidden="true"></i>)</th>								
								<th>User Name</th>
								<th>Request Id</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>#</td>
								<td>High School</td>
								<td><i class="fa fa-usd" aria-hidden="true"></i>1000</td>								
								<td>Sohan Veer</td>
								<td>#ASS011111</td>
								<td><a href="" class="label label-success">Accept</a>
									<a href="" class="label label-danger">Decline</a>
									<a href="" class="label label-warning">Status</a>
									<a href="" class="label label-default">Details</a>
								</td>
							</tr>
							 

						</tbody>
					</table>
				</div>	
			
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>
<!-- Associated Member Modal -->
<script>
function getProductData(str){

	$('.membertitle').text(str);
	//$('#model_head').text('Profile Id : '+str);
	$.ajax({
    type: "POST",
    url: '<?php echo base_url();?>pages/productDataView/'+str,
    data: "id="+str,
    success: function(data) {
         
          $('#model_body').html(data);
     }

   });
}

</script>	

<div id="memberDetails" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     

     <form action="" method="post"  enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" id="model_body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
   
      
  </form>
    </div>

  </div>
</div>
<!-- End Associated Member Modal -->
 