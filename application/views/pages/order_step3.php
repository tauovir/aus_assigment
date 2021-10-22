<?php 
    $this->db->select('*');
    $this->db->from('add_products');
    $this->db->where('id',$order_data->subject);
    $subjetcdata=$this->db->get()->row();
 
    $this->db->select('*');
    $this->db->from('assignment_urgency');
    $this->db->where('id',$order_data->deadline);
    $urgency_price=$this->db->get()->row();


    $this->db->select('*');
    $this->db->from('urgency');
    $this->db->where('id',$urgency_price->urgency_id);
    $urgency_value=$this->db->get()->row();

    $this->db->select('*');
    $this->db->from('level_study');
    $this->db->where('id',$order_data->study_level);
    $study_level=$this->db->get()->row();

    $this->db->select('*');
    $this->db->from('ref_styl_siisgnment');
    $this->db->where('id',$order_data->assi_referencce);
    $ref_style=$this->db->get()->row();

       $basicprice = $urgency_price->urgency_amt*$order_data->pages;
       $totalamt = $study_level->price+$basicprice;

 if (isset($_SESSION['coupon']['code'])) {
    $this->db->select('*');
    $this->db->from('tbl_offer');
    $this->db->where('coupon_code',$_SESSION['coupon']['code']);
    $this->db->where('offer_status=1');
    $set = $this->db->get()->row();
    $discount=$set->offinpercent;
 } else {
    $discount=0.00;
 }
?>
 

<div id="login-area" class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">GUARANTEED HIGHER GRADE OR GET YOUR MONEY BACK!</h3>
                    <h4 class="text-center">GET HELP INSTANTLY</h4>
<form action="<?= base_url();?>order-step3/<?= $this->uri->segment(2);?>/confirm" method="post" enctype="multipart/form-data" class="white-popup-block">
<input type="hidden" name="totalamount" value="<?= $totalamt;?>">
<div class="col-md-7 login-custom">
  <div id="pricing" class="pricing-area">
     
                <div class="pricing pricing-simple text-center">
 <?php if(isset($_SESSION['coupon']['code'])){ ?>

<?php /* if($subjetcdata->advanceamt>0 or $subjetcdata->advanceamt<100){ ?>

                    <div class="col-md-6 equal-height">
                        <div class="pricing-item">
                            <ul>
                                <li class="pricing-header">
                                    <h4>Advance <?=$subjetcdata->advanceamt;?>%</h4>
                                    <h2><sup>$</sup>
              <?php $advance2 =  $totalamt*$subjetcdata->advanceamt/100;
                    echo $advance=round($advance2-$advance2*$discount/100,2);
              ?> </h2>

                                    <p>Due amount $<?= $totalamt-$totalamt*$discount/100-$advance;?></p>
                                </li>
                                <li class="text-center">
  
            <label class="btn btn-primary"> 
              <input type="radio"  name="pay_payment" id="advance_amt" checked="" value="1">
              <span class="frb-title">Advance</span>
            </label>
         </li>
                                
                            </ul>


                        </div>
                    </div>
<?php } */ ?>



                    <div class="col-md-12 equal-height">
                        <div class="pricing-item">
                            <ul>
                                <li class="pricing-header"  for="full-amt">
                                
                                    <h4>Order Payment 100%</h4>
                                    <h2><sup>$</sup><?=  $totalamt-$totalamt*$discount/100;?> </h2>
                                  
                                </li>
                               
                                
                            </ul>
                        </div>
                    </div>
 <?php  } else { ?> 


<?php  /* if($subjetcdata->advanceamt>0 or $subjetcdata->advanceamt<100){ ?>

                    <div class="col-md-6 equal-height">
                        <div class="pricing-item">
                            <ul>
                                <li class="pricing-header">
                                    <h4>Advance <?=$subjetcdata->advanceamt;?>%</h4>
                                    <h2><sup>$</sup><?php echo $advance =  $totalamt*$subjetcdata->advanceamt/100;?> </h2>

                                    <p>Due amount $<?= $totalamt-$advance;?></p>
                                </li>
                                <li class="text-center">
  
            <label class="btn btn-primary"> 
              <input type="radio"  name="pay_payment" id="advance_amt" checked="" value="1">
              <span class="frb-title">Advance</span>
            </label>
         </li>
                                
                            </ul>


                        </div>
                    </div>
<?php }  */ ?>



                    <div class="col-md-12 equal-height">
                        <div class="pricing-item">
                            <ul>
                                <li class="pricing-header"  for="full-amt">
                                
                                    <h4>Order Payment 100%</h4>
                                    <h2><sup>$</sup><?=  $totalamt;?> USD</h2>
                                    
                                </li>
                              
                                
                            </ul>
                        </div>
                    </div>
<?php } ?>











 <div class="col-md-12 equal-height">
     <?php if($order_data->assi_desrip_file!=''){ ?>
        <div class="col-md-12">
              <a href="<?= base_url();?>assets/setting/<?= $order_data->assi_desrip_file;?>" target="_blank" class="btn btn-danger pull-left">View your uploaded file</a>
        </div>
<?php } ?>
    <div class="row">



        <div class="col-md-12 text-left">
          <br />
          <div class="col-md-12"  style="    max-height: 300px;
    overflow: scroll;">
              
              
              <h4>Description</h4>
              <p class="text-justify"><?php echo $order_data->assi_desrip;?></p>
        </div>
          
        </div>
    </div>
 </div>
      </div>
    </div>
