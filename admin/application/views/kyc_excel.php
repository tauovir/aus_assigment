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
                                <th>Name</th>
                                <th>Member ID</th>                                
                                <th>Create Date</th>
                                <th>Wallet Balance (Rs.)</th>
                                <th>Sponsor ID</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>KYC Status</th>
                                                         
                            </tr>
                        </thead>
                        <tbody>
                        
<?php foreach($all_kyc as $all){ 
         
             
            $this->db->select('*');
            $this->db->from('tbl_members');
            $this->db->where('id',$all->id);
 
            $memdata = $this->db->get()->row();
        

            $this->db->select('*');
            $this->db->from('tbl_income_reports');
            $this->db->where('income_to', $all->id);
            $inco_vali = $this->db->get();
            $wall_first=0.00;
            if ($inco_vali->num_rows()>0) {
                foreach ($inco_vali->result() as $wall_data) {
                    $wall_first=$wall_first+$wall_data->amount;
                }
            }  



            $this->db->select('*');
            $this->db->from('tbl_widthdraws');
            $this->db->where('requested_by', $all->id);
            $this->db->where('status',1);
            $inco_vali2 = $this->db->get();
            $wall_first2=0.00;
            if ($inco_vali2->num_rows()>0) {
                foreach ($inco_vali2->result() as $wall_data2) {
                    $wall_first2=$wall_first2+$wall_data2->amount;
                }
            } 

    ?>

                            <tr>
                                <td>1</td>
                                <td><?php echo $memdata->name;?></td>
                                <td><?php echo $all->id; ?> </td>                              
                                <td><?php echo $all->create_date; ?></td>
                                <td><i class="fa fa-inr"></i><?php echo $wall_first-$wall_first2;?> </td>
                                <td><?php echo $memdata->sponsor_id;?></td>

                                <td><?php echo $memdata->email;?></td>
                                <td><?php echo $memdata->mobile;?></td>
                                <td><?php echo $memdata->address;?></td>

                                <td>
<?php if($all->final_submit==0){ ?>
<span class="label label-warning">
Un Uploaded

<?php } else if($all->final_submit==1){ ?>
<span class="label label-danger">
InActive

<?php } else { ?>
    <span class="label label-success">

Active

<?php }?> 
                            </span></td>
                                
                            </tr>

<?php 
 
} ?>



                        </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                           
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