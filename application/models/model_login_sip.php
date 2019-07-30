<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login_sip extends CI_model {

	public function auth_sip($u, $p)
	{
		$pass=md5($p);
		$this->db->where('username', $u);
		$this->db->where('password', $pass);

		$query = $this->db->get('t_sip_user');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array('username' => $row->username,
								'foto_user_sip' => $row->foto_user_sip, 'jabatan' => $row->jabatan,
							  'nama_user_sip' => $row->nama_user_sip );
				$this->session->set_userdata('logged_in',$sess);
				redirect('sip/dashboard');
			}
		}
		else {
			$this->session->set_flashdata('info', 'Maaf Username atau Password salahaaaaaa');
			redirect('sip/login');
		}
	}
} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */