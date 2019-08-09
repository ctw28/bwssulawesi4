<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_informasi_sda extends CI_Controller {

	public function index()
	{
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		
		$isi['content'] = 'data-info-sda/sda-keterangan';
		$this->load->view('template', $isi);
	}
	
	public function di()
	{
		$this->load->model('model_web');
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/sda-di';
		$this->load->view('template', $isi);
	}

	public function inventarisasi_pantai()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/sda-inventarisasi-pantai';
		$this->load->view('template', $isi);
	}

	public function pantai()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/sda-pantai';
		$this->load->view('template', $isi);

	}
	public function pos_hidrologi()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/pos-hidrologi';
		$this->load->view('template', $isi);
	}
	public function air_baku()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/sda-air-baku';
		$this->load->view('template', $isi);
	}
	
	public function air_tanah()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/sda-air-tanah';
		$this->load->view('template', $isi);
	}	
	
	public function embung()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/sda-embung';
		$this->load->view('template', $isi);
	}
	public function bendung()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/sda-bendung';
		$this->load->view('template', $isi);
	}

	public function sungai()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/sda-sungai';
		$this->load->view('template', $isi);
	}	

	public function hidrologi_pos_hujan()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';

		$isi['data'] = $this->model_web->hidrologi_pos_hujan();

		$isi['content'] = 'data-info-sda/sda-hidrologi-pos-hujan';
		$this->load->view('template', $isi);
	}	
	public function hidrologi_pos_klimatologi()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';

		$isi['data'] = $this->model_web->hidrologi_pos_klimatologi();

		$isi['content'] = 'data-info-sda/sda-hidrologi-pos-klimatologi';
		$this->load->view('template', $isi);
	}	
	public function hidrologi_pos_duga_air()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';

		$isi['data'] = $this->model_web->hidrologi_pos_duga_air();

		$isi['content'] = 'data-info-sda/sda-hidrologi-pos-duga-air';
		$this->load->view('template', $isi);
	}	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */