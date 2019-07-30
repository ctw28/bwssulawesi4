<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pelanggan extends CI_model {

// Untuk Permintaan Data

	public function tampil_permintaan()
	{
		$query="SELECT * FROM t_permintaan_data d INNER JOIN t_permintaan_status s WHERE d.kode_permintaan = s.kode_permintaan ORDER BY time DESC";
		return $this->db->query($query);
	}
	
	public function tampil_data_peminta($key)
	{
		$query="SELECT * FROM t_permintaan_data WHERE kode_permintaan = '$key'";
		return $this->db->query($query);
	}

	public function cek_permintaan($kunci)
	{
		$this->db->where('kode_permintaan',$kunci);
		$hasil = $this->db->get('t_permintaan_status');
		return $hasil;
	}

	public function update_status_permintaan($kunci, $status, $filenya){
		// $query = "UPDATE t_permintaan_status SET status=$status WHERE kode_permintaan=$kunci";
		// mysql_query($query);
		$this->db->where('kode_permintaan', $kunci);
		if(empty($filenya)){
			$this->db->set('status', $status);
		}
		else
		{
			$this->db->set('status', $status);
			$this->db->set('filenya', $filenya);
		}
		$this->db->update('t_permintaan_status');

	}

	public function hapus_permintaan($kunci)
	{
		$this->db->where('kode_permintaan', $kunci);
		$this->db->delete('t_permintaan_data');
		$this->db->where('kode_permintaan', $kunci);
		$this->db->delete('t_permintaan_status');	}

	// Untuk poling

	public function tampil_poling()
	{
		$data="SELECT * FROM t_poling";
		return $this->db->query($data);
	}
	
	public function cek_poling($kunci)
	{
		$this->db->where('id_poling',$kunci);
		$hasil = $this->db->get('t_poling');
		return $hasil;
	}

	public function hapus_poling($kunci, $data)
	{
		$this->db->where('id_poling', $kunci);
		$this->db->delete('t_poling', $data);
	}


	// Untuk pengaduan


	public function tampil_pengaduan()
	{
		$data="SELECT * FROM t_pengaduan ORDER BY tgl DESC";
		return $this->db->query($data);
	}

	public function cek_pengaduan($kunci)
	{
		$this->db->where('id_pengaduan',$kunci);
		$hasil = $this->db->get('t_pengaduan');
		return $hasil;
	}

	public function hapus_pengaduan($kunci, $data)
	{
		$this->db->where('id_pengaduan', $kunci);
		$this->db->delete('t_pengaduan', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */