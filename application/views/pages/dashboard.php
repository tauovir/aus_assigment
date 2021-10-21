<div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-info">
                    <div class="col-md-12 info">
                        <h2>My Orders</h2>
                         <?php if($my_orders->num_rows()>0){ ?>
        <div class="col-sm-12 recent-orders-table" style="max-width: 100%; overflow-x: scroll;">
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Payment</th>
                        <th scope="col" align="center">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($my_orders->result() as $orderlist){

        $this->db->select('*');
        $this->db->from('order_payment');
        $s = array('orderid'=>$orderlist->order_id);
        $this->db->where($s);
        $this->db->order_by('status','DESC');
        $this->db->limit(1);
        $xc=$this->db->get();
        $dalldata=$xc->row();
 
    $this->db->select('*');
    $this->db->from('add_products');
    $this->db->where('id',$orderlist->subject);
    $subxc =$this->db->get();
    $subjetcdata=$subxc->row();
 
if($xc->num_rows()>0){
                     ?>
                        <tr>
                            <td><?= $orderlist->order_id;?></td>
                            <td><?php if($subxc->num_rows()>0){ echo $subjetcdata->title; } ?></td>
                            <td>

 
                                
<?php if($dalldata->status==1){ ?>                          
Paid ($<?= $dalldata->pay_total;?>)
<?php } else { ?>
<form  class="form-horizontal" id="qrcodeRedirectForm" name="qrcodeRedirectForm"   action="https://www.paypal.com/cgi-bin/webscr" method="post" >
 
<input type="hidden" name="business" value="rohitpacheriwal@icloud.com">
 
<input type="hidden" name="cmd" value="_xclick">
<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="<?php if($subxc->num_rows()>0){ echo $subjetcdata->title; }  else { echo "Assignment";}?>">
<input type="hidden" name="item_number" value="<?= $orderlist->order_id;?>">
<input type="hidden" name="amount" value="<?= $dalldata->pay_total;?>">
<input type="hidden" name="currency_code" value="USD">
<!-- Specify URLs -->
<input type='hidden' name='cancel_return' value='<?= base_url();?>cancel/<?= $dalldata->pay_id;?>'>
<input type='hidden' name='return' value='<?= base_url();?>success/<?= $dalldata->pay_id;?>'>
 
 
   <button type="submit" name="submit" class="btn btn-success btn-xs">PAY USD <?php if($xc->num_rows()>0){ echo  $dalldata->pay_total; } else { echo '0'; } ?></button>
 
</form>
<?php  }  ?>

                            </td>



<td align="center">
    <a href="<?= base_url();?>order-details/<?= $orderlist->order_id;?> "  class="btn btn-xs btn-primary"><i class="fa fa-info-circle" aria-hidden="true"></i> View Details</a>    
                            </td>
                        </tr>
                        <?php } }  ?>
                </tbody>
            </table>
        </div>
        <?php } else { ?>
<div class="col-sm-12 text-center">
        <center><img src="<?= base_url();?>assets/not-found.jpg" class="img-responsive"></center>
</div>
            <?php }?>
                    </div>
                </div>                
            </div>
        </div>
    </div>