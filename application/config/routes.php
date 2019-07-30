<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "Beranda";

$route['news/(:any)'] = 'berita/selengkapnya/$1'; 
$route['peta-kegiatan/(:any)'] = 'peta_kegiatan/$1'; 
$route['data-info-sda/(:any)'] = 'data_informasi_sda/$1'; 

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
