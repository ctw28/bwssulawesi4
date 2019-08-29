<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');
	}
	
	public function foto()
	{
		if(empty($this->uri->segment(3)))
		{
			redirect('galeri/foto/kegiatan-balai');
		}
		else {
			$kategori = $this->uri->segment(3);
		}
		$albums = $this->model_web->showAlbum($kategori);
		$i=0;
		foreach ($albums->result() as $row) {
			$isi['kategoriTitle'] = $row->nama_kategori;
			$data[$i] = $this->model_web->getAlbumCover($row->id_album);
			$data[$i]['albumTitleSeo'] = $row->judul_album_seo;
			$data[$i]['albumTitle'] = $row->judul_album;
			$i++;
		}
		$isi['albums']		= $data;
		$isi['albumCount'] 	= $albums->num_rows();
		$isi['sideMenu'] 	= $this->model_web->getGaleriKategori();

		$isi['content'] = 'galeri/foto-tampil';
		$isi['sidebar'] = 'sidebar/sidebar-galeri-foto';
		$this->load->view('template', $isi);
	}	

	public function album()
	{
		$album = $this->uri->segment(3);
		$isi['sideMenu'] 	= $this->model_web->getGaleriKategori();
		$photos 			= $this->model_web->showPhotos($album);
		$isi['photosCount'] = $photos->num_rows();
		foreach ($photos->result() as $photo) {
			$isi['albumId'] = $photo->id_album;
			$isi['albumTitle'] = $photo->judul_album;
			$isi['uploadedDate'] = $photo->tgl_buat;
			$isi['uploadedBy'] = $photo->oleh;
			$isi['photos'][] = $photo->foto;
		}
		$isi['content'] 	= 'galeri/album-tampil';
		$isi['sidebar'] 	= 'sidebar/sidebar-galeri-foto';
		$this->load->view('template', $isi);
	}

	public function video()
	{
		$isi['content'] = 'galeri/video';
		$isi['sidebar'] = 'sidebar/sidebar-galeri-video';
		if(empty($this->uri->segment(3)))
		{
			redirect('galeri/video/infrastruktur');
		}
		else {
			$kategori = $this->uri->segment(3);
		}
		$isi['videosAlbum']		= $this->model_web->showVideosAlbum($kategori);
		$isi['albumCount'] 	= $isi['videosAlbum']->num_rows();
		$isi['sideMenu'] 	= $this->model_web->getGaleriKategoriVideos();

		$this->load->view('template', $isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */