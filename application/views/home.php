<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BWS SULAWESI IV KENDARI</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Style -->
  <link href="<?php echo base_url()?>assets/css/style2.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/news-ticker/breaking-news-ticker.css">
</head>
<body>
    <div class="container main">
        <div class="row">

            <!-- HEADER TOP -->
            <div class="top-bar">
                <div class="row">
                    <div class="col-12">
                        <a href="http://sda.pu.go.id/"><i class="fa fa-caret-left"></i> Ditjen SDA</a>
                        <span class="real-time pull-right"></span>                  
                    </div>
                </div>
            </div>

            <!-- HEADER IDENTITY -->
            <div class="header-identity">
                <div class="row">
                    <div class="col-4">
                        <img src="assets/images/logo/logo-bws-sulawesi-iv-kendari.png">
                    </div>
                    <div class="col-8">
                      
                    </div>              
                </div>
            </div>

            <?= $this->load->view('part/menu');?>
            
        </div>
    </div>
    <div class="container main">

            <section class="col-12 content">
                <div class="row">

                <div class="headline mobile-hide">                          
                    <section class="main-news">
                        <?php foreach ($berita_utama->result() as $row) {
                            $string = htmlentities($row->judul_berita);
                            $trim=trim($string);
                            $judul = strtolower(str_replace(" ", "-", $trim));

                        ?>
                        <img src="assets/images/berita/thumbs/thumb_1000X1000_<?= $row->foto ?>" alt="<?= $row->judul_berita ?>">
                        <div class="main-news-label">
                            <span>Berita Utama</span>
                        </div>
                        <div class="main-news-title">
                            <a href="news/<?= urlencode($judul); ?>"><?= $row->judul_berita ?></a>
                        </div>
                        <?php
                            }
                        ?>
                    </section>
                    <section class="main-videos">
                        <div class="video-main-1">
                            <div class="embed-responsive embed-responsive-21by9">
                               <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FnJ9T7jMvCo" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video-main-2">
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe style="padding-right: 1%;" src="https://www.youtube.com/embed/mmKjbxASGlQ" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe style="padding-left: 1%;" src="https://www.youtube.com/embed/V6wAyXetXDY" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </section>
                </div>

                        <section class="support-section">
                            <div class="breaking-news-ticker" id="example" style="height: 20px;">
                              <div class="bn-label">Kilas Informasi</div>
                              <div class="bn-news">
                                <ul>
                                  <li><a href="#">Selamat Datang di Website Resmi Balai Wilayah Sungai Sulawesi IV Kendari</a></li>
                                  <li><a href="#">Selamat Datang di Website Resmi Balai Wilayah Sungai Sulawesi IV Kendari</a></li>
                                  <li><a href="#">Selamat Datang di Website Resmi Balai Wilayah Sungai Sulawesi IV Kendari</a></li>
                                  <li><a href="#">Selamat Datang di Website Resmi Balai Wilayah Sungai Sulawesi IV Kendari</a></li>
                                  <li><a href="#">Selamat Datang di Website Resmi Balai Wilayah Sungai Sulawesi IV Kendari</a></li>
                                </ul>
                              </div>
                            </div>

                            <div class="social-media-container">
                                  <a href="#" class="fa fa-facebook"></a>
                                  <a href="#" class="fa fa-twitter"></a>
                                  <a href="#" class="fa fa-youtube"></a>
                                  <a href="#" class="fa fa-instagram"></a>

                            </div>
                        </section>
                        <section class="help-section">

                            <div class="search-container">
                                <input type="text" name="search">
                            </div>
                        </section>

                <div class="title-container-content"><i class="fa fa-list"></i> Berita BWS Sulawesi IV Kendari
                    <a class="pull-right" href="#">Lihat Semua <i class="fa fa-angle-double-right "></i></a>
                </div>
                <section class="list-container">

                    <?php 
                        function limit_words($string, $word_limit){
                            $words = explode(" ",$string);
                            return implode(" ",array_splice($words,0,$word_limit));
                        }
                        foreach ($berita_lainnya->result() as $row) {                          
                          // $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()-_+$@;<>]/', '', $row->judul_berita);
                          $string = htmlentities($row->judul_berita);
                          $trim=trim($string);
                          $judul = strtolower(str_replace(" ", "-", $trim));
                          $tahun = date("Y", strtotime($row->tanggal_publish));
                          $tanggal = date("d", strtotime($row->tanggal_publish));
                          $day_name = date("w", strtotime($row->tanggal_publish));
                          $moon = date("n", strtotime($row->tanggal_publish));
                          $waktu = date("H:i", strtotime($row->tanggal_publish));
                          $hari = array("Minggu","Senin", "Selasa","Rabu", "Kamis","Jumat","Sabtu");
                          $bulan = array("","Jan", "Feb","Mar", "Apr","Mei","Juni","Juli", "Agust","Sept", "Okt","Nov","Des");
                    ?>

                    <div class="list-item">
                        <img src="assets/images/berita/thumbs/thumb_300X300_<?php echo $row->foto ?>">
                        <div class="list-item-title">
                            <a href="news/<?php echo urlencode($judul); ?>"><?= substr($row->judul_berita,0, 60)?></a></a>
                        </div>
                    </div>
                    <?php 
                        } //end for
                    ?> 
                </section>
                <div class="title-container-content mobile-hide"><i class="fa fa-list"></i> Berita Kementerian PUPR
                    <a class="pull-right" href="#">Lihat Semua <i class="fa fa-angle-double-right "></i></a>
                </div>
                <section class="list-container mobile-hide">
                    <div class="list-item">
                        <img src="assets/images/c.jpg">
                        <div class="list-item-title">
                            <a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a>
                        </div>
                    </div>
                    <div class="list-item">
                        <img src="assets/images/b.jpg">
                        <div class="list-item-title">
                            <a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a>
                        </div>
                    </div>
                    <div class="list-item">
                        <img src="assets/images/e.jpg">
                        <div class="list-item-title">
                            <a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a>
                        </div>
                    </div>
                    <div class="list-item">
                        <img src="assets/images/d.jpg">
                        <div class="list-item-title">
                            <a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a>
                        </div>
                    </div>
                    <div class="list-item">
                        <img src="assets/images/b.jpg">
                        <div class="list-item-title">
                            <a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a>
                        </div>
                    </div>
                </section>


                <section class="content-part-2">
                    <div class="container-1 mobile-hide">
                        <div class="title-container-content"><i class="fa fa-bullseye "></i> Poling</div>
                        <div class="content-container poling">
                          <p>Apa Pendapat Anda Tentang Tampilan Website ini ?</p>
                          <input type="radio" name="opt" id="opt1" checked> <label for="opt1">Bagus Sekali</label>
                          <input type="radio" name="opt" id="opt2"> <label for="opt2"> Bagus</label>
                          <input type="radio" name="opt" id="opt3"> <label for="opt3"> Biasa</label>
                          <input type="radio" name="opt" id="opt4"> <label for="opt4"> Kurang</label>
                        </div>
                        <div class="title-container-content"><i class="fa fa-bullhorn "></i> Pengumuman</div>
                        <div class="list-item-2">
                            <ul class="content-container ">
                              <?php foreach ($pengumuman->result() as $row) { ?> 
                                <a href="pengumuman/selengkapnya/<?= $row->id_pengumuman ?>"><li><i class="fa fa-caret-right"></i> <?= $row->judul_pengumuman ?></li></a>
                              <?php } ?>
                            </ul>
                        </div>
                        <div class="title-container-content"><i class="fa fa-book"></i> Publikasi</div>
                        <div class="publikasi">
                            <div class="publikasi-item">
                                <img src="assets/images/buletin.jpg">
                                <p>Buletin</p>
                            </div>
                            <div class="publikasi-item">
                                <img src="assets/images/pulibkasi-hidrologi.jpg">
                                <p>Buletin</p>
                            </div>
                            <div class="publikasi-item">
                                <img src="assets/images/publikasi-hidrologi-2.jpg">
                                <p>Buletin</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-2">
                        <div class="title-container-content"><i class="fa fa-bookmark "></i> Events</div>
                        <div class="list-item-3">
                            <?php foreach ($agenda->result() as $row) { 
                              $tahun = date("Y", strtotime($row->tgl_agenda));
                              $tanggal = date("d", strtotime($row->tgl_agenda));
                              $day_name = date("w", strtotime($row->tgl_agenda));
                              $moon = date("n", strtotime($row->tgl_agenda));

                              $hari = array("Minggu","Senin", "Selasa","Rabu", "Kamis","Jumat","Sabtu");
                              $bulan = array("","Jan", "Feb","Mar", "Apr","Mei","Juni","Juli", "Agust","Sept", "Okt","Nov","Des");

                            ?>
                            <div class="content-container event-item">
                                <h6><?php echo $row->judul_agenda ?></h6>
                                <!-- <p>Kepada Seluruh Karyawan/Karywati BWS Sulawesi IV Kendari untuk menghadiri Upacara Peringatan Hari Kemerdekaan RI Ke - 74 : </p> -->
                                <i class="fa fa-map-marker "></i> <?= $row->tempat ?> <br>
                                <i class="fa fa-calendar"></i> <?= $hari[$day_name].", ".$tanggal." ". $bulan[$moon] ." ". $tahun; ?>  
                                <i class="fa fa-clock-o"></i> 07.00 Wita
                            </div>
                            <?php } ?>
                            
                        </div>
                        <div class="title-container-content"><i class="fa fa-bookmark "></i> Pengunjung Website</div>
                            <div class="content-container pengunjung-container">
                                <h4>999999999999</h4>
                            </div>

                    </div>
                    <div class="container-3 mobile-hide">
                        <div class="title-container-content"><i class="fa fa-user-circle-o"></i> Layanan</div>
                        <div class="list-item-2">
                            <ul class="content-container ">
                                <a href="<?= base_url()?>permintaan-data"><li><img src="assets/images/logo/permintaan-data.png"></li></a>
                                <a href=""><li><img src="assets/images/logo/pengaduan.png"></li></a>
                            </ul>
                        </div>                        
                        <div class="poster">
                            <img src="assets/images/banner.jpg">
                        </div>
                    </div>
                </section>

                <div class="title-container-content mobile-hide"><i class="fa fa-building "></i> Kegiatan Strategis
                    <a class="pull-right" href="#">Lihat Semua <i class="fa fa-angle-double-right "></i></a>
                </div>
                <section class="kegiatan-strategis list-container mobile-hide">
                    <div class="list-item-4">
                        <img src="assets/images/ladongi.jpg">
                        <div class="list-item-title-2">
                            <a href="">Bendungan ladongi</a>
                            <p>Lokasi : Kabupaten Kolaka Timur<br>
                            Tahun : 2016-2020</p>
                        </div>                        
                    </div>
                    <div class="list-item-4">
                        <img src="assets/images/pelosika.jpg">
                        <div class="list-item-title-2">
                            <a href="">Bendungan Pelosika</a>
                            <p>Lokasi : Kab. Kolaka Timur dan Konawe<br>
                            Tahun : 2019-2023</p>
                        </div>
                    </div>
                    <div class="list-item-4">
                        <img src="assets/images/tongauna.jpg">
                        <div class="list-item-title-2">
                            <a href="">Bendung Tongauna</a>
                            <p>Lokasi : Kabupaten Kolaka Timur<br>
                            Tahun : 2016-2018</p>
                        </div>
                    </div>
                    <div class="list-item-4">
                        <img src="assets/images/tongauna.jpg">
                        <div class="list-item-title-2">
                            <a href="">Bendung Tongauna</a>
                            <p>Lokasi : Kabupaten Kolaka Timur<br>
                            Tahun : 2016-2018</p>
                        </div>
                    </div>
                </section>



                </div>  <!-- END row KONTEN -->  
            </section> <!-- END col-12 KONTEN -->

            <div class="row">
              
                <footer>
                    <div class="footer">
                        <div class="address">
                            <h3>Alamat Kantor</h3>
                            <address>
                                  <div>BWS Sulawesi IV Kendari<br>Jalan Balai Kota IV No. 01 Kendari<br>Sulawesi Tenggara</div>
                                <div><i class="fa fa-phone"></i>Fax: (+62401) 3122818, Telp: (+62401) 3122818</div>
                                <div><i class="fa fa-envelope-o"></i>sisdasulawesi4@gmail.com</div>
                            </address>                                         
                        </div>                        
                        <div class="address">
                            <h3>Situs Terkait</h3>
                            <address>
                                <div>Kementerian Pekerjaan Umum dan Perumahan Rakyat</div>
                                <div>Ditjen SDA</div>
                            </address>                                         
                        </div>                        
                        <div class="address">
                            <h3>Navigasi</h3>
                            <address>
                                <div>Site Map</div>
                                <div>FAQ</div>
                            </address>                                         
                        </div>                        
                    </div>

                    <div id="copyright">
                        Copyright © 2018. Unit SISDA BWS Sulawesi IV Kendari | All Rights Reserved | Tersertifikasi ISO 9001:2015
                    </div>
                </footer>
            </div>
    </div> <!-- END CONTAINER UTAMA -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="<?php echo base_url()?>assets/plugins/news-ticker/breaking-news-ticker.min.js"></script>
  <script>
      $(document).ready(function() {
          clockUpdate();
          setInterval(clockUpdate, 1000);

          $('#example').breakingNews({
              height: 35,
              fontSize: 12,
              themeColor: "default",
              background: "#002B5C",
              borderWidth: 0,
              radius: 10,
              zIndex: 99999
          });
      })

      function clockUpdate() {
          var date = new Date();
          var hari = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu',];
          var bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
          function addZero(x) {
              if (x < 10) {
                  return x = '0' + x;
              } else {
                  return x;
              }
          }

          function twelveHour(x) {
              if (x > 12) {
                  return x = x - 12;
              } else if (x == 0) {
                  return x = 12;
              } else {
                  return x;
              }
          }

          var todayDate = hari[date.getDay()]+ ', ' +addZero(date.getDate()) + ' ' +bulan[date.getMonth()] + ' ' + date.getFullYear();
          var h = addZero(twelveHour(date.getHours()));
          var m = addZero(date.getMinutes());
          var s = addZero(date.getSeconds());
          console.log(todayDate);

          $('.real-time').text(todayDate + ' | ' + h + ':' + m + ':' + s)
      }
    </script>
</body>
</html>

