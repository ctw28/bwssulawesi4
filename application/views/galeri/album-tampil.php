<?php 
    $tahun = date("Y", strtotime($tanggal_publish));
    $tanggal = date("d", strtotime($tanggal_publish));
    $day_name = date("w", strtotime($tanggal_publish));
    $moon = date("n", strtotime($tanggal_publish));
    $waktu = date("H:i", strtotime($tanggal_publish));

    $hari = array("Minggu","Senin", "Selasa","Rabu", "Kamis","Jumat","Sabtu");
    $bulan = array("","Jan", "Feb","Mar", "Apr","Mei","Juni","Juli", "Agust","Sept", "Okt","Nov","Des");
?>

<div class="col-lg-12">
	<div class="row">
	    <div class="col-lg-12">
		     <h2 class="judul-section side merah"><?php echo $judul_album; ?> (<?php echo $jml_foto; ?> <span>Foto</span>)</h2> 
			     <p class="info-berita hilang-mob">
			     	<i class="fa fa-clock-o" style="font-size:18px; margin-right:5px;"></i>
                    <span style="margin-right:15px;"><?php echo $hari[$day_name].", ".$tanggal." ". $bulan[$moon] ." ". $tahun." ".$waktu." WITA";?></span>   
                    <i class="fa fa-user hilang" style="font-size:18px; margin-right:5px;"></i><span class="hilang" style="margin-right:15px;">Admin</span>
                    <!-- <i class="fa fa-user hilang" style="font-size:18px; margin-right:5px;"></i><span class="hilang" style="margin-right:15px;"><?php echo $oleh; ?></span> -->
                </p>
                <H4 style="float:left; margin-right: 15px;">Bagikan</H4>
                <div id="share"></div>

	    </div>
		<?php 
            foreach ($foto->result() as $row) {
		?>
	    <div class="col-lg-3 col-md-3 col-xs-6 thumb">
	        <a class="thumbnail fancybox" href="<?php echo base_url();?>assets/images/galeri/album_foto/<?php echo $row->foto?>" rel="group" role="button" alt="<?php echo $row->foto?>">
	            <img class="img-responsive" src="<?php echo base_url();?>assets/images/galeri/album_foto/thumbs/thumb_500X500_<?php echo $row->foto?>" alt="<?php echo $row->foto?>" >
	        </a>
	    </div>
 		<?php 
 			}
 		?>
	</div>

</div>

<div class="col-lg-12">
	<div class="row">
	    <div class="col-lg-12">
		     <h2 class="judul-section side merah">Album Lainnya</h2> 
	    </div>
			<?php 
              	$i=0;
              	foreach ($album_lainnya->result() as $album) {                          
                  	$id_album = $album->id_album;
                      if($i<5){
                  	foreach ($foto_lain->result() as $row2) {
                      	if($id_album==$row2->id_album){

          	?>
            		        <a href="<?php echo base_url();?>index.php/album/tampil_album/<?php echo $album->id_album;?>" style="text-align:center;">
	                          	<div class="col-sm-2 album-preview" >
	                              	<img class="img-thumbnail" src="<?php echo base_url()?>assets/images/galeri/album_foto/thumbs/thumb_500X500_<?php echo $row2->foto?>" style="height:80px; width:100%;"  alt="album">
	                              	<b><?php echo $album->judul_album;?></b>
	                          	</div>
                      		</a>
              <?php 
                      	break;
                      	} //end if
                  	} //end for
              	   }
                   $i++;
                } //end for
          	?>   
	</div>

</div>