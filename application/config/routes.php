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
$route['default_controller'] = 'login';
$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;
$route['assets/(:any)'] = 'assets/$1';

//$route['black_dog_yello_cat_hey_this_is_register_only_I_can_register_you_cant_'] = 'login/register';

$route['main'] = 'menu/main';
$route['timeline'] = 'menu/timeline';
$route['commingsoon'] = 'menu/commingsoon';
$route['demo'] = 'menu/demov1';
$route['manual'] = 'menu/sitemanual';
$route['contact'] = 'menu/contact';

$route['personal_blog'] = 'personal_blog/blog_list';
$route['personal_blog_write'] = 'personal_blog/write';
$route['personal_blog_view'] = 'personal_blog/view';
$route['personal_blog_list'] = 'personal_blog/blog_list';
$route['personal_blog_alter'] = 'personal_blog/alter';
$route['api_personal_blog_write'] =  'personal_blog/write_api';
$route['api_personal_blog_delete'] =  'personal_blog/delete_api';
$route['api_personal_blog_alter'] = 'personal_blog/alter_api';
//$route['api_personal_blog_write'] = 'work/api_personal_blog_write';

$route['common_blog'] = 'common_blog/blog_list';
$route['common_blog_write'] = 'common_blog/write';
$route['common_blog_view'] = 'common_blog/view';
$route['common_blog_list'] = 'common_blog/blog_list';
$route['common_blog_alter'] = 'common_blog/alter';
$route['api_common_blog_delete'] =  'common_blog/delete_api';
$route['api_common_blog_write'] =  'common_blog/write_api';
$route['api_common_blog_alter'] = 'common_blog/alter_api';
$route['api_common_blog_comment_write'] = 'common_blog/comment_write_api';
$route['api_common_blog_comment_delete'] = 'common_blog/comment_delete_api';


$route['schedule'] =  'schedule/schedule_list';
