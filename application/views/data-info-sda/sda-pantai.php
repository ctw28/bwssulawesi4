<!-- <div class="col-lg-2">
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
    <h2 class="judul-section side merah">Data Inventarisasi Pantai</h2>
    <div class="pull-left">
        <?php 
            $file = "./assets/file_upload/data_sda/pantai.csv";
            echo "Terakhir update ". date ("d F Y", filemtime($file));
        ?>
    </div>
    
    <table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="20" >
        <thead>
            <tr>
                <th data-toggle="true" rowspan="3" data-sort-ignore="true" >No.</th>
                <th data-toggle="true" rowspan="3" data-sort-ignore="true" >Kode</th>
                <th rowspan="3" data-sort-ignore="true">Nama Pantai</th>
                <th data-hide="ws" rowspan="3" data-sort-ignore="true">WS</th>
                <th data-hide="ws" rowspan="3" data-sort-ignore="true">DAS</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kabupaten</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kecamatan</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Jenis Bangunan</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Panjang (m)</th>
                <th data-hide="phone, tablet, desktop" rowspan="3" data-sort-ignore="true">Koordinat</th>
            </tr>
        </thead>
        <div class="form-inline m-b-20" style="margin-bottom:10px; ">
            <div class="row">
                <div class="col-sm-6 text-xs-center" style="visibility: hidden;">
                    <div class="form-group">
                        <label class="control-label m-r-5">Status</label>
                        <select id="demo-foo-filter-status" class="form-control input-sm">
                            <option value="">Tampil Semua</option>
                         </select>
                    </div>
                </div>
                <div class="col-sm-12 text-xs-center text-right">
                    <div class="form-group">
                        <input id="demo-foo-search" type="text" placeholder="Cari Pantai" class="input-md" autocomplete="on">
                    </div>
                </div>
            </div>
        </div>
        <tbody>
            <?php 
                    $i=1;
                    $mulai = 0;
                    ini_set("auto_detect_line_endings", 1);
                    $file = "./assets/file_upload/data_sda/pantai.csv";
                    $handle = fopen($file, "r");
                    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
                        if($mulai>=7){
                        $lat  = mysql_real_escape_string($filesop[45]);
                        $long  = mysql_real_escape_string($filesop[46]);
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo mysql_real_escape_string("0".$filesop[4]."0".$filesop[5].$filesop[6]) ?></td>
                    <td><?php echo $filesop[1] ?></td>
                    <td><?php echo $filesop[2] ?></td>
                    <td><?php echo $filesop[3] ?></td>
                    <td><?php echo $filesop[7] ?></td>
                    <td><?php echo $filesop[8] ?></td>
                    <td><?php echo $filesop[18] ?></td>
                    <td><?php echo $filesop[24] ?></td>
                    <td><?php echo $lat.",".$long ?></td>
                </tr>
              
                <?php
                    $i++; 
                      } 
                    $mulai++;
                    } 
                ?>
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