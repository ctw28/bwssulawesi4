<h2>Daftar Publikasi Berita</h2>
<div class="row">
    <?php foreach ($newsList->result() as $news) { ?>
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
    <?php } ?>
    </div>
    <?php for($i=1; $i<=$totalPage; $i++){ ?>
        <a class='btn btn-primary' href='<?= base_url()?>publikasi/berita/page/<?= $i?>' ><?= $i?></a> 
    <?php } ?>
</div>