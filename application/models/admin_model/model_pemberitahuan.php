<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pemberitahuan extends CI_model {

    public function tampil_data_pemberitahuan()
    {
        return $this->db->query("SELECT * FROM t_pemberitahuan ORDER BY tgl_pemberitahuan DESC");
    }

    public function cek($key)
    {
        $this->db->where('id_pemberitahuan',$key);
        $hasil = $this->db->get('t_pemberitahuan');
        return $hasil;
    }

	public function ambil_id_akhir()
	{
		return $this->db->query("SELECT * FROM t_pemberitahuan ORDER BY id_pemberitahuan DESC limit 1");
	}

    public function simpan($data)
    {
        $this->db->set('tgl_pemberitahuan', 'NOW()', FALSE);
        $this->db->insert('t_pemberitahuan',$data);
    }

    public function edit($kunci, $data)
    {
        $this->db->where('id_pemberitahuan', $kunci);
        $this->db->set('tgl_pemberitahuan', 'NOW()', FALSE);
        $this->db->update('t_pemberitahuan', $data);
    }

    public function hapus($kunci)
    {
        $this->db->where('id_pemberitahuan', $kunci);
        $this->db->delete('t_pemberitahuan');
    }

} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */