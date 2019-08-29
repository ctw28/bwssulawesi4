<h2 class="judul-section side biru tess">Status Permintaan</h2>
<div class="col-sm-12"> 

<?php
            $info = $this->session->flashdata('info');
            if (!empty($info)) {
?>
 <div class="alert alert-success" role="alert"><b><?php echo $info ?></b></div>
 <?php   }
 else {
 	redirect('permintaan_data');
 }
          ?> 
 <p>Silahkan cek email anda untuk melihat kode permintaan yang anda ajukan.</p><br>
</div>
