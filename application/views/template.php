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
    <link href="<?php echo base_url()?>assets/plugins/footable/css/footable.core.css" rel="stylesheet">
</head>
<body>
    <div class="container main">
        <div class="row">
            <?= $this->load->view('part/header');?>
            <?= $this->load->view('part/menu');?>
            <?= $this->load->view('part/support-section');?>
            <section class="col-12 content">
            	  <div class="row">            		
                		<div class="col-md-3 col-sm-12 mobile-hide">
    	            		  <?= $this->load->view($sidebar);?>
                		</div>
                		<div class="col-md-9 col-sm-12 show-content">
    	            			<?= $this->load->view($content); ?>
                		</div>
        		    </div>  <!-- END row KONTEN -->  
            </section> <!-- END col-12 KONTEN -->
            <footer>
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
    <script src="<?php echo base_url()?>assets/plugins/footable/js/footable.all.min.js"></script>
    <!--FooTable Example-->
    <script src="<?php echo base_url()?>assets/pages/jquery.footable.js"></script>
</body>
</html>

