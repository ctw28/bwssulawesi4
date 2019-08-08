<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}

	public function index()
	{	
		$isi['content'] = 'kontak';
		$isi['sidebar'] = 'sidebar/sidebar-news';
		$isi['terbaru']	= $this->model_web->berita_terbaru();;
		$isi['nama'] = '';
		$isi['email'] = '';
		$isi['hp'] = '';
		$isi['pesan'] = '';
	
		$this->load->view('template', $isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */