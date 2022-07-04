<div class="page-header" style="margin-top: 50px;">
    <h1>Perhitungan Double Exponential Smoothing</h1>
</div>
<script type="text/javascript" src="assets/js/highcharts.js"></script>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Pengaturan</h3>
    </div>
    <div class="panel-body">
        <form method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jenis <span class="text-danger">*</span></label>
                        <select class="form-control" style="font-size: 16px;" name="kode_jenis">
                            <?= get_jenis_option(set_value('kode_jenis')) ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Periode <span class="text-danger">*</span> <small>(1 - 10 Tahun)</small></label>
                        <input type="number" class="form-control" style="font-size: 16px;" name="n_periode" value="<?= set_value('n_periode', 3) ?>" />
                    </div>
                    <div class="form-group">
                        <label>Nilai Alpha <span class="text-danger">*</span></label>
                        <select class="form-control" style="font-size: 16px;" name="alpha">
                            <option value="0.1">0.1</option>
                            <option value="0.2">0.2</option>
                            <option value="0.3">0.3</option>
                            <option value="0.4">0.4</option>
                            <option value="0.5">0.5</option>
                            <option value="0.6">0.6</option>
                            <option value="0.7">0.7</option>
                            <option value="0.8">0.8</option>
                            <option value="0.9">0.9</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" style="font-size: 16px;"> <span class="glyphicon glyphicon-print"></span> Hitung</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
if ($_POST) {
    $n_periode = $_POST['n_periode'];
    if ($n_periode == '') {
        print_msg('Field bertanda * tidak boleh kosong!');
        return false;
    }
    if($n_periode<1 || $n_periode>10){
        print_msg('Hanya dapat memasukan periode dari 1-10 tahun saja!');
        return false;
    }
    $alpha = $_POST['alpha'];
    include 'des_hasil.php';
}

?>