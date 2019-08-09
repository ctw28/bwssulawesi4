<div class="col-lg-3">
<h2 class="judul-section side biru">Data SDA</h2>
 <nav>
        <ul class="fa-ul list-side tkpsda-menu">
          
          <li class="list-item"><a href="<?php echo base_url()?>index.php/data_informasi_sda/di"><i class="fa fa fa-globe " ></i> Daerah Irigasi</a></li>
          <li class="list-item"><a href="<?php echo base_url()?>index.php/data_informasi_sda/bendung"><i class="fa fa fa-globe " ></i> Bendung</a></li>
          <li class="list-item"><a href="<?php echo base_url()?>index.php/data_informasi_sda/embung"><i class="fa fa fa-globe" ></i> Embung</a></li>
          <li class="list-item"><a href="<?php echo base_url()?>index.php/data_informasi_sda/pantai"><i class="fa fa-globe"></i> Pantai</i></a></li>
          <li class="list-item"><a href="<?php echo base_url()?>index.php/data_informasi_sda/sungai"><i class="fa fa-globe"></i> Sungai</a>      </li>
          <li class="list-item"><a href="<?php echo base_url()?>index.php/data_informasi_sda/air_tanah"><i class="fa fa-globe"></i> Air Tanah</i></a></li>
          <li class="list-item"><a href="<?php echo base_url()?>index.php/data_informasi_sda/air_baku"><i class="fa fa-globe"></i> Air Baku</a></li>
          <li class="list-item"><a href="#" id="btn-3" data-toggle="collapse" data-target="#submenu3" aria-expanded="false"><i class="fa fa-globe"></i> Hidrologi<i class="fa fa-caret-right pull-right " style="font-size:18px;"></i></a>
                <ul class="nav collapse" id="submenu3" role="menu" aria-labelledby="btn-3">
                    <li><a href="<?php echo base_url()?>index.php/data_informasi_sda/hidrologi_pos_klimatologi">Pos Klimatologi (Iklim)</a></li>
                    <li><a href="<?php echo base_url()?>index.php/data_informasi_sda/hidrologi_pos_hujan">Pos Hujan (ARR)</a></li>
                    <li><a href="<?php echo base_url()?>index.php/data_informasi_sda/hidrologi_pos_duga_air">Pos Duga Air (AWLR)</a></li>
                </ul>
          </li>
            
        </ul>
    </nav>
</div>
<div class="col-lg-9">
<h2 class="judul-section side merah">Data Pantai</h2>

    <?php 
      foreach ($last->result() as $row) {
        $tahun = date("Y", strtotime($row->tgl_update));
        $tanggal2 = date("d", strtotime($row->tgl_update));
        $day_name = date("w", strtotime($row->tgl_update));
        $moon = date("n", strtotime($row->tgl_update));
        $waktu = date("H:i", strtotime($row->tgl_update));

        $hari = array("Minggu","Senin", "Selasa","Rabu", "Kamis","Jumat","Sabtu");
        $bulan2 = array("","Januari", "Februari","Maret", "April","Mei","Juni","Juli", "Agustus","September", "Oktober","November","Desember");

    ?>                 
        Data Update :     <span style="margin-right:15px; "><?php echo $tanggal2." ". $bulan2[$moon] ." ". $tahun;?></span>                  
    <?php } ?>


<table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="10" >
    <thead>
        <tr style="font-size:12px;">
            <th data-toggle="true" data-sort-ignore="true" style="width: 15%;">Kode</th>
            <th style="width:15%;" data-sort-ignore="true">Nama Pantai</th>
            <th data-hide="phone" style="width: 15%;" data-sort-ignore="true">Desa / Kecamatan</th>
            <th data-hide="phone" style="width: 15%;" data-sort-ignore="true">Kab / Kota</th>
            <th data-hide="phone, tablet, desktop" style="width: 25%;" data-sort-ignore="true">Koordinat</th>
            <th data-hide="phone" style="width: 5%;" data-sort-ignore="true">Panjang (KM)</th>
            <th data-hide="phone" style="width: 20%;" data-sort-ignore="true">Jenis</th>
            <th data-hide="phone, tablet" style="width: 10%;" data-sort-ignore="true">Tertangani (KM)</th>

        </tr>
    </thead>
    <div class="form-inline m-b-20" style="margin-bottom:10px; ">
        <div class="row">
            <div class="col-sm-6 text-xs-center" style="  visibility: hidden;">
                <div class="form-group">
                    <label class="control-label m-r-5">Status</label>
                    <select id="demo-foo-filter-status" class="form-control input-sm">
                        <option value="">Tampil Semua</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 text-xs-center text-right">
                <div class="form-group">
                    <input id="demo-foo-search" type="text" placeholder="Cari Pantai" class="input-md" autocomplete="on">
                </div>
            </div>
        </div>
    </div>
    <tbody>
    <?php 
        $i=0;
        foreach ($data->result() as $row) {
      ?> 
        <tr 
        <?php 
            if($i%2!=0)
                echo "style='background-color:#F0F9FC;'";
            else
                echo "style='background-color:#ffffff;'";
        ?>
        >
            <td ><?php echo $row->kode_pantai ?></td>
            <td ><?php echo $row->nama_pantai ?></td>
            <td ><?php echo $row->desa ?></td>
            <td ><?php echo $row->kab ?></td>
            <td ><?php echo $row->koordinat ?></td>
            <td style="text-align:center;"><?php echo $row->panjang ?></td>
            <td ><?php echo $row->jenis ?></td>
            <td ><?php echo $row->sudah_tertangani ?></td>
        </tr>
      <?php $i++;} ?>
        
    </tbody>
    <tfoot>
        <tr>
            <td colspan="8">
                <div class="text-right">
                    <ul class="pagination pagination-split m-t-30 m-b-0"></ul>
                </div>
            </td>
        </tr>
    </tfoot>
</table>
</div>