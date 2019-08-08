<h2 class="judul-section side biru">FORM USULAN PERBAIKAN, REHABILITASI ATAU PENINGKATAN JARINGAN IRIGASI P3-TGAI</h2>
    <?php 
        if($this->session->flashdata('usulan_info')){
    ?>
    <p class="alert alert-success" role="alert"><?php echo $this->session->flashdata('usulan_info');?></p>
    <?php 
      }
    ?>
<div class="col-sm-2">
	
</div>
<?php echo form_open_multipart('p3a/simpan_usulan'); ?>
    <div class="col-sm-8">
        <div class="form">      
            <div class="form-group" style="margin-bottom:40px;">
                <label for="nama">Nama P3A</label>
<!--                 <input type="input" class="form-control" id="nama" name="nama" placeholder="Input Nama P3A" required>
                <div id="p3a-list"></div>
 -->                <select class="itemName form-control" style="width:100%;" name="itemName" required></select>
            </div>
            <div class="form-group has-feedback" style="margin-bottom:40px;">
                <label>Surat Usulan Perbaikan yang telah di scan dalam bentuk pdf. (Ukuran File Maksimal 5MB)</label>
                <?php echo form_input(array('type' => 'file','name' => 'filenya' , 'required'=> 'required')); ?>
                
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="nama">Uraian Usulan (sesuaikan dengan isi surat usulan)</label>
                <Textarea id="uraian_usulan" name="uraian_usulan" required></Textarea>
            </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-more pull-right" style="margin-top:20px;">Submit</button>
        </div>

        </div>

    
    </div> <!-- end col-sm-8  -->
</form>  
<script type="text/javascript">
      $('.itemName').select2({
        placeholder: 'Pilih P3A',
        ajax: {
          url: '<?php echo base_url();?>index.php/p3a/list_p3a',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });
</script>

