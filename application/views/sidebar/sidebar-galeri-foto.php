<div class="content-title"><i class="fa fa-bullhorn "></i> Galeri Foto</div>
<div class="list-item-2">
    <ul class="content-container "> 
		<?php foreach ($sideMenu->result() as $row) { ?>
        <li><a href="<?= base_url()?>galeri/album/<?= $row->kategori_seo?>"><i class="fa fa-caret-right"></i> <?= $row->nama_kategori ?></a></li>
		<?php } ?>
    </ul>
</div>