<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Laporan Kejadian</h1>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Laporan Kejadian</h3>
                                    <form action="/laporan/save" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                </div>
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" autofocus value="<?= old('username'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('username'); ?>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" id="nama_lengkap" name="nama_lengkap" autofocus value="<?= old('nama_lengkap'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nama_lengkap'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_kegiatan">Tanggal Kegiatan</label>
                                            <input type="date" class="form-control <?= ($validation->hasError('tgl_kegiatan')) ? 'is-invalid' : ''; ?>" id="tgl_kegiatan" name="tgl_kegiatan" autofocus value="<?= old('tgl_kegiatan'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('tgl_kegiatan'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jam_mulai">Jam Mulai</label>
                                            <input type="time" class="form-control <?= ($validation->hasError('jam_mulai')) ? 'is-invalid' : ''; ?>" id="jam_mulai" name="jam_mulai" autofocus value="<?= old('jam_mulai'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('jam_mulai'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jam_selesai">Jam Selesai</label>
                                            <input type="time" class="form-control <?= ($validation->hasError('jam_selesai')) ? 'is-invalid' : ''; ?>" id="jam_selesai" name="jam_selesai" autofocus value="<?= old('jam_selesai'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('jam_selesai'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tegangan">Tegangan</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('tegangan')) ? 'is-invalid' : ''; ?>" id="tegangan" name="tegangan" autofocus value="<?= old('tegangan'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('tegangan'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="arus">Arus</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('arus')) ? 'is-invalid' : ''; ?>" id="arus" name="arus" autofocus value="<?= old('arus'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('arus'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="keterangan">Deskripsi Kejadian</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="keterangan" name="keterangan" autofocus value="<?= old('keterangan'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('keterangan'); ?>
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