<div class="col-lg-12">
  <div class="row">
      <div class="col-lg-12">
         <h2 class="judul-section side merah">SEMUA ALBUM (<?php echo $jml_album; ?> <span>ALBUM</span>)</h2> 
      </div>
      <div>
        <?php 
          $i=0;
          foreach ($album->result() as $row) {                          
              $id_album = $row->id_album;
              foreach ($foto->result() as $row2){
                  if($id_album==$row2->id_album){
        ?>
                  <a href="<?php echo base_url()?>index.php/album/tampil_album/<?php echo $row->id_album;?>" style="text-align:center;">
                      <div class="col-sm-3 album-preview">
                          <img class="img-thumbnail" src="<?php echo base_url()?>assets/images/galeri/album_foto/thumbs/thumb_500X500_<?php echo $row2->foto?>" style="height:150px; width:100%;" alt="album">
                          <b><?php echo $row->judul_album;?></b>
                      </div>
                  </a>
        <?php 
                  break;
                  } //end if
              } //end for
          } //end for
        ?>   
      </div>
  </div>
</div>
