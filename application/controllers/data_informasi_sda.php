<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_informasi_sda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_web');
	}
	public function index()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/sda-keterangan';
		$this->load->view('template', $isi);
	}
	
	public function di()
	{
        $file = "assets/file_upload/data_sda/di.csv";
        $i=0;
        $startRowData = 0;
        ini_set("auto_detect_line_endings", 1);
        $handle = fopen($file, "r");
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
        {
            if($startRowData>8){
                $lat  = $filesop[65];
                $long  = $filesop[66];
                $i % 2 == 0 ? $background = 'F0F9FC' : $background = 'fff';
                $data[$i]['background'] = $background;
                $data[$i][] = $i+1;
                $data[$i][] = $filesop[1] ;
                $data[$i][] = $filesop[2];
                $data[$i][] = $filesop[3] ;
                $data[$i][] = $filesop[7];
                $data[$i][] = $filesop[8];
                $data[$i][] = $filesop[9] ;
                $data[$i][] = $filesop[10];
                $data[$i][] = $lat." , ".$long;
                $i++;                
            }
       		$startRowData++;
        }
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';
		$isi['content'] = 'data-info-sda/sda-di';
        $isi['data'] = $data;
        $isi['last_update'] = date ("d F Y", filemtime($file));
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

		$$data = $this->model_web->hidrologi_pos_hujan();

		$isi['content'] = 'data-info-sda/sda-hidrologi-pos-hujan';
		$this->load->view('template', $isi);
	}	
	public function hidrologi_pos_klimatologi()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';

		$$data = $this->model_web->hidrologi_pos_klimatologi();

		$isi['content'] = 'data-info-sda/sda-hidrologi-pos-klimatologi';
		$this->load->view('template', $isi);
	}	
	public function hidrologi_pos_duga_air()
	{
		$isi['sidebar'] = 'sidebar/sidebar-data-info-sda';

		$$data = $this->model_web->hidrologi_pos_duga_air();

		$isi['content'] = 'data-info-sda/sda-hidrologi-pos-duga-air';
		$this->load->view('template', $isi);
	}	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */