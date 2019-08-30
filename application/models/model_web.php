<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_web extends CI_model {

	// PEMBERITAHUAN //////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function pemberitahuan()
	{
		return $this->db->query("SELECT * FROM t_pemberitahuan WHERE tampil='YA' ORDER BY tgl_pemberitahuan DESC");
	}

	// BANNER //////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function slide_banner()
	{
		return $this->db->query("SELECT * FROM t_konten_banner WHERE tampil='YA' ORDER BY tgl_upload DESC");
	}

	// BERITA //////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function news($limit=5, $offset=0)
	{
		return $this->db->query("SELECT * FROM t_berita ORDER BY tanggal_publish DESC LIMIT $limit OFFSET $offset");
	}
	public function newsBy($newsTitle){
		return $this->db->query("SELECT * FROM t_berita WHERE judul_berita = '$newsTitle'");
	}

	public function newsPhotosGallery($id)
	{
		return $this->db->query("SELECT * FROM t_berita_foto WHERE id_berita=$id");
	}

	public function newsAddViewer($newsId, $addView)
	{
		return $this->db->query("UPDATE t_berita SET klik = $addView WHERE id_berita=$newsId");
	}


	//GALERI FOTO HOME

	public function showAlbum($kategori)
	{
		$data="SELECT * FROM t_galeri_kategori tk INNER JOIN t_galeri_foto_album tf ON tk.id_galeri_kategori = tf.id_galeri_kategori WHERE tk.kategori_seo='$kategori'";
		return $this->db->query($data);
	}
	public function getAlbumCover($AlbumId){		
		$data="SELECT foto FROM t_galeri_foto WHERE id_album=$AlbumId LIMIT 1";
		return $this->db->query($data)->result();
	}
	public function getGaleriKategori()
	{
		$data="SELECT nama_kategori, kategori_seo, COUNT(*) as albumCount FROM t_galeri_foto_album ta INNER JOIN t_galeri_kategori tk ON ta.id_galeri_kategori=tk.id_galeri_kategori GROUP BY ta.id_galeri_kategori";
		return $this->db->query($data);
	}

	public function showPhotos($albumSeo)
	{
		$data="SELECT * FROM t_galeri_foto_album ta INNER JOIN t_galeri_foto tf ON ta.id_album=tf.id_album WHERE judul_album_seo ='$albumSeo'";
		return $this->db->query($data);
	}

	// VIDEO ///////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function showVideosAlbum($kategori)
	{
		$data="SELECT * FROM t_galeri_kategori tk INNER JOIN t_galeri_video tv ON tk.id_galeri_kategori = tv.id_galeri_kategori WHERE tk.kategori_seo='$kategori' ORDER BY tgl_upload DESC";
		return $this->db->query($data);
	}
	public function getGaleriKategoriVideos()
	{
		$data="SELECT nama_kategori, kategori_seo, COUNT(*) as albumCount FROM t_galeri_video tv INNER JOIN t_galeri_kategori tk ON tv.id_galeri_kategori=tk.id_galeri_kategori GROUP BY tv.id_galeri_kategori";
		return $this->db->query($data);
	}
	public function showVideos()
	{
		$data="SELECT * FROM t_galeri_video ORDER BY tgl_upload DESC";
		return $this->db->query($data);
	}
	public function showVideosByLimit($limit)
	{
		$data="SELECT * FROM t_galeri_video ORDER BY tgl_upload DESC LIMIT $limit";
		return $this->db->query($data);
	}
	// AGENDA //////////////////////////////////////////////////////////////////////////////////////////////////////

	public function agenda()
	{
		$data="SELECT * FROM t_agenda WHERE tampil='Ya' ORDER BY tgl_agenda DESC";
		return $this->db->query($data);
	}

	// PENGUMUMAN //////////////////////////////////////////////////////////////////////////////////////////////////////

	public function getPengumumanData()
	{
		$data="SELECT * FROM t_pengumuman ORDER BY tgl_pengumuman DESC";
		return $this->db->query($data);
	}
	public function pengumuman()
	{
		$data="SELECT * FROM t_pengumuman WHERE tampil='Ya' ORDER BY tgl_pengumuman DESC";
		return $this->db->query($data);
	}




	// PENGADUAN ///////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function pengaduan_tambah($data)
	{
		$this->db->set('tgl', 'NOW()', FALSE);
		$this->db->insert('t_pengaduan',$data);
	}


	// PERMINTAAN DATA /////////////////////////////////////////////////////////////////////////////////////////

	public function permintaan_status($kode)
	{
		return $this->db->query("SELECT * FROM t_permintaan_status stat, t_permintaan_data dat WHERE stat.kode_permintaan='$kode' AND dat.kode_permintaan='$kode'");
	}


	/// UPLOAD TDNE

	public function upload_tambah($data)
	{
		$this->db->insert('t_tdne_file',$data);
	}

	/// P3A

	public function simpan_p3a($data)
	{
		$this->db->insert('t_p3a_data',$data);
	}

	public function simpan_usulan($data)
	{
        $this->db->set('tgl_usulan', 'NOW()', FALSE);
		$this->db->insert('t_p3a_usulan',$data);
	}

	public function simpan_laporan($data)
	{
        $this->db->set('tgl_upload', 'NOW()', FALSE);
		$this->db->insert('t_p3a_pelaporan',$data);
	}

	public function update_p3a($kunci, $data)
	{
		$this->db->where('nama_p3a',$kunci);
		$this->db->update('t_p3a_data',$data);
	}

	public function tampil_p3a()
	{
		return $this->db->query("SELECT * FROM t_p3a_data ORDER BY nama_p3a ASC");
	}

	public function tampil_p3a_list($cari){		
		return $this->db->query("SELECT * FROM t_p3a_data WHERE nama_p3a LIKE '%$cari%' ORDER BY nama_p3a ASC");
	}

	public function cek_p3a($kunci)
	{
		return $this->db->query("SELECT * FROM t_p3a_data WHERE nama_p3a = '$kunci'");
	}

} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */