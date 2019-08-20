<h2>Daftar Publikasi Berita</h2>
<?php
	foreach ($newsList->result() as $news) {
          $string = htmlentities($news->judul_berita);
          $trim=trim($string);
          $judul = strtolower(str_replace(" ", "-", $trim));
?>
    <div class="list-item-5">
        <img alt="images" src="<?= base_url()?>assets/images/berita/thumbs/thumb_300X300_<?php echo $news->foto ?>">
        <div class="list-item-title-5"><p>
            <h3><a href="<?= base_url()?>news/<?php echo urlencode($judul); ?>"><?= substr($news->judul_berita,0, 45)?> ...</a></h3>
            <small>Jumat, 03 Agustus 	2019</small>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
    </div>
<?php
	}
?>