<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_galeri extends CI_model {

	// untuk QRUD Galeri Foto

	public function tampil_album_foto()
	{
		$this->db->order_by('tgl_buat','DESC');
		return $this->db->get('t_galeri_foto_album');
	}

	public function tampil_foto($kunci)
	{
		if($kunci==0){
			return $this->db->get('t_galeri_foto');
		}
		else{
			$this->db->where('id_album',$kunci);
			return $this->db->get('t_galeri_foto');
		}
	}
	
	public function cek_album_foto($kunci)
	{
		$this->db->where('judul_album',$kunci);
		$hasil = $this->db->get('t_galeri_foto_album');
		return $hasil;
	}

	public function cek_id_album_foto($kunci)
	{
		$this->db->where('id_album',$kunci);
		$hasil = $this->db->get('t_galeri_foto_album');
		return $hasil;
	}

	public function simpan_album_foto($data)
	{
		$this->db->set('tgl_buat', 'NOW()', FALSE);		
		$this->db->insert('t_galeri_foto_album',$data);
	}

	public function simpan_foto($data)
	{
		$this->db->insert('t_galeri_foto',$data);
	}

	public function edit_foto($kunci, $data)
	{
		$this->db->where('id_foto', $kunci);
		$this->db->update('t_galeri_foto', $data);
	}

	public function hapus_foto($kunci)
	{
		$this->db->where('id_foto', $kunci);
		$this->db->delete('t_galeri_foto');
	}

	public function hapus_foto_peralbum($kunci)
	{
		$this->db->where('id_album', $kunci);
		$this->db->delete('t_galeri_foto');
	}

	public function hapus_album($kunci)
	{
		$this->db->where('id_album', $kunci);
		$this->db->delete('t_galeri_foto_album');
	}

	
	// untuk QRUD Galeri Video

	
	public function tampil_video()
	{
		return $this->db->get('t_galeri_video');
	}
	
	public function ambil_id_akhir()
	{
		return $this->db->query("SELECT * FROM t_galeri_video ORDER BY id_video DESC limit 1");
	}

	public function cek_video($kunci)
	{
		$this->db->where('id_video',$kunci);
		$hasil = $this->db->get('t_galeri_video');
		return $hasil;
	}

	public function simpan_video($data)
	{	
		$this->db->set('tgl_upload', 'NOW()', FALSE);
		$this->db->insert('t_galeri_video',$data);
	}

	public function edit_video($kunci, $data)
	{
		$this->db->where('id_video', $kunci);
		$this->db->update('t_galeri_video', $data);
	}

	public function hapus_video($kunci, $data)
	{
		$this->db->where('id_video', $kunci);
		$this->db->delete('t_galeri_video');
	}
} 


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */