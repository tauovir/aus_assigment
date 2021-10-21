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
                    <li>Configuration</li>
                </ul>
                <h4>Payment Options</h4>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#paytm" data-toggle="tab">Paytm</a></li>
                                        <li><a href="#paypal" data-toggle="tab">Paypal</a></li>
                                        <li><a href="#ccavenue" data-toggle="tab">CCAvenue</a></li>
                                        <li><a href="#payumoney" data-toggle="tab">PayUmoney</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="paytm">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <form action="" class="form-horizontal" id="PaymentSettingIndexForm" method="post" accept-charset="utf-8">
                                                        <div style="display:none;">
                                                            <input type="hidden" name="_method" value="POST" />
                                                        </div>
                                                        <div class="form-group">
<label for="ptm_environment" class="col-sm-3 control-label">ENVIRONMENT</label>
<div class="col-sm-9">
<input name="ptm_environment" value="TEST" class="form-control" placeholder="ENVIRONMENT" maxlength="255" type="text" id="ptm_environment" /> </div>
                                                        </div>
                                                        <div class="form-group">
<label for="ptm_murchet_key" class="col-sm-3 control-label">MERCHANT KEY</label>
                                                            <div class="col-sm-9">
<input name="ptm_murchet_key" value="" class="form-control" placeholder="MERCHANT KEY" maxlength="255" type="text" id="ptm_murchet_key" /> </div>
                                                        </div>
                                                        <div class="form-group">
<label for="ptm_mrchnt_id" class="col-sm-3 control-label">MERCHANT MID</label>
                                                            <div class="col-sm-9">
<input name="ptm_mrchnt_id" value="" class="form-control" placeholder="MERCHANT MID" type="password" id="ptm_mrchnt_id" /> </div>
                                                        </div>
                                                        <div class="form-group">
<label for="ptm_mrchnt_site" class="col-sm-3 control-label">MERCHANT WEBSITE</label>
                                                            <div class="col-sm-9">
<input name="ptm_mrchnt_site" value="" class="form-control" placeholder="MERCHANT WEBSITE" maxlength="255" type="text" id="ptm_mrchnt_site" /> </div>
                                                        </div>

<div class="form-group">
<label for="ptm_status" class="col-sm-3 control-label">Published</label>
                                                            <div class="col-sm-9">
<label class="radio-inline">
<input type="radio" name="ptm_status" id="ptm_status" value="Yes" class="" checked="checked" />Yes</label>
<label class="radio-inline">
<input type="radio" name="ptm_status" id="ptm_status2" value="No" class="" />No </div>
                                                        </div>
                                                        <input type="hidden" name="data[PaymentSetting][type]" value="PPL" id="PaymentSettingType" />
                                                        <div class="form-group text-left">
                                                            <div class="col-sm-offset-3 col-sm-7">
                                                                <button class="btn btn-success" type="submit"><span class="fa fa-refresh"></span>&nbsp;Save Settings</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="paypal">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <form action="" class="form-horizontal" id="PaymentSettingIndexForm" method="post" accept-charset="utf-8">
                                                        <div style="display:none;">
                                                            <input type="hidden" name="_method" value="POST" />
                                                        </div>
                                                        <div class="form-group">
<label for="pyl_name" class="col-sm-3 control-label">Name</label>
                                                            <div class="col-sm-9">
<input name="pyl_name" value="Pay Pal" class="form-control" placeholder="Name" maxlength="255" type="text" id="pyl_name" /> </div>
                                                        </div>
                                                        <div class="form-group">

<label for="pyl_username" class="col-sm-3 control-label">User Name</label>
                                                            <div class="col-sm-9">
<input name="pyl_username" value="" class="form-control" placeholder="User Name" maxlength="255" type="text" id="pyl_username" /> </div>
                                                        </div>
                                                        <div class="form-group">

<label for="pyl_password" class="col-sm-3 control-label">Password</label>
                                                            <div class="col-sm-9">
<input name="pyl_password" value="" class="form-control" placeholder="Password" type="password" id="pyl_password" /> </div>
                                                        </div>
                                                        <div class="form-group">

<label for="pyl_signetur" class="col-sm-3 control-label">Signature</label>
                                                            <div class="col-sm-9">
<input name="pyl_signetur" value="" class="form-control" placeholder="Signature" maxlength="255" type="text" id="pyl_signetur" /> </div>
                                                        </div>
                                                        <div class="form-group">
<label for="pyl_sendmod" class="col-sm-3 control-label">Sandbox Mode</label>
                                                            <div class="col-sm-9">
<input type="hidden" name="data[PaymentSetting][sandbox_mode]" id="PaymentSettingSandboxMode_" value="0" />

