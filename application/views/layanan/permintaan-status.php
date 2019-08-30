<div class="col-12">
<h2>Status Permintaan</h2>
<div class="row">
  
 <?php 
        foreach ($data_status->result() as $row) {
            $tahun = date("Y", strtotime($row->time));
            $tanggal = date("d", strtotime($row->time));
            $day_name = date("w", strtotime($row->time));
            $moon = date("n", strtotime($row->time));
            $waktu = date("H:i", strtotime($row->time));

            $hari = array("Minggu","Senin", "Selasa","Rabu", "Kamis","Jumat","Sabtu");
            $bulan = array("","Jan", "Feb","Mar", "Apr","Mei","Juni","Juli", "Agust","Sept", "Okt","Nov","Des");
                        
      ?> 
          <p>Nama : <b><?php echo $row->nama_peminta ?></b></p>
          <p>Tanggal Permintaan : <b><?php echo $hari[$day_name].", ".$tanggal." ". $bulan[$moon] ." ". $tahun." ".$waktu." WITA"; ?></b></p>
          <p>Data yang diminta : <b><?php echo $row->deskripsi ?></b></p>

    <div style="overflow-x: auto;">
  
      <table class="status-table">
        <thead>
          <th>Progres</th>
          <th>Status</th>
          <th>Waktu</th>
          <th>Keterangan</th>
        </thead>
        <tbody>
          <tr>
            <td>Verifikasi Admin</td>
            <td style="text-align:center;">
              <b>
              <?php if($row->status=="Disposisi" || $row->status=="Pengumpulan Data" ||$row->status=="Selesai")
                echo "<span class='label label-success' style='font-size:14px;''>Sukses";
                else
                  echo "<span class='label label-warning' style='font-size:14px;'>Sedang diproses";                
                ?>
              </b>
              <!-- <b><span class="label label-success" style="font-size:20px;"><i class="fa fa-check-square-o"></i></b> -->
            </td>
            <td></td>          
            <td></td>          
          </tr>
          <tr>
            <td>Disposisi Kepala Balai</td>
            <td  style="text-align:center;">
              <b>
                <?php if($row->status=="Pengumpulan Data" || $row->status=="Selesai")
                echo "<span class='label label-success' style='font-size:14px;'>Sukses";
                else if($row->status=="Permintaan Terkirim")
                  echo "-";
                else
                  echo "<span class='label label-warning' style='font-size:14px;'>Sedang diproses";                
                ?>

              </b>              
            </td>
            <td></td>          
            <td></td>          
          </tr>
          <tr>
            <td>Pengumpulan Data</td>
            <td style="text-align:center;">
              <b>
              <?php if($row->status=="Selesai")
                echo "<span class='label label-success' style='font-size:14px;'>Sukses";
                 else if($row->status=="Permintaan Terkirim" || $row->status=="Disposisi")
                  echo "-";
                else
                  echo "<span class='label label-warning' style='font-size:14px;'>Sedang diproses";                
                ?>

              </b>
            </td>
            <td></td>          
            <td></td>          
          </tr>
          <tr>
            <td>Download data</td>
            <td style="text-align:center;">
              <?php if($row->status=="Selesai" && $row->total_download==0)
                echo "<a href='' data-toggle='modal' data-target='#poling' class='btn btn-success'>Download Data</a>";
                else if( $row->status=="Selesai" && $row->total_download>0)
                echo "<a href='download_data' class='btn btn-success btn-custom'>Download Data</a>";
                else
                echo "<a href='' class='btn btn-warning btn-custom'>Download Data</a>";
                ?>              
            </td>
            <td></td>          
            <td>- </td>          
          </tr>
        </tbody>
      </table>
      <?php 
        }
      ?>

</div>

</div>
</div>


