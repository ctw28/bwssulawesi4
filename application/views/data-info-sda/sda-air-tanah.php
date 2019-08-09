
<div class="col-lg-12">
    <h2 class="judul-section side merah">Data AIR TANAH</h2>
    <div class="pull-left">
        <?php 
            $file = "./assets/file_upload/data_sda/air_tanah.csv";
            echo "Terakhir update ". date ("d F Y", filemtime($file));
        ?>
    </div>
    
    <table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="50" >
        <thead>
            <tr>
                <th data-toggle="true" rowspan="3" data-sort-ignore="true" >No</th>
                <th  rowspan="3" data-sort-ignore="true">Kode Sumur</th>
                <th data-hide="ws" rowspan="3" data-sort-ignore="true">WS</th>
                <th data-hide="ws" rowspan="3" data-sort-ignore="true">DAS</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kabupaten</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kecamatan</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Irigasi (Ha)</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Tahun Buat</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Tahun Rehab</th>
                <th data-hide="phone, tablet, desktop" rowspan="3" data-sort-ignore="true">Koordinat</th>
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
                        <input id="demo-foo-search" type="text" placeholder="Cari Air Tanah" class="input-md" autocomplete="on">
                    </div>
                </div>
            </div>
        </div>
        <tbody>
            <?php 
                    $mulai = 0;
                    $i=1;
                    ini_set("auto_detect_line_endings", 1);
                    $file = "./assets/file_upload/data_sda/air_tanah.csv";
                    $handle = fopen($file, "r");
                    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
                        if($mulai>=7){
                        $lat  = strip_tags($filesop[46]);
                        $long  = $filesop[47];
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $filesop[1] ?></td>
                    <td><?= $filesop[2] ?></td>
                    <td><?= $filesop[3] ?></td>
                    <td><?= $filesop[7] ?></td>
                    <td><?= $filesop[8] ?></td>
                    <td><?= $filesop[10] ?></td>
                    <td><?= $filesop[29] ?></td>
                    <td><?= $filesop[30] ?></td>
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
                <td colspan="8">
                    <div class="text-right">
                        <ul class="pagination pagination-split m-t-30 m-b-0"></ul>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>

</div>