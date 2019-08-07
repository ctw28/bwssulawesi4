<?php 
  session_start();
  $nama = $this->session->flashdata('nama');
  $email = $this->session->flashdata('email');
  $hp = $this->session->flashdata('hp');
  $pesan = $this->session->flashdata('pesan');
  $status = $this->session->flashdata('status'); 
  if(!empty($status)){
      if($status =="sukses"){
        echo "<script type='text/javascript'>alert('Pengaduan telah dikirim. Terima Kasih');</script>";
      }
      else{
        echo "<script type='text/javascript'>alert('Mohon periksa form');</script>";
      }    
  }
  
?>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1784.7482419307773!2d122.50450339278632!3d-3.973649909936156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa911fe18e3438c38!2sBalai+Wilayah+Sungai+Sulawesi+IV!5e1!3m2!1sen!2sid!4v1476690984346" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<div class="col-sm-8">
  <h2 class="judul-section side biru">HUBUNGI KAMI</h2> 
  <p>Jika Anda mempunyai pertanyaan mengenai layanan atau ingin menyampaikan Informasi, Saran, Pengalaman, ataupun Keluhan yang dapat memperbaiki kinerja kami, 
  	silakan mengisi formulir dibawah ini :</p>
	<?php echo form_open_multipart('pengaduan/simpan/', 'data-toggle="validator"','role="form"')?>
      <fieldset>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama" id="nama" placeholder="Tulis nama lengkap anda" data-error="Nama Harus diisi" value="<?php echo $nama ?>" required />
              <div class="line"></div>
              <div class="help-block with-errors"></div>
          </div>
          <input type="text" name="bad_boot" id="bad_boot" value="" style="display:none; visibility: hidden;"/>
          <div class="form-group">
              <label>No. Handphone</label>
              <input type="text"  name="hp" id="hp" placeholder="Tulis no. handphone anda" data-error="No. Telp/HP harus diisi" value="<?php echo $hp ?>" required/>
              <div class="line"></div>
              <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" placeholder="Tuliskan alamat email anda" data-error="Email harus valid" value="<?php echo $email ?>" required/>
              <div class="line"></div>
              <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
              <label>Isi Pesan</label>
              <textarea name="isi" id="isi" placeholder="Tuliskan Pertanyaan atau penyampaian atau saran anda" style="width:100%; height:100px;" data-error="Pesan harus diisi" required><?php echo $pesan ?></textarea>
              <div class="line"></div>
              <div class="help-block with-errors"></div>
          </div>
          <?php
            $nil1 = rand(20,50);
            $nil2 = rand(1,19);
            $total = $nil1 + $nil2;
            $_SESSION['captcha'] = $total;
          ?>
          <div class="form-group">
                  <label><?php echo $nil1." + ".$nil2." = ?"; ?></label>
                  <input type="text" name="captcha" id="captcha" placeholder="Tuliskan Hasil Penjumlahan di atas" data-error="Anti Spam harus diisi" required/>
              <div class="line"></div>
              <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-sm-3">
          </div>
      </fieldset>
      <?php echo form_submit('submit', 'Kirim', 'class="btn btn-primary btn-more pull-right"'); ?>
</div>

<div class="col-sm-4">
<h2 class="judul-section side biru">Alamat Kantor</h2> 
	<section class="alamat">
        <address>
            <ul>
                <li style="border:none;"><i class="fa fa-university"></i><p>Balai Wilayah Sungai Sulawesi IV<br>Jalan Balai Kota IV No. 01 Kendari<br>Sulawesi Tenggara</p></li>
                <li style="border:none;"><i class="fa fa-phone"></i><p>Fax: (+62401) 3122818<br>Telp: (+62401) 3122818</p></li>
                <li style="border:none;"><i class="fa fa-envelope-o"></i><p><a href="mailto:#">sisdasulawesi4@gmail.com</a></p></li>
            </ul>                       
        </address>                                         
    </section>
</div>