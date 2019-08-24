<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}

	public function index()
	{	
		$isi['content'] = 'kontak';
		$isi['sidebar'] = 'sidebar/sidebar-news';
		$isi['terbaru']	= $this->model_web->news();;
		foreach ($isi['terbaru'] -> result() as $row) {
			$row->newsUrl = $this->newsUrl($row->judul_berita);
			$row->newsDate = $this->ChangeIndonesiaFormat($row->tanggal_publish);
            $row->newsTitle = substr($row->judul_berita,0, 15);
		}
		$isi['nama'] = '';
		$isi['email'] = '';
		$isi['hp'] = '';
		$isi['pesan'] = '';
	
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

    function ChangeIndonesiaFormat($dateTime){
        $year = date("Y", strtotime($dateTime));
        $date = date("d", strtotime($dateTime));
        $day = date("w", strtotime($dateTime));
        $month = date("n", strtotime($dateTime));
        $time = date("H:i", strtotime($dateTime));
        $dayName = array("Minggu","Senin", "Selasa","Rabu", "Kamis","Jumat","Sabtu");
        $monthName = array("","Jan", "Feb","Mar", "Apr","Mei","Juni","Juli", "Agust","Sept", "Okt","Nov","Des");
        return $dayName[$day].", ".$date." ". $monthName[$month] ." ". $year." ".$time." WITA";
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */