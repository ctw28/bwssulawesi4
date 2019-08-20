<div class="col-lg-12">
  	<div class="row">
  	    <div class="col-lg-12">
  		     <h2><?= $photosCount;?> Foto</h2>
  	    </div>
    		<?php foreach ($photos->result() as $row) { ?>
  	    <div class="col-lg-3 col-md-3 col-xs-6 thumb">
  	        <a class="thumbnail fancybox" href="<?php echo base_url();?>assets/images/galeri/album_foto/<?php echo $row->foto?>" rel="group" role="button" alt="<?php echo $row->foto?>">
            <img class="img-responsive" src="<?php echo base_url();?>assets/images/galeri/album_foto/thumbs/thumb_500X500_<?php echo $row->foto?>" alt="<?php echo $row->foto?>" >
  	        </a>
  	    </div>
   		 <?php } ?>
  	   </div>

    </div>
</div>