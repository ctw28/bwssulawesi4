<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keamanan_admin extends CI_model {

	public function keamanan()
	{
		// $user =$this->session->userdata('logged_in');
		
		
		if ($this->session->userdata('logged_in')) {
			// redirect('admin_utama');
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_admin']; $isi['level'] = $session_data['level'];
		}
		else{
			$this->session->sess_destroy();
			redirect('admin/login');
		}
	}

	// public function keamanan_sip()
	// {
	// 	$session_data = $this->session->userdata('logged_in');
	// 	$user = $this->session->userdata('username');
	// 	if (empty($user)) {
	// 		$this->session->sess_destroy();
	// 		redirect('login_sip');
	// 	}
	// }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */