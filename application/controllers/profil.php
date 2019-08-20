<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}

	public function index()
	{
		redirect('profil/sejarah');
	}
	public function sejarah()
	{
		$isi['content'] = 'profil/sejarah';
		$isi['sidebar'] = 'sidebar/sidebar-profil';
		$this->load->view('template', $isi);
	}
	public function visi_misi()
	{
		$isi['content'] = 'profil/visi-misi';
		$isi['sidebar'] = 'sidebar/sidebar-profil';
		$this->load->view('template', $isi);
	}
	public function struktur_organisasi()
	{
		$isi['content'] = 'profil/struktur';
		$isi['sidebar'] = 'sidebar/sidebar-profil';
		$this->load->view('template', $isi);
	}

	public function tugas_dan_fungsi()
	{
		$isi['content'] = 'profil/tugas-dan-fungsi';
		$isi['sidebar'] = 'sidebar/sidebar-profil';
		$this->load->view('template', $isi);
	}
	public function info_pejabat()
	{
		$isi['content'] = 'profil/info-pejabat';
		$isi['sidebar'] = 'sidebar/sidebar-profil';
		$this->load->view('template', $isi);
	}

	public function lokasi()
	{
		$isi['content'] = 'profil/lokasi';
		$isi['sidebar'] = 'sidebar/sidebar-profil';
		$this->load->view('template', $isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */