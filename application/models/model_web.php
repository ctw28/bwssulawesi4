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

	public function news()
	{
		return $this->db->query("SELECT * FROM t_berita ORDER BY tanggal_publish DESC LIMIT 6");
	}

	public function berita_terbaru()
	{
		return $this->db->query("SELECT * FROM t_berita ORDER BY tanggal_publish DESC LIMIT 5");
	}

	public function berita_foto_lainnya($id)
	{
		return $this->db->query("SELECT * FROM t_berita_foto WHERE id_berita=$id LIMIT 4");
	}

	public function total_klik()
	{
		return $this->db->query("SELECT * FROM t_berita WHERE year(tanggal_publish)=2016 ORDER BY klik DESC LIMIT 5");
	}
	
	public function berita_populer()
	{
		return $this->db->query("SELECT * FROM t_berita ORDER BY klik DESC, tanggal_publish DESC LIMIT 4");
	}

	public function berita_terkait()
	{
		return $this->db->query("SELECT * FROM t_berita ORDER BY RAND() LIMIT 4");
	}	

	public function semua_berita()
	{
		return $this->db->query("SELECT * FROM t_berita ORDER BY tanggal_publish DESC");
	}

	public function total_berita()
	{
		return mysql_num_rows(mysql_query("SELECT * FROM t_berita"));
	}


	//GALERI FOTO HOME

	public function tampil_album()
	{
		// $data="SELECT * FROM t_galeri_foto_album a INNER JOIN t_galeri_foto g ON a.id_album=g.id_album ORDER BY a.tgl_buat DESC LIMIT 3";
		$data="SELECT * FROM t_galeri_foto_album ORDER BY tgl_buat ";
		return $this->db->query($data);
	}

	public function tampil_foto()
	{
		// $data="SELECT * FROM t_galeri_foto_album a INNER JOIN t_galeri_foto g ON a.id_album=g.id_album ORDER BY a.tgl_buat DESC LIMIT 3";
		$data="SELECT * FROM t_galeri_foto ORDER BY id_foto";
		return $this->db->query($data);
	}

	public function tampil_foto_album($key)
	{
		// $data="SELECT * FROM t_galeri_foto_album a INNER JOIN t_galeri_foto g ON a.id_album=g.id_album ORDER BY a.tgl_buat DESC LIMIT 3";
		$data="SELECT * FROM t_galeri_foto WHERE id_album ='$key'";
		return $this->db->query($data);
	}

	// AGENDA //////////////////////////////////////////////////////////////////////////////////////////////////////

	public function agenda()
	{
		$data="SELECT * FROM t_agenda WHERE tampil='Ya' ORDER BY tgl_agenda DESC";
		return $this->db->query($data);
	}

	// PENGUMUMAN //////////////////////////////////////////////////////////////////////////////////////////////////////

	public function pengumuman()
	{
		$data="SELECT * FROM t_pengumuman WHERE tampil='Ya' ORDER BY tgl_pengumuman DESC";
		return $this->db->query($data);
	}


	// VIDEO ///////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function tampil_video()
	{
		$data="SELECT * FROM t_galeri_video";
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