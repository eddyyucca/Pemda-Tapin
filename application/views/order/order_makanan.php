<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Order Makan</h6>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <form action="<?= base_url('order/order_makanan') ?>" method="post">
                            <td>
                                <input type="date" class="form-control" name="date">
                            </td>
                            <button type="submit" class="btn btn-primary mt-3">Cari</button>
                        </form>
                    </div>
                </div>

                <hr>
                <?= $this->session->flashdata('update'); ?>

                <?php if ($makanan == false) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Karyawan</th>
                                <th>Nama Mess</th>
                                <th>Tanggal</th>
                                <th>tanggal Dibuat</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="5" align="center"> --DATA KOSONG--</td>
                            </tr>
                        </tbody>
                    </table>
                <?php    } elseif ($makanan == true) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Karyawan</th>
                                <th>Nama Mess</th>
                                <th>Tanggal</th>
                                <th>tanggal Dibuat</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($makanan as $x) { ?>
                                    <td><?= $no++ ?></td>
                                    <td><?= $x->nama_lengkap ?></td>
                                    <td><?= $x->nama_mess ?></td>
                                    <td><?= $x->tanggal_pesan ?></td>
                                    <td><?= $x->waktu_post ?></td>
                                    <td><?= $x->waktu ?></td>

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                <?php
                } ?>

            </div>
        </div>
    </div>
</div>