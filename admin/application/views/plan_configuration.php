<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="pageicon pull-left">
				<i class="fa fa-inr"></i>
			</div>
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="index.php">Dashboard</a></li>
					<li>E-Wallet Settings</li>
				</ul>
				<h4>E-Wallet Settings</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
							<form action="" method="post" id="afl-payout-settings" accept-charset="UTF-8"><div class="from-panel">						
							
								<fieldset class="form-wrapper" id="edit-payout-further-settings">
								<legend><span class="fieldset-legend">Payout / Widthdrawal Configurations</span></legend>
								<div class="fieldset-wrapper">
									<div class="form-item clearfix form-type-textfield form-item-afl-payout-min-value form-group"  >
										<div class="form-item clearfix form-type-select form-item-afl-system-payout-frequency form-group"  >
											<label for="edit-afl-system-payout-frequency">Payout <span class="form-required" title="This field is required.">*</span></label>
									<select id="edit-afl-system-payout-frequency" name="afl_system_payout_frequency" class="form-select form-control required"><option value="instant">Instant</option><option value="daily" selected="selected">Daily</option><option value="weekly">Weekly</option><option value="monthly">Monthly</option><option value="yearly">Yearly</option></select>
									</div>
									<label for="edit-afl-payout-min-value">Minimum  payout amount <span class="form-required" title="This field is required.">*</span></label>
									<div class="input-group m-b">
										<span class="input-group-addon">Rs</span>
										<input groupfields="Rs" type="text" id="edit-afl-payout-min-value" name="afl_payout_min_value" value="10" size="60" maxlength="128" class="form-text form-control input-lg-3 required" />
									</div>
									</div>
									<div class="form-item clearfix form-type-textfield form-item-afl-payout-charges-method-bank form-group" data-toggle="tooltip" title="Please place a (%) if it a percentage value. Example: 25%, 30.5%, 2500, etc.. Mention zero if no charges are applied">
										<label for="edit-afl-payout-charges-method-bank">Payout charges - Bank Account <span class="form-required" title="This field is required.">*</span></label>
										<div class="input-group m-b"><span class="input-group-addon">Rs</span><input groupfields="Rs" class="percentage-n-amount form-text form-control input-lg-3 required" type="text" id="edit-afl-payout-charges-method-bank" name="afl_payout_charges_method_bank" value="10%" size="60" maxlength="128" /></div>
									</div>								
								</div>
								</fieldset>
							
							
							</div><hr style="border:2px solid #7266ba; color:#7266ba; margin:60px 0px 60px 0px"><div id="checkboxes-div"><fieldset class="form-wrapper" id="edit-ewallet-transfer"><legend><span class="fieldset-legend">E-wallet  Transfer Settings</span></legend><div class="fieldset-wrapper"><div class="form-item clearfix form-type-textfield form-item-etransfer-min-value form-group" data-toggle="tooltip" title="Please give only integer value">
							  <label for="edit-etransfer-min-value">Minimum  amount to initiate e-wallet transfer <span class="form-required" title="This field is required.">*</span></label>
							 <div class="input-group m-b"><span class="input-group-addon">Rs</span><input groupfields="Rs" type="text" id="edit-etransfer-min-value" name="etransfer_min_value" value="100" size="60" maxlength="128" class="form-text form-control input-lg-3 required" /></div>
							</div>
							<div class="form-item clearfix form-type-textfield form-item-etransfer-max-value form-group" data-toggle="tooltip" title="Please place a (%) if it a percentage value. Example: 25%, 30.5%, 2500, etc.. Mention zero if no limits are applied">
							  <label for="edit-etransfer-max-value">Maximum amount can be transferred from e-wallet <span class="form-required" title="This field is required.">*</span></label>
							 <div class="input-group m-b"><span class="input-group-addon">Rs</span><input groupfields="Rs" class="percentage-n-amount form-text form-control input-lg-3 required" type="text" id="edit-etransfer-max-value" name="etransfer_max_value" value="2000" size="60" maxlength="128" /></div>
							</div>
							<div class="form-item clearfix form-type-textfield form-item-etransfer-charges form-group" data-toggle="tooltip" title="Please place a (%) if it a percentage value. Example: 25%, 30.5%, 2500, etc.. Mention zero if no charges are applied">
							  <label for="edit-etransfer-charges">E-wallet Transfer charges <span class="form-required" title="This field is required.">*</span></label>
							 <div class="input-group m-b"><span class="input-group-addon">Rs</span><input groupfields="Rs" class="percentage-n-amount form-text form-control input-lg-3 required" type="text" id="edit-etransfer-charges" name="etransfer_charges" value="10%" size="60" maxlength="128" /></div>
							</div>
							</div></fieldset>
							</div><hr style="border:2px solid #7266ba; color:#7266ba; margin:60px 0px 60px 0px"><input type="submit" id="edit-submit" name="op" value="Save Configurations" class="form-submit btn btn-default btn-primary" />
							
							</div></form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>
<!-- Associated Member Modal -->
<div id="associatedMemberList" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Associated Member List</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- End Associated Member Modal -->

<!-- Member Modal -->
<div id="memberDetails" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Member Details</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>