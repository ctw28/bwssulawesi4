<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permintaan_data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_web');

	}
	public function index()
	{
		$isi['content'] = 'permintaan-data/permintaan-data-home';
		$isi['sidebar'] = 'permintaan';
		$isi['terbaru']	= $this->model_web->berita_terbaru();
		$this->load->view('template', $isi);		
	}	
	public function panduan()
	{
		$this->load->model('model_web');
		$isi['content'] = 'permintaan-panduan';
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();
		$this->load->view('template-galeri', $isi);		
	}	
	
	public function pengkodean(){
		$str = "";
		$characters = array_merge(range('A','Z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < 6; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		echo $str;
	}

	public function form_permintaan_data()
	{
		$isi['content'] = 'permintaan-form';
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		
		$isi['nama'] ='';
		$isi['instansi'] = '';
		$isi['nama_peminta'] = '';
		$isi['email'] = '';
		$isi['telp'] = '';
		$isi['tujuan'] = '';
		$isi['pekerjaan'] = '';
		$isi['deskripsi'] = '';
		$this->load->view('template-galeri', $isi);		
	}	

	public function poling_kepuasan()
	{
		$isi['content'] = 'permintaan-poling';
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		

		$this->load->view('template-galeri', $isi);		
	}	
	public function succes()
	{
		$isi['content'] = 'permintaan-sukses';
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		

		$this->load->view('template-galeri', $isi);		
	}	
			
	public function simpan_minta_data()
	{
		$kode_permintaan = "";
		$characters = array_merge(range('A','Z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < 6; $i++) {
			$rand = mt_rand(0, $max);
			$kode_permintaan .= $characters[$rand];
		}
		// echo $str;
		// $data['email'] = mysql_real_escape_string($this->input->post('email'));
		// $data['no_telp'] = mysql_real_escape_string($this->input->post('telp'));
		$data['instansi'] = mysql_real_escape_string($this->input->post('instansi'));
		$data['nama_peminta'] = mysql_real_escape_string($this->input->post('nama'));
		$data['email'] = mysql_real_escape_string($this->input->post('email'));
		$data['no_telp'] = mysql_real_escape_string($this->input->post('telp'));
		$data['tujuan'] = mysql_real_escape_string($this->input->post('tujuan'));
		$data['pekerjaan'] = mysql_real_escape_string($this->input->post('pekerjaan'));
		$data['deskripsi'] = mysql_real_escape_string($this->input->post('deskripsi'));
		$data['kode_permintaan'] = $kode_permintaan;

		$config = Array('protocol' => 'smtp','smtp_host' => 'ssl://smtp.googlemail.com','smtp_port' => 465,'smtp_user' => 'mbandrigo@gmail.com','smtp_pass' => 'changetheworld28',);
	 	
	 	$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('mbandrigo@gmail.com', 'BWS SULAWESI IV KENDARI');
		$this->email->to($data['email']);
		$this->email->subject("PERMINTAAN DATA");
		$this->email->message("Terima Kasih, atas permintaan data anda. Kode Permintaan Data Anda adalah ".$kode_permintaan.". Gunakan kode ini untuk melihat status permintaan data anda");
		// $isi=urlencode("Terima kasih telah melakukan permintaan data. Kode Permintaan Data Anda adalah ".$kode_permintaan);
		// $hp=str_replace('+62', '0', $data['no_telp']);
		// $hp=str_replace(' ', '', $hp);
		// $hp=str_replace('.', '', $hp);
		// $hp=str_replace(',', '', $hp);
		// $ho=trim($hp);
		// $url="https://reguler.zenziva.net/apps/smsapi.php?userkey=jb1kq2&passkey=changetheworld28&nohp=$hp&pesan=$isi";
		// $kirim=file_get_contents($url);
		// if(eregi('success', $kirim)){
		// 	$hasil='1';
		// }else{
		// 	$hasil='0';
		// }


$userkey="obg831"; // userkey lihat di zenziva
$passkey="ggwp"; // set passkey di zenziva

// $message="Terima Kasih, pendaftaran atas nama $nama telah berhasil di cpnsonline.com. Silahkan baca dan download petunjuk selanjutnya. Harap Maklum";
// $message="Terima kasih telah melakukan permintaan data. Kode Permintaan Data Anda adalah ".$kode_permintaan;
$message="Ada Permintaan Data Baru pada web BWS SULAWESI IV KENDARI";
$telepon  ="+6285241800852";
$url = "https://reguler.zenziva.net/apps/smsapi.php";
$curlHandle = curl_init();
curl_setopt($curlHandle, CURLOPT_URL, $url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
curl_setopt($curlHandle, CURLOPT_POST, 1);
$results = curl_exec($curlHandle);
curl_close($curlHandle);
	  	

	  	$data['surat_pengantar'] = $this->upload_files();
	  	if (empty($data['surat_pengantar'])) {
		    $this->session->set_flashdata('info_gagal', "<p class='upload-failed'>Upload Surat Pengantar Gagal! Mohon Cek kembali surat pengantar anda.<ul><li>File Surat Pengantar Harus dalam bentuk .pdf</li><li>Ukuran File Surat Pengantar Maksimal 5MB</li></ul></p>");
		    $this->session->set_flashdata('nama', $data['nama_peminta']);
		    $this->session->set_flashdata('telp', $data['no_telp']);
		    $this->session->set_flashdata('instansi', $data['instansi']);
		    $this->session->set_flashdata('email', $data['email']);
		    $this->session->set_flashdata('tujuan', $data['tujuan']);
		    $this->session->set_flashdata('pekerjaan', $data['pekerjaan']);
		    $this->session->set_flashdata('deskripsi', $data['deskripsi']);
		    redirect('permintaan_data/form_permintaan_data', 'refresh');
	  	}
	  	else if(!$this->email->send()) {
		    // if (!$this->email->send() OR $hasil=='0') {
		    $this->session->set_flashdata('info', 'Maaf, email yang anda masukkan tidak berlaku');
			$isi['nama_peminta'] = $this->input->post('nama');
			 // echo $this->email->print_debugger();
		    redirect('permintaan_data/form_permintaan_data', $isi);
	  	}
	  	else {
			$this->db->set('time', 'NOW()', FALSE);
			$this->db->insert('t_permintaan_data',$data);
			$status['kode_permintaan'] = $kode_permintaan;
			$status['status'] = "Permintaan Terkirim";
			$status['downlod_surat_pengantar'] = "Belum";
			$this->db->set('tgl', 'NOW()', FALSE);
			$this->db->insert('t_permintaan_status',$status);
		    $this->session->set_flashdata('info', 'Permintaan data anda telah terkirim');
		    redirect('permintaan_data/sukses');
	 	}
	// redirect('permintaan_data/poling_kepuasan');	
	}

	private function upload_files()
	{
		$type = explode('.', $_FILES["userfile"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$maxsize = 1024 * 5000; // maksimal 200 KB (1KB = 1024 Byte)
        $url = "./assets/file_upload/permintaan/".array_pop(array_reverse(explode(".", $_FILES["userfile"]["name"]))).'.'.$type;
        if($_FILES['userfile']['size']>$maxsize OR $_FILES['userfile']['size']==0){
		    return ""; 
        }
        else
        {
            if($type=="pdf")
                if(is_uploaded_file($_FILES["userfile"]["tmp_name"]))
                    if(move_uploaded_file($_FILES["userfile"]["tmp_name"],$url))
                        return $url;
            return "";
        }
	    return ""; 
    
	}
	public function sukses()
	{
		$isi['content'] = 'permintaan-sukses';
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		

		$this->load->view('template-galeri', $isi);		
	}	

	public function status()
	{
		session_start();
		$isi['content'] = 'permintaan-status';
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		
		$_SESSION['kode'] = $this->input->post('kode_permintaan');
		$isi['data_status'] = $this->model_web->permintaan_status($_SESSION['kode']);	

		if($isi['data_status']->num_rows()>0){
			$this->load->view('template-galeri', $isi);		
		}	
		else{
		    $this->session->set_flashdata('info', 'Maaf, kode permintaan yang anda masukkan tidak terdaftar');
		    redirect('permintaan_data');
		}

	}	

	public function simpan_poling()
	{
		$data['syarat'] = $this->input->post('r1');
		$data['kemudahan'] = $this->input->post('r2');
		$data['kecepatan'] = $this->input->post('r3');
		$data['respon'] = $this->input->post('r4');
		$data['penjelasan'] = $this->input->post('r5');
		$data['sarana'] = $this->input->post('r6');
		$data['fasilitas'] = $this->input->post('r7');
		$data['saran'] = $this->input->post('saran');
		$this->db->set('tgl', 'NOW()', FALSE);
		$this->db->insert('t_poling',$data);
		
		redirect('permintaan_data/download_data');
		
	}

	public function download_data(){
		session_start();

		$kode = $_SESSION['kode'];
		if(empty($kode)){
			redirect('permintaan_data');
		}
		else{
		$this->load->model('model_web');
		$downloadnya=0;
		$query = $this->model_web->permintaan_status($kode);	
		if ($query->num_rows()>0)      //jika data sudah ada maka update
		{
			foreach ($query -> result() as $row) {
				$filenya = $row->filenya;
				$downloadnya = $row->total_download;
			}
		}
		$downloadnya=$downloadnya+1;
		$this->db->where('kode_permintaan', $kode);
		$this->db->set('total_download', $downloadnya);
		$this->db->update('t_permintaan_status');

		header('Content-Description: File Transfer');
	    header('Content-Type: application/octet-stream');
	    header('Content-Disposition: attachment; filename="'.basename($filenya).'"');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: ' . filesize($filenya));
	    readfile($filenya);
	    exit;			
		}

	}

} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */