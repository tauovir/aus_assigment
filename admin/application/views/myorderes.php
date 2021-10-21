<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="pageicon pull-left">
                <i class="fa fa-wrench" aria-hidden="true"></i>
            </div>
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="<?= base_url();?>pages/dashboard" style="color: #666 !important;">Dashboard</a></li>
                    <li><?php if($this->uri->segment(2)=='online_orders'){ echo 'Online'; } else { echo 'Offline'; } ?> Orders</li>
                </ul>
                <h4><?php if($this->uri->segment(2)=='online_orders'){ echo 'Online'; } else { echo 'Offline'; } ?> Orders</h4>
            </div>
        </div>
        <!-- media -->
    </div>
    <!-- pageheader --> 

    <div class="contentpanel">
        <div class="row">

 
  

            <div class="col-sm-12 col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="table-responsive">
<?php if($this->session->flashdata('success')){ ?>
  <div class="alert alert-success errorHandler no-display">
 
      <?php echo $this->session->flashdata('success'); ?> 
  </div> 
<?php } ?>

          <table id="example" class="table table-striped table-bordered " style="width:100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name </th>
                      <th>Email </th>
                      <th>Mobile </th>
                      <th>Order ID</th>
                      <th>Order Amount </th>
                      <th>Pay Status</th>
                      <th>Date</th>
                      
                      <th>Deadline</th>
               
                    </tr>
                  </thead>
                  <tbody>
<?php 
    $totalamt=0.00;
    $count =1;
    if($my_myorder->num_rows()>0) {
       
    foreach ($my_myorder->result() as $order_result) {
     //$totalamt=$totalamt+$order_result->total_amount;

            $this->db->select('*');
            $this->db->from('tbl_members');
            $this->db->where('email',$order_result->email);
            $me= $this->db->get();
            $memdata = $me->row();

          
           
        if($this->uri->segment(3)=='paid'){
              $this->db->select('*');
             $this->db->from('order_payment');
            $this->db->where('orderid',$order_result->order_id);
            $this->db->where('status',1);
            $this->db->order_by('pay_id','ASC');
            $this->db->limit(1);
            $amo = $this->db->get();   
           if($amo->num_rows()>0){ ?>
            <tr>
                      <td><?php echo $count;?></td>
                      <td><?php if($me->num_rows()>0){ echo $memdata->name;}?></td>
                      <td><?php if($me->num_rows()>0){ echo   $memdata->email;}?></td>
                      <td>
                        <!--<p> <?php if($me->num_rows()>0){ echo $memdata->countryMobileCode;}?>    <?=  $order_result->mobile;?></p>-->
                        <p>    <?=  $order_result->mobile;?></p>
                        

                      </td>
                      <td><?=  $order_result->order_id;?>
                      </td>
                      <td><?php if($amo->num_rows()>0){  $amount_rc =  $amo->row(); echo   $amount_rc->pay_total; ?>
<a href="<?= base_url();?>pages/payment_details/<?=  $order_result->order_id;?>" title="Full details of Order : <?=  $order_result->order_id;?> & Payment Status">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                          </a>
                        <?php  }?></td>
                      <td>
                        <?php if($amo->num_rows()>0){  
                        
                        if($amount_rc->status==0 ){ ?> UnPaid

                         
                      <?php }  else if($amount_rc->status==1){
                          echo 'Paid';
                      }
                        }
                      ?>
                          
                        </td>



                      <td><?=  $order_result->order_date;?></td>
                      <td>
                          
                          
                          <?php 
    $this->db->select('*');
    $this->db->from('assignment_urgency');
    $this->db->where('id',$order_result->deadline);
    $urgency=$this->db->get();
  if ($urgency->num_rows()>0) {
     

    $urgency_price=$urgency->row();


    $this->db->select('*');
    $this->db->from('urgency');
    $this->db->where('id',$urgency_price->urgency_id);
    $urgency_value=$this->db->get()->row();
  echo  $urgency_value->name; 
   }  ?>
   
    </td>
 
                    </tr>   
           
           <?php
               
        $count++;    } 
            
        } else if($this->uri->segment(3)=='unpaid'){
              $this->db->select('*');
             $this->db->from('order_payment');
            $this->db->where('orderid',$order_result->order_id);
            $this->db->order_by('pay_id','ASC');
            $this->db->limit(1);
            $amo = $this->db->get(); 
            $datasss=$amo->row();
            if($datasss->status!=1){
             ?>
            <tr>
                      <td><?php echo $count;?></td>
                      <td><?php if($me->num_rows()>0){ echo $memdata->name;}?></td>
                      <td><?php if($me->num_rows()>0){ echo   $memdata->email;}?></td>
                      <td>
                        <p>   <?=  $order_result->mobile;?></p>
                        

                      </td>
                      <td><?=  $order_result->order_id;?>
                      </td>
                      <td><?php if($amo->num_rows()>0){  $amount_rc =  $amo->row(); echo   $amount_rc->pay_total; ?>
<a href="<?= base_url();?>pages/payment_details/<?=  $order_result->order_id;?>" title="Full details of Order : <?=  $order_result->order_id;?> & Payment Status">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                          </a>
                        <?php  }?></td>
                      <td>
                        <?php if($amo->num_rows()>0){  
                        
                        if($amount_rc->status==0 ){ ?> UnPaid

                         
                      <?php }  else if($amount_rc->status==1){
                          echo 'Paid';
                      }
                        }
                      ?>
                          
                        </td>



                      <td><?=  $order_result->order_date;?></td>
                      <td>
                          
                          
                          <?php 
    $this->db->select('*');
    $this->db->from('assignment_urgency');
    $this->db->where('id',$order_result->deadline);
    $urgency=$this->db->get();
  if ($urgency->num_rows()>0) {
     

    $urgency_price=$urgency->row();


    $this->db->select('*');
    $this->db->from('urgency');
    $this->db->where('id',$urgency_price->urgency_id);
    $urgency_value=$this->db->get()->row();
  echo  $urgency_value->name; 
   }  ?>
   
    </td>
 
                    </tr>   
           
           <?php
          $count++;   }
        } else { 
        
            $this->db->select('*');
            $this->db->from('order_payment');
            $this->db->where('orderid',$order_result->order_id);
            $this->db->order_by('pay_id','ASC');
            $this->db->limit(1);
            $amo = $this->db->get();
        
        ?>
       <tr>
                      <td><?php echo $count;?></td>
                      <td><?php if($me->num_rows()>0){ echo $memdata->name;}?></td>
                      <td><?php if($me->num_rows()>0){ echo   $memdata->email;}?></td>
                      <td>
                        <p>    <?=  $order_result->mobile;?></p>
                        

                      </td>
                      <td><?=  $order_result->order_id;?>
                      </td>
                      <td><?php if($amo->num_rows()>0){  $amount_rc =  $amo->row(); echo   $amount_rc->pay_total; ?>
<a href="<?= base_url();?>pages/payment_details/<?=  $order_result->order_id;?>" title="Full details of Order : <?=  $order_result->order_id;?> & Payment Status">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                          </a>
                        <?php  }?></td>
                      <td>
                        <?php if($amo->num_rows()>0){  
                        
                        if($amount_rc->status==0 ){ ?> UnPaid

                         
                      <?php }  else if($amount_rc->status==1){
                          echo 'Paid';
                      }
                        }
                      ?>
                          
                        </td>



                      <td><?=  $order_result->order_date;?></td>
                      <td>
                          
                          
                          <?php 
    $this->db->select('*');
    $this->db->from('assignment_urgency');
    $this->db->where('id',$order_result->deadline);
    $urgency=$this->db->get();
  if ($urgency->num_rows()>0) {
     

    $urgency_price=$urgency->row();


    $this->db->select('*');
    $this->db->from('urgency');
    $this->db->where('id',$urgency_price->urgency_id);
    $urgency_value=$this->db->get()->row();
  echo  $urgency_value->name; 
   }  ?>
   
    </td>
 
                    </tr>       
   <?php     $count++;  }
?>
       
       
       
                  
<?php 
  
}
}

?>

                  </tbody>
                
              </table>
<div id="memberDetails" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" > Full Order Details</h4>
      </div>
      <div class="modal-body" id="model_body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div id="memberDetails2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" >Add Details NEFT/RTGS Details</h4>
      </div>
      <div class="modal-body">
        <form action="<?= base_url();?>pages/myorderes/decline" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                  <input type="hidden" name="orderid" id="orderid" value="">
                   
                    <input type="hidden" name="lasturl" value="pages/<?= $this->uri->segment(2);?>">
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <label class="col-sm-12" for="declinereson">Payment Decline Reason</label>
                    <div  class="col-sm-12"> 
                      <textarea name="declinereson" id="declinereson" class="form-control" placeholder="Enter payment decline reason.."></textarea>
                  </div>
                  </div>
                </div>

             
                <div class="col-sm-12">
                    <div class="form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-info btn-sm pull-right">
                    </div>
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
              <script type="text/javascript">

function adddetails(argument) {
  $('#orderid').val(argument);
}


function paymentdecline(argument) {
   $('#orderid').val(argument);
}




                function loadOrder(argument,str) {
                      $.ajax({
                        type: "POST",
                        url: '<?php echo base_url();?>pages/getorderdetails/'+argument+'/'+str,
                        data: "id="+argument,
                        success: function(data) {
                              $('#model_body').html(data);
                         }

                       });
                }
                
              </script>


                        </div>
                    </div>
                </div>
            </div>
            <!-- col-sm-12 -->
        </div>
        <!-- row -->
    </div>
    <!-- contentpanel -->

</div>

