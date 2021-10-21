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

				<form method="get" action="<?= base_url();?>pages/fund_transfer_report/">

				<div class="col-sm-2">
				</div>	
				 <div class="col-sm-5">
				 		<label>Enter Wallet Amount </label>
				 		<input type="text" name="amount" class="form-control" value="<?php if(isset($_GET['amount'])){ echo $_GET['amount'];}?>"> 
				 </div>
				  
				 
				 <div class="col-sm-2">
				 	
				 	<input type="submit"  value="Search" class="btn btn-md btn-success" style="margin-top: 26px;">
				 </div>

				 </form>

			</div><!-- col-sm-12 -->	

 

			<div class="col-sm-12">
			 
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
                                                       <thead   style="    background: #9e2c00eb;
    font-size: 14px;
    color: #fff;">
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Member ID (User Id)</th>								
						 
								<th>Transfer Fund (Rs.)</th>
								<th>Wallet (Rs.)</th>

								<th>Account Number</th>
								<th>IFSC</th>
								<th>Branch</th>
								<th>Account Holder Name</th>
								 

								 
							</tr>
						</thead>
						<tbody>
						<?php

if (isset($_GET['amount'])) {
	$amount=$_GET['amount'];
} else {
	$amount=0;
}


						$counts=1;

						$totalsss=0.00;
							foreach($all_members->result() as $all_member_result){

			$this->db->select('*');
			$this->db->from('tbl_income_reports');
			$this->db->where('income_to', $all_member_result->id);
        	$inco_vali = $this->db->get();
        	$wall_first=0.00;
        	if ($inco_vali->num_rows()>0) {
        		foreach ($inco_vali->result() as $wall_data) {
        			$wall_first=$wall_first+$wall_data->amount;
        		}
        	}  



        	$this->db->select('*');
			$this->db->from('tbl_widthdraws');
			$this->db->where('requested_by', $all_member_result->id);
			$this->db->where('status',1);
        	$inco_vali2 = $this->db->get();
        	$wall_first2=0.00;
        	if ($inco_vali2->num_rows()>0) {
        		foreach ($inco_vali2->result() as $wall_data2) {
        			$wall_first2=$wall_first2+$wall_data2->amount;
        		}
        	}  
  		

  		$this->db->select('*');
        $this->db->from('tbl_bank_details');
        $s234b = array('id'=>$all_member_result->id);
        $this->db->where($s234b);
        $bank=$this->db->get();
        $bank_row = $bank->row();




$finela = $wall_first-$wall_first2;


if($finela>=$amount){
$totalsss=$totalsss+$finela;
						?>	
							
							<tr>
								<td><?php echo $counts; ?></td>
								<td><?php echo $all_member_result->name;?></td>
								<td><?php echo $all_member_result->id;?>   </td>								
								
								<td><?php echo $wall_first2;?>  </td>
    							<td><?php echo $finela;?> </td>


    							<td><?php echo $bank_row->account_number;?> </td>
    							<td><?php echo $bank_row->ifsc_code;?> </td>
    							<td><?php echo $bank_row->name;?> </td>
    							<td><?php echo $bank_row->account_holder_name;?> </td>
								 
							</tr>




							
						<?php $counts++; }}  ?>
							
							<tr>
                       			<td colspan="4" style="background:green; color: #fff;">Total Amount</td>
                       			<td  style="background:green; color: #fff;">Rs. <?= $totalsss;?></td>
                       			<td colspan="6"  style="background:green; color: #fff;"></td>
                       		</tr>	
						</tbody>
					</table>
			 
				</div>
			 
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