<input type="checkbox" name="pyl_sendmod" checked="checked" class="" value="1" id="pyl_sendmod" />
                                                                <label for="PaymentSettingSandboxMode">&nbsp;True</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Published</label>
                                                            <div class="col-sm-9">

<label class="radio-inline">

<input type="radio" name="pyl_status" id="PaymentSettingPublishedYes" value="Yes" class="" checked="checked" />Yes</label>

<label class="radio-inline">

<input type="radio" name="pyl_status" id="PaymentSettingPublishedNo" value="No" class="" />No </div>
                                                        </div>
                                                        <input type="hidden" name="data[PaymentSetting][type]" value="PPL" id="PaymentSettingType" />
                                                        <div class="form-group text-left">
                                                            <div class="col-sm-offset-3 col-sm-7">
                                                                <button class="btn btn-success" type="submit"><span class="fa fa-refresh"></span>&nbsp;Save Settings</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="ccavenue">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <form action="" class="form-horizontal" id="PaymentSettingIndexForm" method="post" accept-charset="utf-8">
                                                        <div style="display:none;">
                                                            <input type="hidden" name="_method" value="POST" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Name</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][name]" value="CC AVENUE" class="form-control" placeholder="Name" maxlength="255" type="text" id="PaymentSettingName" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Merchant Id</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][username]" value="" class="form-control" placeholder="Merchant Id" maxlength="255" type="text" id="PaymentSettingUsername" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Access Code</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][password]" value="" class="form-control" placeholder="Access Code" type="password" id="PaymentSettingPassword" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Working Key</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][signature]" value="" class="form-control" placeholder="Working Key" maxlength="255" type="text" id="PaymentSettingSignature" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Gateway URL</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][gateway_url]" value="https://secure.ccavenue.com" class="form-control" placeholder="Gateway URL" maxlength="255" type="text" id="PaymentSettingGatewayUrl" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Published</label>
                                                            <div class="col-sm-9">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="data[PaymentSetting][published]" id="PaymentSettingPublishedYes" value="Yes" class="" checked="checked" />Yes</label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="data[PaymentSetting][published]" id="PaymentSettingPublishedNo" value="No" class="" />No </div>
                                                        </div>
                                                        <input type="hidden" name="data[PaymentSetting][type]" value="CAE" id="PaymentSettingType" />
                                                        <div class="form-group text-left">
                                                            <div class="col-sm-offset-3 col-sm-7">
                                                                <button class="btn btn-success" type="submit"><span class="fa fa-refresh"></span>&nbsp;Save Settings</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="payumoney">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <form action="/admin/payment_settings" class="form-horizontal" id="PaymentSettingIndexForm" method="post" accept-charset="utf-8">
                                                        <div style="display:none;">
                                                            <input type="hidden" name="_method" value="POST" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Name</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][name]" value="PAYU MONEY" class="form-control" placeholder="Name" maxlength="255" type="text" id="PaymentSettingName" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Merchant Id</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][username]" value="" class="form-control" placeholder="Merchant Id" maxlength="255" type="text" id="PaymentSettingUsername" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Merchant Key</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][password]" value="" class="form-control" placeholder="Merchant Key" type="password" id="PaymentSettingPassword" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Merchant Salt</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][signature]" value="" class="form-control" placeholder="Merchant Salt" maxlength="255" type="text" id="PaymentSettingSignature" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Service Provider</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][gateway_url]" value="" class="form-control" placeholder="Service Provider" maxlength="255" type="text" id="PaymentSettingGatewayUrl" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Header Authorization</label>
                                                            <div class="col-sm-9">
                                                                <input name="data[PaymentSetting][authorization]" value="" class="form-control" placeholder="Header Authorization" maxlength="255" type="text" id="PaymentSettingAuthorization" /> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Sandbox Mode</label>
                                                            <div class="col-sm-9">
                                                                <input type="hidden" name="data[PaymentSetting][sandbox_mode]" id="PaymentSettingSandboxMode_" value="0" />
                                                                <input type="checkbox" name="data[PaymentSetting][sandbox_mode]" checked="checked" class="" value="1" id="PaymentSettingSandboxMode" />
                                                                <label for="PaymentSettingSandboxMode">&nbsp;True</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="site_name" class="col-sm-3 control-label">Published</label>
                                                            <div class="col-sm-9">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="data[PaymentSetting][published]" id="PaymentSettingPublishedYes" value="Yes" class="" checked="checked" />Yes</label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="data[PaymentSetting][published]" id="PaymentSettingPublishedNo" value="No" class="" />No </div>
                                                        </div>
                                                        <input type="hidden" name="data[PaymentSetting][type]" value="PME" id="PaymentSettingType" />
                                                        <div class="form-group text-left">
                                                            <div class="col-sm-offset-3 col-sm-7">
                                                                <button class="btn btn-success" type="submit"><span class="fa fa-refresh"></span>&nbsp;Save Settings</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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