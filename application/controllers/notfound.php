<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class notfound extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$isi['content'] = 'error-404.php';
		$isi['identity'] = 'news';
		$this->load->model('model_web');
		$isi['terbaru']	= $this->model_web->berita_terbaru();;

		$this->load->view('template', $isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */