<div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-info recent-orders">
                    <div class="col-md-12 info table-responsive recent-orders-table">
                        <h2>My Orders</h2>
                         <table id="example" class="table table-bordered">
                   
                  <tbody>


                    <tr>
                      <td colspan="4">
                        <h3>Basic Details</h3>
                      </td>
                    </tr>
<?php 
$rstamt=0;  
    $totalamt=0.00;
    $count =1;
    if($my_myorder->num_rows()>0) {
       
    foreach ($my_myorder->result() as $order_result) {

            $this->db->select('*');
            $this->db->from('tbl_members');
            $this->db->where('email',$order_result->email);
            $memdata = $this->db->get()->row();


           
?>
                    <tr>
                      <td><h6 >Name</h6></td>
                      <td> <?=  $memdata->name;?></td>
                      <td><h6 >Email</h6></td>
                      <td>  <?=  $memdata->email;?></td>
                    </tr>

                      <tr>
                      <td><h6 >Mobile</h6></td>
                      <td> <?=  $order_result->mobile;?></td>
                      <td><h6 >Gender</h6></td>
                      <td>  <?=  $memdata->gender;?></td>
                    </tr>

                    <tr>
                      <td><h6 >D.O.B</h6></td>
                      <td><?php if($memdata->month>0){?> <?=  $memdata->day;?>-<?=  $memdata->month;?>-<?=  $memdata->year;?> <?php } ?></td>
                      <td><h6 >Registration Id</h6></td>
                      <td><?=  $memdata->id;?></td>
                    </tr>
                    <tr>
                      <td colspan="4">
                        <h3>Order Details</h3>
                      </td>
                    </tr>
                    
                     <tr>
                      <td><h6 >Order Id</h6></td>
                      <td> <?=  $order_result->order_id;?></td>
                      <td><h6 >Subject</h6></td>
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
                      <td><h6 >Deadline/Urgency</h6></td>
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
                      <td><h6 >Order Date</h6></td>
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
                      <td><h6 >Study Level</h6></td>

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
                      <td><h6 >Reference style</h6></td> 
                      <td> <?=  $studyrefrence->name;?></td>
                    </tr>
                    <tr>
                       
                       <td><h6 >Number Of Pages</h6></td>
                      <td colspan="3"><?=  $id->pages;?> Pages / <?=  $id->pages*250;?> words</td>

                    </tr>

                   

                      

                     
<?php 
    $this->db->select('*');
    $this->db->from('order_payment');
    $this->db->where('orderid',$order_result->order_id);
    $this->db->order_by('pay_id','ASC');
    $amo = $this->db->get();
    $paymentcount = $amo->num_rows();
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
                                      <td colspan="6"><h3>Payment Details </h3> </td>
                                    </tr>
                                   <tr>
                                      <th class="form-heading" >#</th>
                                      <th class="form-heading" >Total Amount</th>
                                      <th class="form-heading" >Paid Amount</th>
                                     
                                      <th class="form-heading" >Date</th>
                                      <th class="form-heading" >Time</th>
                                      <th class="form-heading" >Status</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                  <?php $count=0;
$paidst=0;
$paystatus=0;
                                   foreach($amo->result() as $paymentdata){ 
                                    $count++;
                                    $total= $paymentdata->pay_total;
                                    $totalpay = $totalpay+ $paymentdata->pay_advahnce;?>
                                   
<?php if($paymentdata->pay_advahnce>0){ ?>

                                    <tr>
                                      <td><?= $count;?></td>
                                      <td>$<?= $paymentdata->pay_total;?></td>
                                      <td>$<?= $paymentdata->pay_advahnce;?></td>
                                    
                                      <td><?= $paymentdata->pay_date;?></td>
                                      <td><?= $paymentdata->pay_time;?></td>
                                      <td><?php if($paymentdata->status==0){ 

$paystatus++;
                                        ?>
<a href="<?= base_url();?>paypal/<?= $paymentdata->pay_id;?>" class="btn btn-sm btn-primary">
                                        UnPaid 
</a>
                                        <?php } else { 
$paidst++;

                                            echo 'Paid';} ?></td>
                                       
                                    </tr>
                 
<?php } ?>

 


<?php 


if($paymentdata->assignment_file!=''){ ?>
 <?php $asc_title = $paymentdata->assignment_title;?>
 <?php $asc_content =  $paymentdata->content;?>
 <?php $asc_file =  $paymentdata->assignment_file;?>
<?php } else { ?>
  <?php $asc_title ='';?>
  <?php $asc_content =  '';?>
  <?php $asc_file =  '';?>
<?php } ?>
<?php } ?>
 </tbody>
          

<!----- Documents----->
<?php
                               $this->db->select('*');
                               $this->db->from('tbl_documents');
                               $this->db->where('order_id',$order_result->order_id);
                               $this->db->order_by('created_at', 'DESC');
                               $documents = $this->db->get();
                               $cnt = 0;
                              ?>
                              
                              <thead>
                                <tr>
                                  <th colspan="8">
                                    <h3> Uploaded Documents </h3>
                                  </th>
                                </tr>
                                <?php if(count($documents->result()) > 0) {?>
                                <tr>
                                  <th>#</th>
                                  <th>Download Link</th>
                                  <th>Document Type</th>
                                  <th>Created Date</th>
                                </tr>
                              </thead>
                             

                              <tbody>
                                ` <?php
                                  foreach ($documents->result() as $donwfile) {
                                    $cnt = $cnt + 1; ?>
                                  <tr>
                                    <td><?= $cnt; ?></td>
                                    <td><a href="<?= base_url(); ?>../assets/setting/<?= $donwfile->document_name; ?>" target="_blank">Download Link</a></td>
                                    <td><?= $donwfile->document_type; ?></td>
                                    <td><?= date('Y-m-d',strtotime($donwfile->created_at)); ?></td>
                                  </tr>
                                <?php } ?>
                              </tbody>`
                              <?php } else  echo " <tr><td> No documents uploaded </td></tr>";?>
                              <!----- Documents End----->


<tfoot>
                                   
 
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





<style>
    .col-content{
        word-wrap: break-word;
   max-width: 100px;
  overflow: scroll;
    }
</style>

                  </tbody>
                
              </table>  
 
   
               <div class="col-md-12" style="border:1px solid #dee2e6;">
                   
                      <h3>Assignment description </h3>
                      <hr>
                    
<p class="text-justify" style="max-height:300px; overflow:scroll;  padding:20px;"><?=  $order_result->assi_desrip;?></p>
            
                   

                </div>
             
                    </div>
                </div>                
            </div>
        </div>
    </div>
<style type="text/css">
  @media only screen and (min-width: 676px) {
  th.form-heading{
    padding: 5px !important;
  }
}
@media only screen and (max-width: 675px) {
  th.form-heading{
    padding: 2px !important;
    font-size: 10px !important;
  }

  td{
    font-size: 15px !important;
  }
}
</style>