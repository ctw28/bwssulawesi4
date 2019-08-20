<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}
	
	public function berita()
	{
		$isi['content'] = 'publikasi';
		$isi['sidebar'] = 'sidebar/sidebar-publikasi';
		$isi['newsList']=$this->model_web->news();


		$this->load->view('template', $isi);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */