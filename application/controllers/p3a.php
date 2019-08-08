<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class P3a extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_web');		
	}

	public function database_p3a()
	{
		$isi['data_p3a'] = $this->model_web->tampil_p3a();				
		$isi['content'] = 'p3a/p3a-data';
		$isi['sidebar'] = 'sidebar/sidebar-p3a';

		$this->load->view('template', $isi);		
	}	

	public function usulan()
	{
		$isi['data_p3a'] = $this->model_web->tampil_p3a();				
		$isi['content'] = 'p3a/p3a-usulan';
		$isi['sidebar'] = 'sidebar/sidebar-p3a';
		$this->load->view('template', $isi);		
	}	

	public function peta_lokasi()
	{
		$isi['data_p3a'] = $this->model_web->tampil_p3a();				
		$isi['content'] = 'p3a/p3a-peta';
		$isi['sidebar'] = 'sidebar/sidebar-p3a';

		$this->load->view('template', $isi);		
	}	

	public function peta_lokasi_xml()
	{
		$this->load->model('model_web');
		$query = $this->model_web->tampil_p3a();				
		header("Content-type: text/xml");
		echo '<markers>';
		foreach ($query -> result() as $row) {
			  echo '<marker ';
			  echo 'name="' . $row->nama_p3a . '" ';
			  echo 'desa="' . $row->desa . '" ';
			  echo 'kec="' . $row->kecamatan . '" ';
			  echo 'kab="' . $row->kabupaten . '" ';
			  echo 'status_bantuan="' . $row->status_bantuan . '" ';
			  echo 'lat="' . $row->lat . '" ';
			  echo 'lng="' . $row->lang . '" ';
			  echo '/>';
		}
		echo '</markers>';

	}	

	public function tambah(){
		$isi['content'] = 'p3a-form';
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();
		$isi['nama_di']="";
		$isi['nama_p3a']="";
		$isi['desa']="";
		$isi['kecamatan']="";
		$isi['kabupaten']="";
		$isi['ketua']="";
		$isi['sekretaris']="";
		$isi['bendahara']="";
		$isi['pengamat']="";
		$isi['kepala_desa']="";
		$isi['kondisi_kelembagaan']="";
		$isi['iuran']="";
		$isi['status_badan_hukum']="";
		$isi['status_badan_hukum_tahun']="";
		$isi['akta_notaris']="";
		$isi['akta_notaris_tahun']="";
		$isi['ad_art']="";
		$isi['lat']="";
		$isi['lang']="";
		$isi['status_bantuan']="";
		$this->load->view('template-galeri', $isi);		

	}

	public function edit(){
		$isi['content'] = 'p3a-form';
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();

		$kunci = $this->uri->segment(3);
		
		$query  = $this->model_web->cek_p3a($kunci);
		if($query->num_rows()>0){
			foreach ($query -> result() as $row) {
				$isi['nama_di']=$row->nama_di;
				$isi['nama_p3a']=$row->nama_p3a;
				$isi['desa']=$row->desa;
				$isi['kecamatan']=$row->kecamatan;
				$isi['kabupaten']=$row->kabupaten;
				$isi['ketua']=$row->ketua;
				$isi['sekretaris']=$row->sekretaris;
				$isi['bendahara']=$row->bendahara;
				$isi['pengamat']=$row->pengamat;
				$isi['kepala_desa']=$row->kepala_desa;
				$isi['kondisi_kelembagaan']=$row->kondisi_kelembagaan;
				$isi['iuran']=$row->iuran;
				$isi['status_badan_hukum']=$row->status_badan_hukum;
				$isi['status_badan_hukum_tahun']=$row->status_badan_hukum_tahun;
				$isi['akta_notaris']=$row->akta_notaris;
				$isi['akta_notaris_tahun']=$row->akta_notaris_tahun;
				$isi['ad_art']=$row->ad_art;
			}
		}
		else{
			$isi['nama_di']="";
			$isi['nama_p3a']="";
			$isi['desa']="";
			$isi['kecamatan']="";
			$isi['kabupaten']="";
			$isi['ketua']="";
			$isi['sekretaris']="";
			$isi['bendahara']="";
			$isi['pengamat']="";
			$isi['kepala_desa']="";
			$isi['kondisi_kelembagaan']="";
			$isi['iuran']="";
			$isi['status_badan_hukum']="";
			$isi['status_badan_hukum_tahun']="";
			$isi['akta_notaris']="";
			$isi['akta_notaris_tahun']="";
			$isi['ad_art']="";
		}

		$this->load->view('template-galeri', $isi);		
	

	}

	public function simpan()
	{
		$this->load->model('model_web');

		$data['nama_di'] = $this->input->post('di');
		$data['nama_p3a'] = $this->input->post('nama');
		$data['desa'] = $this->input->post('desa');
		$data['kecamatan'] = $this->input->post('kec');
		$data['kabupaten'] = $this->input->post('kab');
		$data['ketua'] = $this->input->post('ketua');
		$data['sekretaris'] = $this->input->post('sekretaris');
		$data['bendahara'] = $this->input->post('bendahara');
		$data['pengamat'] = $this->input->post('pengamat');
		$data['kepala_desa'] = $this->input->post('kades');
		$data['kondisi_kelembagaan'] = $this->input->post('kondisi_kelembagaan');
		$data['iuran'] = $this->input->post('iuran');
		$data['status_badan_hukum'] = $this->input->post('sk');
		$data['status_badan_hukum_tahun'] = $this->input->post('badan_hukum_tahun');
		$data['akta_notaris'] = $this->input->post('akta');
		$data['akta_notaris_tahun'] = $this->input->post('notaris_tahun');
		$data['ad_art'] = $this->input->post('ad');
		$data['lat'] = $this->input->post('lat');
		$data['lang'] = $this->input->post('lang');
		$data['status_bantuan'] = $this->input->post('status_bantuan');
		// $data['koordinat'] = $this->input->post('kec');

		$kunci = $data['nama_p3a'];
		echo $kunci;
		$query  = $this->model_web->cek_p3a($kunci);
		echo $query->num_rows();
		if($query->num_rows()>0){
			$this->model_web->update_p3a($kunci, $data);
		}
		else{
			$this->model_web->simpan_p3a($data);
		}
		redirect('p3a/database_p3a');
	}		


	public function simpan_usulan()
	{
		$this->load->model('model_web');

		// $data['nama_di'] = $this->input->post('di');
		$data['nama_p3a'] = $this->input->post('itemName');
		$data['usulan'] = $this->input->post('uraian_usulan');
		$data['file_usulan']= $this->upload_file();
		$this->model_web->simpan_usulan($data);
		$this->session->set_flashdata('usulan_info',"Usulan telah terkirim. Mohon menunggu untuk dikonfirmasi. ");
		redirect('p3a/usulan');
	}		

	public function simpan_pelaporan()
	{
		$this->load->model('model_web');

		$data['kegiatan'] = $this->input->post('kegiatan');
		$data['jenis_laporan'] = $this->input->post('jenis_laporan');
		$data['file_pelaporan']= $this->upload_file();
		$this->model_web->simpan_laporan($data);
		redirect('p3a/pelaporan_kegiatan');
	}		

	public function list_p3a()
	{
		$this->load->model('model_web');

		$query = $this->model_web->tampil_p3a_list($_GET['q']);	
		// $output = "<ul style='list-style-type:none; cursor:pointer; padding:0; border:1px solid #aaa; font-size:12px;'>";			
		$json = [];
		if($query->num_rows > 0){
			foreach ($query -> result() as $row) {
				// $output .='<li style="padding:5px">'.$row->nama_p3a.'</li>';
				$json[] = ['id'=>$row->nama_p3a, 'text'=>$row->nama_p3a];
			}
		}
		else{
			// $output .='<li></li>';
		}
		// $output .= "</ul>";	
		// echo $output;	
		echo json_encode($json);	

	}		

	public function cetak(){
	    // ob_start();
	    // $data['siswa'] = $this->siswa_model->view_row();
	    // $this->load->view('print', $data);
	    $this->load->view('p3a-cetak');
	 //    $html = ob_get_contents();
  	//     ob_end_clean();
	        
  //       require_once('./assets/html2pdf/html2pdf.class.php');
		// $pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(10, 0, 10, 0));
	 //    $pdf->WriteHTML($html , isset($_GET['vuehtml']));
	 //    $pdf->Output('Laporan Pelaksanaan P3-TGAI.pdf', 'D');
	}

	public function pelaporan_kegiatan(){
		$isi['content'] = 'p3a-pelaksanaan-form';
		$this->load->model('model_web');
		$isi['pemberitahuan'] = $this->model_web->pemberitahuan();		
		$this->load->view('template-galeri', $isi);		
	}

    private function upload_file()
    {
        $type = explode('.', $_FILES["filenya"]["name"]);
        $type = strtolower($type[count($type)-1]);
        $maxsize = 1024 * 5000; // maksimal 200 KB (1KB = 1024 Byte)
        $url = "./assets/file_upload/p3a/".array_pop(array_reverse(explode(".", $_FILES["filenya"]["name"]))).'.'.$type;
        if($_FILES['filenya']['size']>$maxsize){
            echo "ukuran terlalu besar";
            exit(); 
        }
        else
        {
            if(in_array($type, array("pdf")))
                if(is_uploaded_file($_FILES["filenya"]["tmp_name"]))
                    if(move_uploaded_file($_FILES["filenya"]["tmp_name"],$url))
                        return $url;
            return "";
        }
    }

} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */