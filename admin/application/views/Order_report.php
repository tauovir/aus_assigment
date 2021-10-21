<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        @media (min-width: 790px) {
            .content-area {
                margin-left: 0px !important;
            }
        }
        
        .list-unstyled li {
            /* border-bottom: 1px solid rgba(167, 180, 201,.3); */
            width: auto !important;
            float: left !important;
        }
        
        #sidebar {
            padding-bottom: 2px !important;
        }
        
        @media (min-width: 790px) {
            footer {
                margin-left: 00px;
            }
        }
        
        .page-title {
            margin-top: 31px;
            /* top: 100px; */
            font-size: 25px;
            font-weight: 600;
            line-height: 1.5rem;
            position: relative;
            border-bottom: 1px solid rgba(167, 180, 201, .3);
            width: 100%;
            margin-bottom: 30px;
            padding-bottom: 13px;
        }
        
        #sidebar {
            min-width: 100%;
            max-width: 100%;
            background: #0d102c;
            box-shadow: 0 0 0 1px rgba(181, 201, 227, .12), 0 8px 16px 0 rgba(181, 201, 227, .24);
            color: #fcfdff !important;
            -webkit-transition: all 0.3s !important;
            -o-transition: all 0.3s !important;
            transition: all 0.3s !important;
            z-index: 10 !important;
            position: absolute !important;
            overflow: auto !important;
            height: auto !important;
        }
    </style>
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }
        
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body>
<div class="mainpanel">
	 
	<div class="contentpanel">		
		<div class="row">



	
			<div class="col-sm-12 col-md-12 ">

				<form method="get" action="<?= base_url();?>pages/Order_report/">
				 <div class="col-sm-5">
				 		<label>Select Date of Order Place</label>
				 		<select name="date" class="form-control">
				 			<option value="">All</option>
				 			<?php 
				 				foreach ($order_date as $date_order) {
				 				
				 			?>
<option value="<?= $date_order->create_date_time ?>" <?php if (isset($_GET['date'])){ if($_GET['date']==$date_order->create_date_time){ echo 'selected';} }?>><?= $date_order->create_date_time ?></option>

				 			<?php }?>

				 		</select>
				 </div>
				 <div class="col-sm-5">
				 		<label>Status</label>
				 		<select name="status" class="form-control">
				 			<option value="">All</option>
<option value="Pending" <?php if (isset($_GET['status'])){ if($_GET['status']=='Pending'){ echo 'selected';} }?> >Pending</option>
<option value="Cancelled" <?php if (isset($_GET['status'])){ if($_GET['status']=='Cancelled'){ echo 'selected';} }?> >Cancelled</option>
<option value="Pending" <?php if (isset($_GET['status'])){ if($_GET['status']=='Delivered'){ echo 'selected';} }?> >Delivered</option>
				 		</select>
				 </div>
				 
				 <div class="col-sm-2">
				 	
				 	<input type="submit"  value="Search" class="btn btn-md btn-success" style="margin-top: 26px;">
				 </div>

				 </form>

			</div><!-- col-sm-12 -->	

 

			<div class="col-sm-12">
				<?php if (isset($_GET['date']) and isset($_GET['status'])) { ?>


					    <div class="table-responsive">

					    	<br />
					    	<input type="button" id="export_excel_button" class="btn btn-success btn-xs pull-right" value="Export To Excel">



                        <script type="text/javascript">
                            $(function() {

                                $("#export_excel_button").click(function() {
                                    $("#export_excel_table").btechco_excelexport({
                                        containerid: " export_excel_table ",
                                        datatype: $datatype.Table
                                    });
                                });

                            });

                            function PrintElem(elem) {
                                var mywindow = window.open('', 'PRINT', 'height=400,width=600');

                                mywindow.document.write('<html><head><title>' + document.title + '</title>');
                                mywindow.document.write('</head><body >');

                                mywindow.document.write(document.getElementById(elem).innerHTML);
                                mywindow.document.write('</body></html>');

                                mywindow.document.close(); // necessary for IE >= 10
                                mywindow.focus(); // necessary for IE >= 10*/

                                mywindow.print();
                                mywindow.close();

                                return true;
                            }

     
                        </script>
					    	<br /><br />

 


						   <table class="table table-hover table-bordered" role="grid" aria-describedby="example2_info" id="export_excel_table">
                                                               <thead  style="    background: #9e2c00eb;
    font-size: 14px;
    color: #fff;">
                            <tr>
                                <th >Sr.No.</th>
                                <th>Name</th>
                                <th>Member ID</th>                                
                                <th>Order ID</th>
                                <th>Total Amount</th>
                                <th>Transection ID</th>
                                <th>Order Date</th>
                                <th>Payment Mode</th>
                                <th>Payment Status</th>
                                <th>Tracking Status</th>
                                <th>Tracking Remark</th>
                                                         
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        	$o_count=1;
                        	$total_a=0.00;
                        	foreach ($order_result as $order) {


			$this->db->select('*');
            $this->db->from('tbl_members');
            $this->db->where('id',$order->id);
            $memdata = $this->db->get()->row();

$total_a=$total_a+$order->total_amount;
                        		
                        ?>
                        	<tr>
                        		<td><?= $o_count;?></td>
                                <td><?= $order->id;?></td>
                                <td><?= $memdata->name;?></td>                               
                                <td><?= $order->order_id;?></td>
                                <td><?= $order->total_amount;?></td>
                                <td><?= $order->transection_id;?></td>
                                <td><?= $order->create_date_time;?></td>
                                <td><?php if ($order->payment_mode==1) {
                                	echo 'Offline Order';
                                } else {
                                	echo 'Online Order';
                                }?></td>
                                <td><?php if($order->order_status==0){ echo 'No Diposit Amount'; } else if($order->order_status==1){ echo 'Amount Received and Confirmed'; } else { echo 'Amount Received and UnConfirmed'; }?></td>
                                <td><?= $order->track_status;?></td>
                                <td><?= $order->cstatus;?></td>
                        	</tr>
                        	<?php 
                        		$o_count++; 
                        	}
                       		?>


                       		<tr>
                       			<td colspan="4" style="background:green; color: #fff;">Total Amount</td>
                       			<td  style="background:green; color: #fff;">Rs. <?= $total_a;?></td>
                       			<td colspan="6"  style="background:green; color: #fff;"></td>
                       		</tr>
                        </tbody>
					</table>
			 
				</div>
				<?php } ?>
			</div>
		</div><!-- row -->  
	</div><!-- contentpanel -->
	<script src="<?= base_url();?>js/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="<?= base_url();?>js/jquery.battatech.excelexport.min.js">
    </script>
    <script type="text/javascript" src="<?= base_url();?>js/customjs.js"></script>
</div>
 </body>

</html>