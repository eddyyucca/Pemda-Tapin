<body class="bg-gradient-success">
    <div class="mbr-slider slide carousel" data-keyboard="false" data-ride="carousel" data-interval="2000" data-pause="true">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card o-hidden border-0 shadow-lg my-5 ">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg">
                                    <div class="p-5">
                                        <div class="text-center mb-2">

                                            <img src="<?= base_url('assets/images/logo_kab.png') ?>" width="100px">
                                            <h3>Pemerintahan Daerah Kabupaten Tapin</h3>
                                            <hr>
                                            <h4>Login Pegawai</h4>
                                            <hr>
                                            <!-- <h1 class="h4 text-gray-900 mb-4">Login</h1> -->
                                        </div>
                                        <?php
                                        echo $data;
                                        echo $this->session->flashdata('pesan')
                                        ?>
                                        <?= validation_errors() ?>
                                        <form class="user" action="<?= base_url('auth/auth_user') ?>" method="POST">
                                            <div class="form-group mb-4 mt-2">
                                                <div class="form-group mb-4">
                                                    <input type="text" class="form-control" name="nip" placeholder="NIP Pegawai">
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>

                                            <button type="submit" class="btn btn-success btn-user btn-block">
                                                Masuk
                                            </button>
                                            <div class="d-flex justify-content-center mb-4 mt-3">
                                                <small>
                                                    <a href="<?= base_url('auth/index') ?>">Masuk Sebagai Admin</a>
                                            </div>
                                            </small>
                                        </form>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>