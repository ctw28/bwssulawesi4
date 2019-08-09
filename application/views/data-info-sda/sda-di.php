<div class="col-12">
    <h2 class="judul-section side merah">Data Daerah Irigasi</h2>
    <div class="pull-left">
        <?php 
            $file = "./assets/file_upload/data_sda/daerah_irigasi.csv";
            echo "Terakhir update ". date ("d F Y", filemtime($file));
        ?>
    </div>
    <table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="10">
        <thead>
            <tr>
                <th data-toggle="true" rowspan="3" data-sort-ignore="true" style="width: 7%;">No</th>
                <th rowspan="3" data-sort-ignore="true">Nama DI</th>
                <th data-hide="ws" rowspan="3" data-sort-ignore="true">WS</th>
                <th data-hide="ws" rowspan="3" data-sort-ignore="true">DAS</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kabupaten</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kecamatan</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kelurahan</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Irigasi</th>
                <th data-hide="phone, tablet, desktop" rowspan="3" data-sort-ignore="true">Koordinat</th>
            </tr>
        </thead>
        <div>
            <div class="row">
                <div class="col-sm-6 text-xs-center" style="display: none;">
                    <div class="form-group">
                        <label class="control-label m-r-5">Status</label>
                        <select id="demo-foo-filter-status" class="form-control input-sm">
                            <option value="">Tampil Semua</option>
                         </select>
                    </div>
                </div>
                <div class="col-sm-12 text-xs-center text-right">
                    <div class="form-group">
                        <input id="demo-foo-search" type="text" placeholder="Cari Daerah Irigasi" class="input-md" autocomplete="on">
                    </div>
                </div>
            </div>
        </div>
        <tbody >
            <?php 
                $i=1;
                $mulai = 0;
                ini_set("auto_detect_line_endings", 1);
                $file = "./assets/file_upload/data_sda/di.csv";
                $handle = fopen($file, "r");
                while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                {
                    if($mulai>8){
                        $lat  = $filesop[65];
                        $long  = $filesop[66];
                        $background = '#fff';
                        if($i % 2 == 0){
                            $background = '#eee';
                        }
            ?>
            <tr style="background-color : <?= $background?> ;">
                <td><?php echo $i ?></td>
                <td><?php echo $filesop[1] ?></td>
                <td><?php echo $filesop[2] ?></td>
                <td><?php echo $filesop[3] ?></td>
                <td><?php echo $filesop[7] ?></td>
                <td><?php echo $filesop[8] ?></td>
                <td><?php echo $filesop[9] ?></td>
                <td><?php echo $filesop[10] ?></td>
                <td><?php echo $lat." , ".$long ?></td>
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
                        <ul class="pagination pagination-split m-b-0"></ul>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>