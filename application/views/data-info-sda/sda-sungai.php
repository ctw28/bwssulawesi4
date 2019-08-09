
<div class="col-lg-12">
    <h2 class="judul-section side merah">Data Sungai</h2>
    <div class="pull-left">
    <?php 
                      $file = "./assets/file_upload/data_sda/sungai.csv";
                      echo "Terakhir update ". date ("d F Y", filemtime($file));
                  ?>
    </div>

    <table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="20" >
        <thead>
            <tr>
                <th data-toggle="true" rowspan="3" data-sort-ignore="true" style="width: 7%;">No</th>
                <th style="width:10%;" rowspan="3" data-sort-ignore="true">Nama Sungai</th>
                <th data-hide="ws" rowspan="3" style="width: 15%;" data-sort-ignore="true">WS</th>
                <th data-hide="ws" rowspan="3" style="width: 10%;" data-sort-ignore="true">DAS</th>
                <th data-hide="phone" rowspan="3" style="width: 10%;" data-sort-ignore="true">Kabupaten</th>
                <th data-hide="phone" rowspan="3" style="width: 10%;" data-sort-ignore="true">Kecamatan</th>
                <th data-hide="phone" rowspan="3" style="width: 10%;" data-sort-ignore="true">DMI (m3/dtk)</th>
                <th data-hide="phone" rowspan="3" style="width: 10%;" data-sort-ignore="true">Luas DAS(Km2)</th>
                <th data-hide="phone" rowspan="3" style="width: 10%;" data-sort-ignore="true">Panjang Sungai(Km)</th>
                <th data-hide="phone, tablet, desktop" rowspan="3" style="width: 20%;" data-sort-ignore="true">Koordinat</th>
            </tr>
        </thead>
        <div style="margin-bottom:10px; ">
            <div class="row">
                <div class="col-sm-6 text-xs-center" style=" display: none;">
                    <div class="form-group">
                        <label class="control-label m-r-5">Status</label>
                        <select id="demo-foo-filter-status" class="form-control input-sm">
                            <option value="">Tampil Semua</option>
                         </select>
                    </div>
                </div>
                <div class="col-sm-12 text-xs-center text-right">
                    <div class="form-group">
                        <input id="demo-foo-search" type="text" placeholder="Cari sungai" class="input-md" autocomplete="on">
                    </div>
                </div>
            </div>
        </div>
        <tbody>
            <?php 
                    $i=1;
                    $mulai = 0;
                    ini_set("auto_detect_line_endings", 1);
                    $file = "./assets/file_upload/data_sda/sungai.csv";
                    $handle = fopen($file, "r");
                    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
                        if($mulai>=7){
                        $lat  = $filesop[23];
                        $long  = $filesop[24];
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $filesop[1] ?></td>
                    <td><?= $filesop[2] ?></td>
                    <td><?= $filesop[3] ?></td>
                    <td><?= $filesop[9] ?></td>
                    <td><?= $filesop[10] ?></td>
                    <td><?= $filesop[13] ?></td>
                    <td><?= $filesop[17] ?></td>
                    <td><?= $filesop[18] ?></td>
                    <td><?= $lat.",".$long ?></td>
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
                <td colspan="10">
                    <div class="text-right">
                        <ul class="pagination pagination-split m-t-30 m-b-0"></ul>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>

</div>