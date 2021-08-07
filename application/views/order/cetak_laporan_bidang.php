<div class="row">
    <div class="table-responsive">
        <div class="container">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                <div class="container">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Bidang</th>
                            <th>Tanggal</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->user; ?></td>
                                <td><?= $x->nama_bidang; ?></td>
                                <td><?= $x->tanggal; ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
            </table>
        </div>
    </div>
    <script>
        window.print()
    </script>