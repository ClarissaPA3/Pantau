<?= $this->extend('layout/template_admin'); ?>


<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA PLTS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="/plts/create" class="btn btn-primary">Tambah Data PLTS</a>
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
                    <h3 class="card-title">Table data PLTS</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">NO</th>
                                <th>PLTS</th>
                                <th>INFO</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($plts as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['data_plts']; ?></td>
                                <td>
                                    <a href="/plts/detail/" class="btn btn-success">Detail</a>
                                </td>
                                <td>
                                    <form action="/plts/edit<?= $p['id']; ?>">
                                        <button class="nav-icon fas fa-edit"></button>
                                    </form>

                                    <form action="/plts/<?= $p['id']; ?>" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="nav-icon fas fa-trash"
                                            onclick="return confirm('Apakah Anda yakin?');"></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    </table>
                    <div class="card-footer">
                        <div class="text-right">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.card-body -->
</div>
<?= $this->endSection(); ?>