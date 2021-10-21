<!-- Start Breadcrumb ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url();?>assets/setting/<?= $about_img->image;?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-top: 50px;">Want To Get Assistance From World’s No.1 Assignment Writing Service?</h2>
                    <p>Consult Our Highly-Qualified And Experienced Writers To Attain Academic Excellence</p>

                </div>
                  </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
<div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-info">
                    <div class="col-md-12 info">
                

                       <h2 title="My Wallet">My Wallet </h2>

                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info" style="margin-top: 20px;">
                             
                                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Description</th>
                        <th scope="col" align="center">Type</th>
                        <th scope="col">Amount</th>
                        
                    </tr>
                </thead> 
                <tbody>

                    <?php 
                    $dr=0.00;
                    $cr=0.00;
                    $cty=1;
                    foreach($all_income->result() as $orderlist){
                        if ($orderlist->payment_dr_cr=='cr') {
                            $cr=$cr+$orderlist->amount;
                        } else {
                            $dr=$dr+$orderlist->amount;
                        }
                     ?>
                        <tr>
                            <td><?= $cty;?></td>
                            <td><?= $orderlist->payment_reason;?></td>
                            <td><?= $orderlist->payment_dr_cr;?></td>
                            <td>$<?= $orderlist->amount;?>  
                            </td>
                        </tr>
                        <?php  $cty++;} ?>
                        <tfoot>
                            <tr>
                                <th>Total</th>
                                <th>Total Dr. <span>$<?= $dr;?></span> </th>
                                <th>Total Cr. <span>$<?= $cr;?></span>  </th>
                                <th>Wallet Amount  <span>$<?= $cr-$dr;?></span> </th>
                            </tr>
                        </tfoot>
                       
                </tbody>
            </table>
                                
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- Start Sidebar -->
                
                <!-- End Sidebar -->
            </div>
        </div>
    </div> 