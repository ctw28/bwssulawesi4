<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_berita extends CI_model {

	public function tampil_data_berita()
	{
		return $this->db->query("SELECT * FROM t_berita ORDER BY tanggal_publish DESC");
	}

	public function ambil_id_akhir()
	{
		return $this->db->query("SELECT * FROM t_berita ORDER BY id_berita DESC limit 1");
	}

	public function cek($key)
	{
		$this->db->where('id_berita',$key);
		$hasil = $this->db->get('t_berita');
		return $hasil;
	}
	
	public function cek_foto_lain($key)
	{
		$this->db->where('id_berita',$key);
		$hasil = $this->db->get('t_berita_foto');
		return $hasil;
	}

	public function cek_foto_galeri($key)
	{
		$this->db->where('id_berita_foto',$key);
		$hasil = $this->db->get('t_berita_foto');
		return $hasil;
	}

	public function simpan($data)
	{
		$this->db->set('tanggal_publish', 'NOW()', FALSE);
		$this->db->insert('t_berita',$data);
	}

	public function simpan_foto_lain($data)
	{
		$this->db->insert('t_berita_foto',$data);
	}

	public function edit($kunci, $data)
	{
		$this->db->where('id_berita', $kunci);
		$this->db->update('t_berita', $data);
	}

	public function hapus($kunci)
	{
		$this->db->where('id_berita', $kunci);
		$data=$this->db->query("SELECT foto FROM t_berita WHERE id_berita=$kunci");
		$fotonya = mysql_fetch_array($data);
		unlink("./assets/images/berita/".$fotonya);
		$this->db->delete('t_berita');
	}

	public function hapus_foto_lain($kunci)
	{
		$this->db->where('id_berita', $kunci);
		$data=$this->db->query("SELECT foto FROM t_berita_foto WHERE id_berita=$kunci");
		$fotonya = mysql_fetch_array($data);
		unlink($fotonya);
		$this->db->delete('t_berita_foto');
	}

	public function hapus_foto_galeri($kunci)
	{
		$this->db->where('id_berita_foto', $kunci);
		$this->db->delete('t_berita_foto');	
	}

} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */