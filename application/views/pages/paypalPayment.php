 
                
<?php  if ($pay_amount->num_rows()==0) { ?>
    <script type="hidden/javascript">
        window.location.href='<?= base_url();?>';
    </script>
<?php }  else { 
    $full_data=$pay_amount->row();
        $this->db->select('*');
        $this->db->from('tbl_orders');
        $s = array('order_id'=>$full_data->orderid);
        $this->db->where($s);
        $pay_order=$this->db->get()->row();


    $this->db->select('*');
    $this->db->from('add_products');
    $this->db->where('id',$pay_order->subject);
    $subjetcdata=$this->db->get()->row();



    }?>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script type="hidden/javascript">
        $(document).ready(function() {
           setTimeout(document.qrcodeRedirectForm.submit,60);
        });   
    </script>


 

<!-- Modal -->
<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"   style="display: block; padding-right: 17px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 text-center" style="    background: #fff !important;
    margin-top: 10%;
    min-height: 200px !important;
    z-index: 99999999!important;
    opacity: 1;">

    
         <!--
  <center> <img src="<?= base_url();?>assets/payment_processing-full.gif"> </center>
  <p style="font-size: 16px;">Please wait we are redirected you in a moment</p>-->
<?php //Set useful variables for paypal form
    //$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; //LIVE PayPal API URL
$paypal_id = 'rohitpacheriwal@icloud.com'; //Business Email
//$paypal_id = 'test'; //Business LIVE Email
?>
<form  class="form-horizontal" id="qrcodeRedirectForm" name="qrcodeRedirectForm"   action="https://www.paypal.com/cgi-bin/webscr" method="post" >
  

<!-- Identify your business so that you can collect the payments. --><br>
<input type="hidden" name="business" value="rohitpacheriwal@icloud.com">
<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">
<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="Online Consulting Services">
<input type="hidden" name="item_number" value="<?= $full_data->orderid;?>">
<input type="hidden" name="amount" value="<?= $full_data->pay_advahnce;?>">
<input type="hidden" name="currency_code" value="USD">
<!-- Specify URLs -->
 <br />
 <br />

<h4>To complete your payment, click "Confirm To Pay" or click cancel "cancel the order"!</h4>


<input type='hidden' name='cancel_return' value='<?= base_url();?>cancel/<?= $this->uri->segment(2);?>'>
<input type='hidden' name='return' value='<?= base_url();?>success/<?= $this->uri->segment(2);?>'>
 <br />
 
<p>
      <input type="submit" name="submit" class="btn btn-success btn-sm" value="Confirm To Pay" />
           
    <a href="<?= base_url();?>my-orders"><input type="button" class="btn btn-danger btn-sm" value="Cancel" /> </a>
</p>
</form>

        <hr>
       
      </div>
    </div>
  </div>
</div>
<style type="text/css">
    header,footer{
         filter: blur(8px);
  -webkit-filter: blur(8px);
    }
</style>
 