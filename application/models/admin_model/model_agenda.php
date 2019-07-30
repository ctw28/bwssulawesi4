<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_agenda extends CI_model {

    public function tampil_data_agenda()
    {
        return $this->db->query("SELECT * FROM t_agenda ORDER BY tgl_agenda DESC");
    }

    public function ambil_id_akhir()
    {
        return $this->db->query("SELECT * FROM t_agenda ORDER BY id_agenda DESC limit 1");
    }

    public function cek($key)
    {
        $this->db->where('id_agenda',$key);
        $hasil = $this->db->get('t_agenda');
        return $hasil;
    }

    public function simpan($data)
    {
        $this->db->set('tgl_upload', 'NOW()', FALSE);
        $this->db->insert('t_agenda',$data);
    }

    public function edit($kunci, $data)
    {
        $this->db->where('id_agenda', $kunci);
        $this->db->update('t_agenda', $data);
    }

    public function hapus($kunci)
    {
        $this->db->where('id_agenda', $kunci);
        $this->db->delete('t_agenda');
    }

} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */