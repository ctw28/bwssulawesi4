<div class="content-title"><i class="fa fa-database"></i> Permintaan Data</div>
<div class="list-item-2">
    <ul class="content-container "> 
        <li><a href="<?= base_url()?>permintaan-data/manual"><i class="fa fa-caret-right"></i> Manual</a></li>
        <li><a href="<?= base_url()?>permintaan-data/online"><i class="fa fa-caret-right"></i> Online</a></li>
    </ul>
</div>

<div class="content-title"><i class="fa fa-check-square"></i> Cek Status Permintaan</div>
<div class="content-container poling">
    <?php echo form_open_multipart('permintaan_data/status','class="request"'); ?>
    <p><small>Masukkan kode yang telah dikirimkan ke email anda untuk melihat status permintaan.</small></p>
    <input type="text" id="kode_permintaan" name="kode_permintaan" class="form-group" required>                                            
        <button class="btn btn-warning btn-custom" type="submit">Cek Status Permintaan</button>                                                    
    </form>                                                    
</div>
