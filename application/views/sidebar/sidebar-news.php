<div class="content-title"><i class="fa fa-list"></i> Berita Terbaru</div>
<section class="list-container">
<div class="content-container" style="padding: 10px;">
	<?php 
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
        foreach ($terbaru->result() as $row) {                          
          $string = htmlentities($row->judul_berita);
          $trim=trim($string);
          $judul = strtolower(str_replace(" ", "-", $trim));
          $tahun = date("Y", strtotime($row->tanggal_publish));
          $tanggal = date("d", strtotime($row->tanggal_publish));
          $day_name = date("w", strtotime($row->tanggal_publish));
          $moon = date("n", strtotime($row->tanggal_publish));
          $waktu = date("H:i", strtotime($row->tanggal_publish));
          $hari = array("Minggu","Senin", "Selasa","Rabu", "Kamis","Jumat","Sabtu");
          $bulan = array("","Jan", "Feb","Mar", "Apr","Mei","Juni","Juli", "Agust","Sept", "Okt","Nov","Des");
    ?>

    <div class="list-item-5">
        <img alt="images" src="<?= base_url()?>assets/images/berita/thumbs/thumb_300X300_<?php echo $row->foto ?>">
        <div class="list-item-title-5"><p>
            <h5><a href="<?= base_url()?>news/<?php echo urlencode($judul); ?>"><?= substr($row->judul_berita,0, 45)?> ...</a></h5>
            <small>Jumat, 03 Agustus 	2019</small>
        </div>
    </div>
    <?php } ?> 
</div>
</section>
<div class="container-3">
    <div class="poster">
        <img alt="images" src="<?= base_url()?>assets/images/banner.jpg">
    </div>
</div>
