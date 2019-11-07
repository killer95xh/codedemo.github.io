<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['profile'] = "admin/User_authentication/profile";
$route['dangky'] = "admin/User_authentication/index";


// Sale
$route['removedon/:num'] = "welcome/welcome/removedon";
$route['adddonhang'] = "welcome/welcome/adddonhang";
$route['addsale'] = "admin/welcome/addsale";
$route['adds'] = "admin/welcome/adds";

$route['donhang'] = "admin/Welcome/donhang";




$route['thanhtoan'] = "welcome/welcome/thanhtoan";
$route['loginforget'] = "admin/Main/login";
$route['resetpass/([a-zA-Z0-9\-]+)'] = "admin/Main/reset_password";
$route['forgot'] = "admin/Main/forgot";

$route['demo'] = "welcome/welcome/show";
$route['demo/:num'] = "welcome/welcome/show";

// cart
$route['addcart'] = "welcome/shop/insert";
// $route['cart/:num']	= "welcome/shop/insert";

// view
$route['trangchu'] = "welcome/welcome/index";
$route['cart'] = "welcome/shop/index";
$route['remove'] = "welcome/Shop/remove";
$route['remove/([a-zA-Z0-9\-]+)'] = "welcome/Shop/remove";


//file
$route['file'] 		= "file/index";
$route['upload'] 	= "file/upload";
$route['show'] 	= "file/checkImages";


// authentication
$route['importEX'] 			= "admin/Import/uploadData";
$route['demo'] 			= "admin/welcome/demo";




$route['genproduct'] = 'admin/Export/genproduct';
$route['exportEX'] = 'admin/Export/generateXls';

$route['denuser'] = 'admin/AdduserController/edituser';
$route['densanpham'] = 'admin/AdduserController/editProduct';
$route['add_user'] = 'admin/AdduserController/ajaxRequestPost';
$route['add_product'] = 'admin/AdduserController/ajaxProduct';
$route['about'] = 'admin/viewUser/index';
$route['about/([0-9\-]+)'] = 'admin/viewUser/$1';
$route['product'] = 'admin/viewUser/product';
$route['product/([0-9\-]+)'] = 'admin/viewUser/$1';
$route['edit_product/:num'] = "admin/welcome/edit_product";
$route['edit_user/:num'] = "admin/welcome/edit_user";
$route['del/:num'] = "admin/AdduserController/delProduct";
$route['del_user/:num'] = "admin/AdduserController/delUser";
$route['dasboard'] = 'admin/welcome/index';
$route['logout'] = 'admin/welcome/logout';
$route['resetpass'] = 'admin/welcome/resetpass';
$route['resetpass2'] = 'admin/welcome/resetpass2';
$route['login'] = 'admin/login/index';
$route['check_login'] = 'admin/login/check_login';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;