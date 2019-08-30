<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	
	public function index()
	{
		$isi['content'] = 'publikasi/pengumuman';
		$isi['sidebar'] = 'sidebar/sidebar-publikasi';
		$this->load->model('model_web');
		$isi['terbaru']=$this->model_web->news();


		$isi['announcements'] = $this->model_web->getPengumumanData();

		$this->load->view('template', $isi);
	}

	public function selengkapnya()
	{
		$isi['content'] = 'pengumuman';
		$isi['sidebar'] = 'sidebar/sidebar-news';
		$this->load->model('model_web');
		$isi['terbaru']=$this->model_web->news();

		$key = $this->uri->segment(3);
		$this->db->where('id_pengumuman', $key);
		$query = $this->db->get('t_pengumuman');

		if($query->num_rows()>0){
			foreach ($query -> result() as $row) {
				$isi['judul'] = $row->judul_pengumuman;
				$isi['tanggal'] = $row->tgl_pengumuman;
				$isi['filenya'] = $row->file_pengumuman;
			}
		}
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