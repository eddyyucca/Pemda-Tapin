<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold ">Tabel History Pengajuan</h3>
            <hr>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table>
                    <tr align="left">
                        <th rowspan="2"><img src="<?= base_url('assets/cop.png') ?>" width="100%">
                        </th>
                    </tr>
                </table>
                <br>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status Pengajuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) {
                            if ($x->file == false) {
                            } elseif ($x->file == true) {
                        ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $x->nip; ?></td>
                                    <td><?= $x->nama_lengkap; ?></td>
                                    <td><?= $x->date; ?></td>
                                    <td><?= $x->status_pengajuan; ?></td>

                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    window.print()
</script>