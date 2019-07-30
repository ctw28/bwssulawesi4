<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_konten extends CI_model {

    public function tampil_data_banner()
    {
        return $this->db->query("SELECT * FROM t_konten_banner ORDER BY tgl_upload DESC");
    }

    public function ambil_id_akhir_banner()
    {
        return $this->db->query("SELECT * FROM t_konten_banner ORDER BY id_banner DESC limit 1");
    }

    public function cek_banner($key)
    {
        $this->db->where('id_banner',$key);
        $hasil = $this->db->get('t_konten_banner');
        return $hasil;
    }

    public function simpan_banner($data)
    {
        $this->db->set('tgl_upload', 'NOW()', FALSE);
        $this->db->insert('t_konten_banner',$data);
    }

    public function edit_banner($kunci, $data)
    {
        $this->db->where('id_banner', $kunci);
        $this->db->update('t_konten_banner', $data);
    }

    public function hapus_banner($kunci, $data)
    {
        $this->db->where('id_banner', $kunci);
        $this->db->delete('t_konten_banner', $data);
    }

} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */