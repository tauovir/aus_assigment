
<style>
    form .error {
  color: #ff0000;
}   
    </style>
<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="pageicon pull-left">
                <i class="fa fa-cogs" aria-hidden="true"></i>
            </div>
            <div class="media-body">
               
                <h4>Update Member details</h4>
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
                            <form action="<?php echo base_url();?>member/update-save" name="edit-member" class="form-horizontal" id="SmssettingIndexForm" method="post" accept-charset="utf-8">
                               
<?php if(validation_errors()){ ?>
    <div class="alert alert-danger errorHandler no-display">
        <?php echo validation_errors(); ?>
        
    </div> 



 <?php } ?>

    <?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success errorHandler no-display">
         
        <?php echo $this->session->flashdata('success'); ?> 
    </div> 
<?php } ?>


<input type="hidden"  name="id"value="<?php echo $result->id;?>">
                                <div class="form-group">
                                    <label for="bankname" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-4">
<input name="name" class="form-control" placeholder="Name" maxlength="255" type="text" value="<?php echo $result->name;?>" id="bankname" />
                                    </div>
                                    <label for="accounthodername" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-4">
<input name="email" class="form-control" placeholder="Email" type="text" value="<?php echo $result->email;?>" id="accounthodername" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ifsccode" class="col-sm-2 control-label">Mobile No: </label>
                                    <div class="col-sm-4">
<input name="mobile" class="form-control" placeholder="Mobile" maxlength="100" type="text" value="<?php echo $result->mobile;?>" id="ifsccode" />
                                    </div>
                                    <label for="branchname" class="col-sm-2 control-label">Password:</label>
                                    <div class="col-sm-4">
<input name="password" class="form-control" placeholder="password" type="text" value="<?php echo $result->password;?>" id="branchname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                   
                                  <div class="col-sm-6">
                                      
                                       <button type="submit" class="btn btn-success pull-right"><span class="fa fa-refresh"></span>&nbsp;Update</button>
                                  </div>
                                </div>
                                 
                                <div class="form-group text-left">
                                    <div class="col-sm-offset-2 col-sm-10">
                                       
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

<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>

<script>

$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='edit-member']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      mobile: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      name: "Name required",
      email: "Please enter valid Email",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      mobile: "Mobile number required."
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>