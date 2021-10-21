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

                        <div class="col-sm-5">
                          
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
                <div class="col-md-9">

                    <div class="bbp_separator">
                        
                         
                    </div>

                    <div id="bbpress-forums">

                        <div id="bbp-user-wrapper">

                            <div id="bbp-single-user-details">
                                <div id="bbp-user-avatar">

                                     

                                </div>
                                <!-- #author-avatar -->

                                <div id="bbp-user-navigation">
                                   
                                </div>
                                <!-- #bbp-user-navigation -->
                            </div>
                            <!-- #bbp-single-user-details -->
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
</style>
 
<div id="bbp-user-body">
<div class="col-sm-12 text-center">
                
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
$paypal_id = 'sachinchaudhary1008@gmail.com'; //Business Email
//$paypal_id = 'test'; //Business LIVE Email
?>
<form  class="form-horizontal" action="<?php echo $paypal_url; ?>" method="post">
<div class="form-group">
<div class="aab controls col-md-3 "></div>
<div class="controls col-md-9 ">

    <table class="table table-responsive">
                    <tr>
                        <td class="p-head">
                         
               <i class="fa fa-credit-card" aria-hidden="true"></i> Card payments
            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="    font-size: 21px;
    font-weight: 600;
    color: #000;">
                               Your Cart Amount : $<?= $full_data->pay_advahnce;?>
                            </h4>

                            <div style="margin-top: 40px;">
               <input type="submit" name="submit" class="bbt-btn-login" value="Pay now" />
                                  

                                  <a href="<?= base_url();?>" class="bbt-btn-login">
<button class="bbt-btn-login2" type="button">
    Cancel
</button>
                                  

                              </a>
                            </div>
                        </td>
                    </tr>

                    
                    
                </table>



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
<input type="hidden" name="currency_code" value="INR">
<!-- Specify URLs -->
<input type='hidden' name='cancel_return' value='http://localhost/websites/full-home-04-12-2019/pages/cancel'>
<input type='hidden' name='return' value='http://localhost/websites/full-home-04-12-2019/pages/success'>
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
    <!-- End Blog Section -->
</section>