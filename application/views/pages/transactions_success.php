<div id="bbp-user-body">
<h2 class="entry-title">My Transaction</h2>
<?php echo $this->session->flashdata('success');?>
<fieldset class="bbp-form">
<legend>My Transaction</legend>
<div class="col-sm-12" style="max-width: 100%; overflow-x: scroll;">                                               
    <table id="datatable" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
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
</table>
</div>
</fieldset>
 
</div>
                            