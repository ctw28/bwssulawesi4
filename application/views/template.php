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
            <?= $this->load->view('part/support-section');?>


            </section>

            <section class="col-12 content">
            	<div class="row">            		
            		<div class="col-md-3 col-sm-12 mobile-hide">
	            		<?php 
	            			if($identity == 'profil'){
	            				echo $this->load->view('profil-side-menu');
	            			}
	            			if($identity == 'news' || $identity == 'permintaan'){
	            				echo $this->load->view('berita-side-menu');
	            			}
	            		?>
            		</div>
            		<div class="col-md-9 col-sm-12 show-content">
	            			<?= $this->load->view($content); ?>
            		</div>
        		</div>  <!-- END row KONTEN -->  
            </section> <!-- END col-12 KONTEN -->
                        <?= $this->load->view('part/footer');?>

            </footer>
    	</div><!-- END row UTAMA -->  
    </div> <!-- END CONTAINER UTAMA -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="<?= base_url()?>assets/plugins/news-ticker/breaking-news-ticker.min.js"></script>
  <script src="<?= base_url()?>assets/js/function.js"></script>
</body>
</html>

