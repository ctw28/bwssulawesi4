<article>
	<h2 class="news-title"><?= $judul; ?></h2>
	<div class="news-info">
		<div class="news-info-item"><i class="fa fa-clock-o"></i><span><?= $tanggal ?></span></div>
		<div class="news-info-item mobile-hide"><i class="fa fa-user" ></i><span>Sisda</span></div>
		<div class="news-info-item mobile-hide"><i class="fa fa-eye"></i><span><?= $klik ?> Kali dilihat</span></div>
	</div>
	<div class="share">
		<span>Bagikan : </span>
		<div class="sharethis-inline-share-buttons"></div>
	</div>

	<!-- <hr> -->

	<img alt="<?= $judul; ?>" src="<?= base_url()?>assets/images/berita/thumbs/thumb_1000X1000_<?= $foto ?>">
		
	<section>
	<?php
		if (!empty($foto_lain)) {
		?>
		<h6>Galeri Foto</h6>
		<div class="news-gallery">
	  	<?php 
	        foreach ($foto_lain->result() as $row) {
	    ?>		
	  		<div class="news-gallery-item">
		  		<a class="fancybox" rel="group" href="<?= base_url()?>assets/images/berita/galeri-berita/<?= $row->foto ?>">
				<img alt="image" src="<?= base_url()?>assets/images/berita/galeri-berita/thumb_300X300_<?= $row->foto ?>"></a>
			</div>
	  <?php } }?>
	  <!-- <small class="pull-right">Lihat Semua Galeri Foto >></small> -->
		</div>
	</section>	
	<div class="paragraf-berita">
		<?= $isi; ?>		
	</div>
</article>
	
		

<hr>
<h4 style="text-align: center; margin-top: 20px;">Berita Terkait</h4> 
<section class="list-container">
    <div class="list-item-terkait">
        <img alt="images" src="<?= base_url()?>assets/images/c.jpg">
        <div class="list-item-title-3">
            <h5><a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a></h5>
        </div>
    </div>
    <div class="list-item-terkait">
        <img alt="images" src="<?= base_url()?>assets/images/b.jpg">
        <div class="list-item-title-3">
            <h5><a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a></h5>
        </div>
    </div>
    <div class="list-item-terkait">
        <img alt="images" src="<?= base_url()?>assets/images/e.jpg">
        <div class="list-item-title-3">
            <h5><a href="">Kunjungan Menteri PUPR di Bendungan ladongi</a></h5>
        </div>
    </div>
</section>
