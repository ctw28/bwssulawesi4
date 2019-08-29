<h2>HASIL PENCARIAN</h2>
<p>Kata Pencarian : <strong><?=$searchWord?></strong></p>
<div class="searchHastag">
	<a href="#newsHastag">#Berita</a>
</div>
<div class="searchHastag">
	<a href="#announcementHastag">#Pengumuman</a>
</div>
<div class="searchHastag">
	<a href="#photosHastag">#Album Foto</a>
</div>
<div class="searchHastag">
	<a href="#videosHastag">#Video</a>
</div>
<h2 id="newsHastag">BERITA</h2>
	<?php 
	if($newsSearch->result()==NULL){
		echo "<b style='color:red'>Tidak Ada Hasil</b>";
	}
	else{
		echo "<div class='row'>";

		foreach ($newsSearch->result() as $news) {
	?>
	<div class="col-md-4 col-sm-4 col-6" style="margin-bottom: 2%;">
            <div class="card text-center card-group">
                <img class="card-img-top" alt="images" src="<?= base_url()?>assets/images/berita/thumbs/thumb_300X300_<?php echo $news->foto ?>">
                <div class="card-body">
                    <h5><a href="<?= base_url()?>news/<?= urlencode($news->newsUrl); ?>"><?= $news->judul_berita ?></a></h5>
                    <hr>
                    <small class="news-info-item"><i class="fa fa-clock-o"></i><?= $news->newsDate ?></small>
                </div>
            </div>
        </div>
	<?php
		}
		echo "</div>";
	}
	?>
<h2 id="announcementHastag">PENGUMUMAN</h2>
<ul>
	
	<?php 
	if($announcementSearch->result()==NULL){
		echo "<b style='color:red'>Tidak Ada Hasil</b>";
	}
	else{
		foreach ($announcementSearch->result() as $announcement) {
	?>
	<li>
		<a  href="<?= base_url()?>pengumuman/selengkapnya/<?= $announcement->id_pengumuman ?>"><i class="fa fa-caret-right"></i> <?=$announcement->judul_pengumuman?></a>
	</li>


	<?php
		}
	}
	?>
</ul>
<h2 id="photosHastag">ALBUM FOTO</h2>
<ul>
	
	<?php 
	if($galleryPhotosSearch->result()==NULL){
		echo "<b style='color:red'>Tidak Ada Hasil</b>";
	}
	else{
		foreach ($galleryPhotosSearch->result() as $photo) {
	?>
	<li>
		<a  href="<?= base_url()?>galeri/album/<?= $photo->judul_album_seo ?>"><i class="fa fa-caret-right"></i> <?=$photo->judul_album?></a>
	</li>


	<?php
		}
	}
	?>
</ul>

<h2 id="videosHastag">VIDEO</h2>
	<?php 
	if($galleryVideosSearch->result()==NULL){
		echo "<b style='color:red'>Tidak Ada Hasil</b>";
	}
	else{
		echo "<div class='row'>";
		foreach ($galleryVideosSearch->result() as $video) {
	?>
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
	<?php
		}
		echo "</div>";
	}
	?>
