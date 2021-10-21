 
    <!-- Main Content -->
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
 <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<section>
    <div class="container">
        <div class="row">
            
            
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper" style="max-width: 100%; overflow-x: scroll;">
                        <table id="datatable" class="table  table-responsive table-striped table-bordered" cellspacing="0" style="width: 97.5%;">
                    <thead>
                        <tr>
                            <th>Ticket ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Assignment</th>
                            <th>Details</th>
                           
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Ticket ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Assignment</th>
                            <th>Details</th>

                            
                        </tr>
                    </tfoot>

                    <tbody>

                    <?php foreach($allquery->result() as $alldata){

        $this->db->select('*');
        $this->db->from('add_products');
        $s = array('id'=>$alldata->productid);
        $this->db->where($s);
        $for_count=$this->db->get();
        $assigmnet_data=$for_count->row();


                     ?>    
                        <tr>
                            <td>#<?= $alldata->ticket_id;?></td>
                            <td><?= $alldata->qtitle;?></td>
                            <td><?= $alldata->create_date;?></td>
                            <td>
<a target="_blank" href="<?= base_url();?>pages/assignment/<?php echo str_replace(array('(',')', ' ', "'", '/','\/', ' /[^a-zA-Z0-9_ %\ [\]\.\(\)%&-]/s') ,'-',$assigmnet_data->title); ?>/<?= $alldata->productid;?>">
                                    <?= $assigmnet_data->title;?>
                                </a>
                                </td>
                                <td align="center">
                                    <a href="<?= base_url();?>pages/enquiry/<?= $alldata->productid;?>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                </td>
                             
                        </tr>
                        <?php } ?>
                            
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
              
    </div>
</section>
 
<script type="text/javascript">
    $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

</script>