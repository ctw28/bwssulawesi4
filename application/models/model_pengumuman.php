<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pengumuman extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id_pengumuman',$key);
		$hasil = $this->db->get('t_pengumuman');
		return $hasil;
	}
	
	public function tampil_pengumuman()
	{
		$data="SELECT * FROM t_pengumuman";
		return $this->db->query($data);
	}

	public function lihat_pengumuman_home()
	{
		$data="SELECT * FROM t_pengumuman LIMIT 3";
		return $this->db->query($data);
	}
	
	public function terbaru()
	{
		$data="SELECT * FROM t_pengumuman WHERE tampil='Ya' ORDER BY tgl_pengumuman ASC LIMIT 5";
		return $this->db->query($data);
	}
	public function hapus_data($key, $data)
	{
		$this->db->where('id_pengumuman', $key);
		$this->db->delete('t_pengumuman', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

// Kali ini CodingCenter akan berbagi ilmu tentang cara menghapus file yang ada di hosting kita, biasanya kebanyakan dari kita hanya menghapus nama path atau alamat dari suatu file. ini berguna ketika kita mengubah isi dari database dan kita ingin menghapus file kita agar penggunaan hosting bisa efisien.

// Caranya sangat mudah, tulis skrip ini di dalam file Model, untuk lebih jelas nya tentang (Model, View, Controller pada Codeigniter silakan baca disini):

// function delete($id){

//      $this->db->where('gallery_id',$id);
//      $query = $this->db->get('gallery');
//      $row = $query->row();

//      unlink("./uploads/users/$row->nama_foto");

//      $this->db->delete('gallery', array('gallery_id' => $id));

// }


// fungsi unlink itu adalah fungsi yang digunakan untuk menghapus file, pertama kita tentukan tempat nya, kemudian kita menentukan nama file yang ingin kita hapus sesuai dengan nama file yang ada di database, silakan sesuaikan sendiri dengan nama table dan nama fieldnya.

// Semoga artikel ini bermanfaat dan jika ada kesalahan mohon berikan kritik dan sarannya.

// Sumber: http://www.tomcatz.in/2012/12/cara-menghapus-file-dengan-php.html