</div>
<div class="col-md-5">

    <div class="div-shadow-background text-center div-shadow">
        <h4 class="shadow-heading">Order Summary</h4>
      <div class="table-responsive">
          <table class="table table-bordered text-left order-summary-data">
              <tbody>
                <tr>
                  <td colspan="2"><?= $subjetcdata->title;?></td>
                </tr>
                <tr>
                  <th>Urgency</th>
                  <td><?= $urgency_value->name;?></td>
                </tr>
                <tr>
                  <th>Pages</th>
                  <td><?= $order_data->pages;?> Pages / <?= $order_data->pages*250;?> Words</td>
                </tr>
                <tr>
                  <th>Basic Price</th>
                  <td>$<?= $basicprice;?> USD</td>
                </tr>
                <tr>
                  <th>Level of Study</th>
                  <td><?= $study_level->name?></td>
                </tr>
                <tr>
                  <th>Style of Assignment</th>
                  <td><?=  $ref_style->name?></td>
                </tr>
                
                <tr>
                  <th>Level of Study Price</th>
                  <td>$<?= $study_level->price?> USD</td>
                </tr>
                <tr>
                  <th>Total</th>
                  <td>
                   <?php if(isset($_SESSION['coupon']['code'])){ ?> 

                    $<del><?= $totalamts = $basicprice+$study_level->price;?></del>
 
                      <sup><?= $discount?>% Off</sup>

                      <span class="text-white">$<?php echo $totalex= $totalamts-$totalamts*$discount/100;?></span>
                    <?php } else { ?>
                        $<?= $totalex= $basicprice+$study_level->price;?> USD
                    <?php } ?> 
                    <input type="hidden" value="<?=$basicprice+$study_level->price?>" name="totalamountofassignment">
                    </td>
                </tr>
                <tr>
                  <th>Have a coupon
               
                  </th>
                  <td>
<input type="text" class="form-control" value="<?php if(isset($_SESSION['coupon']['code'])){ echo $_SESSION['coupon']['code'];}?>" name="couponcode" id="couponcode">
<a href="javascript:void();" onclick="checkcoupan()">Apply coupon</a>


                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                      <label class="btn btn-warning btn-xs">
                         <input type="checkbox" name="walletamount" value="<?=$totalwallet;?>">  $ <?=$totalwallet;?> USD , Do you use your wallet amount

                      </label>
                  </td>
                </tr>
              </tbody>
          </table>

          <p id="coupon_alert">
            <input type="hidden" name="discountpercent" value="<?= $discount;?>">
            <?php if(isset($_SESSION['coupon']['code'])){
            echo "<p class='alert alert-success'>Coupon code applied! You get a ".$discount."% off  </p>"; }  ?>
          </p>
<button type="submit" name="submit" id="submit" class="btn btn-danger">
  Confirm Order
</button>
     </div>
    </div>
</div>  
</form>
<script type="text/javascript">
  function checkcoupan() {
     var couponcode = $('#couponcode').val();
     $.ajax({
      url: '<?php echo base_url();?>pages/coupancode/'+couponcode,
      type: 'POST',
      data: {str: couponcode},
      error: function() {
        $('#coupon_alert').html(0);
      },
      success: function(data) {
        $('#coupon_alert').html(data);
      }
    });
  }
</script>

                </div>

            </div>
            

    </div>
</div>