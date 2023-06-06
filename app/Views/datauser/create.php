<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Users</h1>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Laporan Harian</h3>
                                    <form action="/datauser/save" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                </div>
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text"
                                                class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>"
                                                id="username" name="username" autofocus value="<?= old('username'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('username'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text"
                                                class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                                                id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nama'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text"
                                                class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>"
                                                id="password" name="password" autofocus value="<?= old('password'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('password'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor">Nomor Hp</label>
                                            <input type="text"
                                                class="form-control <?= ($validation->hasError('nomor')) ? 'is-invalid' : ''; ?>"
                                                id="nomor" name="nomor" autofocus value="<?= old('nomor'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nomor'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="level">Level</label>
                                            <input type="text"
                                                class="form-control <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>"
                                                id="level" name="level" autofocus value="<?= old('level'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('level'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                    <?= $this->endSection(); ?>