<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_p3a extends CI_model {

	/// P3A

	public function simpan_p3a($data)
	{
		$this->db->insert('t_p3a_data',$data);
	}

	public function simpan_usulan($data)
	{
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

	public function hapus($kunci)
	{
		$this->db->where('nama_p3a',$kunci);
		$this->db->delete('t_p3a_data',$data);
	}

	public function hapus_usulan($kunci)
	{
		$this->db->where('id_usulan',$kunci);
		$this->db->delete('t_p3a_usulan');
	}


	public function tampil_p3a()
	{
		return $this->db->query("SELECT * FROM t_p3a_data");
	}

	public function tampil_p3a_usulan()
	{
		return $this->db->query("SELECT * FROM t_p3a_usulan");
	}

	public function tampil_p3a_list($cari){		
		return $this->db->query("SELECT * FROM t_p3a_data WHERE nama_p3a LIKE '%$cari%'");
	}

	public function cek_p3a($kunci)
	{
		return $this->db->query("SELECT * FROM t_p3a_data WHERE nama_p3a = '$kunci'");
	}

	public function cek_usulan($kunci)
	{
		return $this->db->query("SELECT * FROM t_p3a_usulan WHERE id_usulan = '$kunci'");
	}


} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */