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
  <h2>SARAN DAN PENGADUAN</h2> 
  <p>Jika Anda mempunyai pertanyaan mengenai layanan atau ingin menyampaikan Informasi, Saran, Pengalaman, ataupun Keluhan yang dapat memperbaiki kinerja kami, 
    silakan mengisi formulir dibawah ini :</p>
  <?= form_open_multipart('layanan_publik/simpan/', 'data-toggle="validator"','role="form"')?>
      <fieldset>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama" id="nama" placeholder="Tulis nama lengkap anda" data-error="Nama Harus diisi" value="<?= $nama ?>" required />
              <div class="line"></div>
              <div class="help-block with-errors"></div>
          </div>
          <input type="text" name="bad_boot" id="bad_boot" value="" style="display:none; visibility: hidden;"/>
          <div class="form-group">
              <label>No. Handphone</label>
              <input type="text"  name="hp" id="hp" placeholder="Tulis no. handphone anda" data-error="No. Telp/HP harus diisi" value="<?= $hp ?>" required/>
              <div class="line"></div>
              <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" placeholder="Tuliskan alamat email anda" data-error="Email harus valid" value="<?= $email ?>" required/>
              <div class="line"></div>
              <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
              <label>Isi Pesan</label>
              <textarea name="isi" id="isi" placeholder="Tuliskan Pertanyaan atau penyampaian atau saran anda" style="width:100%; height:100px;" data-error="Pesan harus diisi" required><?= $pesan ?></textarea>
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
                  <label>Pertanyaan Keamanan : <br><?= $nil1." + ".$nil2." = ?"; ?></label>
                  <input type="text" name="captcha" id="captcha" placeholder="Tuliskan Hasil Penjumlahan di atas" data-error="Anti Spam harus diisi" required/>
              <div class="line"></div>
              <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-sm-3">
          </div>
      </fieldset>
      <?= form_submit('submit', 'Kirim', 'class="btn btn-warning btn-custom pull-right"'); ?>
