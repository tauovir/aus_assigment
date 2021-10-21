<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $webconfig->site_name;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
        <tr>
            <td style="padding: 0px 0 00px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
                        <td align="center" bgcolor="#fff" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                           
                            
                            <a href="<?= base_url();?>"><img  align="middle"alt="" src="<?= base_url();?>assets/setting/<?= $webconfig->company_logo;?>" width="220" width="250" height="80" style="display: block;" class="Image"></a>
                            <hr>
                        </td>
                        
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 10px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px; text-align: center;">
                                        <b>Welcome To Aurstralia Legal Assignment Help</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;padding-top: 50px;">
                                        <b>Dear User Here is Your Login Details</b>
                                    </td>
                                </tr>
                                <tr><td>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td width="260" valign="top">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        
                                                        <tr>
                                                            <td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                <p style="padding:0px;margin: 0px;"><strong>User Name:-</strong> <?= $_SESSION['username']['demo'];?></p>
                                                                

                                                            </td>

                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="font-size: 0; line-height: 0;" width="20">
                                                    &nbsp;
                                                </td>
                                                <td width="260" valign="top">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                            <td style="padding: 0px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                <p><strong>Password:-</strong> <?= $_SESSION['password']['demo'];?></p>
                                                                

                                                            </td>
                                                        </tr>
                                        </table>
                                </td></tr>

                                <tr>
                                    <td>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                
                                                
                                                
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#448797" style="padding: 30px 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;text-align: center" width="100%">
                                        <p>You're receiving this e-mail because you're signed up to <a href="">Australialegalassignmenthelp.com</a></p>
                                        <p>©2020 Australia Legal Assignment help - All Rights Reserved.</p>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td align="center" width="100%">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
<a href="<?php echo $webconfig->twitter;?>" style="color: #ffffff;">
                                                        <img src="" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
                                                    </a>
                                                </td>
                                                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
<a href="<?php echo $webconfig->facebook;?>" style="color: #ffffff;"><img src="" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>