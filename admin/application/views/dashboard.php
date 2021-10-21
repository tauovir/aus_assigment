<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-home"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Admin Dashboard</li>
				</ul>
				<h4>Welcome Admin</h4>

				 
			</div>

		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row row-stat">
			<div class="col-md-12">
				<!-- Row-1 -->

        <div class="col-sm-12">
              <h4>Member Details</h4>
            <hr />
        </div>				 
				<div class="col-md-3">
					<div class="panel panel-warning-alt noborder">
						<div class="panel-heading noborder">						
							<div class="panel-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
							<div class="media-body">
							 
									<h5 class="md-title nomargin">Today's Joining</h5>
									<h4 class="mt5"><?php echo $todayjoining;?></h4>
							 
							</div><!-- media-body -->
							
						</div><!-- panel-body -->
					</div><!-- panel -->
				</div><!-- col-md-3 -->
				<div class="col-md-3">
					<div class="panel panel-warning-alt noborder">
						<div class="panel-heading noborder">						
							<div class="panel-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
							<div class="media-body">
								<a href="<?= base_url();?>pages/all_member" >
									<h5 class="md-title nomargin">Total Members</h5>
									<h4 class="mt5"><?php echo $totljoining;?></h4>
								</a>
							</div><!-- media-body -->
							
						</div><!-- panel-body -->
					</div><!-- panel -->
				</div><!-- col-md-3 -->
			 

<div class="col-sm-12">
    <h4>Order & Fun Collection</h4>
    <hr />
</div>

<?php 
    $this->db->select('*');
	$this->db->from('tbl_orders');		 
	$this->db->order_by('id','DESC');
    $qu = $this->db->get();




$confirm=0.00;
$pending=0.00;
$tdate=date('Ymd',strtotime(date('d-m-Y')));
foreach ($qu->result() as $vals) {
    	$this->db->select('*');
		$this->db->from('order_payment');
		$where2 = array('orderid' => $vals->order_id);
		$this->db->where($where2);
        $datauery = $this->db->get()->row();
        
        if($datauery->status==1){
            $confirm++;
        } else {
           $pending++; 
        }
        
}

?>
 
      

        <div class="col-md-3">
          <div class="panel panel-info-alt noborder">
            <div class="panel-heading noborder">            
              <div class="panel-icon">

              <i class="fa fa-globe"  aria-hidden="true" style="    color: #000;
    font-size: 35px;
    padding: 6px 0 0 11px;"></i>  

  </div>
              <div class="media-body">
                <a href="<?= base_url();?>pages/online_orders" >
                  <h5 class="md-title nomargin">Total Orders</h5>
                  <h4 class="mt5"><?php echo $my_myorder->num_rows();?></h4>
                </a>
              </div><!-- media-body -->
              
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-3 -->




 <div class="col-md-3">
          <div class="panel panel-info-alt noborder">
            <div class="panel-heading noborder">            
              <div class="panel-icon">

              <i class="fa fa-usd"  aria-hidden="true" style="    color: #000;
    font-size: 35px;
    padding: 6px 0 0 11px;"></i>  

  </div>
              <div class="media-body">
                <a href="<?= base_url();?>pages/online_orders/unpaid" >
                  <h5 class="md-title nomargin">UnPaid ORDERS</h5>
                  <h4 class="mt5"><?php echo $pending;?></h4>
                </a>
              </div><!-- media-body -->
              
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-3 -->





         <div class="col-md-3">
          <div class="panel panel-info-alt noborder">
            <div class="panel-heading noborder">            
              <div class="panel-icon">

              <i class="fa fa-usd"  aria-hidden="true" style="    color: #000;
    font-size: 35px;
    padding: 6px 0 0 11px;"></i>  

  </div>
              <div class="media-body">
                <a href="<?= base_url();?>pages/online_orders/paid" >
                  <h5 class="md-title nomargin">Paid ORDERS</h5>
                  <h4 class="mt5"><?php echo $confirm;?></h4>
                </a>
              </div><!-- media-body -->
              
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-3 -->

			</div>		
		
		
		</div><!-- row -->	


		  
        
	</div><!-- contentpanel -->
</div><!-- mainpanel -->