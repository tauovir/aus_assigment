<!DOCTYPE html>
<html>
<head>
<title><?php echo $webconfig->site_name;?></title>
  
<style>
    body,#bodyTable,#bodyCell{
			height:100% !important;
			margin:0;
			padding:0;
			width:100% !important;
		}
		table{
			border-collapse:collapse;
		}
		img,a img{
			border:0;
			outline:none;
			text-decoration:none;
		}
		h1,h2,h3,h4,h5,h6{
			margin:0;
			padding:0;
		}
		p{
			margin:1em 0;
			padding:0;
		}
		a{
			word-wrap:break-word;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
			line-height:100%;
		}
		table,td{
			mso-table-lspace:0pt;
			mso-table-rspace:0pt;
		}
		#outlook a{
			padding:0;
		}
		img{
			-ms-interpolation-mode:bicubic;
		}
		body,table,td,p,a,li,blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		#bodyCell{
			padding:20px;
		}
		.Image{
			vertical-align:bottom;
		}
		.TextContent img{
			height:auto !important;
		}
	/*
	@tab Page
	@section background style
	@tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
	*/
		body,#bodyTable{
			
		}
	/*
	@tab Page
	@section background style
	@tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
	*/
		#bodyCell{
			/*@editable*/border-top:0;
		}
	/*
	@tab Page
	@section email border
	@tip Set the border for your email.
	*/
		#templateContainer{
			/*@editable*/border:0;
		}
	/*
	@tab Page
	@section heading 1
	@tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
	@style heading 1
	*/
		h1{
			/*@editable*/color:#606060 !important;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:40px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:125%;
			/*@editable*/letter-spacing:-1px;
			margin:0;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section heading 2
	@tip Set the styling for all second-level headings in your emails.
	@style heading 2
	*/
		h2{
			/*@editable*/color:#404040 !important;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:26px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:125%;
			/*@editable*/letter-spacing:-.75px;
			margin:0;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section heading 3
	@tip Set the styling for all third-level headings in your emails.
	@style heading 3
	*/
		h3{
			/*@editable*/color:#606060 !important;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:18px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:125%;
			/*@editable*/letter-spacing:-.5px;
			margin:0;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section heading 4
	@tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
	@style heading 4
	*/
		h4{
			/*@editable*/color:#808080 !important;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:16px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:125%;
			/*@editable*/letter-spacing:normal;
			margin:0;
			/*@editable*/text-align:left;
		}
	/*
	@tab Preheader
	@section preheader style
	@tip Set the background color and borders for your email's preheader area.
	*/
		#templatePreheader{
			/*@editable*/background-color:#2f70dd00;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Preheader
	@section preheader text
	@tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
	*/
		.preheaderContainer .TextContent,.preheaderContainer .TextContent p{
			/*@editable*/color:#bdd8f9;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:11px;
			/*@editable*/line-height:125%;
			/*@editable*/text-align:center;
		}
	/*
	@tab Preheader
	@section preheader link
	@tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
	*/
		.preheaderContainer .TextContent a{
			/*@editable*/color:#ffb555;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Header
	@section header style
	@tip Set the background color and borders for your email's header area.
	*/
		#templateHeader{
			/*@editable*/background-color:#2f70dd00;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Header
	@section header text
	@tip Set the styling for your email's header text. Choose a size and color that is easy to read.
	*/
		.headerContainer .TextContent,.headerContainer .TextContent p{
			/*@editable*/color:#606060;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:15px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Header
	@section header link
	@tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
	*/
		.headerContainer .TextContent a{
			/*@editable*/color:#6DC6DD;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Body
	@section body style
	@tip Set the background color and borders for your email's body area.
	*/
		#templateBody{
			/*@editable*/background-color:#FFFFFF;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Body
	@section body text
	@tip Set the styling for your email's body text. Choose a size and color that is easy to read.
	*/
		.bodyContainer .TextContent,.bodyContainer .TextContent p{
			/*@editable*/color:#666666;
			/*@editable*/font-family:Arial, Helvetica, sans-serif;
			/*@editable*/font-size:14px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
			background:#eeeeee;
		}
	/*
	@tab Body
	@section body link
	@tip Set the styling for your email's body links. Choose a color that helps them stand out from your text.
	*/
		.bodyContainer .TextContent a{
			/*@editable*/color:#eb7f30;
			/*@editable*/font-weight:bold;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Columns
	@section column style
	@tip Set the background color and borders for your email's columns area.
	*/
		#templateColumns{
			/*@editable*/background-color:#FFFFFF;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Columns
	@section left column text
	@tip Set the styling for your email's left column text. Choose a size and color that is easy to read.
	*/
		.leftColumnContainer .TextContent,.leftColumnContainer .TextContent p{
			/*@editable*/color:#7a8991;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:14px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:center;
		}
	/*
	@tab Columns
	@section left column link
	@tip Set the styling for your email's left column links. Choose a color that helps them stand out from your text.
	*/
		.leftColumnContainer .TextContent a{
			/*@editable*/color:#6DC6DD;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Columns
	@section center column text
	@tip Set the styling for your email's center column text. Choose a size and color that is easy to read.
	*/
		.centerColumnContainer .TextContent,.centerColumnContainer .TextContent p{
			/*@editable*/color:#7a8991;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:14px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:center;
		}
	/*
	@tab Columns
	@section center column link
	@tip Set the styling for your email's center column links. Choose a color that helps them stand out from your text.
	*/
		.centerColumnContainer .TextContent a{
			/*@editable*/color:#6DC6DD;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Columns
	@section right column text
	@tip Set the styling for your email's right column text. Choose a size and color that is easy to read.
	*/
		.rightColumnContainer .TextContent,.rightColumnContainer .TextContent p{
			/*@editable*/color:#7a8991;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:14px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:center;
		}
	/*
	@tab Columns
	@section right column link
	@tip Set the styling for your email's right column links. Choose a color that helps them stand out from your text.
	*/
		.rightColumnContainer .TextContent a{
			/*@editable*/color:#6DC6DD;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Footer
	@section footer style
	@tip Set the background color and borders for your email's footer area.
	*/
		#templateFooter{
			/*@editable*/background-color:#2f70dd00;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Footer
	@section footer text
	@tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
	*/
		.footerContainer .TextContent,.footerContainer .TextContent p{
			/*@editable*/color:#bdd8f9;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:11px;
			/*@editable*/line-height:125%;
			/*@editable*/text-align:center;
		}
		
		
	/*
	@tab Footer
	@section footer link
	@tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
	*/
		.footerContainer .TextContent a{
			/*@editable*/color:#ffb555;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	@media only screen and (max-width: 480px){
		body,table,td,p,a,li,blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		body{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[id=bodyCell]{
			padding:10px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=TextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=BoxedTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcpreview-image-uploader]{
			width:100% !important;
			display:none !important;
		}

}	@media only screen and (max-width: 480px){
		img[class=Image]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=ImageGroupContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=ImageGroupContent]{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=ImageGroupBlockInner]{
			padding-bottom:0 !important;
			padding-top:0 !important;
		}

}	@media only screen and (max-width: 480px){
		tbody[class=ImageGroupBlockOuter]{
			padding-bottom:9px !important;
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=CaptionTopContent],table[class=CaptionBottomContent]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=CaptionLeftTextContentContainer],table[class=CaptionRightTextContentContainer],table[class=CaptionLeftImageContentContainer],table[class=CaptionRightImageContentContainer],table[class=ImageCardLeftTextContentContainer],table[class=ImageCardRightTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=ImageCardLeftImageContent],td[class=ImageCardRightImageContent]{
			padding-right:18px !important;
			padding-left:18px !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=ImageCardBottomImageContent]{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=ImageCardTopImageContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=CaptionLeftContentOuter] td[class=TextContent],table[class=CaptionRightContentOuter] td[class=TextContent]{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=CaptionBlockInner] table[class=CaptionTopContent]:last-child td[class=TextContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=BoxedTextContentColumn]{
			padding-left:18px !important;
			padding-right:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=columnsContainer]{
			display:block !important;
			max-width:600px !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=TextContent]{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section template width
	@tip Make the template fluid for portrait or landscape view adaptability. If a fluid layout doesn't work for you, set the width to 300px instead.
	*/
		table[id=templateContainer],table[id=templatePreheader],table[id=templateHeader],table[id=templateColumns],table[class=templateColumn],table[id=templateBody],table[id=templateFooter]{
			/*@tab Mobile Styles
@section template width
@tip Make the template fluid for portrait or landscape view adaptability. If a fluid layout doesn't work for you, set the width to 300px instead.*/max-width:600px !important;
			/*@editable*/width:100% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section heading 1
	@tip Make the first-level headings larger in size for better readability on small screens.
	*/
		h1{
			/*@editable*/font-size:24px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section heading 2
	@tip Make the second-level headings larger in size for better readability on small screens.
	*/
		h2{
			/*@editable*/font-size:20px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section heading 3
	@tip Make the third-level headings larger in size for better readability on small screens.
	*/
		h3{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section heading 4
	@tip Make the fourth-level headings larger in size for better readability on small screens.
	*/
		h4{
			/*@editable*/font-size:16px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Boxed Text
	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		table[class=BoxedTextContentContainer] td[class=TextContent],td[class=BoxedTextContentContainer] td[class=TextContent] p{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Preheader Visibility
	@tip Set the visibility of the email's preheader on small screens. You can hide it to save space.
	*/
		table[id=templatePreheader]{
			/*@editable*/display:block !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Preheader Text
	@tip Make the preheader text larger in size for better readability on small screens.
	*/
		td[class=preheaderContainer] td[class=TextContent],td[class=preheaderContainer] td[class=TextContent] p{
			/*@editable*/font-size:14px !important;
			/*@editable*/line-height:115% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Header Text
	@tip Make the header text larger in size for better readability on small screens.
	*/
		td[class=headerContainer] td[class=TextContent],td[class=headerContainer] td[class=TextContent] p{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Body Text
	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		td[class=bodyContainer] td[class=TextContent],td[class=bodyContainer] td[class=TextContent] p{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Left Column Text
	@tip Make the left column text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		td[class=leftColumnContainer] td[class=TextContent],td[class=leftColumnContainer] td[class=TextContent] p{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Center Column Text
	@tip Make the center column text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		td[class=centerColumnContainer] td[class=TextContent],td[class=centerColumnContainer] td[class=TextContent] p{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Right Column Text
	@tip Make the right column text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		td[class=rightColumnContainer] td[class=TextContent],td[class=rightColumnContainer] td[class=TextContent] p{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section footer text
	@tip Make the body content text larger in size for better readability on small screens.
	*/
		td[class=footerContainer] td[class=TextContent],td[class=footerContainer] td[class=TextContent] p{
			/*@editable*/font-size:14px !important;
			/*@editable*/line-height:115% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=footerContainer] a[class=utilityLink]{
			display:block !important;
		}

}

</style>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		 <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0"  width="800" id="templateContainer">
                            
                            <tr>
                                <td align="center" valign="top">
                                    <!-- BEGIN HEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="800" id="templateHeader">
                                        <tr>
<td valign="middel" class="headerContainer" style="border-bottom: 1px solid #ffcf5b6b;
    background: linear-gradient(to top, #ffb400cf, #ffcf5b6b) !important;
    padding: 10px;
    color: #fff;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="DividerBlock" >

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="ImageBlock">
    <tbody class="ImageBlockOuter">
            <tr>
                <td valign="top" style="padding:0px; border-bottom: 1px solid #d8d3d3;" class="ImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="ImageContentContainer">
                        <tbody>
                <tr>
                    <td class="ImageContent" valign="top" style="padding-right: 0px; padding-left: 0px; padding-top: 0; padding-bottom: 0; text-align:left;">
                   <a href="<?= base_url();?>"><img  align="middle"alt="" src="<?= base_url();?>assets/setting/<?= $webconfig->company_logo;?>" width="220" style="max-width:1200px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="Image"></a>     
                    </td>
                    <td class="ImageContent" valign="top" align="right" style="padding-right: 0px; padding-left: 0px; padding-top: 0; padding-bottom: 0;  text-align:right;">
                        <div class="pull-right" style="  text-align:right;">
                        <h2 style="  text-align:right;"><?php echo $webconfig->site_name;?></h2>
                        <div  style="text-align:right;"><p style="max-width:300px; float: right; " class="pull-right"><?php echo $webconfig->address;?></p></div>
                        <p style=""><?php echo $webconfig->organization_email;?></p>
                        <p style=""><?php echo $webconfig->other_mobile;?></p>
                        </div>
                    </td>
                </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END HEADER -->
                                </td>
                            </tr>
                            <tr>

<?php
 
	$this->db->select('*');
                        $this->db->from('tbl_members');
                        $where = array('email' => $_SESSION['username']['demo']);
                        $this->db->where($where);
                        $query = $this->db->get();
	$reco=$query->row();
?>


                                <td align="center" valign="top">
                                    <!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="800" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="TextBlock">
    <tbody class="TextBlockOuter">
        <tr>
            <td valign="top" class="TextBlockInner">
                
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="800" class="TextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="TextContent" style="padding-top:30px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
                        
                            <span style="font-size:24px"><span style="font-family:arial,helvetica neue,helvetica,sans-serif"><strong><span style="color:#3a85e2">
                                <span style="font-size:18px; line-height:32px;">Dear <?= $reco->name;?>, Your password reset on <?=  $webconfig->site_name;?>  Please keep it in your records so you dont forget it.</span></span><br>
</strong></span></span><br />

 <span style="font-size:24px"><span style="font-family:arial,helvetica neue,helvetica,sans-serif"><strong><span style="color:#3a85e2">
                                <span style="font-size:20px; line-height:32px;">Here is your login details :-</span></span><br>
</strong></span></span><br />
 
				 
                     
                    <table align="left" width="600" border="0" cellpadding="0" cellspacing="0" class="ImageContentContainer">
                        <tbody>
                <tr>
                    <td class="ImageContent" valign="top" style="padding-right: 0px; padding-left: 0px; padding-top: 10; padding-bottom: 10; text-align:left;">
                       <b>Username :-</b>
                    </td>
                     <td class="ImageContent" valign="top" style="padding-right: 0px; padding-left: 0px; padding-top: 10; padding-bottom: 10; text-align:left;">
                        <?= $_SESSION['username']['demo'];?>
                    </td>
                     
                </tr>
                
                
                
                
                 <tr>
                    <td class="ImageContent" valign="top" style="padding-right: 0px; padding-left: 0px; padding-top: 10; padding-bottom: 10; text-align:left;">
                       <b>Password :-</b>
                    </td>
                     <td class="ImageContent" valign="top" style="padding-right: 0px; padding-left: 0px; padding-top: 10; padding-bottom: 10; text-align:left;">
                         <?= $_SESSION['password']['demo'];?>
                    </td>
                     
                </tr>
                
                
                    </tbody></table>
             
        <br /><br /><br />     
             
              <span style="font-size:24px"><span style="font-family:arial,helvetica neue,helvetica,sans-serif"><strong><span style="color:#3a85e2">
                                <span style="font-size:40px; line-height:32px;">Thank You </span></span><br>
</strong></span></span><br />




                        </td>
                    </tr>
                </tbody></table>
                
            </td>
        </tr>
    </tbody>
</table>

</td>
                                        </tr>
                                    </table>
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>

	</div>
</div>       
</body>
</html>
            