<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {


	public function index()
	{

		$this->load->model('model_web');

		$isi['agenda'] 			= $this->model_web->agenda();		
		$isi['pemberitahuan'] 	= $this->model_web->pemberitahuan();
		$isi['gambar_banner'] 	= $this->model_web->slide_banner();
		$isi['berita_utama'] 	= $this->model_web->berita_utama();
		$isi['berita_lainnya'] 	= $this->model_web->berita_lainnya();
		$isi['pengumuman'] 		= $this->model_web->pengumuman();
		$isi['album'] 			= $this->model_web->tampil_album();
		$isi['foto'] 			= $this->model_web->tampil_foto();
		$isi['Video_balai'] 	= $this->model_web->tampil_video();
		$isi_judul				= $this->model_web->total_klik();
		
		if ($isi_judul)
		{
		    $isi['klik'] = $isi_judul;
		}
		
		$this->load->view('home', $isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */