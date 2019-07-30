<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pengumuman extends CI_model {

    public function tampil_data_pengumuman()
    {
        return $this->db->query("SELECT * FROM t_pengumuman ORDER BY tgl_pengumuman DESC");
    }

    public function cek($key)
    {
        $this->db->where('id_pengumuman',$key);
        $hasil = $this->db->get('t_pengumuman');
        return $hasil;
    }
    public function ambil_id_akhir()
    {
        return $this->db->query("SELECT * FROM t_pengumuman ORDER BY id_pengumuman DESC limit 1");
    }

    public function simpan($data)
    {
        $this->db->set('tgl_pengumuman', 'NOW()', FALSE);
        $this->db->insert('t_pengumuman',$data);
    }

    public function edit($kunci, $data)
    {
        $this->db->where('id_pengumuman', $kunci);
        $this->db->update('t_pengumuman', $data);
    }

    public function hapus($kunci)
    {
        $this->db->where('id_pengumuman', $kunci);
        $this->db->delete('t_pengumuman');
    }

} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */