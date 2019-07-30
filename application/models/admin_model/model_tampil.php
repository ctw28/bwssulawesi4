<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_tampil extends CI_model {

	public function data_berita()
	{
		$data="SELECT * FROM t_berita";
		$jumlah=mysql_num_rows(mysql_query($data));
		return $jumlah;
	}

	public function data_pengumuman()
	{
		$data="SELECT * FROM t_pengumuman";
		$jumlah=mysql_num_rows(mysql_query($data));
		return $jumlah;
	}

	public function data_sip()
	{
		$data="SELECT * FROM t_sip_file";
		$jumlah=mysql_num_rows(mysql_query($data));
		return $jumlah;
	}

	public function data_foto()
	{
		$data="SELECT * FROM t_kategori_foto";
		$jumlah=mysql_num_rows(mysql_query($data));
		return $jumlah;
	}

	public function tampil_album_foto()
	{
		return $this->db->get('t_galeri_foto_album');
	}

	public function simpan_kategori_foto()
	{
		$this->db->set('tgl', 'NOW()', FALSE);		
		$this->db->insert('t_galeri_foto_kategori',$data);
	}










	public function data_video()
	{
		$data="SELECT * FROM t_galeri_video";
		$jumlah=mysql_num_rows(mysql_query($data));
		return $jumlah;
	}

	public function data_permintaan()
	{
		$data="SELECT * FROM t_permintaan_data";
		$jumlah=mysql_num_rows(mysql_query($data));
		return $jumlah;
	}

	public function data_permintaan_notif()
	{
		$data="SELECT * FROM t_permintaan_data td INNER JOIN t_permintaan_status ts ON td.kode_permintaan=ts.kode_permintaan WHERE status='Permintaan Terkirim'";
		$jumlah=mysql_num_rows(mysql_query($data));
		return $jumlah;
	}

	public function data_pengaduan()
	{
		$data="SELECT * FROM t_pengaduan";
		$jumlah=mysql_num_rows(mysql_query($data));
		return $jumlah;
	}

	public function data_poling()
	{
		$data="SELECT * FROM t_poling";
		$jumlah=mysql_num_rows(mysql_query($data));
		return $jumlah;
	}

	public function data_pengunjung($bulan)
	{
		$data="SELECT * FROM counter WHERE MONTH(tanggal) = $bulan AND YEAR(tanggal)=2019";
		return mysql_num_rows(mysql_query($data));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */