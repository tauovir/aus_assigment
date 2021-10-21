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
			<div class="col-sm-12 col-md-12 ">
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Member ID (User Id)</th>								
								<th>Activation Date (<i class="fa fa-inr" aria-hidden="true"></i>)</th>
								<th>Wallet Balance (Rs.)</th>
								<th>KYC Status</th>
								<th>Action</th>								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Rahul Kumar</td>
								<td>2132545 (<a data-toggle="modal" data-target="#memberDetails" href="">Details</a>) </td>								
								<td>05/16/2019 - 08:00</td>
								<td>25 </td>
								<td><span class="label label-danger">In-Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										Action <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">																	
											<li><a href="javascript:void(0);" name="editallfrm" ><span class="fa fa-edit"></span>&nbsp;Edit</a></li>											
										</ul>
									</div>
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
        <h4 class="modal-title">Member Details</h4>
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