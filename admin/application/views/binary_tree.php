<?php
if(isset($_POST['searchtreee'])){
	$search=$_POST['searchtreee'];
} else {
	$search=$_SESSION['wssinfotech']['sohan'];	
}

function tree_data($user_id){
	
$dsn = 'mysql:dbname=gksingh_clothmagic;host=localhost';
$dbuser = 'root';
$dbpassword = '';

try {
    $dbcon = new PDO($dsn, $dbuser, $dbpassword);
	$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$data[]=array();	
$q="SELECT * FROM tbl_members WHERE sponsor_id=:id ";
$s=$dbcon->prepare($q);
$s->execute(array(':id'=>$user_id));
$c = $s->rowCount();

while($d=$s->fetch(PDO::FETCH_ASSOC)){
	
if($d['position']==0){
	
 
	if($d['id']!=''){
		
		$data['left']=$d['id'];
		
		} else {
		$data['left']='';
	}
} else {
		if($d['id']!=''){ 
	 
		$data['right']=$d['id'];
		} else {
		$data['left']='';
	}
}
	
}	
	return $data;
}
?>


<div class="mainpanel">
	<div class="pageheader" style="    padding: 20px;
    border-bottom: 1px solid #eee;
    padding-bottom: 20px;
    background: #fff;
    height: 90px;
    -webkit-box-shadow: 0 2px 3px rgb(255, 255, 255);
    box-shadow: 0 2px 3px rgb(255, 255, 255);">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-user"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="">Dashboard</a></li>
					<li>Admin Binary Tree</li>
				</ul>
				<h4>Admin Binary Tree</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->	
	<div class="contentpanel" style="background: #fff;">



		<script>
function getprofile(str){
	$('#model_head').text('Profile Id : '+str);
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
 
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="model_head"></h4>
      </div>
      <div class="modal-body" id="model_body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

		<div class="row">
			<div class="col-sm-3 col-md-3 "> </div>
			<div class="col-sm-6 col-md-6 ">                            
				<form action="<?php echo base_url();?>pages/binary_tree" method="post">
					<table class="table table-bordered">
						<tr class="bg-primary" >
							<td>
								<input type="text" class="form-control" placeholder="SponserId">
							</td>		
							<td>																							
								<input type="submit" class=" btn btn-danger" value="Search">								
							</td>	
						</tr>
						
					</table>
				</form>				
			</div><!-- col-sm-6 -->
			<div class="col-sm-3 col-md-3 "> </div>	
		</div><!-- row --> 
		<div class="row">			
			<div class="col-sm-12 col-md-12" >                            
				<table class="table" border="0" align="center" style="text-align:center;">
							<tr style="height:150px;">
							
							<?php 	$data=tree_data($search);
							
							?>
								<td></td>
<td colspan="2"><div data-toggle="modal" data-target="#myModal" onclick="getprofile(<?php echo $search;?>);"><i class="fa fa-user fa-4x" style="color:#06b7d4;"></i> <p><?php echo $search;?></p></div></td>
								<td></td>
							</tr>
							
							
							<tr style="height:150px;" >
								 <?php 
								 
									 
										@$first_left_user=$data['left'];
									 
									@$first_right_user=$data['right'];
									 
									
								 ?>
								<td  colspan="2">
								<?php if($first_left_user!=''){ ?>
								<div data-toggle="modal" data-target="#myModal" onclick="getprofile(<?php echo $first_left_user;?>);"><i class="fa fa-user fa-4x" style="color:#e89600;"></i> <p><?php echo $first_left_user;?></p></div>
								<?php } ?>
								</td>
								<td  colspan="2">
								
								<?php if($first_right_user!=''){ ?><div data-toggle="modal" data-target="#myModal" onclick="getprofile(<?php echo $first_right_user;?>);"><i class="fa fa-user fa-4x" style="color:#e89600;"></i> <p><?php echo $first_right_user;?></p></div>
								<?php } ?>
								</td>
								 
							</tr>
							
							
<tr style="height:150px;" >
<?php 
@$data_first_left_user=tree_data($first_left_user);
@$second_left_user=$data_first_left_user['left'];
@$second_right_user=$data_first_left_user['right'];

@$data_first_right_user=tree_data($first_right_user);
@$third_left_user=$data_first_right_user['left'];
@$third_right_user=$data_first_right_user['right'];


							?>




							
<td>
<?php if($second_left_user!=''){ ?>
<div data-toggle="modal" data-target="#myModal" onclick="getprofile(<?php echo $second_left_user;?>);"><i class="fa fa-user fa-4x" 

style="<?php if($second_left_user==''){ ?>color:red;<?php } else { ?> color:#44bd06;<?php } ?>"></i>
 <p><?php echo $second_left_user;?></p>
	
 </div>
 
 <p>
<form action="<?php echo base_url();?>pages/binary_tree" method="post">					 
<input type="hidden"name="searchtreee" value="<?php echo $second_left_user;?>">							 																						
 

<button type="submit" class="btn  btn-danger btn-xs"><i class="fa fa-search" ></i> Load More</button>							
</form>			
	</p>
<?php } ?>
 </td>
 
 
 
 
 
<td>
<?php if($second_right_user!=''){ ?>
<div data-toggle="modal" data-target="#myModal" onclick="getprofile(<?php echo $second_right_user;?>);"><i class="fa fa-user fa-4x" style="<?php if($second_right_user==''){ ?>color:red;<?php } else { ?> color:#44bd06;<?php } ?>"></i> 
<p><?php echo $second_right_user;?></p></div>


 <p>
<form action="<?php echo base_url();?>pages/binary_tree" method="post">					 
<input type="hidden"name="searchtreee" value="<?php echo $second_right_user;?>">							 																						
 

<button type="submit" class="btn  btn-danger btn-xs"><i class="fa fa-search" ></i> Load More</button>							
</form>			
	</p>
	
	
	
<?php } ?>

</td>




<td><?php if($third_left_user!=''){ ?>

<div data-toggle="modal" data-target="#myModal" onclick="getprofile(<?php echo $third_left_user;?>);"><i class="fa fa-user fa-4x" style="<?php if($third_left_user==''){ ?>color:red;<?php } else { ?> color:#44bd06;<?php } ?>"></i>
 <p><?php echo $third_left_user;?></p></div>
 
 <p>
<form action="<?php echo base_url();?>pages/binary_tree" method="post">					 
<input type="hidden"name="searchtreee" value="<?php echo $third_left_user;?>">							 																						
 

<button type="submit" class="btn  btn-danger btn-xs"><i class="fa fa-search" ></i> Load More</button>							
</form>			
	</p>
	
 <?php } ?></td>
 
 
 
 
 
 
<td><?php if($third_right_user!=''){ ?><div data-toggle="modal" data-target="#myModal" onclick="getprofile(<?php echo $third_right_user;?>);"><i class="fa fa-user fa-4x" style="<?php if($third_right_user==''){ ?>color:red;<?php } else { ?> color:#44bd06;<?php } ?>"></i> 
<p><?php echo $third_right_user;?></p></div>

 <p>
<form action="<?php echo base_url();?>pages/binary_tree" method="post">					 
<input type="hidden"name="searchtreee" value="<?php echo $third_right_user;?>">							 																						
 

<button type="submit" class="btn  btn-danger btn-xs"><i class="fa fa-search" ></i> Load More</button>							
</form>			
	</p>
	

<?php } ?></td>
								 
							</tr>







							
							
						</table>
			</div><!-- col-sm-12 -->			
		</div><!-- row -->
	</div><!-- contentpanel -->	
</div>

 