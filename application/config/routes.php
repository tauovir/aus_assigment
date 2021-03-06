<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/home';
$route['home'] = 'pages/home';
$route['login'] = 'pages/login';
$route['no-internet-connection'] = 'pages/noInternetConnection';
$route['logout'] = 'pages/logout';
$route['about-us'] = 'pages/about';
$route['services'] = 'pages/services';
$route['register'] = 'pages/register';
$route['register/(:any)'] = 'pages/register/$1';
$route['registration-successfull'] = 'pages/regiter_success';
$route['forget-password'] = 'pages/forgot_password';
$route['forget-password/(:any)'] = 'pages/forgot_password/$1';

$route['order-step-1'] = 'pages/step_one_order';
$route['order-step-1/(:any)'] = 'pages/step_one_order/$1';
$route['order-step-2'] = 'pages/step2';
$route['order-step-2/(:any)'] = 'pages/step2/$1';
$route['order-step-2/(:any)/(:any)'] = 'pages/step2/$1/$1';

$route['order-step3/(:any)'] = 'pages/order_step3/$1';
$route['order-step3/(:any)/(:any)'] = 'pages/order_step3/$1/$1';
$route['paypal/(:any)'] = 'pages/paypal/$1';
$route['contact'] = 'pages/contact';
$route['contact/(:any)'] = 'pages/contact/$1';
$route['reviews'] = 'pages/reviews';
$route['faq'] = 'pages/faq';
$route['terms-and-condition'] = 'pages/terms_n_conditions';
$route['privacy-policy'] = 'pages/privacy_polocy';
$route['license'] = 'pages/license';
$route['features'] = 'pages/features';
$route['revision-and-refund-policy'] = 'pages/privacy';
$route['how-it-work'] = 'pages/how_it_work';
$route['blog'] = 'pages/blogs';
$route['blog/(:any)/(:any)'] = 'pages/blogs/$1/$1';
$route['assignment/(:any)/(:any)'] = 'pages/assignment/$1/$1';
$route['assignment/(:any)/(:any)/(:any)'] = 'pages/assignment/$1/$1/$1';
$route['dashboard'] = 'pages/dashboard';
$route['cancel/(:any)'] = 'pages/cancel/$1';
$route['success/(:any)'] = 'pages/success/$1';
$route['cancel/(:any)/(:any)'] = 'pages/cancel/$1/$1';
$route['my-profile'] = 'pages/profile/';
$route['my-profile/(:any)'] = 'pages/profile/$1';
$route['my-offers'] = 'pages/referral/';
$route['my-order'] = 'pages/dashboard/';
$route['my-orders'] = 'pages/dashboard/';
$route['my-wallet'] = 'pages/wallet';
$route['order-details/(:any)'] = 'pages/track_order';
$route['downloads'] = 'pages/downloads';
$route['new-assignment'] = 'pages/NewAssignment';
$route['new-assignment/(:any)'] = 'pages/NewAssignment/$1';
$route['pages/privacy-policy'] = 'pages/privacy_polocy';
$route['pages/why-choose-us'] = 'pages/why_choose_us';
$route['pages/terms-and-conditions'] = 'pages/terms_n_conditions';
$route['pages/forgot-password'] = 'pages/forgot_password';

$route['404_override'] = 'pages/error404';
$route['translate_uri_dashes'] = FALSE;
$route['success-flash'] = 'MyFlashController/success';
$route['error-flash'] = 'MyFlashController/error';
$route['warning-flash'] = 'MyFlashController/warning';
$route['info-flash'] = 'MyFlashController/info';