<?= $this->extend('layout/template_admin'); ?>


<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DATA TEGANGAN ARUS PV</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/plts/detailbaterai">BATERAI</a></li>
                        <li class="breadcrumb-item"><a href="/plts/detailoutput">OUTPUT</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">TABEL DATA TEGANGAN ARUS PV</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>WAKTU</th>
                            <th>TEGANGAN</th>
                            <th>ARUS</th>
                            <th>DAYA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($tegangan as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $p['waktu']; ?> </td>
                            <td><?= $p['tegangan']; ?> Volt</td>
                            <td><?= $p['arus']; ?> A</td>
                            <td><?= $p['arus'] * $p['tegangan']; ?> Watt</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>
</div>
</div>
</section>
</div>
<?= $this->endSection(); ?>