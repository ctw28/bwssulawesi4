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
  <link href="<?= base_url()?>assets/css/style2.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/news-ticker/breaking-news-ticker.css">
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
                        <img src="<?= base_url()?>assets/images/logo/logo-bws-sulawesi-iv-kendari.png">
                    </div>
                    <div class="col-8">
                      
                    </div>              
                </div>
            </div>

            <?= $this->load->view('part/menu');?>

            <section class="col-12">
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
            </section>

            <section class="col-12 content">
            	<div class="row">            		
            		<div class="col-md-4 col-sm-12 mobile-hide">
	            		<?php 
	            			if($identity == 'profil'){
	            				echo $this->load->view('profil-side-menu');
	            			}
	            			if($identity == 'news' || $identity == 'permintaan'){
	            				echo $this->load->view('berita-side-menu');
	            			}
	            		?>
            		</div>
            		<div class="col-md-8 col-sm-12 show-content">
	            			<?= $this->load->view($content); ?>
            		</div>
        		</div>  <!-- END row KONTEN -->  
            </section> <!-- END col-12 KONTEN -->
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
    	</div><!-- END row UTAMA -->  
    </div> <!-- END CONTAINER UTAMA -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="<?= base_url()?>assets/plugins/news-ticker/breaking-news-ticker.min.js"></script>
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

