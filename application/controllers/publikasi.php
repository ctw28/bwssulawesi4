<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}
	
	public function berita()
	{
		$isi['content'] = 'publikasi/publikasi-berita';
		$isi['sidebar'] = 'sidebar/sidebar-publikasi';
		$dataPerPage = 10;

		if(empty($this->uri->segment(4))){			
			$page = 1;
			$offset = 0;
		}
		else{			
			$page = $this->uri->segment(4);
			$offset = $dataPerPage*($page-1);
		}


		$isi['newsList']	= $this->model_web->news($dataPerPage, $offset);
		$newsTotal			= $this->model_web->news(100)->num_rows();
		$isi['totalPage']	= ceil($newsTotal / $dataPerPage);
		foreach ($isi['newsList'] -> result() as $row) {
			$row->newsUrl = $this->newsUrl($row->judul_berita);
            $row->newsText = substr($row->isi_berita,0, 250);
		}
		$this->load->view('template', $isi);
	}


	function newsUrl($newsTitle){
      	$string = htmlentities($newsTitle);
        $trim=trim($string);
        $url = strtolower(str_replace(" ", "-", $trim));
        return $url;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */