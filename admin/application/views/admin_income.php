<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-home"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Admin Dashboard</li>
				</ul>
				<h4>Admin Income</h4>

				 
			</div>

		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
	

		   <div class="row">
           

          <div class="col-sm-12 col-md-12 ">
 
                <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="table-responsive">
                     <table id="example" class="table table-striped table-bordered " style="width:100%">
                  <thead>
                    <tr>
                     
                      <th>Income By</th>
                      <th>Name</th>
                     
                      <th>Inc. Amt. </th>
                      <th>Date</th>
               
                    </tr>
                  </thead>
                  <tbody>

            <?php 

            $wallet=0.00;
            $wallet2=0.00;
            $count =1;
           if ($income->num_rows()>0) {
               foreach ($income->result() as $user_income) { 
                $wallet2=$wallet2+$user_income->amount;


 
  $wallet=$wallet+$user_income->amount;


        $this->db->select('*');
        $this->db->from('tbl_members');
        $smi = array('id'=>$user_income->income_by);
        $this->db->where($smi);
        $querymi=$this->db->get()->row();


                ?>
                <tr>
                      
                      <td><?=  $user_income->income_by?></td>  
                      <td><?=  $querymi->name?></td>  
                      
                      <td><i class="fa fa-inr"></i><?=  $user_income->amount?> </td>
                      <td><?=   date("d-m-Y", strtotime($user_income->create_date));?>
                  </td>
                      
                </tr>


          <?php
             $count++; } ?>

            


             

        <?php }  ?>
 
 
                  </tbody>
                  <tfoot>
                    <tr>
                <td style="background: green; color: #fff;"></td>
                <td style="background: green; color: #fff;"></td>
                <td style="background: green; color: #fff;">Grand Total</td>
                <td style="background: green; color: #fff;"><i class="fa fa-inr"></i><?= $wallet2;?></td>
            </tr>
                  </tfoot>
              </table>
            </div>
 
</div></div></div>

           



            <!-- col-sm-12 -->
        </div>
        
	</div><!-- contentpanel -->
</div><!-- mainpanel -->