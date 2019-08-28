<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->model('model_web');

		$news 					= $this->model_web->news(6);
		$isi['agenda']	        = $this->model_web->agenda();
		$isi['pemberitahuan'] 	= $this->model_web->pemberitahuan();
		$isi['pengumuman'] 		= $this->model_web->pengumuman();
        $videos          = $this->model_web->showVideosByLimit(3);
		
        foreach ($videos->result() as $video) {
            $isi['videos']['videoThumb'][] = $video->img_thumb;
            $isi['videos']['videoEmbed'][] = $video->embed_url;
        }

		$i=0;
        foreach ($news->result() as $value) {
            $value->seo_title = $this->textToHTML($value->judul_berita);
            $value->time_indo = $this->ChangeIndonesiaFormat($value->tanggal_publish);
            $value->isi_berita = htmlentities($value->isi_berita);

            if ($i==0) {
                $isi['main_news'] = $value;
                $i++;
            }
            else{
                $value->judul_berita = substr($value->judul_berita,0, 60);
                $isi['other_news'][] = $value;
            }
        }

		foreach ($isi['agenda']->result() as $tes) {
            $tes->detail_agenda = $this->textToHTML($tes->detail_agenda);
            $tes->tgl_agenda = $this->ChangeIndonesiaFormat($tes->tgl_agenda);
        }
        // echo json_encode($isi['videos']);
		$this->load->view('home', $isi);
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
    function textToHTML($text){
        $string = htmlentities($text);
        $trim=trim($string);
        $HTMLText = strtolower(str_replace(" ", "-", $trim));
        return $HTMLText;
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */