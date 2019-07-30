<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_model {

	// untuk QRUD Galeri Foto

	public function tampil_admin()
	{
		return $this->db->get('t_admins');
	}
	public function ambil_id_akhir()
	{
		return $this->db->query("SELECT * FROM t_admins ORDER BY id_admin DESC limit 1");
	}

	public function cek_admin($kunci)
	{
		$this->db->where('id_admin',$kunci);
		$hasil = $this->db->get('t_admins');
		return $hasil;
	}

	public function simpan_admin($data)
	{
		$this->db->set('tgl', 'NOW()', FALSE);		
		$this->db->insert('t_admins',$data);
	}

	public function edit_admin($kunci, $data)
	{
		$this->db->where('id_admin', $kunci);
		$this->db->update('t_admins', $data);
	}

	public function hapus_admin($kunci)
	{
		$this->db->where('id_admin', $kunci);
		$this->db->delete('t_admins');
	}
} 


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */