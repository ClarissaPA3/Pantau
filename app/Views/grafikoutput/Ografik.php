<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<?php foreach ($grafikoutput as $key => $value) {
    $tegangan_o[] = $value['tegangan_o'];
    $arus_o[] = $value['arus_o'];
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Grafik Tegangan Arus Output : PLTS Kampus UNS Madiun</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">GRAFIK OUTPUT</li>

                    </ol>

                </div>
            </div>

            <div>
                <canvas id="myChart" height="120"></canvas>
            </div>
            <div class="col-sm-6">
                <h1 class="m-0"> Tabel Hasil Output</h1>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Waktu</th>
                        <th>Tegangan</th>
                        <th>Arus</th>
                        <th>Daya</th>
                    </tr>
                </thead>
                <tbody id="tbl"></tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('js') ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    var thechart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($tegangan_o); ?>,
            datasets: [{
                label: 'besaran daya/waktu',
                data: <?php echo json_encode($arus_o); ?>,
                backgroundColor: [
                    'rgb(255, 0, 0)',
                    'rgb(0, 0, 255)',
                    'rgb(60, 179, 113)',
                    'rgb(238, 130, 238)',
                    'rgb(255, 165, 0)',
                    'rgb(106, 90, 205)'

                ],
                borderColor: [
                    'rgb(255, 0, 0)',
                    'rgb(0, 0, 255)',
                    'rgb(60, 179, 113)',
                    'rgb(238, 130, 238)',
                    'rgb(255, 165, 0)',
                    'rgb(106, 90, 205)'
                ],
                // borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Daya (P)',
                        color: '#191919',
                        font: {
                            size: 20,
                            weight: 'bold',
                        }
                    }
                },
                x: {
                    // beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Waktu (t)',
                        color: '#191919',
                        font: {
                            size: 20,
                            weight: 'bold',
                        }
                    }
                }
            }
        }
    });

    function realtime() {
        $.getJSON("/monitoring/data_output", (res) => {
            thechart.data.datasets[0].data = res.daya
            thechart.data.labels = res.waktu_o
            thechart.update()
            // console.log(res)
            $('#tbl').html('')

            for (let i = res.daya.length - 1; i >= 0; i--) {
                $('#tbl').append(`
            <tr>
                <td>${res.waktu_o[i]}</td>
                <td>${res.tegangan_o[i]} V</td>
                <td>${res.arus_o[i]} A</td>
                <td>${res.daya[i]} W</td>
            </tr>
            `)
            }
        })
        setTimeout(realtime, 1000) // ganti 1000 dgn waktu refresh yg dinginkan dalam milisecond
    }

    $(document).ready(() => {
        realtime()
    })
</script>
<?= $this->endSection() ?>