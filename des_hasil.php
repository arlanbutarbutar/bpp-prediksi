<?php
$_SESSION['post'] = $_POST;
$kode_jenis = $_POST['kode_jenis'];
$rows = $db->get_results("SELECT * FROM tb_prediksi r INNER JOIN tb_periode p ON p.kode_periode=r.kode_periode WHERE kode_jenis='$kode_jenis' ORDER BY r.kode_periode");
$data = array();
foreach ($rows as $row) {
    $data[$row->nama_periode] = $row->nilai * 1;
    $last_periode = $row->nama_periode;
}

$f = new DES($data, $alpha, $n_periode);
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Perhitungan <?= $JENIS[$kode_jenis] ?> (Alpha: <?= $alpha ?>)</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-right">
            <thead>
                <tr>
                    <th>Periode</th>
                    <th>Actual (Yt)</th>
                    <th>S't</th>
                    <th>S"t</th>
                    <th>at</th>
                    <th>bt</th>
                    <th>Forecast</th>
                    <th>e</th>
                    <th>|e|</th>
                    <th>e<sup>2</sup></th>
                    <th>[e]/yt</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($f->yt as $key => $val) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= round($val, 4) ?></td>
                    <td><?= round($f->st[$key], 4)  ?></td>
                    <td><?= round($f->sst[$key], 4)  ?></td>
                    <td><?= isset($f->at[$key]) ? round($f->at[$key], 4) : '' ?></td>
                    <td><?= isset($f->bt[$key]) ? round($f->bt[$key], 4) : '' ?></td>
                    <td><?= isset($f->ft[$key]) ? round($f->ft[$key], 4) : '' ?></td>
                    <td><?= isset($f->e[$key]) ? round($f->e[$key], 4) : '' ?></td>
                    <td><?= isset($f->e_abs[$key]) ?  round($f->e_abs[$key], 4) : '' ?></td>
                    <td><?= isset($f->e2[$key]) ?  round($f->e2[$key], 4) : '' ?></td>
                    <td><?= isset($f->e_abs_yt[$key]) ? round($f->e_abs_yt[$key], 4)  : '' ?></td>
                </tr>
            <?php $no++;
            endforeach;
            reset($f->ft);
            $series = array();
            $series[0]['name'] = 'Aktual';
            foreach ($f->yt as $key => $val) {
                $series[0]['data'][] = $val * 1;
            }


            $series[1]['name'] = 'Forecast';
            $series[1]['data'][] = null;
            foreach ($f->ft as $key => $val) {
                $series[1]['data'][] = round($val * 1, 2);
            }

            ?>
        </table>
    </div>
    <div class="panel-body">
        MAPE (Mean Absolute Percent Error) : <?= round(array_sum($f->e_abs_yt) / count($f->e_abs_yt) * 100, 2) ?>%<br />
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Periode</th>
                    <th>at</th>
                    <th>bt</th>
                    <th>Ft</th>
                </tr>
            </thead>
            <?php
            $next_periode = $last_periode;
            foreach ($f->ft_next as $key => $val) :
                $series[0]['data'][] = null;
                $series[1]['data'][] = round($val * 1, 2); ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $next_periode++ ?></td>
                    <td><?= round($f->last_at, 2) ?></td>
                    <td><?= round($f->last_bt * ($key + 1), 2) ?></td>
                    <td><?= round($val, 2) ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <div class="panel-footer">
        <div id="container" style="height: 500px; min-width: 500px"></div>
        <script type="text/javascript">
            Highcharts.chart('container', {
                title: {
                    text: 'Grafik Perbandingan Aktual dan Forecasting'
                },

                yAxis: {
                    title: {
                        text: 'Jumlah'
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },

                plotOptions: {
                    series: {
                        label: {
                            connectorAllowed: false
                        },
                        pointStart: <?= current(array_keys($f->yt)) ?>
                    }
                },

                series: <?= json_encode($series) ?>,

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }
            });
        </script>
    </div>
</div>
<a class="btn btn-default" href="cetak.php?m=des" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak </a>