<div class="col-lg-12">
	<div class="row">
     	<h2><?= $albumCount; ?> <span>ALBUM</span></h2> 
		<div class="card-columns">
	        <?php foreach ($albums as $album) { ?>
		  	<div class="card text-center card-group">
		    	<img class="card-img-top" src="<?= base_url()?>assets/images/galeri/album_foto/thumbs/thumb_500X500_<?= $album[0]->foto;?>" alt="<?= $album['albumTitleSeo'];?>">
			    <div class="card-body">
			    	<h5 class="card-text"><a href="<?= base_url()?>galeri/foto/<?= $album['albumTitleSeo'];?>"><?= $album['albumTitle'];?></a></h5>
			    </div>
		  	</div>
        	<?php } ?>
		</div>
	</div>
</div>
