<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('admin/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jam</th>
                            <th>Tanggal Absen</th>
                            <th>tipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($absen as $x) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $x->waktu ?></td>
                                <td><?= $x->tanggal ?></td>
                                <td><?= $x->tipe ?></td>
                            <?php  } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>