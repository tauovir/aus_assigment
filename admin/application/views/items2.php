    <link rel="stylesheet" href="<?php echo base_url();?>../assets/hierarchy-view.css">
    <link rel="stylesheet" href="<?php echo base_url();?>../assets/main.css">
 
 <style type="text/css">
   .mainwrapper {
    position: relative;
    top: 0px !important;
}

a {
    color: #ffffff !important;
    text-decoration: none;
}
 </style>
<div class="mainpanel">
  <div class="pageheader">
    <div class="media">
      <div class="pageicon pull-left">
        <i class="fa fa-user"></i>
      </div>
      <div class="media-body">
        <ul class="breadcrumb">
          <li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
          <li><a href="<?php echo base_url();?>" style="color: #666 !important;">Dashboard</a></li>
          <li>Tree</li>
        </ul>
        <h4><a href="<?php echo base_url();?>pages/tree"style="color: #666 !important;">Tree</a></h4>
      </div>
    </div><!-- media -->
  </div><!-- pageheader -->
  
  <div class="contentpanel">  
  <div class="panel panel-default">
    

         <section class="management-hierarchy">
       
        <div class="hv-container">
            <div class="hv-wrapper">

                <!-- Key component -->
                <div class="hv-item">

                    <div class="hv-item-parent">
                        <div class="person">
<img src="<?= base_url();?>../member/uploads/profilepic/thumb/<?= $member_profile->profilepic;?>" data-toggle="modal" data-target="#memberDetails"  onclick="getProfile(<?= $member_profile->id;?>);" style="cursor: pointer;" alt=""> 
                            <p class="name">
                                Name : <?= $member_profile->name;?><br />
                                Member ID : <?= $member_profile->id;?>
                            </p>
                        </div>
                    </div>
 
                    <div class="hv-item-children">


<?php 
if ($chield_profile->num_rows()>0) {
 
foreach($chield_profile->result() as $profile){ ?>
                        <div class="hv-item-child">
                            <!-- Key component -->
                            <div class="hv-item">

                                <div class="hv-item-parent">
                                    <div class="person">
<img src="<?= base_url();?>../member/uploads/profilepic/thumb/<?= $profile->profilepic;?>"  data-toggle="modal" data-target="#memberDetails"  onclick="getProfile(<?= $profile->id;?>);" style="cursor: pointer;" alt="">
                                        <p class="name">
                                             
<a href="<?= base_url();?>pages/tree/<?= $profile->id;?>">  
                                              Name : <?= $profile->name;?><br />
                                              Member ID : <?= $profile->id;?>
</a>
                                        </p>
                                    </div>
                                </div>

                                

<?php 
    $this->db->select('*');
    $this->db->from('tbl_members');
    $this->db->where('sponsor_id',$profile->id);
    $chield_id = $this->db->get();

    if($chield_id->num_rows()>0){
?>
                             



                                <div class="hv-item-children">

                                   
                        <?php foreach($chield_id->result() as $profile_client){ ?>

                                    <div class="hv-item-child">
                                        <div class="person">

<img src="<?= base_url();?>../member/uploads/profilepic/thumb/<?= $profile_client->profilepic;?>"  data-toggle="modal" data-target="#memberDetails"  onclick="getProfile(<?= $profile_client->id;?>);" style="cursor: pointer;" alt="">
                                            <p class="name">
                                             <a href="<?= base_url();?>pages/tree/<?= $profile_client->id;?>">  
                                              Name : <?= $profile_client->name;?><br />
                                              Member ID : <?= $profile_client->id;?>
                                            </a>
                                            </p>
                                        </div>
                                    </div>
                        <?php } ?>
 



                                </div>

<?php } ?>









                            </div>
                        </div>
<?php } 
 # code...
}

?>

                         








                    </div>

                </div>

            </div>
        </div>
    </section>
    

    </div>
  </div>
</div>
  
 <script>
function getProfile(str){
  $('.membertitle').text(str);
  $.ajax({
    type: "POST",
    url: '<?php echo base_url();?>pages/getProdile/'+str,
    data: "id="+str,
    success: function(data) {
         
          $('#model_body').html(data);
     }

   });
}

</script>
 
<div  id="memberDetails" class="modal fade" role="dialog" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <a href="" type="button" class="close" data-dismiss="modal">&times;</a>
        <h4 class="modal-title" > Profile Details Of <span class="membertitle"></span></h4>
      </div>
      <div class="modal-body" id="model_body" style="overflow: scroll; max-height: 400px;">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
       
         <a href="" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
      </div>
    </div>

  </div>
</div>