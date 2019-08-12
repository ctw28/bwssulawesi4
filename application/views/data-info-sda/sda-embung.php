
    <h2 class="judul-section side merah">Data Embung</h2>
        <div class="pull-left">
        <?php 
            $file = "./assets/file_upload/data_sda/Embung.csv";
            echo "Terakhir update ". date ("d F Y", filemtime($file));
        ?>
    </div>

    <table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="20" >
        <thead>
            <tr>
                <th data-toggle="true" rowspan="3" data-sort-ignore="true" >No</th>
                <th rowspan="3" data-sort-ignore="true">Nama Embung</th>
                <th data-hide="ws" rowspan="3" data-sort-ignore="true">WS</th>
                <th data-hide="ws" rowspan="3" data-sort-ignore="true">DAS</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kabupaten</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kecamatan</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Irigasi (Ha)</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Tahun Buat</th>
                <th data-hide="phone, tablet" rowspan="3" data-sort-ignore="true">Koordinat</th>
            </tr>
        </thead>
            <div style="margin-bottom:10px; ">
        <div class="row">
            <div class="col-sm-6 text-xs-center" style="  display: none;">
                <div class="form-group">
                    <label class="control-label m-r-5">Status</label>
                    <select id="demo-foo-filter-status" class="form-control input-sm">
                        <option value="">Tampil Semua</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 text-xs-center text-right">
                <div class="form-group">
                    <input id="demo-foo-search" type="text" placeholder="Cari bendung" class="input-md" autocomplete="on">
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
                    $lat  = $filesop[29];
                    $long  = $filesop[30];
            ?> 
                <tr 
                <?php 
                    if($i%2!=0)
                        echo "style='background-color:#F0F9FC;'";
                    else
                        echo "style='background-color:#ffffff;'";
                ?>
                >
                    <td ><?= $i ?></td>
                    <td><?= $filesop[1] ?></td>
                    <td><?= $filesop[2] ?></td>
                    <td><?= $filesop[3] ?></td>
                    <td><?= $filesop[7] ?></td>
                    <td><?= $filesop[8] ?></td>
                    <td><?= $filesop[10] ?></td>
                    <td><?= $filesop[27] ?></td>
                    <td><?= $lat.",".$long ?></td>
                </tr>
                
              <?php $i++;}$c++;} fclose($handle)?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9">
                    <div class="text-right">
                        <ul class="pagination pagination-split m-t-30 m-b-0"></ul>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>

