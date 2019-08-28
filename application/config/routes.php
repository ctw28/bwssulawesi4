<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "Beranda";

$route['news/(:any)'] = 'berita/selengkapnya/$1';

$route['profil/visi-misi'] = 'profil/visi_misi';
$route['profil/tugas-dan-fungsi'] = 'profil/tugas_dan_fungsi';
$route['profil/struktur-organisasi'] = 'profil/struktur_organisasi';
$route['profil/info-pejabat'] = 'profil/info_pejabat';
$route['profil/lokasi-kantor'] = 'profil/lokasi';

$route['p3a/peta-lokasi'] = 'p3a/peta_lokasi';
$route['p3a/database-p3a'] = 'p3a/database_p3a';

$route['tkpsda/dasar-pembentukan'] = 'tkpsda/dasar_pembentukan';
$route['data-info-sda/daerah-irigasi'] = 'data_informasi_sda/di';
$route['data-info-sda/air-tanah'] = 'data_informasi_sda/air_tanah';
$route['data-info-sda/air-baku'] = 'data_informasi_sda/air_baku';
$route['data-info-sda/daerah-irigasi'] = 'data_informasi_sda/di';
$route['data-info-sda'] = 'data_informasi_sda';

$route['data-info-sda/peta-ws-sultra'] = 'data_informasi_sda/peta_ws_sultra';
$route['data-info-sda/peta-ws'] = 'data_informasi_sda/peta_ws';
$route['data-info-sda/peta-infrastruktur'] = 'data_informasi_sda/peta_infrastruktur';
$route['data-info-sda/peta-hidrologi'] = 'data_informasi_sda/peta_hidrologi';

$route['publikasi/buku-tahunan'] = 'publikasi/buku_tahunan';

$route['peta-kegiatan/(:any)'] = 'peta_kegiatan/$1'; 
$route['data-info-sda/(:any)'] = 'data_informasi_sda/$1'; 
$route['permintaan-data'] = 'permintaan_data'; 
$route['permintaan-data/online'] = 'permintaan_data/online'; 
$route['permintaan-data/manual'] = 'permintaan_data/manual'; 
$route['layanan-publik/saran-pengaduan'] = 'layanan_publik/saran_pengaduan'; 

$route['404_override'] = 'notfound';
$route['translate_uri_dashes'] = FALSE;
