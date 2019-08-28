<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layanan_publik extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}

	public function saran_pengaduan()
	{	
		$isi['content'] = 'layanan/saran-pengaduan';
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
	
	public function simpan()
	{
		session_start();
		$data['nama'] = $this->check_variable(strip_tags($this->input->post('nama')));
		$data['no_hp'] = $this->check_variable($this->input->post('hp'));
		$data['email'] = $this->check_variable($this->input->post('email'));
		$data['isi_pengaduan'] = $this->check_variable($this->input->post('isi'));
		$bad_boot = $this->input->post('bad_boot');
		if(isset($bad_boot) && $bad_boot!=""){
			// redirect('kontak');
			die();
		}

		if($_SESSION['captcha'] != $this->input->post('captcha')){
		    $this->session->set_flashdata('nama', $data['nama']);			
		    $this->session->set_flashdata('email', $data['email']);			
		    $this->session->set_flashdata('hp', $data['no_hp']);			
		    $this->session->set_flashdata('pesan', $data['isi_pengaduan']);			
		    $this->session->set_flashdata('status', "gagal");			
			redirect('layanan-publik/saran-pengaduan');
			die();
		}

		$this->db->set('tgl', 'NOW()', FALSE);
		$this->load->model('model_web');
		$this->model_web->pengaduan_tambah($data);
	    $this->session->set_flashdata('status', "sukses");			
		redirect('layanan-publik/saran-pengaduan');
	}

	function check_variable($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
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