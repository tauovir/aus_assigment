  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
  
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
 
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
        <h4><a href="<?php echo base_url();?>pages/binary_tree"style="color: #666 !important;">Tree</a></h4>
      </div>
    </div><!-- media -->
  </div><!-- pageheader -->
  
  <div class="contentpanel">  
  <div class="panel panel-default">
     
    <div class="panel-body">
      <div class="col-md-12" id="treeview_json">
      </div>

       <?php if ($chk=='') {
        # code...
      } else {

        echo $chk; ?>
 <a href="<?= base_url();?>pages/binary_tree" class='btn btn-xs btn-success'>View Full Tree</a>
<style type="text/css">
.myClass {
           font-family: verdana; 
           font-size: 16px; 
           font-weight: normal;  
           color: black;
           line-height: 30px;
         }
</style>

<script type="text/javascript">

 (function () {
  var timeLeft = 15,
  cinterval;

  var timeDec = function (){
  timeLeft--;
  document.getElementById('countdown').innerHTML = timeLeft;
  if(timeLeft === 0){
  clearInterval(cinterval);
  window.location.href='<?= base_url();?>pages/binary_tree';
    }
};

cinterval = setInterval(timeDec, 1000);
})();

</script>
<br />
<h4 style="color: darkorange;">You may redirecting in <span id="countdown" style="color: red;">10</span> seconds.</h4>
<br>


        <?php
      } ?>
    </div>
  </div>
</div>
  
  </div>




<script type="text/javascript">
$(document).ready(function(){
  
   var treeData;
   
   $.ajax({
        type: "GET",  
        url: "<?php echo base_url();?>pages/getItem/<?= $this->uri->segment(3);?>",
        dataType: "json",       
        success: function(response)  
        {
           initTree(response)
        }   
  });
    
  function initTree(treeData) {
    $('#treeview_json').treeview({data: treeData});
  }
   
});
 
function getDepth(argument) {
  window.location.href='<?= base_url()?>pages/binary_tree/'+argument;
}


</script>

<script>
function getProfile(str){

  $('.membertitle').text(str);
  //$('#model_head').text('Profile Id : '+str);
  $('#memberDetails').attr('class','modal fade in');
  $('#memberDetails').attr('style','display: block;');
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