<?php 
	$tahun = date("Y", strtotime($tanggal));
	$tanggalnya = date("d", strtotime($tanggal));
	$day_name = date("w", strtotime($tanggal));
	$moon = date("n", strtotime($tanggal));
	$waktu = date("H:i", strtotime($tanggal));

	$hari = array("Minggu","Senin", "Selasa","Rabu", "Kamis","Jumat","Sabtu");
	$bulan = array("","Jan", "Feb","Mar", "Apr","Mei","Juni","Juli", "Agust","Sept", "Okt","Nov","Des");
?>

<h3><?php echo $judul; ?></h3>
<h5><?php echo $hari[$day_name].", ".$tanggalnya." ". $bulan[$moon] ." ". $tahun." ".$waktu." WITA"; ?></h5>
	<iframe src="http://docs.google.com/gview?url=<?php echo base_url()?><?php echo $filenya; ?>&embedded=true" style="width:100%; height:600px;" frameborder="0"></iframe>