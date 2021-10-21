<section class="section banner-form">

    <div class="vc_column-inner ">

        <div class="wpb_wrapper">

            <img src="<?php echo base_url();?>assets/wp-content/header-dash.jpg">

        </div>
    </div>
</section>

<style type="text/css">
    .error {
        float: right;
    }
</style>

<section>
    <div class="search2 knowledge">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="breadcrumbalign">
                                <ul class="breadcrumb">
                                    <li><a href="<?= base_url();?>" title="Home">Home</a></li><i class="fa fa-angle-right"></i>
                                    <li><a href="javascript:void();" title="Dashboard">Order Placed</a></li>
                                </ul>
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Content -->
<section>
    <!-- Blog Section -->
    <div class="sample-page">
        <div class="container">
 

            <div class="row">
                <!-- Blog Content -->
                <div class="col-md-12">

                    

                    <div id="bbpress-forums">

                        <div id="bbp-user-wrapper">

                            
<style type="text/css">
    .vbbbhn{
        background: #046302;
        color: #fff !important;
        padding: 6px;
        font-size: 23px !important;
    }

      .p-head{ background: linear-gradient(to top, #f2709c, #ff9472) !important;
    padding: 20px;
    font-size: 18px  !important;
    color: #fff !important;
    text-align: left;
}

.bbt-btn-login {
    width: 140px;
    height: 40px;
    border-radius: 2px;
    background-color: #00a4ef;
    color: #ffffff;
    font-size: 13px;
    font-weight: bold;
    border: none;
    -webkit-transition: background-color .5s ease;
    -moz-transition: background-color .5s ease;
    -o-transition: background-color .5s ease;
    transition: background-color .5s ease;
    margin-bottom: 20px;
    text-transform: uppercase;
}
.sample-page {
    margin-top: 10px !important;
    margin-bottom: 0px !important;
}
.bbt-btn-login2 {
    width: 140px;
    height: 40px;
    border-radius: 2px;
    background-color: #de0000;
    color: #ffffff;
    font-size: 13px;
    font-weight: bold;
    border: none;
    -webkit-transition: background-color .5s ease;
    -moz-transition: background-color .5s ease;
    -o-transition: background-color .5s ease;
    transition: background-color .5s ease;
    margin-bottom: 20px;
    text-transform: uppercase;
}
#bbpress-forums {
    background: transparent;
    clear: both;
    margin-bottom: -26px !important;
    overflow: hidden;
    font-size: 12px;
}
.panel-default {
    border-color: #ddd !important;
    background:  #e8e8e8 !important;
}
</style>
 
<div>
<div class="col-sm-12">
                
<?php  if ($pay_amount->num_rows()==0) { ?>
    <script type="text/javascript">
        window.location.href='<?= base_url();?>';
    </script>
<?php }  else { 
    $full_data=$pay_amount->row();
        $this->db->select('*');
        $this->db->from('tbl_orders');
        $s = array('order_id'=>$full_data->orderid);
        $this->db->where($s);
        $pay_order=$this->db->get()->row();
    }?>
           
 <!--
  <center> <img src="<?= base_url();?>assets/payment_processing-full.gif"> </center>
  <p style="font-size: 16px;">Please wait we are redirected you in a moment</p>-->
<?php //Set useful variables for paypal form
    //$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; //LIVE PayPal API URL
//$paypal_id = 'drsharma@gmail.com'; //Business Email
$paypal_id = 'fullhomeworkhelp@gmail.com'; //Business Email
//$paypal_id = 'test'; //Business LIVE Email
?>
<form  class="form-horizontal" action="<?php echo $paypal_url; ?>" method="post">
<div class="form-group">
  <div class="panel panel-default">
    <div class="panel-body"><a href="<?= base_url();?>pages/order_step3/<?= $full_data->orderid;?>"><i class="fa fa-caret-left"></i> Back</a></div>
    <hr />
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
<p>Order Id : <?= $full_data->orderid;?></p>
<p><?= $pay_order->subject;?></p>
            </div>
        </div>
        
    </div>


  </div>

<div class="panel panel-default">

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <p>SELECT AN OPTION TO PAY</p>
                <p>Payable Amount is USD $<?= $full_data->pay_advahnce;?></p>
                <p>
<input type="radio" checked="" name="" style="float: left;">
                    <img style="    max-width: 70%;" src="<?= base_url();?>assets/paypal-payment.jpg" class="img-responsive"></p>
            </div>
            <div class="col-sm-6 col-xs-12 text-right">
  <input type="submit" name="submit" class="bbt-btn-login" value="Pay now" style="margin-top: 60px;" />
            </div>
        </div>
        
    </div>

    
  </div>

 
</div>
<!-- Identify your business so that you can collect the payments. --><br>
<input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">
<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="<?= $pay_order->subject;?>">
<input type="hidden" name="item_number" value="<?= $full_data->orderid;?>">
<input type="hidden" name="amount" value="<?= $full_data->pay_advahnce;?>">
<input type="hidden" name="currency_code" value="USD">
<!-- Specify URLs -->
<input type='hidden' name='cancel_return' value='<?= base_url();?>pages/cancel/<?= $this->uri->segment(3);?>'>
<input type='hidden' name='return' value='<?= base_url();?>pages/success/<?= $this->uri->segment(3);?>'>
</form>



                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Sidebar -->
                <div class="col-md-3">
                    <div class="sidebar">
                         
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        #bbpress-forums hr {
    margin: 0 0 0px 0 !important;
}
    </style>
    <!-- End Blog Section -->
</section>