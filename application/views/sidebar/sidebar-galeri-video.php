<div class="content-title"><i class="fa fa-bullhorn "></i> Galeri Video</div>
<div class="list-item-2">
    <ul class="content-container "> 
		<?php foreach ($sideMenu->result() as $row) { ?>
        <li><a href="<?= base_url()?>galeri/video/<?= $row->kategori_seo?>"><i class="fa fa-caret-right"></i> <?= $row->nama_kategori ?> (<?= $row->albumCount ?>)</a></li>
		<?php } ?>
    </ul>
</div>