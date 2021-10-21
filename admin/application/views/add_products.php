<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="pageicon pull-left">
                <i class="fa fa-inr"></i>
            </div>
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="<?php echo base_url();?>" style="color: #666 !important;">Dashboard</a></li>
                    <li>Add Assignment</li>
                </ul>
                <h4>Add Assignment</h4>
            </div>
        </div>
        <!-- media -->
    </div>
    <!-- pageheader -->

    <div class="contentpanel">
        <div class="row">
            <div class="col-sm-12 col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="">

<?php if($this->uri->segment(3)=='edit'){ ?>
		<form action="<?php echo base_url();?>Pages/add_assignment/update/<?php echo $this->uri->segment(4); ?>" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?php } else { ?>
		<form action="<?php echo base_url();?>Pages/add_assignment/insert" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?php } ?>
                                                <input type="hidden" name="inf_token" value="28d5456a8ff445c4125bf1435795a2ec" />

                                                <?php if($this->session->flashdata('success')){ ?>
                                                    <div class="alert alert-danger errorHandler no-display">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <?php echo validation_errors(); ?>
                                                            <?php echo $this->session->flashdata('success'); ?>
                                                    </div>
                                                    <?php } ?>

                                                        <?php if(validation_errors()){ ?>
                                                            <div class="alert alert-danger errorHandler no-display">
                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                <?php echo validation_errors(); ?>

                                                            </div>
                                                            <?php } ?>


<div class="col-sm-6">
 <div class="form-group">
		<label class="control-label required" for="category">Category</label>
		<select class="form-control livesearch" name="category" id="category">
			<option value="">Select Category</option>
		 	<?php foreach($all_category as $cat_data){ 
                if($cat_data->level==0){
                ?>


	 			<option value="<?php echo $cat_data->id?>" <?php  if($this->uri->segment(3)=='edit'){  if($cat_data->id==$all_packages->category){ ?> selected=''<?php } } ?>><?php echo $cat_data->name?></option>

<?php 
    $this->db->select('*');
    $this->db->from('tbl_category');
    $this->db->where('cat_it',$cat_data->id);
    $this->db->order_by('id','DESC');
    $level2category = $this->db->get()->result();
    foreach ($level2category as $level2result) { ?>
        <option value="<?php echo $level2result->id?>" <?php  if($this->uri->segment(3)=='edit'){  if($level2result->id==$all_packages->category2){ ?> selected=''<?php } } ?>> &nbsp; &nbsp; &nbsp;  <?php echo $level2result->name?></option>
  <?php  }

?>


		 	<?php	} }?>
		</select>
</div>
</div>




<div class="col-sm-6">

<div class="form-group">
	<label class="control-label required" for="title">Assignment  Title</label>
	<input type="text" class="form-control" name="title" id="title" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->title;  } else { echo set_value('title'); }?>" autocomplete="off" />
	<span name='form_err'></span>
</div>
</div>


<div class="col-sm-6">

<div class="form-group">
    <label class="control-label required" for="title">Advance Amount in %</label>
    <input type="text" class="form-control" name="advanceamt" id="advanceamt" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->advanceamt;  } else { echo set_value('title'); }?>" autocomplete="off" />
    <span name='form_err'></span>
</div>
</div>



<input class="form-control" type="hidden" name="mrp_price" id="mrp_price" value="0.00" autocomplete="off" />
 




<input class="form-control" type="hidden" name="selling_price" id="selling_price" value="0.00" autocomplete="off" />
			 
 
<div class="col-sm-6">
<div class="form-group">
	<label class="control-label required" for="metatitle">Meta Title</label>
            
                <input class="form-control" type="text" name="metatitle" id="metatitle" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->metatitle;  } else { echo set_value('metatitle');}?>" autocomplete="off" />
			 
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
    <label class="control-label required" for="metkeywords">Meta Keywords</label>
    <input class="form-control" type="text" name="metkeywords" id="metkeywords" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->metkeywords;  } else { echo set_value('metkeywords');}?>" autocomplete="off" />      
</div>
</div>


<div class="col-sm-6">
<div class="form-group">
    <label class="control-label required" for="metdescription">Meta Description</label>
            
                <input class="form-control" type="text" name="metdescription" id="metdescription" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->metdescription;  } else { echo set_value('metdescription');}?>" autocomplete="off" />
             
</div>
</div>





<div class="col-sm-6">
<div class="form-group">
    <label class="control-label required" for="video_link">Video Link</label>
            
                <input class="form-control" type="text" name="video_link" id="video_link" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->video_link;  } else { echo set_value('video_link');}?>" autocomplete="off" />
             
</div>
</div>





<div class="col-sm-6">
<div class="form-group">
	<label class="control-label required" for="product_image">Image</label>
            
                <input class="form-control" type="file" name="product_image" id="product_image" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->product_image;  } else { echo set_value('product_image');}?>" autocomplete="off" />
			 
</div>
</div>
<input type="hidden" name="neet_to_pay" id="neet_to_pay" value="0" >
<!--
<div class="col-sm-6">
<div class="form-group">
    <label class="control-label required" for="product_image">Need To Pay / Need to Ask Quotation </label>
    <div  class="col-sm-12">
        <label for="neet_to_pay" class="btn btn-default btn-sm">   <input type="radio" name="neet_to_pay" id="neet_to_pay" value="0" > Need To Pay</label> 
         <label for="neet_ask_question"  class="btn btn-default btn-sm">    <input type="radio" name="neet_to_pay" id="neet_ask_question" value="1"> Need To Ask Questions</label> 
    </div>  
</div>
</div>
-->

 




 <div class="col-sm-12">
<div class="form-group">
    <label class="control-label required" for="editor1">Description</label>
     
        <textarea name="description" class="ckeditor" id="editor1"><?php if($this->uri->segment(3)=='edit'){ echo $all_packages->description;  } else { echo set_value('description');}?></textarea>
     
</div>
</div>
<div class="col-sm-12">
    <div class=" table-responsive">
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Urgency</th>
                     <th>Amount in ($)</th>
                 </tr>
             </thead>
             <tbody>
<?php 
$c=1;
    foreach ($urgency as $valueur) {


    $this->db->select('*');
    $this->db->from('assignment_urgency');
    $this->db->where('assignment_id',$this->uri->segment(4));
    $this->db->where('urgency_id',$valueur->id);
    $cvfbg = $this->db->get();
    $bnhbn=$cvfbg->row();
        //assignment_urgency
    
?>
                 <tr>
                     <td><?= $c;?></td>
                     <td align="center">
                        <label for="amt_<?= $c?>"><?= $valueur->name;?></label>
<input type="hidden" name="urgency_amt[]" value="<?= $valueur->id;?>"  >
                    </td>
                     <td>

<input placeholder="Enter amount" type="text" id="amt_<?= $c?>" name="amount[]" value="<?php if($this->uri->segment(3)=='edit'){  if($cvfbg->num_rows()>0) { echo $bnhbn->urgency_amt; }  }?>" class="form-control"></td>
                 </tr>
<?php  $c++;  } ?>
             </tbody>
         </table>
    </div>
</div>



<div class="col-sm-12">
<div class="form-group">
   <button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product">Save</button>
</div>
</div>
                                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col-sm-12 -->
        </div>
        <!-- row -->
    </div>
    <!-- contentpanel -->

</div>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
    <script type="text/javascript">
      $(".livesearch").chosen();
</script>

<style type="text/css">
    .livesearch{
        text-transform: uppercase;
    }
    .chosen-container .chosen-results li.active-result {
    display: list-item;
    cursor: pointer;
    text-transform: capitalize;
    font-weight: 700;
}
</style>