<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Album extends CI_Controller {


	public function index()
	{
	}

	public function tampil_album(){
		$isi['content'] = 'album-tampil';
		// $isi['sidebar'] = 'berita-sidebar';
		$key = $this->uri->segment(3);
		$this->load->model('model_web');
		$isi['album'] = $this->model_web->tampil_album();
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		
		$isi['foto'] = $this->model_web->tampil_foto_album($key);
		$isi['foto_lain'] = $this->model_web->tampil_foto();
		$i=0;
		foreach ($isi['foto'] -> result() as $row2) {
			$i++;
		}
		$isi['jml_foto'] = $i;

		$album = $this->model_web->tampil_album();
		foreach ($album -> result() as $row) {
			if($row->id_album==$key){
				$isi['id_album'] = $row->id_album;
				$isi['judul_album'] = $row->judul_album;				
				$isi['tanggal_publish'] = $row->tgl_buat;				
				$isi['oleh'] = $row->oleh;				
			}
		}
		$isi['album_lainnya'] = $album;
		$this->load->view('template-galeri', $isi);		
	}

	public function semua_album(){
		$isi['content'] = 'album-semua';
		// $isi['sidebar'] = 'berita-sidebar';
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		
		$isi['foto'] = $this->model_web->tampil_foto();
		$isi['album'] = $this->model_web->tampil_album();
		
		$i=0;
		foreach ($isi['album'] -> result() as $row) {
			$i++;
		}

		$isi['jml_album'] = $i;
		$this->load->view('template-galeri', $isi);		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */