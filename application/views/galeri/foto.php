<div class="col-lg-12">
	<div class="row">
     	<h2>SEMUA ALBUM (<?php echo $jml_album; ?> <span>ALBUM</span>)</h2> 
		<div class="card-columns">
	        <?php 
	          	$i=0;
	          	foreach ($album->result() as $row) {                          
	              	$id_album = $row->id_album;
	              	foreach ($foto->result() as $row2){
	                  	if($id_album==$row2->id_album){
	        ?>
			  	<div class="card text-center card-group">
			    	<img class="card-img-top" src="<?= base_url()?>assets/images/galeri/album_foto/thumbs/thumb_500X500_<?php echo $row2->foto?>" alt="Card image cap">
				    <div class="card-body">
				    	<p class="card-text"><?= $row->judul_album;?></p>
				    </div>
			  	</div>
  	        	<?php
		                  break;
		                  } //end if
		              } //end for
		          } //end for
	        ?>   
		</div>
	</div>
</div>
