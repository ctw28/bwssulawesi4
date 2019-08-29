<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');

	}
	public function index()
	{
		$isi['content'] = 'error-404.php';
		$isi['sidebar'] = 'sidebar/sidebar-news';
		$isi['terbaru']=$this->model_web->news();
		foreach ($isi['terbaru'] -> result() as $row) {
			$row->newsUrl = $this->newsUrl($row->judul_berita);
			$row->newsDate = $this->ChangeIndonesiaFormat($row->tanggal_publish,'');
            $row->newsTitle = substr($row->judul_berita,0, 25);
		}
		$this->load->view('template', $isi);
	}
	public function selengkapnya()
	{
		$isi['content'] = 'news/berita-selengkapnya';
		$isi['sidebar'] = 'sidebar/sidebar-news';

		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		

		$key = html_entity_decode(str_replace("-", " ", rawurldecode($this->uri->segment(2))));

		$query=$this->db->query("SELECT * FROM t_berita WHERE judul_berita=\"$key\"");
		$id = 164;

		if($query->num_rows()==0){
			redirect('berita');
		}
		else if($query->num_rows()>0){
			foreach ($query -> result() as $row) {
				$isi['judul'] = $row->judul_berita;
				$isi['tanggal'] = $this->ChangeIndonesiaFormat($row->tanggal_publish, 'full');
				$isi['isi'] = $row->isi_berita;
				$isi['foto'] = $row->foto;
				$isi['kategori'] = $row->id_kategori;
				$isi['klik'] = $row->klik;			
				$isi['oleh'] = $row->by;			
			}
		}
		$isi['terbaru']=$this->model_web->news();
		foreach ($isi['terbaru'] -> result() as $row) {
			$row->newsUrl = $this->newsUrl($row->judul_berita);
			$row->newsDate = $this->ChangeIndonesiaFormat($row->tanggal_publish,'');
            $row->newsTitle = substr($row->judul_berita,0, 25);
		}
		$isi['foto_lain']=$this->model_web->berita_foto_lainnya($id);
		$isi['title'] = ucwords($key);
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















	public function semua()
	{
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		

		$isi['content'] = 'berita-semua';
		$isi['sidebar'] = 'berita-sidebar';

		$isi['semua']=$this->model_web->semua_berita();
		$isi['total']=$this->model_web->total_berita();

		$isi['terbaru']=$this->model_web->total_klik();
		$isi['populer']=$this->model_web->berita_populer();

		$this->load->view('template-lain', $isi);		
	}		

	public function cari_berita()
	{
		$isi['content'] = 'berita-hasil-pencarian';
		$isi['sidebar'] = 'berita-sidebar';

		$cari=$this->input->post('cari');
		$isi['kata_cari']=$cari;

		$query="SELECT * FROM t_berita WHERE judul_berita LIKE '%$cari%' ORDER BY tanggal_publish DESC";
		
		$isi['data']=$this->db->query($query);
		
		$this->load->model('model_web');		
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		
		$isi['terbaru']=$this->model_web->berita_terbaru();
		$isi['populer']=$this->model_web->berita_populer();
		
		$this->load->view('template-lain', $isi);		
	}	

} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */