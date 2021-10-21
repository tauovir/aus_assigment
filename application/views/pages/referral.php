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
                    <div class="col-sm-12 text-center">
                        <span class="col-sm-4  text-center">
                            <center>
                        <a href="mailto:email@example.com?subject=<?= base_url();?>&body=<?= base_url();?>pages/share/<?= $user_detail->dum_id?>/<?= $user_detail->id?>">  
                            <img src="<?= base_url();?>assets/Mail-icon.png" class="img-responsive" style="width: 100px;">
                            <h5>Share on email</h5>
                        </a></center>
                        </span>
 
<span class="col-sm-4  text-center">
       <center>
<a  href="sms://?body=<?= base_url();?>pages/share/<?= $user_detail->dum_id?>/<?= $user_detail->id?>">    
    <img src="<?= base_url();?>assets/message.png" class="img-responsive"  style="width: 100px;">
    <h5>Share on text message</h5>
</a>
</center>
</span>
 
<span class="col-sm-4 text-center">
       <center>
   <a href="whatsapp://send?text=<?= base_url();?>pages/share/<?= $user_detail->dum_id?>/<?= $user_detail->id?>&phone=">
    <img src="<?= base_url();?>assets/WhatsApp.png" class="img-responsive"  style="width: 100px;" >
    <h5>Share on WhatsApp</h5>
</a>
</center>
</span>
</div>





<div class="col-sm-12">
    <div class="col-sm-12">
        <h2>Share with other network</h2>
    </div>
    <div class="col-sm-6">
    <label onclick="myFunction()" >Your referral code is (click to copy) 
    </label>
    </div>
    <div class="col-sm-6">
        <div class="col-md-9">
    <input type="text" id="myInput" class="form-control" style="max-width: 80%;" value="<?= $user_detail->id?>"   readonly>

</div>
<div class="col-md-3">
    <a href="javascript:void();"  onclick="myFunction()" class="btn btn-sm btn-success pull-right">Copy your code</a>
</div>

    </div>
</div>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
       </fieldset>
                    </div>
                </div>                
            </div>
        </div>
    </div>