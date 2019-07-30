<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sip extends CI_model {

	// untuk QRUD user SIP

	public function tampil_user()
	{
		return $this->db->get('t_sip_user');
	}
	
	public function cek_user($kunci)
	{
		$this->db->where('id_sip_user',$kunci);
		$hasil = $this->db->get('t_sip_user');
		return $hasil;
	}

	public function simpan_user($data)
	{
		$this->db->insert('t_sip_user',$data);
	}

	public function edit_user($kunci, $data)
	{
		$this->db->where('id_sip_user', $kunci);
		$this->db->update('t_sip_user', $data);
	}

	public function hapus_user($kunci, $data)
	{
		$this->db->where('id_sip_user', $kunci);
		$this->db->delete('t_sip_user', $data);
	}

	
	// untuk QRUD file SIP

	
	public function tampil_file()
	{
		return $this->db->get('t_sip_file');
	}
	
	public function cek_file($kunci)
	{
		$this->db->where('id_sip_file',$kunci);
		$hasil = $this->db->get('t_sip_file');
		return $hasil;
	}

	public function simpan_file($data)
	{
		$this->db->set('tgl', 'NOW()', FALSE);
		$this->db->insert('t_sip_file',$data);
	}

	public function edit_file($kunci, $data)
	{
		$this->db->where('id_sip_file', $kunci);
		$this->db->update('t_sip_file', $data);
	}

	public function hapus_file($kunci)
	{
		$this->db->where('id_sip_file', $kunci);
		$this->db->delete('t_sip_file');
	}

} 


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */