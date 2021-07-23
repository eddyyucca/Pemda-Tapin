<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user_karyawan/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <?php if ($pesan == false) {
                    # code...
                } elseif ($pesan == "Anda Berhasil Absen Masuk") { ?>
                    <div class="alert alert-success" role="alert">
                        <?= $pesan ?>
                    </div>
                <?php   } elseif ($pesan == "Anda Sudah Absen Masuk") { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $pesan ?>
                    </div>
                <?php   } elseif ($pesan == "Anda Berhasil Absen Pulang") { ?>
                    <div class="alert alert-success" role="alert">
                        <?= $pesan ?>
                    </div>
                <?php   } elseif ($pesan == "Anda Sudah Absen Pulang") { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $pesan ?>
                    </div>
                <?php }   ?>

                <form action="<?= base_url("user/absen_masuk") ?>" method="post">
                    <input type="hidden" name="tipe" value="Jam Masuk">
                    <button class="btn btn-primary btn-lg btn-block mb-1">Absen Masuk</button>
                </form>
                <form action="<?= base_url("user/absen_pulang") ?>" method="post">
                    <input type="hidden" name="tipe" value="Jam Pulang">
                    <button class="btn btn-secondary btn-lg btn-block mb-3">Absen Pulang</button>
                </form>

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