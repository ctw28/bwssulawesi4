<article>
	<h2 class="news-title"><?= $newsTitle; ?></h2>
	<div class="news-info">
		<div class="news-info-item"><i class="fa fa-clock-o"></i><span><?= $newsDate ?></span></div>
		<div class="news-info-item mobile-hide"><i class="fa fa-user" ></i><span>Sisda</span></div>
		<div class="news-info-item mobile-hide"><i class="fa fa-eye"></i><span><?= $newsTotalViews ?> Kali dilihat</span></div>
	</div>
	<div class="share">
		<span>Bagikan : </span>
		<div class="sharethis-inline-share-buttons"></div>
	</div>
	<img alt="<?= $newsTitle; ?>" src="<?= base_url()?>assets/images/berita/thumbs/thumb_1000X1000_<?= $newsImage ?>">
		
	<section>
	<?php if (!empty($newsPhotosGallery)) { ?>
		<h6 style="margin: 10px 0"><b>Galeri Foto : </b></h6>
		<div class="news-gallery">
	  	<?php foreach ($newsPhotosGallery->result() as $row) { ?>		
	  		<div class="news-gallery-item">
		  		<a data-fancybox="gallery" href="<?= base_url()?>assets/images/berita/galeri-berita/<?= $row->foto ?>">
				<img alt="cannot-load-image" src="<?= base_url()?>assets/images/berita/galeri-berita/thumb_300X300_<?= $row->foto ?>"></a>
			</div>
  		<?php }?>
		</div>
	<?php } ?>
	</section>	
	<div class="paragraf-berita">
		<?= $newsText; ?>		
	</div>
</article>
	
		

<hr>
<h4 style="text-align: center; margin-top: 20px;">Berita Lainnya</h4> 
<section class="list-container">
<?php foreach ($otherNews->result() as $row): ?>
	<div class="col-md-3 col-sm-3 col-6" style="margin-bottom: 2%;">
        <div class="card text-center card-group">
            <img class="card-img-top" alt="images" src="<?= base_url()?>assets/images/berita/thumbs/thumb_300X300_<?php echo $row->foto ?>">
            <div class="card-body">
                <h5><a href="<?= base_url()?>row/<?= urlencode($row->newsUrl); ?>"><?= $row->judul_berita ?></a></h5>
                <hr>
                <small class="news-info-item"><i class="fa fa-clock-o"></i><?= $row->newsDate ?></small>
            </div>
        </div>
    </div>
<?php endforeach ?>
</section>
