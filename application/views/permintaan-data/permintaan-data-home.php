<div class="row">
	<div class="col-sm-8" style="padding-bottom:40px !important;">	
		<h2 class="judul-section side biru">PERMINTAAN DATA ONLINE</h2>
		<div style="text-align:center;">
			<!-- <img style="margin-bottom:20px;" src="<?php echo base_url()?>assets/images/permintaan-data/proses.png" alt="Permintaan-Data" width="50%">		 -->
		</div>
		<p style="line-height:25px;">Layanan Permintaan Data Online ini adalah sebagai layanan alternatif untuk memperoleh data yang berkaitan dengan Sumber Daya Air dengan lebih mudah, lebih cepat, dan lebih fleksibel.
		<br>Adapun untuk melakukan permintaan data online, pemohon diharuskan memenuhi persyaratan serta prosedur yang telah ditetapkan.</p>
		<br>
			<h4 style="text-transform:uppercase; font-weight:bold;">Apa Persyaratannya?</h4>
			<ul class="fa-ul list-side tkpsda-menu">
				<li><i class="fa fa-check-square"></i> Menyediakan surat permohonan data dari Instansi / Universitas / Lembaga yang telah ditandatangani dan distempel</li>
				<li><i class="fa fa-check-square"></i> Surat Permohonan di scan dalam bentuk pdf file. 
				<!-- <a href="permintaan_data/panduan" style="color:blue;">Lihat Contoh Surat Permohonan</a></li> -->
			</ul>

			<h4 style="text-transform:uppercase; font-weight:bold;">Bagaimana Prosedurnya?</h4>
			<ul class="fa-ul list-side tkpsda-menu">
				<li><i class="fa fa-check-square"></i>Mengisi Formulir Permintaan Data secara lengkap. <a href="permintaan_data/panduan" style="color:blue;">Lihat Panduan Pengisian Formulir</a></li>
				<li><i class="fa fa-check-square"></i>Jika berhasil, kode permintaan akan dikirimkan ke alamat <em>email</em> yang diinputkan pada form permintaan data</li>
				<!-- <li><i class="fa fa-check-square"></i>Kode permintaan tersebut digunakan untuk melihat status permintaan data dan untuk mendownload data. </li> -->
				<li><i class="fa fa-check-square"></i>Menunggu permintaan data diproses. Untuk melihat sejauh mana permintaan data anda diproses, anda bisa cek dengan memasukkan kode permintaan anda pada kolom "Cek Permintaan"</li>
				<li><i class="fa fa-check-square"></i>Sebelum mendownload data anda, anda diminta mengisi form kepuasan pelanggan untuk mendapatkan data anda. </li>
			</ul>
			<h4 style="text-transform:uppercase; font-weight:bold;">Proses Permintaan Data</h4>
			<ul class="fa-ul list-side tkpsda-menu">
				<li><i class="fa fa-check-square"></i>Validasi admin</li>
				<li><i class="fa fa-check-square"></i>Disposisi surat permintaan</li>
				<li><i class="fa fa-check-square"></i>Penyiapan data yang diminta</li>
			</ul>
				
			
			<h4 style="text-transform:uppercase; font-weight:bold;">Ketentuan Data</h4>
			<ul class="fa-ul list-side tkpsda-menu">
				<li><i class="fa fa-check-square"></i>Data diberikan dalam bentuk pdf (untuk tabel/data tulisan)</li>
				<li><i class="fa fa-check-square"></i>Data diberikan dalam bentuk PNG/JPG (untuk gambar)</li>
			</ul>

			<h4 style="text-transform:uppercase; font-weight:bold;">Waktu Pelayanan</h4>
			<ul class="fa-ul list-side tkpsda-menu">
				<li>Hari Pelayanan : Senin - Jumat</li>
				<li>Jam Pelayanan : 08.00 - 16.30 WITA</li>
			</ul> 
			<div class="col-sm-12" >
				<a href="<?php echo base_url()?>index.php/permintaan_data/form_permintaan_data" class="btn btn-default btn-more pull-right">Minta Data Online</a> 						
			</div>       

	</div>
	<div class="col-sm-4">
		<h2 class="judul-section side hijau">Cek Permintaan</h2>     

            <?php echo form_open_multipart('permintaan_data/status','class="box-cari"'); ?>
            <p><small>Masukkan kode yang telah dikirimkan ke email anda untuk melihat status permintaan.</small></p>
            	<input type="text" id="kode_permintaan" name="kode_permintaan" class="form-control form-cari">                                            
                <button class="btn btn-default btn-cari btn-more" type="submit"><i class="fa fa-arrow-right"></i></button>    
                <?php
            $info = $this->session->flashdata('info');
            if (!empty($info)) {
                echo "<div class='keterangan-errors'>$info</div>";
            }
          ?>                                                
            </form>      

	</div>
</div>
	


