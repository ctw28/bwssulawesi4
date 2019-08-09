<!-- <div class="col-lg-3">
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
</div> -->
<div class="col-lg-12">
<h2 class="judul-section side merah">Data Hidrologi Pos Duga Air</h2>
    <div class="pull-left">
        <?php 
            $file = "./assets/file_upload/data_sda/pos_duga_air.csv";
            echo "Terakhir update ". date ("d F Y", filemtime($file));
        ?>
    </div>

<table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="10" >
    <thead>
        <tr style="font-size:12px;">
            <th data-toggle="true" data-sort-ignore="true" style="width: 15%;">Kode</th>
            <th style="width:15%;" data-sort-ignore="true">Nama Pos Duga Air</th>
            <th data-hide="phone" style="width: 15%;" data-sort-ignore="true">WS</th>
            <th data-hide="phone" style="width: 15%;" data-sort-ignore="true">DAS</th>
            <th data-hide="phone" style="width: 15%;" data-sort-ignore="true">Kab / Kota</th>
            <th data-hide="phone" style="width: 15%;" data-sort-ignore="true">Tahun</th>
            <th data-hide="phone" style="width: 25%;" data-sort-ignore="true">Oleh</th>
            <th data-hide="phone" style="width: 25%;" data-sort-ignore="true">Koordinat</th>

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
            <div class="col-sm-12 text-xs-center text-right">
                <div class="form-group">
                    <input id="demo-foo-search" type="text" placeholder="Cari Pos Duga Air" class="input-md" autocomplete="on">
                </div>
            </div>
        </div>
    </div>
    <tbody>
    <?php 
        $i=1;
        $handle = fopen($file, "r");
        $c = 0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
        {
            if($c>7){
            $lat  = mysql_real_escape_string($filesop[20]);
            $long  = mysql_real_escape_string($filesop[21]);
    ?> 
        <tr 
        <?php 
            if($i%2!=0)
                echo "style='background-color:#F0F9FC;'";
            else
                echo "style='background-color:#ffffff;'";
        ?>
        >
            <td><?php echo mysql_real_escape_string("0".$filesop[5]."0".$filesop[6].$filesop[7]) ?></td>
            <td><?php echo $filesop[1] ?></td>
            <td><?php echo $filesop[3] ?></td>
            <td><?php echo $filesop[4] ?></td>
            <td><?php echo $filesop[8] ?> / <?php echo $filesop[9] ?></td>
            <td><?php echo $filesop[16] ?></td>
            <td><?php echo $filesop[17] ?></td>
            <td><?php echo $lat.",".$long ?></td>
        </tr>
        
      <?php $i++;}$c++;} fclose($handle)?>
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