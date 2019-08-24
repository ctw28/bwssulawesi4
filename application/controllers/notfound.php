<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class notfound extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}
	public function index()
	{
		$isi['terbaru']	= $this->model_web->news();
		foreach ($isi['terbaru'] -> result() as $row) {
			$row->newsUrl = $this->newsUrl($row->judul_berita);
			$row->newsDate = $this->ChangeIndonesiaFormat($row->tanggal_publish);
            $row->newsTitle = substr($row->judul_berita,0, 15);
		}
		$isi['content'] = 'error-404.php';
		$isi['sidebar'] = 'sidebar/sidebar-news';
		$this->load->view('template', $isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */