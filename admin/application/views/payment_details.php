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

 
 <div style="font-size: 11px !important; color: red;"> <?php echo $error;?></div>
  

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
                   
                  <tbody>


                    <tr>
                      <td colspan="4">
                        <h3>Basic Details</h3>
                      </td>
                    </tr>
<?php 
    $totalamt=0.00;
    $count =1;
    if($my_myorder->num_rows()>0) {
       
    foreach ($my_myorder->result() as $order_result) {

            $this->db->select('*');
            $this->db->from('tbl_members');
            $this->db->where('email',$order_result->email);
            $me= $this->db->get();
            $memdata = $me->row();
             


          
           
        


?>
                    <tr>
                      <th>Name </th>
                      <td> <?php if($me->num_rows()>0){  echo  $memdata->name;}?></td>
                      <th>Email </th>
                      <td>  <?php if($me->num_rows()>0){    echo  $memdata->email;}?></td>
                    </tr>

                      <tr>
                      <th>Mobile </th>
                      <td> <?php echo  $memdata->countryMobileCode; if($me->num_rows()>0){    echo ' '.$memdata->mobile;}?></td>
                      <th>Gender </th>
                      <td>  <?php if($me->num_rows()>0){   echo  $memdata->gender;}?></td>
                    </tr>

                    <tr>
                      <th>DOB </th>
                      <td> <?php if($me->num_rows()>0){ if($memdata->month!=0){ echo  $memdata->day;?>-<?=  $memdata->month;?>-<?=  $memdata->year;} } ?></td>
                      <th>Registration Id </th>
                      <td><?php if($me->num_rows()>0){    echo  $memdata->id;}?></td>
                    </tr>
                    <tr>
                      <td colspan="4">
                        <h3>Order Details</h3>
                      </td>
                    </tr>
                     <tr>
                      <th>Order Id  </th>
                      <td> <?=  $order_result->order_id;?></td>
                      <th>Subject </th>
                      <td> <?php 
                      $this->db->select('*');
                      $this->db->from('add_products');
                      $this->db->where('id',$order_result->subject);
                      $tp=$this->db->get();
                      if ($tp->num_rows()>0) {
                       
                      $subjetcdata=$tp->row();
                    echo   $subjetcdata->title;  # code...
                      }?>
                         </td>
                    </tr>


                     <tr>
                      <th>Dead Line  </th>
                      <td> <?php 
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
                      <th>Order Date  </th>
                      <td> <?=  $order_result->order_date;?></td>
                    </tr>
<?php 
        $this->db->select('*');
        $this->db->from('level_study');
        $s = array('id'=>$order_result->study_level);
        $this->db->where($s);
         $studyLevel=$this->db->get()->row();
?>
                    <tr>
                      <th>current level of study  </th>

                      <td> <?=  $studyLevel->name;?></td>
<?php 
        $this->db->select('*');
        $this->db->from('ref_styl_siisgnment');
        $s2 = array('id'=>$order_result->assi_referencce);
        $this->db->where($s2);
         $studyrefrence=$this->db->get()->row();
?>

<?php 
        $this->db->select('*');
        $this->db->from('tbl_orders');
        $s2 = array('id'=>$order_result->id);
        $this->db->where($s2);
         $id=$this->db->get()->row();
?>
                      <th>Reference style of assignment </th>
                      <td> <?=  $studyrefrence->name;?></td>
                    </tr>
 


                      <tr>
                      <th>Contact number  </th>
                      <td><?=  $memdata->countryMobileCode; ?> <?=  $order_result->mobile;?></td>
                      <th>Pages</th>
                  <td><?= $id->pages;?> Pages / <?= $id->pages*250;?> Words</td>
                    </tr>
                    
                <tr>
<?php 
    $this->db->select('*');
    $this->db->from('order_payment');
    $this->db->where('orderid',$order_result->order_id);
    $this->db->order_by('pay_id','ASC');
    $this->db->limit(1);
    $amo = $this->db->get();
    $total=0.00;
    $totalpay=0.00;
    $totalrest=0.00;
?>
                     

                    <tr>
                     
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered">
                                   
                                  <thead>
                                       <tr>
                                         <td colspan="8"><h3>Payment Details </h3> </td>
                                    </tr>
                                   <tr>
                                      <th>#</th>
                                      <th>Total Amount</th>
                                      <th>Paid Amount</th>
                                      <th>Rest amount</th>
                                      <th>Date</th>
                                      <th>Time</th>
                                      <th>Status</th>
                                      <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                  <?php $count=0;
                                   foreach($amo->result() as $paymentdata){ 
                                       if($count==0){
                                    $count++;
                                    $total= $paymentdata->pay_total;
                                    $totalpay = $totalpay+ $paymentdata->pay_advahnce;?>
                                    
<?php if($paymentdata->pay_advahnce>0){ ?>
                                    <tr>
                                      <td><?= $count;?></td>
                                      <td><?= $paymentdata->pay_total;?></td>
                                      <td><?php if($paymentdata->status==0){ echo '0.00';} else { echo $paymentdata->pay_advahnce;} ?> </td>
                                      <td><?php if($paymentdata->status==0){ echo $paymentdata->pay_advahnce; } else { echo '0.00';} ?></td>
                                      <td><?= $paymentdata->pay_date;?></td>
                                      <td><?= $paymentdata->pay_time;?></td>
                                      <td><?php if($paymentdata->status==0){ echo 'UnPaid';} else { echo 'Paid';} ?></td>
                                      <td><?= $paymentdata->text_id;?></td>
                                    </tr>
                                
                                   
<?php } } } ?>

          </tbody>
          <thead>
                  <tr>
                                         <th colspan="8"><h3> Assignments Upload   </h3> </th>
                                    </tr>
     <tr>
                                      <th>Title</th>
                                      <th colspan="6">Content</th>
                                
                                      <th>Upload</th>
                                    </tr>                                
                                    </thead>
                                     <tbody>
<?php 
  
    $this->db->select('*');
    $this->db->from('order_payment');
    $this->db->where('orderid',$order_result->order_id);
    $this->db->order_by('pay_id','ASC');
    $amo2 = $this->db->get();
 
 foreach($amo2->result() as $donwfile){
if($donwfile->assignment_file!=''){ ?>
                                    <tr>
                                      <td><?= $donwfile->assignment_title;?></td>
                                      <td colspan="6"><?= $donwfile->content;?></td>
                                      <td><a href="<?= base_url();?>../assets/<?= $donwfile->assignment_file;?>" target="_blank">Download Link</a></td>
                                    </tr>
 


                                  <?php } }?>
<tr>
    <td colspan="8">
        <div class="col-md-12">
                   
                      <h2>Assignment description </h2>
                    
<p class="text-justify" style="max-height:300px; overflow:scroll; padding:20px;"><?=  $order_result->assi_desrip;?></p>
            
                    

                </div>
                
                
                

    </td>
</tr>
</tbody>




<tfoot>
                                   



                                  <tr>
                                    <td colspan="8">
                                      <div class="row">
                                          <div class="col-sm-12">
                                                  <form action="<?= base_url();?>pages/payment_details/<?= $order_result->order_id; ?>/request" method="post" enctype="multipart/form-data">
                                                  <div class="row">
                                                      <div class="col-sm-6">
                                                          <label for="assignment_title">Assignment Title</label>
                                                          <input type="text" name="assignment_title" id="assignment_title" class="form-control">
                                                          <input type="hidden" name="pay_total" value="<?= $total;?>">
                                                          <input type="hidden" name="pay_advahnce" value="<?= $totalrest;?>">
                                                          <input type="hidden" name="pay_restamount" value="0">
                                                          <input type="hidden" name="order_id" value="<?= $order_result->order_id; ?>">
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <label for="assignment_file">Select Assignment File (.pdf/.docx)</label>
                                                          <input type="file" name="assignment_file" id="assignment_file" class="form-control">
                                                      </div>
                                                      <div class="col-sm-12">
                                                          <label for="content">Assignment Content</label>

                                                          <textarea name="content" class="ckeditor" id="editor1"></textarea>
                                                      </div>

                                                      <div class="col-sm-12">
                                                        <div class="form-group">
                                                          <br />
                                                          <input type="submit" value="Save & upload" class="btn btn-success">
                                                       </div>
                                                      </div>

                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                    </td>
                                  </tr>




                                  </tfoot>
                                </table>
                            </div>
                        </div>
                    </tr>




<?php 
  $count++; 
}
}

?>

                  </tbody>
                
              </table>
 


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

