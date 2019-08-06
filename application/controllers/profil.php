<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}
	public function sejarah()
	{
		$isi['terbaru']	= $this->model_web->berita_terbaru();;
		$isi['content'] = 'profil-sejarah';
		$isi['identity'] = 'profil';
		$this->load->view('template', $isi);
	}
	public function visi_misi()
	{
		$isi['terbaru']	= $this->model_web->berita_terbaru();;
		$isi['content'] = 'profil-visi-misi';
		$isi['identity'] = 'profil';
		$this->load->view('template', $isi);
	}
	public function struktur_organisasi()
	{
		$isi['terbaru']	= $this->model_web->berita_terbaru();;
		$isi['content'] = 'profil-struktur';
		$isi['identity'] = 'profil';
		$this->load->view('template', $isi);
	}

	public function tugas_dan_fungsi()
	{
		$isi['terbaru']	= $this->model_web->berita_terbaru();;
		$isi['content'] = 'profil-tugas-dan-fungsi';
		$isi['identity'] = 'profil';
		$this->load->view('template', $isi);
	}

	public function kepegawaian()
	{
		$isi['terbaru']	= $this->model_web->berita_terbaru();;
		$isi['content'] = 'profil-kepegawaian';
		$isi['identity'] = 'profil';
		$this->load->view('template', $isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */