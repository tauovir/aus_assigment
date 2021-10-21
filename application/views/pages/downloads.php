<div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-info">
                    <div class="col-md-12 info">
                        <h2>My Downloads</h2>

        <div class="col-sm-12 recent-orders-table" style="max-width: 100%; overflow-x: scroll;">
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col" style="width:2%;">Order ID</th>
                        <th scope="col" style="width:10%;">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col"  style="width:10%;">Download</th>
                    </tr>
                </thead>
                <tbody>
                       <?php 
                        $count=0;
                       foreach($my_myorder->result() as $orderlist){ 
                        $this->db->select('*');
                        $this->db->from('order_payment');
                        $this->db->where('orderid',$orderlist->order_id);
                        $this->db->where('status=1');
                        $this->db->order_by('status','DESC');
                        $xc=$this->db->get();
                  foreach($xc->result() as $donwfile){ 
                      
                      if($donwfile->assignment_file!=''){ 
                          $count++;
                       ?>
                       
                                <tr>
                                   <td><?= $donwfile->orderid;?></td>
                                    <td><?= $donwfile->assignment_title;?></td>
                                    <td>
                                      <div style="max-height: 200px; overflow: scroll; padding:20px;">
                                      <?= $donwfile->content;?>
                                      </div>
                                    </td>
                                    <td>
                                        <a href="<?= base_url();?>assets/<?= $donwfile->assignment_file;?>" class="btn btn-info btn-sm" target="_blank">Download Link</a>
                                    </td>
                                </tr>
                       <?php } 
                  }
                       
                       } ?>
              
                </tbody>
            </table>
        </div>
       
                    </div>
                </div>                
            </div>
        </div>
    </div>