<div class="modal fade bs-example-modal-lg " id="poling" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel" style="text-align:center; text-transform:uppercase;"><b>Kuisioner Pengukuran Kepuasan Pelanggan</b></h4>
            </div>
            <div class="modal-body">
            <p>Sebelum mendownload data anda, mohon meluangkan waktu untuk mengisi form kepuasan pelanggan . Terima Kasih</p>
              <?php echo form_open_multipart('permintaan_data/simpan_poling', 'onsubmit="return cek_kritik();"'); ?>
              <fieldset class="m-t-20">
                      <div class="col-sm-4" style="margin:20px 0;">
                        <span style="margin-right:20px;"><b>Penjelasan syarat dan pelayanan</b></span>
                      </div>
                      <div class="col-sm-8" style="margin:20px 0;">
                        <div class="radio radio-info radio-inline">
                          <input type="radio" name="r1" id="r1" value="Sangat Baik" required  >
                          <label for="radio11">
                              Sangat Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r1" id="r1" value="Baik" required>
                          <label for="radio12">
                              Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r1" id="r1" value="Cukup" required>
                          <label for="radio13">
                              Cukup
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r1" id="r1" value="Kurang" required>
                          <label for="radio14">
                              Kurang
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r1" id="r1" value="Sangat Kurang" required>
                          <label for="radio15">
                              Sangat Kurang
                          </label>
                      </div>
                      </div>                     
                      <div class="col-sm-4" style="margin:20px 0;">
                        <span style="margin-right:20px;"><b>Kemudahan Pelayanan</b></span>
                      </div>
                      <div class="col-sm-8" style="margin:20px 0;">
                        <div class="radio radio-info radio-inline">
                          <input type="radio" name="r2" id="r2" value="Sangat Baik" required>
                          <label for="radio11">
                              Sangat Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r2" id="r2" value="Baik" required>
                          <label for="radio12">
                              Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r2" id="r2" value="Cukup" required>
                          <label for="radio13">
                              Cukup
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r2" id="r2" value="Kurang" required>
                          <label for="radio14">
                              Kurang
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r2" id="r2" value="Sangat Kurang" required>
                          <label for="radio15">
                              Sangat Kurang
                          </label>
                      </div>
                      </div>   
                      <div class="col-sm-4" style="margin:20px 0;">
                        <span style="margin-right:20px;"><b>Kecepatan Pelayanan</b></span>
                      </div>
                      <div class="col-sm-8" style="margin:20px 0;">
                        <div class="radio radio-info radio-inline">
                          <input type="radio" name="r3" id="r3" value="Sangat Baik" required>
                          <label for="radio11">
                              Sangat Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r3" id="r3" value="Baik" required>
                          <label for="radio12">
                              Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r3" id="r3" value="Cukup" required>
                          <label for="radio13">
                              Cukup
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r3" id="r3" value="Kurang" required>
                          <label for="radio14">
                              Kurang
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r3" id="r3" value="Sangat Kurang" required>
                          <label for="radio15">
                              Sangat Kurang
                          </label>
                      </div>
                      </div>   
                      <div class="col-sm-4" style="margin:20px 0;">
                        <span style="margin-right:20px;"><b>Respon petugas pelayanan</b></span>
                      </div>
                      <div class="col-sm-8" style="margin:20px 0;">
                        <div class="radio radio-info radio-inline">
                          <input type="radio" name="r4" id="r4" value="Sangat Baik" required>
                          <label for="radio11">
                              Sangat Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r4" id="r4" value="Baik" required>
                          <label for="radio12">
                              Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r4" id="r4" value="Cukup" required>
                          <label for="radio13">
                              Cukup
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r4" id="r4" value="Kurang" required>
                          <label for="radio14">
                              Kurang
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r4" id="r4" value="Sangat Kurang" required>
                          <label for="radio15">
                              Sangat Kurang
                          </label>
                      </div>
                      </div>   
                      <div class="col-sm-4" style="margin:20px 0;">
                        <span style="margin-right:20px;"><b>Penjelasan petugas pelayanan</b></span>
                      </div>
                      <div class="col-sm-8" style="margin:20px 0;">
                        <div class="radio radio-info radio-inline">
                          <input type="radio" name="r5" id="r5" value="Sangat Baik" required>
                          <label for="radio11">
                              Sangat Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r5" id="r5" value="Baik" required>
                          <label for="radio12">
                              Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r5" id="r5" value="Cukup" required>
                          <label for="radio13">
                              Cukup
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r5" id="r5" value="Kurang" required>
                          <label for="radio14">
                              Kurang
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r5" id="r5" value="Sangat Kurang" required>
                          <label for="radio15">
                              Sangat Kurang
                          </label>
                      </div>
                      </div>   
                      <div class="col-sm-4" style="margin:20px 0;">
                        <span style="margin-right:20px;"><b>Sarana dalam pelayanan</b></span>
                      </div>
                      <div class="col-sm-8" style="margin:20px 0;">
                        <div class="radio radio-info radio-inline">
                          <input type="radio" name="r6" id="r6" value="Sangat Baik" required>
                          <label for="radio11">
                              Sangat Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r6" id="r6" value="Baik" required>
                          <label for="radio12">
                              Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r6" id="r6" value="Cukup" required>
                          <label for="radio13">
                              Cukup
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r6" id="r6" value="Kurang" required>
                          <label for="radio14">
                              Kurang
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r6" id="r6" value="Sangat Kurang" required>
                          <label for="radio15">
                              Sangat Kurang
                          </label>
                      </div>
                      </div>   
                      <div class="col-sm-4" style="margin:20px 0;">
                        <span style="margin-right:20px;"><b>Fasilitas yang diterima</b></span>
                      </div>
                      <div class="col-sm-8" style="margin:20px 0;">
                        <div class="radio radio-info radio-inline">
                          <input type="radio" name="r7" id="r7" value="Sangat Baik"  required>
                          <label for="radio11">
                              Sangat Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r7" id="r7" value="Baik" required>
                          <label for="radio12">
                              Baik
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r7" id="r7" value="Cukup" required>
                          <label for="radio13">
                              Cukup
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r7" id="r7" value="Kurang" required>
                          <label for="radio14">
                              Kurang
                          </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                          <input type="radio" name="r7" id="r7" value="Sangat Kurang" required>
                          <label for="radio15">
                              Sangat Kurang
                          </label>
                      </div>
                      </div>   
                                                    
                  <div class="form-group" style="margin-top:20px !important;">
                      <label>Saran (Jika ada)</label>
                      <textarea name="saran" id="saran" placeholder="Isikan Pengaduan, Saran atau Kritik Anda" style="width:100%; height:100px;"></textarea>
                  </div>
                  <p><i>Informasi ini akan kami gunakan sebagai masukan dalam rangka perbaikan pelayanan kami agar mampu memberikan 
                  pelayanan prima yang memuaskan masyarakat.</i></p>
              </fieldset>
              <div>
                  <?php echo form_submit('submit', 'Submit', 'class="btn btn-primary"'); ?>
              </div>
            </div>
        </div>
      </div>
  </div>