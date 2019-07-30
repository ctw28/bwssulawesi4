<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_model {

	public function auth_admin($u, $p)
	{
		$pass=md5($p);
		$this->db->where('username', mysql_real_escape_string($u));
		$this->db->where('password',  mysql_real_escape_string($pass));
		$query_admin = $this->db->get('t_admins');
		if ($query_admin->num_rows()>0) {
			foreach ($query_admin->result() as $row_admin) {
				$sess_admin = array('username' => $row_admin->username, 'pass' => $pass, 'level' => $row_admin->level,
							  'nama_admin' => $row_admin->nama_admin);
				$this->session->set_userdata('logged_in', $sess_admin);
		        simpan_log("<b>".$sess_admin['nama_admin']."</b> login");        
				redirect('admin/utama');
			}
		}
		else {
			$this->session->set_flashdata('info', 'Maaf, Kombinasi Username dan Password salah');
			redirect('admin/login');
		}
	}


	public function auth_sip($u, $p)
	{
		$pass=md5($p);
		$this->db->where('username', $u);
		$this->db->where('password', $pass);
		$query = $this->db->get('t_sip_user');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array('username' => $row->username,
								'kategori_user' => $row->kategori_user,
								'foto_user_sip' => $row->foto_user_sip,
							  'nama_user_sip' => $row->nama_user_sip );
				$this->session->set_userdata('logged_in_sip',$sess);
				redirect('sip/utama-sip');
			}
		}
		else {
			$this->session->set_flashdata('info', 'Maaf Username atau Password salah');
			redirect('sip/login');
		}
	}


	
} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */