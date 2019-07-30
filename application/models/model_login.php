<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_model {

	// public function index()
	// {
	// 	return 
	// }

	public function getlogin($u, $p)
	{
		$pass=md5($p);
		$this->db->where('username', $u);
		$this->db->where('password', $pass);
		$query_admin = $this->db->get('t_admins');
		if ($query_admin->num_rows()>0) {
			foreach ($query_admin->result() as $row_admin) {
				$sess_admin = array('username' => $row_admin->username, 'pass' => $pass,
							  'nama_admin' => $row_admin->nama_admin);
				$this->session->set_userdata('logged_in', $sess_admin);
				redirect('admin_utama');
			}
		}
		else {
			$this->session->set_flashdata('info', 'Maaf Username atau Password salah');
			redirect('http://180.250.222.253');
		}
	}

	
} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */