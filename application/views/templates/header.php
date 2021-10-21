<?php 
function search($array, $key, $value) { 
    $results = array(); 
    if (is_array($array)) { 
        if (isset($array[$key]) && $array[$key] == $value) { 
            $results[] = $array; 
        } 
        foreach ($array as $subarray) { 
            $results = array_merge($results,  
            search($subarray, $key, $value)); 
        } 
    } 
    return $results; 
} 
    $res = search($ary, 'c_code', $countryCode); 
    $phonecode  = 0;
    foreach ($res as $var) { 
        $phonecode = $var["code"]; 
    } 
    if(!isset($_SESSION['country']['phonecode'])){  
        $_SESSION['country']['phonecode']=$phonecode;
    } 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php if($this->uri->segment(1)=='assignment'){ ?>
    <title><?= $alldata->metatitle;?></title>
    <meta name="description" content="<?= $alldata->metdescription;?>" />
    <meta name="keywords" content="<?= $alldata->metkeywords;?>">
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $alldata->metatitle;?>" />
    <meta property="og:description" content="<?= $alldata->metdescription;?>" />
    <meta property="og:url" content="<?php echo base_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="<?= $alldata->metdescription;?>" />
    <meta name="twitter:description" content="<?= $alldata->metdescription;?>" />
    <meta name="twitter:title" content="<?= $alldata->metatitle;?>" />
    <meta name="twitter:site" content="@<?= $alldata->metatitle;?>" />
    <meta name="twitter:creator" content="@<?= $alldata->metatitle;?>" />
    <meta property="og:image" content="<?= base_url();?>assets/products/<?= $alldata->product_image;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='') { // for home page meta content ?>
    <title><?php echo $webconfig->meta_title;?> | Home</title>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='about-us') { // for about page meta content ?>
<title>About Us | AustraliaLegalAssignmentHelp.com</title>
<meta name="distribution" content="Global" />
<link rel="canonical" href="https://www.australialegalassignmenthelp.com/about-us"/>
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<meta name="author" content="https://www.australialegalassignmenthelp.com"/>
<meta name="description" content="Australia Legal  Assignment Help is leading academic writing service provider. To know more contact us now!"/>
<meta name="keywords" content="Law assignment help,Online Law Assignment Help,Assignment help,Online Assignment Help,Legal assignment help,Assignment help online
">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Best Law Assignment Help | 100% Unique Law Assignment Service" />
<meta property="og:description" content="Australia Legal  Assignment Help is leading academic writing service provider. To know more contact us now!"/>
<meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
<meta property="og:site_name" content="Best Law Assignment Help | 100% Unique Law Assignment Service" />
<meta name="twitter:card" content="app" />
<meta name="twitter:description" content="Australia Legal  Assignment Help is leading academic writing service provider. To know more contact us now!"/>
<meta name="twitter:title" content="Best Law Assignment Help | 100% Unique Law Assignment Service" />
<meta name="twitter:site" content="@Best Law Assignment Help | 100% Unique Law Assignment Service" />
<meta name="twitter:creator" content="@Best Law Assignment Help | 100% Unique Law Assignment Service" />
<?php } ?>
<?php if ($this->uri->segment(1)=='reviews') { 
// for login page meta content ?>
<title>Client Reviews AustraliaLegalAssignmenthelp.com</title>
<meta name="distribution" content="Global" />
<link rel="canonical" href="https://www.australialegalassignmenthelp.com/reviews"/>
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="Australia Legal Assignment Help review post by our students who take’s assignment service. Discover customers and clients feedback about Australia Legal Assignment Help Organization." />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="Australia Legal Assignment Help review post by our students who take’s assignment service. Discover customers and clients feedback about Australia Legal Assignment Help Organization." />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="Australia Legal Assignment Help review post by our students who take’s assignment service. Discover customers and clients feedback about Australia Legal Assignment Help Organization." />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='how-it-work') { // for How It Work page meta content ?>
    <title>How AustraliaLegalAssignmentHelp.com Works</title>
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com/how-it-work"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="1. Submit your assignment 2. Get quotes and makes payment 3. Get expert help by Deadline 4. Receive your assignment in email. " />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="1. Submit your assignment 2. Get quotes and makes payment 3. Get expert help by Deadline 4. Receive your assignment in email. " />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="1. Submit your assignment 2. Get quotes and makes payment 3. Get expert help by Deadline 4. Receive your assignment in email. " />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>

<?php if ($this->uri->segment(1)=='contact') {  // for contact page meta content ?>
    <title>AustraliaLegalAssignmenthelp.com - How to contact us?</title>
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com/contact"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="If you need online assignment help, essay writing service or dissertation help services, you can reach us through email or via chat. Get in touch with our client representatives today through Live chat, phone call and email. " />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="If you need online assignment help, essay writing service or dissertation help services, you can reach us through email or via chat. Get in touch with our client representatives today through Live chat, phone call and email. " />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="If you need online assignment help, essay writing service or dissertation help services, you can reach us through email or via chat. Get in touch with our client representatives today through Live chat, phone call and email. " />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='faq') {  // for faq page meta content ?>
    <title>Frequently Asked Questions(FAQ) | AustraliaLegalAssignmentHelp.com</title>
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com/faq"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='terms-and-condition') {  // for terms-and-condition page meta content ?>
    <title>Terms & Condition | AustraliaLegalAssignmentHelp.com</title>
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com/terms-and-condition"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="Please read the following Terms and Conditions very carefully before using any of educational services being provided by Australialegalassignmenthelp.com " />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="Please read the following Terms and Conditions very carefully before using any of educational services being provided by Australialegalassignmenthelp.com " />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="Please read the following Terms and Conditions very carefully before using any of educational services being provided by Australialegalassignmenthelp.com " />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='privacy-policy') {  // for privacy-policy page meta content ?>
    <title>Privacy Policy | AustraliaLegalAssignmentHelp.com</title>
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com/privacy-policy"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='revision-and-refund-policy') {   // for revision-and-refund-policy page meta content ?>
    <title>Revision & Refund Policy | AustraliaLegalAssignmentHelp.com</title>
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com/revision-and-refund-policy"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="Revision and Refund Policy  | Australialegalassignmenthelp">
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="Revision and Refund Policy  | Australialegalassignmenthelp.com">
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="Revision and Refund Policy  | Australialegalassignmenthelp.com">
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php  if ($this->uri->segment(1)=='blog') {         // for blog page meta content

if($this->uri->segment(2)==''){ ?>
    <title>Blog| Australia Legal Assignment Help</title>
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com/blog"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
        <meta name="description" content="Best Assignment Writing Tips and Assignment Blogs for students. Experience The Most Reliable Source Of Online Assignment Help." />
        <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
        <meta property="og:description" content="Best Assignment Writing Tips and Assignment Blogs for students. Experience The Most Reliable Source Of Online Assignment Help." />
        <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
        <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
        <meta name="twitter:card" content="app" />
        <meta name="twitter:description" content="Best Assignment Writing Tips and Assignment Blogs for students. Experience The Most Reliable Source Of Online Assignment Help." />
        <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
        <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
        <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } else { ?>
    <title><?= $mail_result->metatitle;?></title>
    <meta name="description" content="<?= $mail_result->metdescription;?>" />
    <meta name="keywords" content="<?= $mail_result->metkeywords;?>">
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $mail_result->metatitle;?>" />
    <meta property="og:description" content="<?= $mail_result->metdescription;?>" />
    <meta property="og:url" content="<?php echo base_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="<?= $mail_result->metdescription;?>" />
    <meta name="twitter:description" content="<?= $mail_result->metdescription;?>" />
    <meta name="twitter:title" content="<?= $mail_result->metatitle;?>" />
    <meta name="twitter:site" content="@<?= $mail_result->metatitle;?>" />
    <meta name="twitter:creator" content="@<?= $mail_result->metatitle;?>" />
    <meta property="og:image" content="<?= base_url();?>assets/blogs/<?= $mail_result->image;?>" />
<?php } ?>
    <?php }?>
<?php if ($this->uri->segment(1)=='order-step-1') { 
    // for order step 1 page meta content ?>
    <title>Order Now to  Get Instant Assignment Help</title>
    <meta name="description" content="Order Now to Get Instant Assignment Help at AustraliaLegalAssignmenthelp.com" />
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com/order-step-1"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="" />
    <meta name="keywords" content="">
    
<?php } ?>
<?php if ($this->uri->segment(1)=='order-step-2') { 
    // for order step 2 page meta content ?>
    <title>Order Now to  Get Instant Assignment Help</title>
    <meta name="description" content="Order Now to Get Instant Assignment Help at AustraliaLegalAssignmenthelp.com" />
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com/order-step-2"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="" />
    <meta name="keywords" content="">
<?php } ?>
<?php if ($this->uri->segment(1)=='order-step3') { 
    // for order step3 page meta content ?>
    <title>Your Order summary</title>
    <meta name="description" content="You Can Check Your Order Summary Before PaymentAustraliaLegalAssignmenthelp.com" />
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="https://www.australialegalassignmenthelp.com/order-step3"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="" />
    <meta name="keywords" content="">
<?php } ?>
<?php if ($this->uri->segment(1)=='paypal') { 
    // for paypal page meta content ?>
    <title>100% Secure Payment | Australia Legal Assignment Help</title>
    <meta name="description" content="100% Secure Payment | Australia Legal Assignment Help" />
    <meta name="distribution" content="Global" />
     <link rel="canonical" href="https://www.australialegalassignmenthelp.com"/>
     <meta name="robots" content="index, follow" />
     <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="" />
    <meta name="keywords" content="">

<?php } ?>
<?php if ($this->uri->segment(1)=='register') { 
    // for register page meta content ?>
    <title><?php echo $webconfig->meta_title;?> | Register</title>
    <meta name="distribution" content="Global" />
     <link rel="canonical" href="https://www.australialegalassignmenthelp.com/register"/>
     <meta name="robots" content="index, follow" />
     <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="Register with Australia Legal Assignment Help student’s portal and get online Assignment writing service for all academic writing service. Secure your academic grades today." />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="Register with Australia Legal Assignment Help student’s portal and get online Assignment writing service for all academic writing service. Secure your academic grades today." />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="Register with Australia Legal Assignment Help student’s portal and get online Assignment writing service for all academic writing service. Secure your academic grades today." />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='login') { 
    // for login page meta content ?>
    <title>LogIn With AustraliaLegalAssignmenthelp.com & Get Assignment Help</title>
    <meta name="distribution" content="Global" />
     <link rel="canonical" href="https://www.australialegalassignmenthelp.com/login"/>
     <meta name="robots" content="index, follow" />
     <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="Login to check your all assignment details, progress, status of the work and any other queries in your assignment. Login and Track your order by Australialegalassignmenthelp.com Secure Login." />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="Login to check your all assignment details, progress, status of the work and any other queries in your assignment. Login and Track your order by Australialegalassignmenthelp.com Secure Login." />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="Login to check your all assignment details, progress, status of the work and any other queries in your assignment. Login and Track your order by Australialegalassignmenthelp.com Secure Login." />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>

<?php if ($this->uri->segment(1)=='cancel') { 
    // for login page meta content ?>
    <title>cancel order AustraliaLegalAssignmenthelp.com & Get Assignment Help</title>
    <meta name="distribution" content="Global" />
     <link rel="canonical" href="https://www.australialegalassignmenthelp.com"/>
     <meta name="robots" content="index, follow" />
     <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='success') { 
    // for login page meta content ?>
    <title>success order AustraliaLegalAssignmenthelp.com & Get Assignment Help</title>
    <meta name="distribution" content="Global" />
     <link rel="canonical" href="https://www.australialegalassignmenthelp.com"/>
     <meta name="robots" content="index, follow" />
     <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='order-details') { 
    // for login page meta content ?>
    <title>order-details order AustraliaLegalAssignmenthelp.com & Get Assignment Help</title>
    <meta name="distribution" content="Global" />
     <link rel="canonical" href="https://www.australialegalassignmenthelp.com"/>
     <meta name="robots" content="index, follow" />
     <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<?php if ($this->uri->segment(1)=='new-assignment') { 
    // for login page meta content ?>
    <title>new-assignment order AustraliaLegalAssignmenthelp.com & Get Assignment Help</title>
    <meta name="distribution" content="Global" />
     <link rel="canonical" href="https://www.australialegalassignmenthelp.com/new-assignment"/>
     <meta name="robots" content="index, follow" />
     <meta name="googlebot" content="index, follow" />
    <meta name="author" content="https://www.australialegalassignmenthelp.com"/>
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="https://www.australialegalassignmenthelp.com/" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<?php } ?>
<meta name="google-site-verification" content="liVI26dpE0dLlTpYu3h_bCOlafvskcuiHFa2ITVz2T0" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166813704-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-166813704-1');
</script>
        <link rel="shortcut icon" href="<?= base_url();?>assets/img/favicon.ico" type="image/x-icon">
        <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/flaticon-set.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/magnific-popup.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/owl.carousel.min.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/owl.theme.default.min.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/animate.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/css/bootsnav.css" rel="stylesheet" />
        <link href="<?= base_url();?>assets/style.css" rel="stylesheet">
        <link href="<?= base_url();?>assets/css/responsive.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
        <!-- for review rating Css -->
        <link href="<?= base_url();?>assets/css/jquery.rateyo.min.css" rel="stylesheet" />

    </head>
    <body>
        <!-- Preloader Start 
        <div class="se-pre-con"></div>-->
        <!-- Preloader Ends -->
        <!-- Start Header Top
        ============================================= -->
        <div class="top-bar-area address-two-lines bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8  col-sm-8 address-info">
                        <div class="info box">
                            <ul>
                               
                                <li>
                                    <span><i class="fas fa-envelope-open"></i> Email</span>enquiry@australialegalassignmenthelp.com
                                </li>
                               <!--  <li>
                                    <span><i class="fas fa-phone"></i> Contact</span><?php echo $webconfig->other_mobile;?>
                                </li>-->
                            </ul>
                            
                          
                        </div>
                    </div>
                    
                    <div class="col-md-8 col-xs-4 col-sm-8 mobile-info">
                        <p>
                            <?php if($webconfig->facebook!=''){ ?>
                           <a href="<?= $webconfig->facebook;?>"><span><i class="fab fa-facebook-square" aria-hidden="true"></i></span> </a>  <?php } ?>
                                
                             <?php if($webconfig->twitter!=''){ ?>   
                            <a href="<?= $webconfig->twitter;?>"><span><i class="fab fa-linkedin-in"></i></span> </a>  <?php } ?>
                              <?php if($webconfig->linkedin!=''){ ?>  
                            <a href="<?= $webconfig->linkedin;?>"><span><i class="fab fa-twitter" aria-hidden="true"></i></span> </a> <?php } ?>
                               
                        </p>
                          
                    </div>
                    
                    <div class="text-right col-xs-8 col-sm-4 col-md-4">
 
  <div class="btn-group btn-group-warning" style="margin-top: -18px">
      <button class="btn btn-warning  btn-10"  data-toggle="dropdown" type="button">My Orders</button>
      <button data-toggle="dropdown" class="btn btn-warning   btn-10 dropdown-toggle" type="button"><span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
                <?php if(isset($_COOKIE["wssinfotech_login"])){ ?>
                 <li><a href="<?= base_url();?>my-profile" >My Profile</a></li>
                <?php } else { ?>
                    <li class="text-center"> 
                        <a href="<?= base_url();?>login">
                            <button class="btn btn-10" type="button">Sign In</button>
                        </a>

                        <div class="new-user-container">
                      <p>New User? <a href="<?= base_url();?>register">Start here.</a> </p>
                      </div>


                    </li>
                <?php } ?>
                <li><a href="<?= base_url();?>new-assignment">New Assignment</a></li>
                <li><a href="<?= base_url();?>my-order">My Order</a></li>
                <li><a href="<?= base_url();?>my-wallet">My Wallet</a></li>
                <li><a href="<?= base_url();?>my-offers">My Offers</a></li>
                <li><a href="<?= base_url();?>downloads">My Downloads</a></li>
                <?php if(isset($_COOKIE["wssinfotech_login"])){ ?>
                    <li><a href="<?= base_url();?>logout" >Logout</a></li>
                <?php }  ?>
      </ul>
  </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->
        <!-- Header 
        ============================================= -->
        <header id="home">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default navbar-sticky bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?= base_url();?>">
                            <img src="<?php echo base_url();?>assets/setting/<?php echo $webconfig->company_logo;?>" class="logo" alt="Logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                            <li class="<?php if($menus=='home'){?>active<?php } ?>">
                                <a href="<?= base_url();?>" >Home</a>
                                
                            </li>
                            
<li class="dropdown megamenu-fw <?php if($menus=='assignment'){?>active<?php } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            
<?php foreach($all_category as $master_category){ 


        $this->db->select('*');
        $this->db->from('add_products');
        $this->db->where('category',$master_category->id);
        $this->db->order_by('id','ASC');
        $all_assignment = $this->db->get();

    ?>

        <div class="col-menu <?php if($catrow==1){ echo 'col-md-12'; } else if($catrow==2){ echo 'col-md-6'; } else { echo 'col-md-4'; } ?> ">
          
                    <ul class="menu-col ">
<?php foreach($all_assignment->result() as $finalassignment){ ?>
<li>
    <a href="<?= base_url();?>assignment/<?= $finalassignment->id;?>/<?= slugify($finalassignment->title);?>">
        <?= $finalassignment->title;?>
    </a>
</li>
<?php } ?>
                </ul>
            
        </div><!-- end col-3 -->
<?php } ?>

                                                     <div class="col-menu col-md-4">
                                                     
                                                    </div><!-- end col-3 -->
                                                    </div><!-- end row -->
                                                </li>
                                            </ul>
                                        </li>
                                        
<li class=" <?php if($menus=='blogs'){?>active<?php } ?>"><a href="<?= base_url();?>blog">Blog</a></li>
<li class=" <?php if($menus=='reviews'){?>active<?php } ?>"><a href="<?= base_url();?>reviews">Reviews<mark style="background-color: #feb506">
    
    <?php if($reviewavg>=0){ echo $reviewavg; } else { echo 0; }  ?>/5</mark></a></li>





<li class=" <?php if($menus=='contact'){?>active<?php } ?>"><a href="<?= base_url();?>contact">contact</a>
                                            </li>
<a class="btn btn-10" href="<?= base_url();?>order-step-1">Order Now</a>
                                        </ul>
                                        </div><!-- /.navbar-collapse -->
                                    </div>
                                </nav>
                            </header>
   <?php 
        function slugify($text){
            // replace non letter or digits by -
            $text = preg_replace('~[^\pL\d]+~u', '-', $text);
            // transliterate
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
            // remove unwanted characters
            $text = preg_replace('~[^-\w]+~', '', $text);
            // trim
            $text = trim($text, '-');
            // remove duplicated - symbols
            $text = preg_replace('~-+~', '-', $text);
            // lowercase
            $text = strtolower($text);
            if (empty($text)) {
              return 'n-a';
            }
            return $text;
        }
    ?>