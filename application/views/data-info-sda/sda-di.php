    <h2>Data Daerah Irigasi</h2>
    <?= "Terakhir update ". $last_update;?>
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
    <table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="10">
        <thead>
            <tr>
                <th data-toggle="true"  data-sort-ignore="true">No</th>
                <th data-sort-ignore="true">Nama DI</th>
                <th data-hide="ws" data-sort-ignore="true">WS</th>
                <th data-hide="ws" data-sort-ignore="true">DAS</th>
                <th data-hide="phone" data-sort-ignore="true">Kabupaten</th>
                <th data-hide="phone" data-sort-ignore="true">Kecamatan</th>
                <th data-hide="phone" data-sort-ignore="true">Kelurahan</th>
                <th data-hide="phone" data-sort-ignore="true">Irigasi</th>
                <th data-hide="phone, tablet, desktop"  data-sort-ignore="true">Koordinat</th>
            </tr>
        </thead>
        <tbody >
            <?php foreach ($data as $row) { ?>
            <tr style="background-color : #<?= $row['background']?> ;">
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
                <td><?= $row[4] ?></td>
                <td><?= $row[5] ?></td>
                <td><?= $row[6] ?></td>
                <td><?= $row[7] ?></td>
                <td><?= $row[8] ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9">
                    <div class="text-right">
                        <ul class="pagination pagination-split m-b-0"></ul>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
