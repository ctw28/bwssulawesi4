<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_map extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}

	public function index()
	{
		$isi['content'] = 'site-map';
		$isi['sidebar'] = 'sidebar/sidebar-profil';
		$isi['terbaru']=$this->model_web->news();
		foreach ($isi['terbaru'] -> result() as $row) {
			$row->newsUrl = $this->newsUrl($row->judul_berita);
			$row->newsDate = $this->ChangeIndonesiaFormat($row->tanggal_publish,'');
            $row->newsTitle = substr($row->judul_berita,0, 25);
		}
		$this->load->view('template', $isi);
	}
	function newsUrl($newsTitle){
      	$string = htmlentities($newsTitle);
        $trim=trim($string);
        $url = strtolower(str_replace(" ", "-", $trim));
        return $url;
	}

    function limitWords($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }

    function ChangeIndonesiaFormat($dateTime, $fullDateTime){
        $year = date("Y", strtotime($dateTime));
        $date = date("d", strtotime($dateTime));
        $day = date("w", strtotime($dateTime));
        $month = date("n", strtotime($dateTime));
        $time = date("H:i", strtotime($dateTime));
        $dayName = array("Minggu","Senin", "Selasa","Rabu", "Kamis","Jumat","Sabtu");
        $monthName = array("","Jan", "Feb","Mar", "Apr","Mei","Juni","Juli", "Agust","Sept", "Okt","Nov","Des");
        if($fullDateTime=='full')
        return $dayName[$day].", ".$date." ". $monthName[$month] ." ". $year." ".$time." WITA";
    	else
        return $dayName[$day].", ".$date." ". $monthName[$month] ." ". $year;


    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */