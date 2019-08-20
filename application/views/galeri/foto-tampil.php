<div class="col-12">
 	<h2 style="margin-bottom: 20px;">KATEGORI : <?= $kategoriTitle;?></h2>
	<div class="row">
	    <?php foreach ($albums as $album) { ?>
		<div class="col-md-3 col-sm-3 col-6" style="margin-bottom: 2%;">
	    <a href="<?= base_url()?>galeri/album/<?= $album['albumTitleSeo'];?>">
		  	<div class="card text-center card-group">
		    	<img class="card-img-top" src="<?= base_url()?>assets/images/galeri/album_foto/thumbs/thumb_500X500_<?= $album[0]->foto;?>" alt="<?= $album['albumTitleSeo'];?>">
			    <div class="card-body">
			    	<h5 class="card-text"><?= $album['albumTitle'];?></h5>
			    </div>
		  	</div>
	  	</a>
		</div>
		<?php } ?>
	</div>
</div>
<p>Bagikan : </p>
<div class="sharethis-inline-share-buttons"></div>
