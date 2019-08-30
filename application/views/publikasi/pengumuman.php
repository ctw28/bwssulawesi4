<h2 id="announcementHastag">PENGUMUMAN</h2>
<ul>
	
	<?php 
		foreach ($announcements->result() as $announcement) {
	?>
	<li>
		<a  href="<?= base_url()?>pengumuman/selengkapnya/<?= $announcement->id_pengumuman ?>"><i class="fa fa-caret-right"></i> <?=$announcement->judul_pengumuman?></a>
	</li>


	<?php
	}
	?>
</ul>