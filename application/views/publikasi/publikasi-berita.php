<div class="col-12">
    <div class="row">
    <h2>Daftar Publikasi Berita</h2>
    <?php foreach ($newsList->result() as $news) { ?>
        <div class="list-item-5">
            <img alt="images" src="<?= base_url()?>assets/images/berita/thumbs/thumb_300X300_<?php echo $news->foto ?>">
            <div class="list-item-title-5 all-news">
                <h2><a href="<?= base_url()?>news/<?= urlencode($news->newsUrl); ?>"><?= $news->judul_berita?></a></h2>
                <small>Jumat, 03 Agustus 2019</small>
            </div>
            <p><?= $news->newsText?></p>
        </div>
    <?php } ?>
    </div>
</div>
<div class="col-12">
    <div class="row">
        <?php for($i=1; $i<=$totalPage; $i++){ ?>    
            <a class='btn btn-primary' href='<?= base_url()?>publikasi/berita/page/<?= $i?>' ><?= $i?></a> 
        <?php } ?>    
    </div>
</div>