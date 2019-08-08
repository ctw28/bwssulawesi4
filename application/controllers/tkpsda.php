<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tkpsda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}
	public function index()
	{
		$isi['content'] = 'tkpsda/tkpsda-kegiatan';
		$isi['sidebar'] = 'sidebar/sidebar-tkpsda';

		$this->load->view('template', $isi);
	}
	public function dasar_pembentukan()
	{
		$isi['content'] = 'tkpsda/tkpsda-pembentukan';
		$isi['sidebar'] = 'sidebar/sidebar-tkpsda';
		$this->load->view('template', $isi);
	}
	public function keanggotaan()
	{
		$isi['content'] = 'tkpsda/tkpsda-keanggotaan';
		$isi['sidebar'] = 'sidebar/sidebar-tkpsda';
		$this->load->view('template', $isi);
	}
	public function tugas()
	{
		$isi['content'] = 'tkpsda/tkpsda-tugas';
		$isi['sidebar'] = 'sidebar/sidebar-tkpsda';
		$this->load->view('template', $isi);
	}
	public function sekretariat()
	{
		$isi['content'] = 'tkpsda/tkpsda-sekretariat';
		$isi['sidebar'] = 'sidebar/sidebar-tkpsda';
		$this->load->view('template', $isi);
	}
	public function kegiatan(){
		$isi['content'] = 'tkpsda/tkpsda-kegiatan';
		$isi['sidebar'] = 'sidebar/sidebar-tkpsda';
		$this->load->view('template', $isi);		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */