<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id_berita',$key);
		$hasil = $this->db->get('t_berita');
		return $hasil;
	}
	
	public function getdata2($key)
	{
		$this->db->where('judul_berita',$key);
		$hasil = $this->db->get('t_berita');
		return $hasil;
	}

	public function tambah_data($data)
	{
		$this->db->set('tanggal_publish', 'NOW() + INTERVAL 1 DAY', FALSE);
		$this->db->insert('t_berita',$data);
	}

	public function update_data($key, $data)
	{
		$this->db->where('judul_berita', $key);
		$this->db->update('t_berita', $data);
	}

	public function hapus_data($key, $data)
	{
		$this->db->where('id_berita', $key);
		$this->db->delete('t_berita', $data);
	}





	public function lihat_data()
	{
		$data="SELECT * FROM t_berita";
		return $this->db->query($data);
	}

	public function lihat_data_permintaan()
	{
		$data="SELECT * FROM t_minta_data";
		return $this->db->query($data);
	}

	public function lihat_data_file()
	{
		$data="SELECT * FROM t_file";
		return $this->db->query($data);
	}

	public function lihat_data_galeri()
	{
		$data="SELECT * FROM t_kategori_galeri";
		return $this->db->query($data);
	}

	public function lihat_data_sip()
	{
		$data="SELECT * FROM t_file_sip";
		return $this->db->query($data);
	}

	
	public function lihat_data_pengumuman()
	{
		$data="SELECT * FROM t_pengumuman";
		return $this->db->query($data);
	}
	
	public function lihat_data_video()
	{
		$data="SELECT * FROM t_video";
		return $this->db->query($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */