<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'front';
$route['404_override'] = 'front/notfound';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'home';
$route['login'] = 'user/login';
$route['simulasi']          = 'front/simulasi';
$route['tryout/(:num)']     = 'front/tryout/$1';
$route['soal/(:num)/(:num)']= 'front/soal/$1/$2';
$route['register']          = 'front/soal_register';
$route['variasi']           = 'front/variasi';
$route['petunjuk/(:num)']   = 'front/petunjuk/$1';
$route['ready/(:num)']		= 'front/ready/$1';
$route['kerjakan/(:num)']   = 'front/kerjakan/$1';
$route['hasil']             = 'front/hasil';