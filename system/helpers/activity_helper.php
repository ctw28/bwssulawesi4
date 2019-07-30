<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    if(!function_exists('activity_helper'))
    {
      function simpan_log($kegiatan){
      	$_logfilename = "./assets/log_".date("Y-m").".txt"; //nama log: log_2011-02

		// jika file log belum ada, buat dulu
		if(!file_exists($_logfilename)){
		    $_logfilehandler = fopen($_logfilename,'w'); #buat file dengan akses tulis penuh
		    fwrite($_logfilehandler, "/* File log administrator bwssulawesi4.com */\n"); #tulis header untuk file log, jika perlu
		    fclose($_logfilehandler);
		}else{
		    $_logfilehandler = fopen($_logfilename,'a'); #akses file dengan modus buka/tulis
		}

		// misalnya untuk aksi A
		fwrite($_logfilehandler,"\n".$kegiatan);
		fclose($_logfilehandler);
      }
    }
?>