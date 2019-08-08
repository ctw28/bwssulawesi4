<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}
	
	public function foto()
	{
		$isi['terbaru']	= $this->model_web->berita_terbaru();;
		$isi['foto'] = $this->model_web->tampil_foto();
		$isi['album'] = $this->model_web->tampil_album();
		
		$i=0;
		foreach ($isi['album'] -> result() as $row) {
			$i++;
		}

		$isi['jml_album'] = $i;
		$isi['content'] = 'galeri/foto';
		$isi['sidebar'] = 'sidebar/sidebar-galeri-foto';
		$this->load->view('template', $isi);
	}
	public function video()
	{
		$isi['terbaru']	= $this->model_web->berita_terbaru();;
		$isi['content'] = 'galeri/video';
		$isi['sidebar'] = 'sidebar/sidebar-galeri-video';
		$this->load->view('template', $isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */