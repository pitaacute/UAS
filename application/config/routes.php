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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth
$route['login']  = 'Auth/index';
$route['logout'] = 'Auth/logout';

// Admin
$route['admin/dashboard']                    = 'Admin/dashboard';
$route['admin/kamar']                        = 'Admin/kamar';
$route['admin/kamar/tambah']                 = 'Admin/kamar_tambah';
$route['admin/kamar/simpan']                 = 'Admin/kamar_simpan';
$route['admin/kamar/edit/(:num)']            = 'Admin/kamar_edit/$1';
$route['admin/kamar/update/(:num)']          = 'Admin/kamar_update/$1';
$route['admin/kamar/hapus/(:num)']           = 'Admin/kamar_hapus/$1';
$route['admin/penghuni']                     = 'Admin/penghuni';
$route['admin/penghuni/tambah']              = 'Admin/penghuni_tambah';
$route['admin/penghuni/simpan']              = 'Admin/penghuni_simpan';
$route['admin/penghuni/edit/(:num)']         = 'Admin/penghuni_edit/$1';
$route['admin/penghuni/update/(:num)']       = 'Admin/penghuni_update/$1';
$route['admin/penghuni/hapus/(:num)']        = 'Admin/penghuni_hapus/$1';
$route['admin/pemesanan']                    = 'Admin/pemesanan';
$route['admin/pemesanan/setujui/(:num)']     = 'Admin/pemesanan_setujui/$1';
$route['admin/pemesanan/tolak/(:num)']       = 'Admin/pemesanan_tolak/$1';
$route['admin/pembayaran']                   = 'Admin/pembayaran';
$route['admin/pembayaran/tambah']            = 'Admin/pembayaran_tambah';
$route['admin/pembayaran/simpan']            = 'Admin/pembayaran_simpan';
$route['admin/pembayaran/verifikasi/(:num)'] = 'Admin/pembayaran_verifikasi/$1';
$route['admin/laporan']                      = 'Admin/laporan';
$route['admin/laporan/cetak']                = 'Admin/laporan_cetak';

// Penghuni
$route['penghuni/dashboard']    = 'Penghuni/dashboard';
$route['penghuni/kamar']        = 'Penghuni/kamar';
$route['penghuni/pesan/(:num)'] = 'Penghuni/pesan/$1';
$route['penghuni/pemesanan']    = 'Penghuni/pemesanan';
$route['penghuni/pembayaran']   = 'Penghuni/pembayaran';
