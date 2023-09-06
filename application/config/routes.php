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
$route['default_controller'] = 'home';
$route['masuk'] = 'auth/login';
$route['auth'] = 'auth/index';
$route['daftar'] = 'auth/siigup';
$route['lupa'] = 'auth/forrgot';
$route['keluar'] = 'auth/logout';
$route['sitemap\.xml'] = 'sitemap/index';
$route['dasbord'] = 'dasbord/index';
$route['bank'] = 'bank/index';
$route['kategori'] = 'kategori/index';
$route['slide'] = 'slide/index';
$route['sub'] = 'sub/index';
$route['blog'] = 'blog/index';
$route['blog/add'] = 'blog/add';
$route['berita'] = 'berita/index';
$route['log'] = 'log/index';
$route['komentar'] = 'komentar/index';
$route['log_all'] = 'log_all/index';

$route['terms'] = 'terms/index';
$route['privacy'] = 'terms/privacy';
$route['unduh'] = 'unduh/index';
$route['panduan'] = 'panduan/index';
$route['berita/addcom'] = 'berita/addcom';
$route['cari'] = 'berita/cari';
$route['about/(:any)'] = 'home/about/$1';
$route['profile/(:any)'] = 'home/profile/$1';
$route['kusus/(:any)'] = 'home/kusus/$1';
//$route['kegiatan/(:any)'] = 'kegiatan/kegiatan_read/$1';
$route['(:any)'] = 'kegiatan/kegiatan_read/$1';
$route['profile/tags/(:any)'] = 'home/tags/$1';
//$route['berita/(:any)'] = 'berita/berita_read/$1';
$route['(:any)'] = 'berita/berita_read/$1';
$route['tags/(:any)'] = 'berita/tags/$1';
$route['kegiatan/(:any)'] = 'berita/kegiatan/$1';
$route['unduh/(:any)'] = 'unduh/unduh_read/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
