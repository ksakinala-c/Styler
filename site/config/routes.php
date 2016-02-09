<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved
| routes must come before any wildcard or regular expression routes.
|
*/

$route['default_controller'] = "home";
$route['mens-shirts'] = "home/mensshirts";
$route['book_appointment/stylior_at_your_premises'] = "appointment/schedule_appointment";
$route['our-story'] = "home/page/1";
$route['contact-us'] = "home/contactus";
$route['corporate-orders'] = "home/corporate_orders";
$route['payment-policy'] = "home/page/2";
$route['privacy-policy'] = "home/page/3";
$route['terms-conditions'] = "home/page/5";
$route['disclaimer'] = "home/page/10";
$route['shipment-return-policy'] = "home/page/4";
$route['sign-in'] = "home/login";
$route['registration'] = "home/registration";
$route['registration/(:any)'] = "home/registration/$1";
$route['reset-password'] = "home/reset_password";
$route['insider-signin'] = "home/ilogin";
$route['insider-registration'] = "home/iregistration";

$route['affiliate-registration'] = "home/aregistration";
$route['affiliate-signin'] = "home/alogin";

$route['category/(:any)'] = "home/category/$1";
$route['product/(:any)/(:any)'] = "home/details/$1/$2";
$route['style/(:any)'] = "home/style/$1";
$route['page/(:any)'] = "home/page1/$1";
$route['404_override'] = '';

$route['scaffolding_trigger'] = "";
/*
$route['logout'] = "home/logout";
$route['signin'] = "home/signin";

$route['home/register'] = "home/register";
$route['home/login']    = "home/login";
$route['hauth/login/(:any)']    = "hauth/login/$1";
$route['hauth/endpoint'] = "hauth/endpoint";

$route['city/(:any)'] = "category/citywise/$1";
$route['model/(:any)'] = "model/modelwise/$1";

$route['category/(:any)/(:any)'] = "category/lists/$1/$2";
$route['mobile/(:any)'] = "mobile/lists/$1/$2";

$route['account/add'] = "account/add/$1/$2"; 
$route['account/edit_user_profile'] = "account/edit_user_profile"; 
$route['account/details'] = "account/details"; 
$route['account/change_password']="account/change_password";
$route['account/lists']="account/lists/$1";*/



 
/* End of file routes.php */
/* Location: ./system/application/config/routes.php */
