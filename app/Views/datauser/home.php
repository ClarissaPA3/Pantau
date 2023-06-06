<?= $this->extend('layout/template_admin'); ?>


<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="/datauser/create" class="btn btn-primary">Tambah Data Users</a>
                    </ol>

                </div>
            </div>
            <div class="card">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Table Data User</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Password</th>
                                <th>Nomor Hp</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($datauser as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $p['username']; ?></td>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['password']; ?></td>
                                    <td><?= $p['nomor']; ?></td>
                                    <td><?= $p['level']; ?></td>
                                    <td>
                                        <form action="/datauser/edit<?= $p['slug']; ?>">
                                            <button class="nav-icon fas fa-edit"></button>
                                        </form>

                                        <form action="/datauser/<?= $p['id']; ?>" method="post" class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="nav-icon fas fa-trash" onclick="return confirm('Apakah Anda yakin?');"></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </table>
                </div>
                            </div>
                <!-- /.card-body -->
            </div>
            <?= $this->endSection(); ?>