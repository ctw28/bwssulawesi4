<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "Beranda";

$route['news/(:any)'] = 'berita/selengkapnya/$1';

$route['profil/visi-misi'] = 'profil/visi_misi';
$route['profil/tugas-dan-fungsi'] = 'profil/tugas_dan_fungsi';
$route['profil/struktur-organisasi'] = 'profil/struktur_organisasi';
$route['profil/info-pejabat'] = 'profil/info_pejabat';
$route['profil/lokasi-kantor'] = 'profil/lokasi_kantor';

$route['p3a/peta-lokasi'] = 'p3a/peta_lokasi';
$route['p3a/database-p3a'] = 'p3a/database_p3a';




$route['peta-kegiatan/(:any)'] = 'peta_kegiatan/$1'; 
$route['data-info-sda/(:any)'] = 'data_informasi_sda/$1'; 
$route['permintaan-data'] = 'permintaan_data'; 

$route['404_override'] = 'notfound';
$route['translate_uri_dashes'] = FALSE;
