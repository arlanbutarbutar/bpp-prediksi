<?php
include 'functions.php';
//if(empty($_SESSION[login]))
//header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>BPPPREDIKSI</title>
	<link href="assets/css/lumen-bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/general.css" rel="stylesheet" />
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/highcharts.js"></script>
	<script src="assets/js/modules/exporting.js"></script>
	<script src="assets/js/modules/export-data.js"></script>
	<script src="assets/js/modules/accessibility.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body style="font-size: 18px;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow m-3" style="border-radius: 10px;">
  	<a class="navbar-brand font-weight-bold" style="font-size: 30px;" href="?">BPP</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<?php if (_session('login')) : ?>
				<li class="nav-item">
					<a class="nav-link text-white font-weight-bold mr-3" style="font-size: 16px;" href="?m=jenis"><span class="glyphicon glyphicon-th-large"></span> Jenis</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white font-weight-bold mr-3" style="font-size: 16px;" href="?m=periode"><span class="glyphicon glyphicon-calendar"></span> Periode</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white font-weight-bold mr-3" style="font-size: 16px;" href="?m=des"><span class="glyphicon glyphicon-stats"></span> Prediksi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white font-weight-bold mr-3" style="font-size: 16px;" href="?m=password"><span class="glyphicon glyphicon-lock"></span> Password</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white font-weight-bold mr-3" style="font-size: 16px;" href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
				</li>
				<?php else : ?>
				<li class="nav-item">
					<a class="nav-link text-white font-weight-bold mr-3" style="font-size: 16px;" href="?m=des"><span class="glyphicon glyphicon-stats"></span> Prediksi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white font-weight-bold mr-3" style="font-size: 16px;" href="?m=tentang"><span class="glyphicon glyphicon-info-sign"></span> Tentang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white font-weight-bold mr-3" style="font-size: 16px;" href="?m=login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
				</li>
				<?php endif ?>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="col-md-12 m-0 p-0">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php if(!isset($_GET['m'])){?>
					<div class="carousel-item active">
						<img src="assets/img/1.jpg" style="width: 100%;height: 500px;border-radius: 10px;" class="d-block" alt="...">
					</div>
					<div class="carousel-item">
						<img src="assets/img/2.jpg" style="width: 100%;height: 500px;border-radius: 10px;" class="d-block" alt="...">
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="margin-bottom: 100px;">
		<?php
		if (!_session('login') && !in_array($mod, array('', 'home', 'hitung', 'login', 'tentang', 'des')))
			$mod = 'login';

		if (file_exists($mod . '.php'))
			include $mod . '.php';
		else
			include 'home.php';
		?>
	</div>
	<footer class="footer bg-primary" style="font-size: 14px;">
		<div class="container">
			<p>Copyright &copy; <?= date('Y') ?> Cahyamiwulandari@gmail.Com <em class="pull-right">Updated Juni 2022</em></p>
		</div>
	</footer>
	<script type="text/javascript">
		$('.form-control').attr('autocomplete', 'off');
	</script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>