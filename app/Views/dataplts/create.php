<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Tambah Data PLTS</h1>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form PLTS</h3>
                                    <form action="/plts/save" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                </div>

                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama">Nama PLTS</label>
                                            <input type="text"
                                                class="form-control <?= $validation->hasError('data_plts') ? 'is-invalid' : ''; ?>"
                                                id="data_plts" name="data_plts" autofocus
                                                value="<?= old('data_plts'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('data_plts'); ?>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <a href="/plts" class="btn btn-primary">Back</a>
                                        </div>
                                </form>
                            </div>

                        </div>

                    </div>
                    <?= $this->endSection(); ?>