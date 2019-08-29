<div class="content-title  mobile-hide"><i class="fa fa-list"></i> Berita Terbaru</div>
<section class="list-container">
<div class="content-container mobile-hide">
	<?php 
        foreach ($terbaru->result() as $row) {                          
    ?>

    <div class="list-item-5">
        <img alt="images" src="<?= base_url()?>assets/images/berita/thumbs/thumb_300X300_<?php echo $row->foto ?>">
        <div class="list-item-title-5"><p>
            <h5><a href="<?= base_url()?>news/<?php echo urlencode($row->newsUrl); ?>"><?= substr($row->newsTitle,0, 45)?> ...</a></h5>
            <small><?= $row->newsDate ?></small>
        </div>
    </div>
    <?php } ?> 
</div>
</section>
<div class="container-3  mobile-hide">
    <div class="poster">
        <img alt="images" src="<?= base_url()?>assets/images/banner.jpg">
    </div>
</div>
