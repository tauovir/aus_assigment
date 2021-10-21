<?php 
        $this->db->select('*');
        $this->db->from('order_payment');
        $s = array('pay_id'=>$_SESSION['pay']['id']);
        $this->db->where($s);
        $pay_amount=$this->db->get()->row();
        
        
        
        $full_data=$pay_amount;
        $this->db->select('*');
        $this->db->from('tbl_orders');
        $s = array('order_id'=>$pay_amount->orderid);
        $this->db->where($s);
        $order_data=$this->db->get()->row();
if ($order_data->couponcode!='') {
   $_SESSION['coupon']['code']=$order_data->couponcode;
}

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







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $webconfig->site_name;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                   <tr>
                        <td align="center" bgcolor="#fff" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                           
                            
                            <a href="<?= base_url();?>"><img  align="middle"alt="" src="<?= base_url();?>assets/setting/<?= $webconfig->company_logo;?>" width="220" width="250" height="80" style="display: block;" class="Image"></a>
                            <hr>
                        </td>
                        
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px; text-align: center;">
                                        <b>Welcome To Australia Assignment Help</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #000; font-family: Arial, sans-serif; font-size: 20px;padding-top: 50px;">
                                        <b>Dear User Here is Your Order Details</b>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                            <td style="padding: 25px 70px 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                <p style="padding:0px;margin: 0px;"><strong>Order Id:-</strong> <?=$order_data->order_id;?></p>
                                                                

                                                            </td>
                                                            <td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                <p style="padding:0px;margin: 0px;"><strong>Order
                                                                Date:-</strong><?=$order_data->order_date;?></p>
                                                              
                                                            </td>

                                                        </tr>
                                                    </table>
                                                    <table>
                                                        <tr>
                                                            
                                                            <td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                <p style="padding:0px;margin: 0px;"><strong>Subject:-</strong><?=$subjetcdata->title;?></p>
                                                              
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table>
                                                        <tr>
                                                            
                                                            <td style="padding: 25px 115px 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                <p style="padding:0px;margin: 0px;"><strong>Urgency:-</strong><?=$urgency_value->name;?></p>
                                                              
                                                            </td>
                                                            <td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                <p style="padding:0px;margin: 0px;"><strong>Payment:-</strong>
<?php if(isset($_SESSION['coupon']['code'])){ ?> 
    <del><?= $totalamts = $basicprice+$study_level->price;?></del><sup><?= $discount?>% Off</sup>

                      <span class="text-white"><?php echo $totalex= $totalamts-$totalamts*$discount/100;?></span>
                    <?php } else { ?>
                        $<?= $totalex= $basicprice+$study_level->price;?>
                    <?php } ?> USD</p>
                                                              
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table>
                                                        <tr>
                                                            
                                                            <td style="padding: 25px 70px 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
<p style="padding:0px;margin: 0px;"><strong>Payment Status:-</strong>Paid</p>
                                                              
                                                            </td>
                                                            
                                                           
                                                        </tr>
                                                    </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#448797" style="padding: 30px 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;text-align: center" width="100%">
                                        <p>You're receiving this e-mail because you're signed up to <a href="">Australialegalassignmenthelp.com</a></p>
                                        <p>©2020 Australialegalassignmenthelp.com - All Rights Reserved.</p>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td align="center" width="100%">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
<a href="<?php echo $webconfig->twitter;?>" style="color: #ffffff;">
                                                        <img src="" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
                                                    </a>
                                                </td>
                                                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
<a href="<?php echo $webconfig->facebook;?>" style="color: #ffffff;"><img src="" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>