<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Laporan Kejadian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="/laporan/create" class="btn btn-primary">Tambah Laporan Kejadian</a>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="card">
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Table Laporan Kejadian</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Tegangan(V)</th>
                                <th>Arus(I)</th>
                                <th>Daya(P)
                                    (V.I)
                                </th>
                                <th>Deskripsi Kejadian</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($laporanharian as $p) :

                            ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['username']; ?></td>
                                <td><?= $p['nama_lengkap']; ?></td>
                                <td><?= $p['tgl_kegiatan']; ?></td>
                                <td><?= $p['jam_mulai']; ?></td>
                                <td><?= $p['jam_selesai']; ?></td>
                                <td><?= $p['tegangan']; ?> volt</td>
                                <td><?= $p['arus']; ?> A</td>
                                <td><?= $p['arus'] * $p['tegangan']; ?> Watt</td>
                                <td><?= $p['keterangan']; ?></td>
                                <td>
                                    <form action="/laporan/edit<?= $p['id']; ?>">
                                        <button class="nav-icon fas fa-edit"></button>
                                    </form>

                                    <form action="/laporan/<?= $p['id']; ?>" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="nav-icon fas fa-trash"
                                            onclick="return confirm('Apakah Anda yakin untuk menghapus data?');"></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
</div>
</div>
<?= $this->endSection(); ?>