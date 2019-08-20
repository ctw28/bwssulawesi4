<div class="col-12">
     	<h2>SEMUA VIDEO</h2> 
	<div class="row">
		<?php foreach ($videos->result() as $video) { ?>
		<div class="col-md-3 col-sm-3 col-6" style="margin-bottom: 2%;">
		  	<div class="card text-center card-group">
				<a data-fancybox href="<?= $video->embed_url ?>">
			        <img class="card-img-top img-fluid" src="<?= $video->img_thumb ?>" alt="<?= $video->judul_video ?>"/>
		        </a>
			    <div class="card-body">
			    	<p class="card-text"><?= $video->judul_video ?></p>
			    </div>
		  	</div>
	  	</div>
		<?php } ?>
	</div>
</div>
