<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/home';
$route['pages/assignment-help-services'] = 'pages/testimonials';
$route['pages/assignment-help-services/(:any)'] = 'pages/testimonials/$1';
$route['pages/assignment-help-services/(:any)/(:any)'] = 'pages/testimonials/$1/$1';
$route['pages/assignment-help-services/(:any)/(:any)/(:any)'] = 'pages/testimonials/$1/$1/$1';

$route['404_override'] = 'pages/error404';
$route['translate_uri_dashes'] = FALSE;

$route['success-flash'] = 'MyFlashController/success';
$route['error-flash'] = 'MyFlashController/error';
$route['warning-flash'] = 'MyFlashController/warning';
$route['info-flash'] = 'MyFlashController/info';
$route['member/edit/(:any)'] = 'member/update/$1';
$route['member/update-save'] = 'member/update_save';

