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

    <div id="loading" style="display: none;"></div>
    <div class="page">
        <div class="page-main">
            <div class="wrapper">
                <!-- Sidebar Holder -->

                <div class=" content-area ">

                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                            <div class="card">

                                <div class="card-body">

                                    <div class="table-responsive">

                                        <input type="button" id="export_excel_button" class="btn btn-success btn-xs" value="Export To Excel">

                                        <button onclick="PrintElem('printableArea')" class="btn btn-success btn-xs">Print</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="printableArea">

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

                                mywindow.document.write('<html><head><title>order_<?php echo $this->uri->segment(3);?></title>');
                                mywindow.document.write('</head><body >');

                                mywindow.document.write(document.getElementById(elem).innerHTML);
                                mywindow.document.write('</body></html>');

                                mywindow.document.close(); // necessary for IE >= 10
                                mywindow.focus(); // necessary for IE >= 10*/

                                mywindow.print();
                                mywindow.close();

                                return true;
                            }

                            /*
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

      document.body.innerHTML = originalContents;
}

*/
                        </script>

                        <style>
                            table,
                            td,
                            th {
                                border: 1px solid black;
                                padding: 5px;
                            }
                            
                            table {
                                border-collapse: collapse;
                                border-spacing: 0px;
                                width: 100%;
                            }
                        </style>

                        <style>
                            .table-bordered th,
                            .text-wrap table th,
                            .table-bordered td,
                            .text-wrap table td {
                                border: 1px solid rgba(167, 180, 201, .3);
                                font-weight: 700 !important;
                                font-size: 14px;
                            }
                        </style>

                        <div class="col-12">
                            <style type="text/css">
                                .error {
                                    color: red;
                                    padding: 5px;
                                }
                            </style>

                            <form action="http://ccsucctv.co.in/Pages/aad_college/insert" method="post" accept-charset="utf-8">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                                <div class="row">

                                                    <div class="row">
                                                        <div class="col-sm-12">

                                                            <table class="table table-hover table-bordered" role="grid" aria-describedby="example2_info" id="export_excel_table">
                                                               <thead>
                    <tr>
                      <th>#</th>
                      <th>Name </th>
                      <th>Payment Status </th>
                      <th>Order ID</th>
                      <th>T. Amount </th>
                      <th>Payment Mode</th>
                      <th>Date</th>
                      <th>Status</th>
                   
                    </tr>
                  </thead>
                  <tbody>
<?php 
    $totalamt=0.00;
    $count =1;
    if($my_myorder->num_rows()>0) {
       
    foreach ($my_myorder->result() as $order_result) {
     $totalamt=$totalamt+$order_result->total_amount;

            $this->db->select('*');
            $this->db->from('tbl_members');
            $this->db->where('id',$order_result->id);
            $memdata = $this->db->get()->row();
        


?>
                    <tr>
                      <td><?php echo $count;?></td>
                      <td><?=  $memdata->name;?>
                         

                      </td>

                      <td> 
                        
<?php if($order_result->pyaslip==''){ ?>
Payment Not Deposit
<?php } ?>
<?php if($order_result->pyaslip!='' and $order_result->userid==''){ ?>
Payment Deposit Not Verify
<?php } ?>

<?php if($order_result->pyaslip!='' and $order_result->userid!=''){ ?>
Payment Received & verify
<?php } ?>

                      </td>



                      <td><?=  $order_result->order_id;?>
                        
                      <?php if($order_result->order_status==3){ ?>
                          <label class="label label-danger">Decline by <?= $order_result->userid ?></label>
                      <?php }?>

                      </td>
                      <td><?=  $order_result->total_amount;?> </td>
                      <td>       
                        <?php 

                      if($order_result->payment_mode==1){  ?> 

                   Offline Pay


                    <?php } else { ?> 

                        Online Pay 


                    <?php } ?> </td>
                      <td><?=  $order_result->create_date_time;?>
                        

 


                      </td>
                      <td><?php 

                      if($order_result->order_status==0){ 
                        
                        echo 'InActive'; 

                      } else {
                        
                        echo 'Active';
                      
                      } ?></td>

                      
                    </tr>
<?php 
  $count++; 
}
}

?>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td>Total</td>
  <td><?= $totalamt=$totalamt;?></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
                  </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- End Footer-->
    </div>

  <script src="<?= base_url();?>js/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="<?= base_url();?>js/jquery.battatech.excelexport.min.js">
    </script>
    <script type="text/javascript" src="<?= base_url();?>js/customjs.js"></script>

</body>

</html>