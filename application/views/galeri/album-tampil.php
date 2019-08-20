  	<div class="row">
  	    <div class="col-lg-12">
           <ul>
             <li>Judul Album : <?= $albumTitle;?></li>
             <li>Total Foto : <?= $photosCount;?> Foto</li>
             <li>Tanggal Upload : <?= $uploadedDate;?></li>
           </ul>
  	    </div>
    		<?php for($i=0; $i<$photosCount; $i++) { ?>
  	    <div class="col-md-3 col-sm-3 col-6" style="margin-bottom: 2%;">
  	        <a data-fancybox="gallery" href="<?= base_url();?>assets/images/galeri/album_foto/thumbs/thumb_500X500_<?= $photos[$i]?>">
            <img class="img-responsive" src="<?= base_url();?>assets/images/galeri/album_foto/thumbs/thumb_500X500_<?= $photos[$i]?>" alt="<?= $photos[$i]?>" >
  	        </a>
  	    </div>
   		 <?php } ?>
   </div>
