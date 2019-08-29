
<h2>FORM PENGISIAN DATA</h2>



<?php echo form_open_multipart('permintaan_data/simpan_minta_data/', 'data-toggle="validator"','role="form"' ); ?>
<div class="row">  
        <div class="form"> 
        <?php
            session_start();
            if($this->session->flashdata('info_gagal')){
                $nama = $this->session->flashdata('nama');
                $email = $this->session->flashdata('email');
                $instansi = $this->session->flashdata('instansi');
                $pekerjaan = $this->session->flashdata('pekerjaan');
                $tujuan = $this->session->flashdata('tujuan');
                $telp = $this->session->flashdata('telp');
                $deskripsi = $this->session->flashdata('deskripsi');
                echo $this->session->flashdata('info_gagal');
            }
        ?>                   
            <div class="col-10">
                <div class="row">
                <div class="col-12">
                    <div class="form-group has-feedback">
                        <label for="inputName" class="control-label">Nama Lengkap</label>
                        <input type="text"   name="nama" id="nama" placeholder="Masukkan nama lengkap" data-error="Nama lengkap harus diisi" value="<?php echo $nama ?>" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="line"></div>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputName" class="control-label" style="margin-top:10px;">No. Telepon / HP</label>
                        <input name="telp" id="telp" type="number" placeholder="Isi Nomor Telepon/Handphone Anda" data-error="No. Telp/HP harus diisi" value="<?php echo $telp ?>"required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="line"></div>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputEmail" class="control-label" style="margin-top:10px;">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email anda" data-error="Email harus diisi" value="<?php echo $email ?>" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="line"></div>
                        <small class="form-text text-muted"><i>Pastikan email yang dimasukkan aktif.</i></small>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputName" class="control-label" style="margin-top:10px;">Pekerjaan</label>
                        <input type="text"   name="pekerjaan" id="pekerjaan" placeholder="Isi pekerjaan anda" data-error="Pekerjaan harus diisi" value="<?php echo $pekerjaan ?>" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="line"></div>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">                
                        <label for="inputName" class="control-label" style="margin-top:10px;">Nama Instansi / Universitas (Sesuai Surat Permintaan)</label>
                        <input type="text" name="instansi" id="instansi" placeholder="Masukkan nama Instansi Anda" data-error="Nama Instansi / Universitas harus diisi" value="<?php echo $instansi ?>"  required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="line"></div>
                        <div class="help-block with-errors"></div>
                    </div>
                </div> <!-- end class form -->             
                <div class="col-sm-12">
                    <div class="form-group has-feedback">
                        <label >Surat Permintaan yang dalam bentuk pdf. (Maks. 5MB)</label>
                        <?php echo form_input(array('type' => 'file','name' => 'userfile' , 'required'=> 'required')); ?>                        
                        <div class="help-block with-errors"></div>
                    </div>
                </div><!-- end class form -->

                <div class="col-sm-12">
                    <div class="form-group has-feedback">
                        <label style="margin-top:10px;">Tujuan Penggunaan Data (Sesuai Surat Permintaan)</label>
                        <textarea   name="tujuan" id="tujuan" rows="4" placeholder="Uraikan secara jelas tujuan permintaan data" data-error="Tujuan Penggunaan Data harus diisi" required><?php echo $tujuan ?></textarea>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="line"></div>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label style="margin-top:10px;">Rincian Data yang dibutuhkan (Sesuai Surat Permintaan)</label>
                        <textarea   name="deskripsi" id="deskripsi" rows="4" placeholder="Uraikan secara jelas rincian data yang anda butuhkan" data-error="Rincian Data harus diisi" required><?php echo $deskripsi ?></textarea>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="line"></div>
                        <div class="help-block with-errors"></div>
                    </div>
                </div><!-- end class form -->
            
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Kirim Permintaan</button>
                </div>
            </div><!-- end col-sm-6 -->
        </div>
</div> <!-- end row -->



            
</div>
    
      
    
           