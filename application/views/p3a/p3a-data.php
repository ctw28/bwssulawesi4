<h2 class="judul-section side biru" style="margin-bottom:0 !important;">Data P3A</h2>
    
    <table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="20" >
        <thead style="background-color:#336633 !important;">
            <tr style="background-color:#336633 !important;">
                <th data-toggle="true" rowspan="3" data-sort-ignore="true" width="6%">No.</th>
                <th rowspan="3" data-sort-ignore="true" width="15%">Nama DI</th>
                <th rowspan="3" data-sort-ignore="true" width="10%">Nama P3A</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Desa</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kecamatan</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Kabupaten</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Ketua</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Sekretaris</th>
                <th data-hide="phone, tablet, desktop"" rowspan="3" data-sort-ignore="true">Bendahara</th>
                <th data-hide="phone" rowspan="3" data-sort-ignore="true">Pengamat</th>
                <th data-hide="phone, tablet" rowspan="3" data-sort-ignore="true">Kepala Desa</th>
                <th data-hide="phone, tablet, desktop" rowspan="3" data-sort-ignore="true">Kondisi Kelembagaan</th>
                <th data-hide="phone, tablet, desktop" rowspan="3" data-sort-ignore="true">Iuran</th>
                <th data-hide="phone, tablet, desktop" rowspan="3" data-sort-ignore="true">Status Badan Hukum</th>
                <th data-hide="phone, tablet, desktop" rowspan="3" data-sort-ignore="true">Akta Notaris</th>
                <th data-hide="phone, tablet, desktop" rowspan="3" data-sort-ignore="true">AD / RT</th>
                <th data-hide="phone, tablet, desktop" rowspan="3" data-sort-ignore="true">Koordinat</th>
            </tr>
        </thead>
        <div style="margin-bottom:10px; ">
            <div class="row">
                <div class="col-sm-6 text-xs-center" >
                    <div class="form-group" style="display:none;">
                        <label class="control-label m-r-5">Status</label>
                        <select id="demo-foo-filter-status" class="form-control input-sm">
                            <option value="">Tampil Semua</option>
                         </select>
                    </div>
                </div>
                <div class="col-sm-6 text-xs-center text-right">
                    <div class="form-group">
                        <input id="demo-foo-search" type="text" placeholder="Cari P3A" class="input-md" autocomplete="on">
                    </div>
                </div>
            </div>
        </div>
        <tbody>
            <?php 
                $i=1;
                foreach ($data_p3a->result() as $row) {
            ?> 
                <tr 
                <?php 
                    if($i%2!=0)
                        echo "style='background-color:#F0F9FC;'";
                    else
                        echo "style='background-color:#ffffff;'";
                ?>
                >
                    <td ><?php echo $i ?></td>
                    <td><?php echo $row->nama_di ?></td>
                    <td><?php echo $row->nama_p3a ?></td>
                    <td><?php echo $row->desa ?></td>
                    <td><?php echo $row->kecamatan ?></td>
                    <td><?php echo $row->kabupaten ?></td>
                    <td><?php echo $row->ketua ?></td>
                    <td><?php echo $row->sekretaris ?></td>
                    <td><?php echo $row->bendahara ?></td>
                    <td><?php echo $row->pengamat ?></td>
                    <td><?php echo $row->kepala_desa ?></td>
                    <td><?php echo $row->kondisi_kelembagaan ?></td>
                    <td><?php echo $row->iuran ?></td>
                    <td><?php echo $row->status_badan_hukum ?></td>
                    <td><?php echo $row->akta_notaris ?> (<?php echo $row->akta_notaris_tahun ?>)</td>
                    <td><?php echo $row->ad_art ?></td>
                    <td><?php echo $row->lat ?> , <?php echo $row->lang ?></td>
                </tr>
                
              <?php 
                $i++;
                }
              ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="11">
                    <div class="text-right">
                        <ul class="pagination pagination-split m-t-30 m-b-0"></ul>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>

<!--     <a href="<?php echo base_url() ?>index.php/p3a/tambah" class="btn btn-primary">Tambah Data</a><br>
    <a href="<?php echo base_url() ?>index.php/p3a/cetak" class="btn btn-primary">Cetak Data</a>
 -->