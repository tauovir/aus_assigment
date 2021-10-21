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
					<li>Assignment List</li>
				</ul>
				<h4>Assignment List</h4>
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
								<th>Price (<i class="fa fa-usd" aria-hidden="true"></i>)</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						 
				<?php $counts=1; foreach($all_products as $mproduct){ ?>		

						<tr>
							<td><?php echo $counts; ?></td>
							<td><?php echo $mproduct->title; ?></td>
							<td><i class="fa fa-usd" aria-hidden="true"></i><?php echo $mproduct->mrp_price; ?></td>
							<td><img style="width: 100px;" src="<?php echo base_url();?>../assets/products/<?php echo $mproduct->product_image; ?>"></td>
							<td>
<a href="<?php echo base_url();?>pages/add_assignment/edit/<?php echo $mproduct->id; ?>"   class="btn btn-xs btn-default" onclick="getProductData('<?php echo $mproduct->id; ?>');">
									<i class="fa fa-pencil"></i> Edit/View</a>
<a href="<?php echo base_url();?>pages/assignment_list/delete/<?php echo $mproduct->id; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>

<a href="<?= base_url();?>pages/assignmentReview/<?php echo $mproduct->id; ?>" class="btn btn-xs btn-info">Write a review</a>
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
 