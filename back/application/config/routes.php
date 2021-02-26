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
|	example.com/class/method/id/
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = 'user/index';
$route['404_override'] = '';

/*admin*/
$route['admin'] = 'user/index';
$route['admin/signup'] = 'user/signup';
$route['admin/create_member'] = 'user/create_member';
$route['admin/login'] = 'user/index';
$route['admin/logout'] = 'user/logout';
$route['admin/login/validate_credentials'] = 'user/validate_credentials';

$route['admin/pengguna'] = 'admin_pengguna/index';
$route['admin/pengguna/add'] = 'admin_pengguna/add';
$route['admin/pengguna/update'] = 'admin_pengguna/update';
$route['admin/pengguna/update/(:any)'] = 'admin_pengguna/update/$1';
$route['admin/pengguna/delete/(:any)'] = 'admin_pengguna/delete/$1';
$route['admin/pengguna/(:any)'] = 'admin_pengguna/index/$1'; //$1 = page number

$route['admin/products'] = 'admin_products/index';
$route['admin/products/add'] = 'admin_products/add';
$route['admin/products/update'] = 'admin_products/update';
$route['admin/products/update/(:any)'] = 'admin_products/update/$1';
$route['admin/products/delete/(:any)'] = 'admin_products/delete/$1';
$route['admin/products/(:any)'] = 'admin_products/index/$1'; //$1 = page number

$route['admin/agenda'] = 'admin_agenda/index';
$route['admin/agenda/add'] = 'admin_agenda/add';
$route['admin/agenda/update'] = 'admin_agenda/update';
$route['admin/agenda/update/(:any)'] = 'admin_agenda/update/$1';
$route['admin/agenda/delete/(:any)'] = 'admin_agenda/delete/$1';
$route['admin/agenda/(:any)'] = 'admin_agenda/index/$1'; //$1 = page number

$route['admin/pengaduan'] = 'admin_pengaduan/index';
$route['admin/pengaduan/add'] = 'admin_pengaduan/add';
$route['admin/pengaduan/update'] = 'admin_pengaduan/update';
$route['admin/pengaduan/update/(:any)'] = 'admin_pengaduan/update/$1';
$route['admin/pengaduan/delete/(:any)'] = 'admin_pengaduan/delete/$1';
$route['admin/pengaduan/(:any)'] = 'admin_pengaduan/index/$1'; //$1 = page number

$route['admin/berita'] = 'admin_berita/index';
$route['admin/berita/add'] = 'admin_berita/add';
$route['admin/berita/update'] = 'admin_berita/update';
$route['admin/berita/update/(:any)'] = 'admin_berita/update/$1';
$route['admin/berita/delete/(:any)'] = 'admin_berita/delete/$1';
$route['admin/berita/(:any)'] = 'admin_berita/index/$1'; //$1 = page number

$route['admin/dokumen'] = 'admin_dokumen/index';
$route['admin/dokumen/add'] = 'admin_dokumen/add';
$route['admin/dokumen/update'] = 'admin_dokumen/update';
$route['admin/dokumen/update/(:any)'] = 'admin_dokumen/update/$1';
$route['admin/dokumen/delete/(:any)'] = 'admin_dokumen/delete/$1';
$route['admin/dokumen/(:any)'] = 'admin_dokumen/index/$1'; //$1 = page number

$route['admin/galeri'] = 'admin_galeri/index';
$route['admin/galeri/add'] = 'admin_galeri/add';
$route['admin/galeri/update'] = 'admin_galeri/update';
$route['admin/galeri/update/(:any)'] = 'admin_galeri/update/$1';
$route['admin/galeri/delete/(:any)'] = 'admin_galeri/delete/$1';
$route['admin/galeri/(:any)'] = 'admin_galeri/index/$1'; //$1 = page number

$route['admin/manufacturers'] = 'admin_manufacturers/index';
$route['admin/manufacturers/add'] = 'admin_manufacturers/add';
$route['admin/manufacturers/update'] = 'admin_manufacturers/update';
$route['admin/manufacturers/update/(:any)'] = 'admin_manufacturers/update/$1';
$route['admin/manufacturers/delete/(:any)'] = 'admin_manufacturers/delete/$1';
$route['admin/manufacturers/(:any)'] = 'admin_manufacturers/index/$1'; //$1 = page number

$route['admin/unit_kerja'] = 'admin_unit_kerja/index';
$route['admin/unit_kerja/add'] = 'admin_unit_kerja/add';
$route['admin/unit_kerja/update'] = 'admin_unit_kerja/update';
$route['admin/unit_kerja/update/(:any)'] = 'admin_unit_kerja/update/$1';
$route['admin/unit_kerja/delete/(:any)'] = 'admin_unit_kerja/delete/$1';
$route['admin/unit_kerja/(:any)'] = 'admin_unit_kerja/index/$1'; //$1 = page number


/* End of file routes.php */
/* Location: ./application/config/routes.php */