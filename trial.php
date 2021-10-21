<?php
$to= 'mailhostingserver@gmail.com';
$subject = 'HG MAIL';
$message = 'HG MAIL';
$headers = 'From: contactme@australialegalassignmenthelp.com' . "\r\n" .
'Reply-To: contactme@australialegalassignmenthelp.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();


if(mail($to, $subject, $message, $headers))
{
echo "test mail success";
}else
{
echo "test mail not success";
}
?>
