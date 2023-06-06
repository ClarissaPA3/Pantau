<?= $this->extend('layout/template_admin'); ?>


<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="card card-primary">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Laporan Kejadian</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="/alternatif/create" class="btn btn-primary">Tambah Laporan Kejadian</a>
                    </ol>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Responsive Hover Table</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tanggal Kegiatan</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Tegangan</th>
                                        <th>Arus</th>
                                        <th>Desk Kejadian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>

                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $laporanharian['username']; ?></td>
                                        <td><?= $laporanharian['nama_lengkap']; ?></td>
                                        <td><?= $laporanharian['tgl_kegiatan']; ?></td>
                                        <td><?= $laporanharian['jam_mulai']; ?></td>
                                        <td><?= $laporanharian['jam_selesai']; ?></td>
                                        <td><?= $laporanharian['tegangan']; ?></td>
                                        <td><?= $laporanharian['arus']; ?></td>
                                        <td><?= $laporanharian['keterangan']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>

</div>
</div>
<div class="card-footer">
    <div class="text-right">
        <a href="#" class="btn btn-sm bg-teal">
            <i class="fas fa-comments"></i>
        </a>
        <a href="#" class="btn btn-sm btn-primary">
            <i class="fas fa-user"></i> View Profile
        </a>
    </div>
</div>
</div>
</div>
<?= $this->endSection(); ?>