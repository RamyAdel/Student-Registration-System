<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'admin_home/index';
$route['404_override'] = '';

$route['login'] = 'admin_user/index';
$route['logout'] = 'admin_user/logout';
$route['login/validate_credentials'] = 'admin_user/validate_credentials';
$route['forget_password'] = 'admin_user/forget_password';
$route['reset_password'] = 'admin_user/forget_password';
$route['reset_password/(:any)'] = 'admin_user/reset_password/$1';
$route['password'] = 'admin_user/password';


$route['courses'] = 'admin_courses/courses_index';
$route['plan'] = 'admin_courses/courses_plan';
$route['transcript'] = 'admin_courses/transcript';
$route['transcriptprint'] = 'admin_courses/transcriptprint';
$route['courseload'] = 'admin_courses/courseload';
$route['courseload/(:any)'] = 'admin_courses/courses_drop/$1';
$route['courses/(:any)'] = 'admin_courses/courses_i/$1';


$route['drcourses'] = 'admin_drcourses/courses_index';
$route['drcourses/add'] = 'admin_drcourses/courses_add';
$route['drcourses/update'] = 'admin_drcourses/courses_update';
$route['drcourses/update/(:any)'] = 'admin_drcourses/courses_update/$1';
$route['drcourses/grades'] = 'admin_drcourses/courses_index';
$route['drcourses/grades/(:any)'] = 'admin_drcourses/courses_grade/$1';
$route['drcourses/delete/(:any)'] = 'admin_drcourses/courses_delete/$1';
$route['drcourses/(:any)'] = 'admin_drcourses/courses_i/$1';
$route['contact']='Admin_home/contact';

$route['sprofile'] = 'admin_student/profile';

$route['drprofile'] = 'admin_dr/profile';


