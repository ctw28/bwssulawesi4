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
		$isi['terbaru']	= $this->model_web->berita_terbaru();;
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

		if($query->num_rows()>0){
			foreach ($query -> result() as $row) {
				$isi['judul'] = $row->judul_berita;
				$isi['tanggal'] = $row->tanggal_publish;
				$isi['isi'] = $row->isi_berita;
				$isi['foto'] = $row->foto;
				$isi['kategori'] = $row->id_kategori;
				$isi['klik'] = 10;			
				$isi['oleh'] = $row->by;			
			}
		}
		$isi['terbaru']=$this->model_web->berita_terbaru();
		$isi['populer']=$this->model_web->berita_populer();
		$isi['terkait']=$this->model_web->berita_terkait();
		$isi['foto_lain']=$this->model_web->berita_foto_lainnya($id);

		$isi['title'] = ucwords($key);

		$this->load->view('template', $isi);		

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