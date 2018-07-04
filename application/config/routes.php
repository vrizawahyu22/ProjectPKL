<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Halaman Admin
$route['admin'] = 'cAdmin';
$route['admin/validation'] = 'cAdmin/validation';
$route['admin/beranda'] = 'cAdmin/beranda';
$route['admin/keluar'] = 'cAdmin/keluar';

$route['admin/pic'] = 'cAdmin/lihatPIC';
$route['admin/tambahpic'] = 'cAdmin/tambahPIC';
$route['admin/validasitambahpic'] = 'cAdmin/validasiTambahPIC';
$route['admin/editpic'] = 'cAdmin/editPIC';
$route['admin/validasieditpic'] = 'cAdmin/validasiEditPIC';

$route['admin/checklist'] = 'cAdmin/lihatChecklist';
$route['admin/editchecklist'] = 'cAdmin/editChecklist';
$route['admin/infochecklist/(:any)'] = 'cAdmin/lihatInfoChecklist/$1';
$route['admin/validasieditchecklist'] = 'cAdmin/validasiEditChecklist';
// $route['admin/lihatinfoceklist'] = 'cAdmin/lihatInfoCeklist';

//Halaman User
$route['pic'] = 'cUser';
