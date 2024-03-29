<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['staff'] = 'auth/staff';
//$route['global_presence'] = 'home/global_presence';
$route['history'] = 'home/history';
//$route['mission'] = 'home/mission';
//$route['press_release'] = 'home/press_release';
$route['team'] = 'home/team';
$route['training'] = 'home/training';
$route['subjects'] = 'course_categories';
$route['uploadedbystaff'] = 'librarymanagement/uploadedbystaff';


$route['explore'] = 'page/explore';
$route['courses'] = 'page/coursesList';
$route['myassignments'] = 'page/myassignments';
$route['books'] = 'page/books';
$route['class_schedules'] = 'page/class_schedules';
$route['zukulee_events'] = 'page/zukulee_events';
$route['articles'] = 'page/articles';




//$route['why'] = 'home/why';

/*****membership end*******/
//$route['certifications'] = 'home/certifications';

//$route['certifications/(:num)'] = 'page/cms/$1';

//$route['view-member'] = 'auth/get_by_userType/'.USER;

//$route['view-editor'] = 'auth/get_by_userType/'.EDITOR;





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



$route['default_controller'] = 'home/index';



$route['admin'] = 'auth/login';





$route['logmeout'] = 'auth/userlogout';

$route['myorder'] = 'home/userorder';

$route['profile'] = 'home/profile';

$route['checForMin'] = 'cart/checForMin';

$route['confirm'] = 'cart/confirm';

$route['get-detail'] = 'user/getdetail';

$route['join'] = 'page/join';



$route['checkout'] = 'cart/checkout';

$route['finish'] = 'cart/finish';

$route['payment_success'] = 'stripe/success';



//$route['services'] = 'page/services';

/******cms pages*******/

$route['privacy-policy'] = 'page/cms/2';

$route['terms'] = 'page/cms/3';

$route['about-us'] = 'page/cms/4';
$route['become-a-freelancer'] = 'page/cms/5';


$route['faq'] = 'page/faq';





//$route['contact'] = 'page/contact';

$route['login'] = 'page/login';









$route['view_users'] = 'auth/view_users';

$route['add-user'] = 'auth/create_user';



$route['add-rout/(:num)'] = 'bus/rout/saveData/$1';



//$route['freelancers/(:num)/(:any)'] = 'freelancers/filterbycategory/$1';



//$route['categoryfilter/(:num)/(:any)'] = 'freelancers/filterbycategory/$1';

$route['freelancers/(:any)'] = 'freelancers/profile/$1';

$route['freelancers/(:any)/(:any)'] = 'freelancers/servicedetail/$1/$2';



$route['seller/editservice(:num)'] = 'seller/editservice/$1';

$route['news/(:any)'] = 'news/detail/$1';

$route['disputeconversation/(:num)'] = 'disputeconversation/index/$1';







//$route['default_controller'] = 'home/index';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;









