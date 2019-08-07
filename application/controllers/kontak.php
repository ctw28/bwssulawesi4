<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {


	public function index()
	{

		
		$isi['content'] = 'kontak';
		$isi['nama'] = '';
		$isi['email'] = '';
		$isi['hp'] = '';
		$isi['pesan'] = '';
	
		$this->load->view('template', $isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */